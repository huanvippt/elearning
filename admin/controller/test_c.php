<?php
include_once("model/test_m.php");
/**
* 
*/
	class Test_c
	{
		var $db;
		function __construct()
		{
			$this->db = new Test_m();
		}

		public function run(){
			$param = $_GET["param"];
			if ($param=="") {
				$courses = $this->db->getCourses();
				include_once("view/test_course_v.php");
			}

			if ($param == "test") {
				$id_course = $_GET["id_course"];
				$tests = $this->db->getTests($id_course);
				include_once("view/test_v.php");
			}

			if ($param =="test_delete") {
				$id_course = $_GET["id_course"];
				$id_test = $_GET["id_test"];
				$this->db->Delete('test','id_test='.$id_test);
				header("location:index.php?action=test_course&param=test&id_course=$id_course");
			}
		}

	}
?>