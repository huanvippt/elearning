<?php
	include("model/course_m.php");
	/**
	* 
	*/
	class Course_c
	{
		var $db;
		function __construct()
		{
			$this->db = new Course_m();
		}

		public function run(){
			$param = $_GET["param"];

			if($param== ""){
				$courses = $this->db->getAllCourse('course');
				include_once ("view/course_v.php");
			}
			if ($param == "course_add") {
				include_once("view/course_add_v.php");
				$id_course = $_POST["id_course"];
				$name_course = $_POST["name_course"];
				if (isset($name_course)) {
					$this->db->Insert('course',array(
												'id_course'=>$id_course,
												'name_course'=>$name_course									
												));
					header("location:index.php?action=course");
				}
			}

			if ($param == "course_edit") {
				$id_course = $_POST["id_course"];
				$name_course = $_POST["name_course"];
				$id = $_GET["id"];
				 $course = $this->db->getOneCourse($id);
				include_once("view/course_edit_v.php");
				if (isset($name_course)) {
					$this->db->Update('course',array(
													'id_course'=>$id_course,
													'name_course'=>$name_course
													),'id_course ='.$id);
					header("location:index.php?action=course");
				}	
			}

			if ($param == "course_delete") {
				$id = $_GET["id"];
				$this->db->Delete('course','id_course = '.$id);
				header("location:index.php?action=course");
			}
		}
	}
?>