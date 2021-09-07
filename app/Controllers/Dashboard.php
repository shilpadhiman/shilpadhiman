<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\ProfileModel;
use App\Models\PartnerModel;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {

        return view("admin/dashboard");
    }
    public function searchform(){
         //$request =\Config\Services::request();
        $searchData=[];
        $request = service('request');
        if($this->request->getMethod()== 'get'){
        
         $searchData=[   
        $age= $this->request->getVar('age'),
        $location= $this->request->getVar('location'),
        $gender= $this->request->getVar('gender'),
        $cast= $this->request->getVar('cast'),

        ];
        $db = \Config\Database::connect();
        $builder = $db->table('register');
        $builder->select('*');
        $builder->join('partnerdetails', 'register.id = partnerdetails.id');
        $builder->join('profile_details', 'register.id = profile_details.id');
        $builder->where('register.age', 'age');
        $builddata = $builder->get()->getResultArray();

        echo "<pre>"; print_r($builddata); die();

}


        echo view("admin/dashboard");

    }

    

} 

?>