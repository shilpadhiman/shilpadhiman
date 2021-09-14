<?php
namespace App\Controllers;
use App\Libraries\Mailinfo;
use App\Models\UserModel;
use App\Models\ProfileModel;
use App\Models\PartnerModel;
use App\Models\Chatuser;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\IncomingRequest;


use App\Controllers\BaseController;

class Notification extends BaseController
{
    public function index()

    {
         $db= \Config\Database::connect();
        $session = \Config\Services::session($config);
        $request_id = $session->get('id');
        $builder = $db->table('chatrequest');
        $builder->select('*');
        $builder->join('register', 'chatrequest.send_id = register.id');
        $builder->where('request_id', $request_id);
        $data['notificdata'] = $builder->get()->getResultArray();
        $data['builddata']= $this->showuserdata();
        $data['approved']=$this->approved();
        $data['chat']= $this->listconfirm();
        $data['ndata']=$this->Notificationdata();

        return view('admin/notification', $data);
    }

    public function showuserdata(){
         $session = \Config\Services::session($config);

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

         if($session->get('gender')=='Male'){
         
          $builder->where('register.gender','female');  
        }
        if($session->get('gender')=='Female'){
         
          $builder->where('register.gender','male');  
        }

        $builddata = $builder->get()->getResultArray();
        }
        return $builddata;
    }
        public function mailinfo(){

        $slug= new Mailinfo();

     echo $slug->mail('shilpa.dhiman762@gmail.com');
       
    }

        public function approved(){
        $session = \Config\Services::session($config);
        $request_id = $session->get('id');
        $db= \Config\Database::connect();
        $builder = $db->table('chatrequest');
        $builder->select('*');
        $builder->where('send_id',$request_id);
        $reqdata = $builder->get()->getResultArray();
        return $reqdata;
    }    

    public function listconfirm(){
        $session = \Config\Services::session($config);
        $request_id = $session->get('id');
        $db= \Config\Database::connect();
        $builder = $db->table('notification');
        $builder->join('register', 'notification.received_id = register.id');
        $builder->where('user_id', $request_id);
        $cdata = $builder->get()->getResultArray();
        return $cdata;    
    }    


      public function Notificationdata(){
        $session = \Config\Services::session($config);
        $request_id = $session->get('id');
        $db= \Config\Database::connect();
        $builder = $db->table('notification');
        $builder->select('*');
        $builder->where('user_id',$request_id);
        $ndata = $builder->get()->getResultArray();
        return $ndata;
    }    



        }
   


    
