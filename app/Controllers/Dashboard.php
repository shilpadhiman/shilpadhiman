<?php
namespace App\Controllers;
use App\Libraries\maildata;
use App\Models\UserModel;
use App\Models\ProfileModel;
use App\Models\PartnerModel;
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
    $slug = new maildata();
    echo "<pre>"; print_r($slug); die();

    echo $slug->mail('shilpa.dhiman31@gmail.com');
    }
    

} 

?>