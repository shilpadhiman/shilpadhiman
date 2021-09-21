<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Chatrequest;
use App\Models\Confirmchat;
use App\Models\Chatmsg;
class Chat extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session($config);
        $request_id = $session->get('id');
        $db= \Config\Database::connect();
        $builder = $db->table('notification');
        $builder->join('register', 'notification.received_id = register.id');
        $builder->where('user_id', $request_id);
        $cdata = $builder->get()->getResultArray();
        $data['chat']=$cdata;
        $data['reqdata']= $this->fetchdata();
        //echo "<pre>"; print_r($data['reqdata']); die();
        return view('admin/chat',$data); 
    }


     public function fetchdata(){
        //$json_array=array();
        $session = \Config\Services::session($config);
        $user_id = $session->get('id');      
        $model = new Chatmsg(); 
        $model->where('user_id', $user_id);
        $reqdata = $model->get()->getResultArray();
        //$model->get()->getResultArray();
        //echo "<pre>"; print_r($model->get()->getResultArray()); die();     
         return view('admin/chat', $reqdata);
    }

    

    

}