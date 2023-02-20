<?php namespace App\Controllers;

use App\Models\StudentModel;


class StudentController extends BaseController
{
    public function index()
    {

      $data=[];
      helper(['form']);
        
        echo view('student/studentLogin',$data);
       
    }

   
    public function check()
    {
      $data=[];
      helper(['form']);

      if ($this->request->getMethod() == 'post') {

      $rules =[
         'email' => 'required|min_length[6]|max_length[50]',
         'password' => 'required|min_length[8]|max_length[255]',
      ];

      $errors = [
        'password' => [
          'validateStudent' => 'Username or Password don\'t match'
        ]
      ];
       if (! $this->validate($rules, $errors)) {
        $data['validation'] = $this->validator;
      }else{

        $model =  new StudentModel();

        $student = $model->where('email',$this->request->getVar('email'))
                      ->first();

        
            $this->setUserSession($student);
            return redirect()->to('studentDashboard');


        }
      }

    }

    private function setStudentSession($student){
      $data = [
        'id'=>$student['id'],
        'studentId'=> $student['studentId'],
        'firstname'=>$student['firstname'],
        'lastname'=>$student['lastname'],
        'email'=>$student['email'],
        'isLoggedIn' => true,


      ];

      session()->set($data);
      return true;
    }
    public function register()
    {
        $data=[];
        helper(['form']);

        if ($this->request->getMethod() == 'post') 
        {

            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_?";
            $password = substr( str_shuffle( $chars ), 0, 8 );


          $rules =[
            'studentId' => [
                'rules'  => 'required|exact_length[13]|is_unique[student.studentId]',
                'errors' => [
                    'required'        => 'The Student ID field is required.',
                    'exact_length'    => 'The Student ID field must be exact 13 characters in length.',
                    'is_unique'       => 'The Student ID field must contain a unique value'
                ],
              ],
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
            'suffixName' => [
              'rules'  => 'permit_empty',
              'errors' => [  
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

            if (! $this->validate($rules)) 
            {
                $data['validation'] = $this->validator;
            }
            else
            {
                $model =  new StudentModel();

                $data['firstname']= $model->WHERE('firstname',$this->request->getPost('firstname'))->first();
                
                

                $studentEmail= $this->request->getVar('email');
                $studentFname= $this->request->getVar('firstname');
                $studentLname= $this->request->getVar('lastname');

               
                  
                    
                        $newData= [
                        'studentId'             => $this->request->getVar('studentId'),
                        'firstname'             => $this->request->getVar('firstname'),
                        'lastname'              => $this->request->getVar('lastname'),
                        'suffixName'            => $this->request->getVar('suffixName'),
                        'email'                 => $this->request->getVar('email'),
                        'password'              => $password,
                        ];
                        
                        
                        if($model->save($newData))    
                        {
                            $to= $studentEmail;
                            $subject= 'Welcome to Library!';
                            $message=  'Hi! <b>'.$studentFname." ".$studentLname.'</b>,'.'<br></br><p>Congratulations! Your account for Library Management System is successfully created.</p>Below are your username and temporary password:<br><br><b>username: </b>'.$studentEmail.'<br><b>Password: </b>'.$password.'<br><br><a href= "'.base_url("/studentLogin").'/"> Click Here</a> to Login'.'.<br><br>Please change your password after you login.Thank you!'.'<p>Sincerely yours, <br><b> LMS Team!</b></p>';
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
                        $session->setFlashdata('success','Successful Registration');
                        return redirect()->to('studentLogin');

            }
        }
        echo view('student/studentRegister',$data);
    }

    public function profile(){


        if(isset($_SESSION['restriction']))
    {
      return redirect()->to('dashboard');
    }

      $data=[];
      helper(['form']);
      $model =  new StudentModel();

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
                'suffixName' => [
                    'rules'  => 'permit_empty',
                    'errors' => [   
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
          'id'=> session()->get('id'),
          'firstname'             => $this->request->getPost('firstname'),
          'lastname'              => $this->request->getPost('lastname'),
          'suffixName'            => $this->request->getPost('suffixName'),

        ];

      

        $model->save($newData);
        $session = session();
        $session->setFlashdata('success', 'Successfully Updated!');

        return redirect()->to('studentProfile');

        }
      }

      $data['user'] = $model->where('id',session()->get('id'))->first();

     
      echo view('student/studentProfile', $data);
      
    }

    public function logout(){
      session()->destroy();
      return redirect()->to('/studentLogin');
    }



   
    public function changepassword(){

        $data=[];
        helper(['form']);
        $model =  new StudentModel();
  
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
          'password_confirm' => [
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
            'id'=> session()->get('id'),
          ];
  
          if($this->request->getPost('password')!=''){
          $newData['password']=$this->request->getPost('password');
          }

          $model->save($newData);
          $session = session();
          $session->setFlashdata('success', 'Successfully Updated!');

          return redirect()->to('studentChangepass');
  
          }
        }
  
        $data['user'] = $model->where('id',session()->get('id'))->first();
  
       
        echo view('student/studentChangepass', $data);
        
      }
}
