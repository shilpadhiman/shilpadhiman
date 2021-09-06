<?php
namespace App\Validation;
use App\Models\UserModel;

class Userrules{

  public function validateUser(string $str, string $fields, array $data){
    $model = new UserModel();
    $getdata = ['email' => $data['email'], 'password' => md5($data['password'])];
    $user = $model->where($getdata)->first();
     if(!$user){
      return false;
   }

    
  }
}
?>