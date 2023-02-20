<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\StudentModel;

class AdminController extends BaseController
{
    public function index()
    {
        
        $data= [];
        helper(['form']);
        $session = session();

        if($this->request->getMethod() == 'post'){

            $rules= [
                'email' => 'required',
                'password' => 'required|validateAdmin[email,password]',  
            ];

            $errors = [
                'email'    =>[
                    'required'      => 'The Username field is required',
                  ],
                'password' => [
                    'required'      => 'The Password field is required.',
                    'validateAdmin' => 'The Email Address and Password don\'t match.'
                ],
            ];

            if(! $this->validate($rules, $errors)){
                $data['validation'] = $this->validator;
            }else{
                $model = new AdminModel();

                $admin = $model->where('email', $this->request->getVar('email'))
                               ->first();

                if($admin['roleId']!= 0 && $admin['deleted']!= 1)
                {
                 
                  $this->setAdminSession($admin);
                  $session->setFlashdata('success','Login');
                  return redirect()->to('dashboard');
                }
        
                else
                {
                  $session->setFlashdata('error','Your account is not yet approve by the superadmin');
                }
            }
        }

        echo view('admin/login', $data);
    }

//Function for Login
    private function setAdminSession($admin){
        $data = [
            'deleted' =>$admin['deleted'],
            'roleId' =>$admin['roleId'],
            'adminId' =>$admin['adminId'],
            'firstname' =>$admin['firstname'],
            'lastname' =>$admin['lastname'],
            'email' =>$admin['email'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    public function check()
    {
      $data=[];
      helper(['form']);
      $session = session();

      if ($this->request->getMethod() == 'post') {

      $rules =[
         'email' => 'required|min_length[6]|max_length[50]',
         'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
      ];

      $errors = [
        'password' => [
          'validateUser' => 'Email Address or Password don\'t match'
        ]
      ];
       if (! $this->validate($rules, $errors)) {
        $data['validation'] = $this->validator;
      }else{
        
        $model =  new StudentModel();
        
        $student = $model->where('email',$this->request->getVar('email'))
                      ->first();
       

        if($student['deleted']!= 1)
        {
            $this->setUserSession($student);
            $session->setFlashdata('success','Login');
            return redirect()->to('studentDashboard');

        }
        else
        {
          
          $session->setFlashdata('error','Your account is not yet approve by the admin');
          
        }


        }
      }
        echo view('student/studentLogin',$data);
    }

    private function setUserSession($student){
      $data = [
        'id'=>$student['id'],
        'studentId'=>$student['studentId'],
        'firstname'=>$student['firstname'],
        'lastname'=>$student['lastname'],
        'email'=>$student['email'],
        'isLoggedIn' => true,


      ];

      session()->set($data);
      return true;
    }


// Function for registration-----------------------------------------------------------------------------
    public function register(){

        $data= [];
        helper(['form']);

        if($this->request->getMethod() == 'post'){

          $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_?";
          $password = substr( str_shuffle( $chars ), 0, 8 );

          $rules =[
              'firstname' => [
                'rules'  => 'required|min_length[2]|max_length[50]|alpha_space',
                'errors' => [
                    'required'        => 'The First name field is required.',
                    'min_length'      => 'The First name field must be at least 2 characters in length.',
                    'max_length'      => 'The First name field cannot exceed 50 characters in length.',
                    'alpha_space'     => 'The First name field may only contain alphabetical characters and spaces.',
                ],
              ],
              'lastname' => [
                'rules'  => 'required|min_length[2]|max_length[50]|alpha_space',
                'errors' => [
                    'required'        => 'The Last name field is required.',
                    'min_length'      => 'The Last name field must be at least 2 characters in length.',
                    'max_length'      => 'The Last name field cannot exceed 50 characters in length.',
                    'alpha_space'     => 'The Last name field may only contain alphabetical characters and spaces.',
                ],
              ],
              'email' => [
                'rules'  => 'required|valid_email',
                'errors' => [
                    'required'        => 'The Email field is required.',
                    'valid_email'     => 'The Email field must contain a valid email address.',
                ],
              ],
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator;
            }else{
                $model = new AdminModel();

                $adminEmail= $this->request->getVar('email');
                $adminFname= $this->request->getVar('firstname');
                $adminLname= $this->request->getVar('lastname');

                $newData= [
                  
                    'firstname' => $this->request->getVar('firstname'),
                    'lastname' => $this->request->getVar('lastname'),
                    'email' => $this->request->getVar('email'),
                    'password' => $password,
                ];

                

                if($model->save($newData))    
                {
                    $to= $adminEmail;
                    $subject= 'Welcome to Library!';
                    $message=  'Hi! <b>'.$adminFname." ".$adminLname.'</b>,'.'<br></br><p>Congratulations! Your account for Library Management System is successfully created.</p>Below are your username and temporary password:<br><br><b>Username: </b>'.$adminEmail.'<br><b>Password: </b>'.$password.'<br><br><a href= "'.base_url().'/"> Click Here</a> to Login'.'.<br><br>Please change your password after you login.Thank you!'.'<p>Sincerely yours,<br><b> LMS Team!</b></p>';
                    $email =    \Config\Services::email();
                    $email->setTo($to);
                    $email->setFrom('krabnyvpzkrdhedp', 'LMS');
                    $email->setSubject($subject);
                    $email->setMessage($message);

                    if($email->send())
                    {
                        echo "Success";
                    }
                    else
                    {
                        $data= $email->printDebugger(['headers']);
                        print_r($data);
                    }
                }

                $session = session();
                $session->setFlashdata('success', 'Successful Registration');
                return redirect()->to('/');
            }
        }
        echo view('admin/register', $data);
    }


    //Function para sa profile pag iuupdate----------------------------------------------------------------------

    public function profile(){

        $data=[];
        helper(['form']);
        $model = new AdminModel();
        
  
        if ($this->request->getMethod() == 'post') {
  
      $rules =[
                'firstname' => [
                  'rules'  => 'required|min_length[2]|max_length[50]|alpha_space',
                  'errors' => [
                      'required'        => 'The First name field is required.',
                      'min_length'      => 'The First name field must be at least 2 characters in length.',
                      'max_length'      => 'The First name field cannot exceed 50 characters in length.',
                      'alpha_space'     => 'The First name field may only contain alphabetical characters and spaces.',
                  ],
                ],
                'lastname' => [
                  'rules'  => 'required|min_length[2]|max_length[50]|alpha_space',
                  'errors' => [
                      'required'        => 'The Last name field is required.',
                      'min_length'      => 'The Last name field must be at least 2 characters in length.',
                      'max_length'      => 'The Last name field cannot exceed 50 characters in length.',
                      'alpha_space'     => 'The Last name field may only contain alphabetical characters and spaces.',
                  ],
                ],
                'email' => [
                  'rules'  => 'required|valid_email',
                  'errors' => [
                      'required'        => 'The Email field is required.',
                      'valid_email'     => 'The Email field must contain a valid email address.',
                  ],
                ],
              ];
  
         if (! $this->validate($rules)) {
          $data['validation'] = $this->validator;
        }else{
  
  
          $newData= [
            'adminId'=> session()->get('adminId'),
            'firstname'             => $this->request->getPost('firstname'),
            'lastname'              => $this->request->getPost('lastname'),
            'email'                 => $this->request->getPost('email'),
  
          ];
  

          $model->save($newData);
          $session = session();
          $session->setFlashdata('success', 'Successfully Posting!');
  
          return redirect()->to('profile');
  
          }
        }
  
        $data['admin'] = $model->where('adminId',session()->get('adminId'))->first();
        echo view('admin/profile', $data);
      }
  

    public function logout(){


        Session()->destroy();
        return redirect()->to('/');

    }

    public function changePassword()
    {
        $data=[];
        helper(['form']);
        $model = new AdminModel();
        
  
        if ($this->request->getMethod() == 'post') {
  

        if($this->request->getPost('password') != ''){
     $rules =[
        'password' => [
          'rules'  => 'required|min_length[8]|max_length[255]',
          'errors' => [
              'required'        => 'The Password field is required.',
              'min_length'      => 'The Password field must be at least 8 characters long with 1 uppercase, 1 lowercase, 1 numeric and 1 special character ',
          ],
        ],
        'confirm_password' => [
          'rules'  => 'required|matches[password]',
          'errors' => [
              'required'        => 'The Password Confirmation field is required.',
              'matches'         => 'Password Confirmation field does not match the password field.',
          ],
        ], 
      ];
  
        }
  
         if (! $this->validate($rules)) {
          $data['validation'] = $this->validator;
        }else{
  
  
          $newData= [
            'adminId'=> session()->get('adminId'),
  
          ];
  
          if($this->request->getPost('password')!=''){
          $newData['password']=$this->request->getPost('password');
          }
  
          $model->save($newData);
          $session = session();
          $session->setFlashdata('success', 'Successfully Posting!');
  
          return redirect()->to('changepass');
  
          }
        }
  
        $data['admin'] = $model->where('adminId',session()->get('adminId'))->first();
        echo view('admin/changepass', $data);
      }
}




