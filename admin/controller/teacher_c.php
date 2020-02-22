<?php
include_once("model/teacher_m.php");
class Teacher_c
{
	var $db;
	function __construct()
	{
		$this->db= new Teacher_m();
	}

	public function run(){
		$param = $_GET["param"];

		if ($param == '') {
			$teachers = $this->db->getTeachers();
			include_once("view/teacher_v.php");
		}

		if ($param == "teacher_add") {
			include_once("view/teacher_add_v.php");
			$id_teacher = $_POST["id_teacher"];
			$name_teacher = $_POST["name_teacher"];
			$email = $_POST["email"];
			$phone_number = $_POST["phone_number"];
			$username = $_POST["username"];
			$password = $_POST["password"];
			if (isset($name_teacher)) {
				$this->db->Insert('teacher',array(
												'id_teacher'=>$id_teacher,
												'name_teacher'=>$name_teacher,
												'email'=>$email,
												'phone_number'=>$phone_number,
												'username'=>$username,
												'password'=>$password									
												));
				header("location:index.php?action=teacher");
			}
		}

		if ($param == "teacher_edit") {
			$id= $_GET["id"];
			$id_teacher = $_POST["id_teacher"];
			$name_teacher = $_POST["name_teacher"];
			$email = $_POST["email"];
			$phone_number = $_POST["phone_number"];
			$username = $_POST["username"];
			$password = $_POST["password"];
			$teacher = $this->db->getTeacher($id);
			if (isset($_POST["sua"])) {
				$this->db->Update('teacher',array(
												'id_teacher'=>$id_teacher,
												'name_teacher'=>$name_teacher,
												'email'=>$email,
												'phone_number'=>$phone_number,
												'username'=>$username,
												'password'=>$password
												),'id_teacher='.$id);
				header("location:index.php?action=teacher");
			}
			include_once("view/teacher_edit_v.php");
		}


		if ($param == "teacher_delete") {
			$id = $_GET["id"];
			$this->db->Delete('teacher','id_teacher = '.$id);
			header("location:index.php?action=teacher");
		}
	}

}
?>