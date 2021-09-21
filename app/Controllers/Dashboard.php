<?php
namespace App\Controllers;
use App\Libraries\Mailinfo;
use App\Models\UserModel;
use App\Models\ProfileModel;
use App\Models\PartnerModel;
use App\Models\Chatrequest;
use App\Models\Confirmchat;
use App\Models\Chatmsg;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\IncomingRequest;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        echo "welcome to home";
    return redirect()->to('dashboard');
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

    public function confirmation(){
        $request = service('request');
        $session = \Config\Services::session($config);
        if($this->request->getMethod()== 'post'){
        $data['received_id']= $this->request->getVar('id');
        $data['confirm']= $this->request->getVar('confirm');       
        $data['user_id'] = $session->get('id');
         $confirmmodel = new Confirmchat();
        $confirmmodel->insert($data);  

    }
    echo json_encode($response);
    }

    public function chatmessage(){        
        $request = service('request');
        $allMessages = [];
        // return json_encode($_POST);
        // $session = \Config\Services::session($config);
        if($this->request->getMethod()== 'post')
        {
            $data['chat_message']= $this->request->getVar('chat_message');
            $data['user_id']= $this->request->getVar('user_id');
            $data['recevied_id']= $this->request->getVar('recevied_id');
            $confirmmodel = new Chatmsg();         
            $q = $confirmmodel->insert($data); 
            if($q)
            {
                // Filter messages
                $filter_messages = [];
                $allMessages =  $this->collect_message($this->request->getVar('user_id'), $this->request->getVar('recevied_id'));
                // foreach($allMessages as $key=>$mess){
                //     if($mess['user_id'] == $this->request->getVar('user_id'))
                //     {
                //         // Message sent by us
                //         $filter_messages['sent_messages'][] = $mess;
                //     }else
                //     {
                //         $filter_messages['recieved_messages'][] = $mess;
                //     }
                // }
                // print"<pre>";print_r($allMessages);die;
                $res['status'] = 1;
                $res['message'] = "Data found";
                $res['data'] = $allMessages;    
            }else
            {
                $res['status'] = 0;
                $res['message'] = "Something went wrong!";
                $res['data'] = [];    
            }
            header('Content-Type: application/json');
            echo json_encode( $res );
        }
        // Collect Data
          
        
        exit;
        // json_encode($res);
        }

// Collect all messages

    public function collect_message($sender_id, $reciever_id)
    {
        $model = new Chatmsg(); 
        // Sent messae
        $model->where(['user_id' => $sender_id, 'recevied_id' => $reciever_id]);
        $mess['sent'] =  $model->get()->getResultArray();

        // Reciev
        $model->where(['user_id' => $reciever_id , 'recevied_id' => $sender_id]);
        $mess['recieve'] =  $model->get()->getResultArray();
        return $mess;
    }

    
    public function fetch_message(){
        $session = \Config\Services::session($config);
        $recevied_id = $session->get('id');      
        $model = new Chatmsg(); 
        $model->where('recevied_id', $recevied_id);  
        $data=$model->get()->getResultArray();
           header('Content-Type: application/json');
            echo json_encode( $data);

    }
} 

?>

