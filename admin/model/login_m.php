<?php
 include("database.php");
 
 class Login_m extends database
 {
 	public function getUser($username,$password){
 		$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
 		$result=$this->Query($sql);
 		$user = mysql_num_rows($result);
 		return $user;
 	}
 }
?>