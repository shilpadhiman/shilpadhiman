<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UserModel;
class User extends BaseController
{ 

public function login(){
	$data = [];
	$request = service('request');
	if ($this->request->getMethod() == 'post') {
	$rules = [
	'email' => 'required|min_length[6]|max_length[50]|valid_email',
	'password' => 'required|min_length[3]|max_length[255]|validateUser[email,password]',
	];
	
	$errors = [
	'password' => [
	'validateUser' => 'Email or Password don\'t match'
	]
	];
	 if (!$this->validate($rules,$errors)) {
	 $data['validation'] = $this->validator;
	 
	 }else{
	 $model = new UserModel();
	 
	 $user = $model->where('email', $this->request->getVar('email'))->first();
 	
 	 $this->setUserSession($user);
		
	//$session->setFlashdata('success', 'Successful Registration');
 	return redirect()->to('dashboard');
 	

 	 }
	 }
 	return view('admin/register', $data);
 	}

   public function register()
    {
    	$request = service('request');
        $newData = [];
        if ($this->request->getMethod() == 'post') { 

         $rules = [
                'mobile' => 'required|min_length[9]|max_length[20]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[register.email]',
                'password' => 'required|min_length[8]|max_length[255]'
                  ];
    	
            if(!$this->validate($rules)){
            	return view('admin/register', [
                    "validation" => $this->validator,
                ]);
            }else{
                    $newData = [
                    'name'     	=> $this->request->getVar('uname'),
				    'createdby'	=> $this->request->getVar('createdby'),
				    'gender'	=> $this->request->getVar('gender'),
				    'day'		=> $this->request->getVar('day'),
				    'month'		=> $this->request->getVar('month'),
				    'year'      => $this->request->getVar('year'),
				    'maritial_status'	=> $this->request->getVar('mstatus'),
				    'denomination'		=> $this->request->getVar('denom'),
				    'division'	=> $this->request->getVar('division'),
				    'subcast'	=> $this->request->getVar('subcast'),
				    'mother_tongue'  => $this->request->getVar('language'),
				    'country'   => $this->request->getVar('country'),
				    'mobile'    => $this->request->getVar('mobile'),
				    'email'   	=> $this->request->getVar('email'),
				    'password'  => md5($this->request->getVar('password'))
                ];
                $model = new UserModel();     
                $model->insert($newData);
                $session = session();
                $session->setFlashdata('success', 'Successful Registration');
                //return redirect()->to(base_url('dashboard'));
                return redirect()->to('dashboard');

         }
         }
        return view('admin/register');
    }
/*
    public function profile()
    {

        $data = [];
        $model = new UserModel();

        $data['user'] = $model->where('id', session()->get('id'))->first();
        return view('profile', $data);
    }*/

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }

	private function setUserSession($user)
	{
	$data = [
	'id' => $user['id'],
	'name' => $user['name'],
	'mobile' => $user['mobile'],
	'email' => $user['email'],
	'isLoggedIn' => true,
	];
	session()->set($data);
	return true;
	}

}