<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\googleuser;
use App\Models\ProfileModel;
use App\Models\PartnerModel;
//use App\Libraries\vendor\autoload;
use Google\Client as client;
use Google_Service_Oauth2;
 
class User extends BaseController
{ 
public function __construct(){
$session = \Config\Services::session($config); 
}
public function login(){
    $data = [];
    $request = service('request');	
    $model= new googleuser();
    require_once APPPATH . 'Libraries\vendor\autoload.php';
        $client = new \Google_Client();
        $client->setClientId("844745712469-31mhu92gpe8bg4fjq1c8qt63ugrjuvdb.apps.googleusercontent.com");
        $client->setClientSecret("fSzacbZNVJ6nFhH0EHCFzoqR");       
        $client->setRedirectUri(base_url().'/login');
        $client->addScope('email');
        $client->addScope('profile');
        $tokenid=$this->request->getVar('code');
        $session = session();
        if(isset($tokenid)){
            $token= $client->fetchAccessTokenWithAuthCode($tokenid);
        
            if(!$token['error']){
                $client->setAccessToken($token['access_token']);
                
               $session->set('access_token', $token['access_token']);
                $google_service = new Google_Service_Oauth2($client);
                $data = $google_service->userinfo->get();
                echo "<pre>"; print_r($data); die();             
            }
        }
        if($session->get('access_token')){
              $data['loginbtn']=$client->createAuthurl();
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
                 $inserted_id= $model->insertID();
                  $user = $model->where('id',$inserted_id )->first();
                  $this->setUserSession($user);            
                return redirect()->to('profile');

         }
         }
        return view('admin/register');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }

	private function setUserSession($user)
	{
	$data = [
	'user_id' => $user['user_id'],
	'name' => $user['name'],
	'mobile' => $user['mobile'],
	'email' => $user['email'],
	'gender'=>$user['gender'],
	'isLoggedIn' => true,
	];
	session()->set($data);
	return true;
	}

		
 public function profile(){
  /*  $session = \Config\Services::session($config);
    $userid= $session->get('id');*/
	     $request = service('request');
       	$method = $request->getMethod();

      if($this->request->getMethod()== 'post'){
        $rules=[
           	'annual'=>      'required',
            'age'   =>      'required'
        ];

        if(!$this->validate($rules)){
          return view('admin/personal_profile', [
                    "validation" => $this->validator, 
                ]);
        }else{
        		$session = \Config\Services::session($config);   	
                 $profiledata=[
                 'id' => $session->get('id'),
                'education' => $this->request->getVar('edu'),
                'age' => $this->request->getVar('age'),
                'hobbies' => $this->request->getVar('Hobbies'),
                'jobs' => $this->request->getVar('jobs'),
                'employee' => $this->request->getVar('employee'),
                'annual' => $this->request->getVar('annual'),              
            ];         
            $model =new ProfileModel();
            $model->insert($profiledata);
            return redirect()->to('Inpartner');
        }
      }  

       return view('admin/personal_profile');
    }


    public function InPartner(){
    	$request = service('request');
       	$method = $request->getMethod();
      if($this->request->getMethod()== 'post'){
        $rules=[
           	'interest'=>      'required',
            'education_level'   =>      'required'
        ];

        if(!$this->validate($rules)){
          return view('admin/personal_profile', [
                    "validation" => $this->validator, 
                ]);
        }else{
        		$session = \Config\Services::session($config);   	
                 $partnerdata=[
                 'id' => $session->get('id'),
                'interest' => $this->request->getVar('interest'),
                'education_level' => $this->request->getVar('education_level'),
                'income' => $this->request->getVar('income'),
                'height' => $this->request->getVar('height'),
                'age' => $this->request->getVar('age'),
                'cast' => $this->request->getVar('cast'),
                'nationality' => $this->request->getVar('nationality'),
                'vegetarian' => $this->request->getVar('vegetarian'),
                'smoking' => $this->request->getVar('smoking')

            ];
            $model = new PartnerModel();
            $model->insert($partnerdata);
            return redirect()->to('dashboard');
        }
      }  
    	return view('admin/partner_profile');
    }

  

}