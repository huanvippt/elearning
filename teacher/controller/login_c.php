<?php
include_once("model/login_m.php");

class Login_c
{
	var $db;
	function __construct(){
		$this->db= new Login_m;
	}
	public function run(){
		$username = $_POST["username"];
		$password = $_POST["password"];
		$row = $this->db->getUser($username,$password);
		session_start();
		if ($row == 1) {
			$_SESSION["username_teacher"] = $username;
			$_SESSION["password_teacher"] = $password;
			header("location:index.php");
		}
		include_once("view/login_v.php");
	}
}
?>