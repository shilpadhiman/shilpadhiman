<?php
namespace App\Controllers;
use App\Models\RegisterModel;
use CodeIgniter\HTTP\IncomingRequest;

class Register extends BaseController{
public function index(){
	$data=[];
	echo view('admin/register', $data); 
}

public function save(){
	 $request = service('request');
	
	if($this->request->getMethod() == 'post'){ 
     $data = [
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
    'password'  => $this->request->getVar('password')
    
    ];
 $model = new RegisterModel();
 $modeldata= $model->insert($data);
 $session = session();
 $session->setFlashdata('success', 'Successful Registration');

return redirect()->to('register');
}
return view('register');
}

}
?>
