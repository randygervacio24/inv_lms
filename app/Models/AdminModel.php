<?php namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model{

    protected $table = 'admin';
    protected $primaryKey= 'adminId';
    protected $allowedFields = ['roleId','firstname','lastname','email','password','updated_at','deleted_at','deleted'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];



    protected function beforeInsert(array $data){
        $data = $this->passwordHash($data);

        return $data;
    }

    protected function beforeUpdate(array $data){
        $data = $this->passwordHash($data);

        return $data;
    }

    protected function passwordHash(array $data){
        if(isset($data['data']['password']))

        
        $data['data']['password']= password_hash($data['data']['password'], PASSWORD_DEFAULT);

        return $data;
    }
}
