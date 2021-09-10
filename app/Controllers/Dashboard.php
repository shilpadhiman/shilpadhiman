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

class Dashboard extends BaseController
{
    public function index()
    {
    return redirect()->to('dashboard/searchform');
    }
    public function searchform(){
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
    return view('admin/dashboard', array('builddata'=>$builddata));

    }

    public function mailinfo(){

         $request = service('request');
       if($this->request->getMethod()== 'post'){
        $data['request_id'] = $this->request->getVar('id');
        $data['email']= $this->request->getVar('email');
         $slug= new Mailinfo();
        $slug->mail($data['email']);         
       }

       echo json_encode($response);
       
    }

    public function sendrequest(){
        $request = service('request');
        $session = \Config\Services::session($config);
        $data=[];
        if($this->request->getMethod()== 'post'){
        $data['send_id'] = $session->get('id');    
        $data['request_id'] = $this->request->getVar('id');
        $data['status']= $this->request->getVar('status');
        $data['email']= $this->request->getVar('email');
        $requestmodel = new Chatrequest();
        $requestmodel->insert($data);          
       }
       echo json_encode($response);
    }

    public function approved(){
        $db= \Config\Database::connect();
        $builder = $db->table('chatrequest');
        $builder->select('*');
        $builder->where('send_id', '66');
        $reqdata = $builder->get()->getResultArray();
        //echo "<pre>"; print_r(array('reqdata'=>$reqdata)); die();
        return view('admin/dashboard', array('reqdata'=>$reqdata));
    }

    public function notification(){
        

        return view('admin/notification');
    }

} 

?>