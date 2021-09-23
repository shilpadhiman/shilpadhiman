<?php

namespace App\Models;

use CodeIgniter\Model;

class Googleuser extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'user';
	protected $primaryKey           = 'login_id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['oauth_id','name','email','profile_img','created_at','updated_at'];

	function isAlreadyRegister($authid){
	
	return $this->db->table('user')->getWhere(['oauth_id'=>$authid])->getRowArray();
	}

	function updateuserdata($userdata, $authid){
	$this->db->table('user')->where(['oauth_id'=> $authid])->update($userdata);
	}
	function insertuserdata($userdata){
	$this->db->table("user")->insert($userdata);
	}
}
