<?php
namespace App\Libraries;
class Mailinfo{
	public function mail($email=''){
		$to= $email;
		$subject= 'Account Activation';
		$message='Hii shilpa dhiman <br><br> Thanks your account created successfuly.please click the beow link to activate account <br>'.'<a href="">Activate account Now</a><br><br>Thanks<br>Tearm:';
		$email = \Config\Services::email();
		$email->setTo($to);
		$email->setFrom('shilpa.dhiman31@gmail.com');
		$email->setSubject($subject);
		$email->setMessage($message);
		if ($email->send()){
		echo "account created";
		}else{
		$data= $email->printDebugger(['header']);
		print_r($data);
	}


	}
}
	?>
