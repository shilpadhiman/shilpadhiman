<?php
namespace App\Models;
use CodeIgniter\Model;
class RegisterModel extends Model{
	protected $table='register';
	protected $primaryKey='id';
	protected $useAutoIncrement=true;
	protected $returnType='array';
	protected $allowedFields=['name','createdby','gender','day','month','year','maritial_status','denomination','division','subcast','mother_tongue','country','mobile','email','password'];


}
?>