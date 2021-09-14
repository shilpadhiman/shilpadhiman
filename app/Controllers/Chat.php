<?php
namespace App\Controllers;
use App\Controllers\BaseController;
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
        return view('admin/chat',$data); 
    }

}