<?php
namespace App\Controllers;
use App\Controllers\BaseController;
class Chat extends BaseController
{
    public function index()
    {
        echo "welcome to home";
    return redirect()->to('chat');
    }
}