<?php
namespace App\Controllers;
use App\Libraries\Mailinfo;
use App\Models\UserModel;
use App\Models\ProfileModel;
use App\Models\PartnerModel;
use App\Models\Chatrequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\IncomingRequest;

use App\Controllers\BaseController;

class Notification extends BaseController
{
    public function index()
    {
 
	return redirect()->to('notification/notification');
    }

  public function notification(){
        $db= \Config\Database::connect();
        $session = \Config\Services::session($config);
        $request_id = $session->get('id');
        $builder = $db->table('chatrequest');
        $builder->select('*');
        $builder->join('register', 'chatrequest.send_id = register.id');
        $builder->where('request_id', $request_id);
        $notificdata = $builder->get()->getResultArray();

        return view('admin/notification', array('notificdata'=>$notificdata));
    }

    public function showuserdata(){
    	 $request =\Config\Services::request();
        $searchData=[];
        //$request = service('request');
        if($this->request->getMethod()== 'get'){  
        $age= $this->request->getVar('age');
        $location= $this->request->getVar('location');
        $gender= $this->request->getVar('gender');
        $cast= $this->request->getVar('cast');

        if(!empty($age)){
        $agevar= explode("-", $age);    
        }else{
            $agevar[0] ='18';
            $agevar[1]='100';
        }   
        $db = \Config\Database::connect();
        $builder = $db->table('register');
        $builder->select('*');
        $builder->join('profile_details', 'profile_details.id = register.id');
        $builder->join('partnerdetails', 'partnerdetails.id = register.id');

        if(empty($gender)){
         }else{
            $builder->Where('register.gender', $gender);
        }
        if(empty($cast)){           
        }else{
            $builder->where('partnerdetails.cast',$cast);
        }
        if(empty($agevar)){ 
        }else{
            $builder->where(['profile_details.age >' => $agevar[0], 'profile_details.age <' => $agevar[1]]);
        }

        $builddata = $builder->get()->getResultArray();

        }
        
   		 return view('admin/notification', array('builddata'=>$builddata));


    }

    
}