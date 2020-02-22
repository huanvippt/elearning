<?php
include_once("model/student_m.php");
class Student_c
{
	var $db;
	function __construct()
	{
		$this->db= new Student_m();
	}

	public function run(){
		$param = $_GET["param"];

		if ($param == '') {
			$students = $this->db->getStudents();
			include_once("view/student_v.php");
		}

		if ($param == "student_add") {
			include_once("view/student_add_v.php");
			$id_student = $_POST["id_student"];
			$name_student = $_POST["name_student"];
			$email = $_POST["email"];
			$phone_number = $_POST["phone_number"];
			$username = $_POST["username"];
			$password = $_POST["password"];
			if (isset($name_student)) {
				$this->db->Insert('student',array(
												'id_student'=>$id_student,
												'name_student'=>$name_student,
												'email'=>$email,
												'phone_number'=>$phone_number,
												'username'=>$username,
												'password'=>$password									
												));
				header("location:index.php?action=student");
			}
		}

		if ($param == "student_edit") {
			$id= $_GET["id"];
			$id_student = $_POST["id_student"];
			$name_student = $_POST["name_student"];
			$email = $_POST["email"];
			$phone_number = $_POST["phone_number"];
			$username = $_POST["username"];
			$password = $_POST["password"];
			$student = $this->db->getStudent($id);
			if (isset($_POST["sua"])) {
				$this->db->Update('student',array(
												'id_student'=>$id_student,
												'name_student'=>$name_student,
												'email'=>$email,
												'phone_number'=>$phone_number,
												'username'=>$username,
												'password'=>$password
												),'id_student='.$id);
				header("location:index.php?action=student");
			}
			include_once("view/student_edit_v.php");
		}


		if ($param == "student_delete") {
			$id = $_GET["id"];
			$this->db->Delete('student','id_student = '.$id);
			header("location:index.php?action=student");
		}
	}

}
?>