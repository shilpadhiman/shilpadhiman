<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        echo view("admin/dashboard");
    }

    public function searchform(){
    
    $data = [];
    $request = service('request');
    if ($this->request->getMethod() == 'get') {

        $getsearch=[
        $age= $this->request->getVar('age'),
        $location= $this->request->getVar('location'),
        $gender= $this->request->getVar('gender'),
        $cast=$this->request->getVar('cast')

];

}

 echo view("admin/dashboard");   

    }


}

?>