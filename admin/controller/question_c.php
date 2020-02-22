<?php
	include_once("model/question_m.php");
	/**
	* 
	*/
	class Question_c
	{
		var $db;
		function __construct()
		{
			$this->db=new Question_m();
		}
		public function run(){
			$param = $_GET["param"];
			if ($param=="") {
				$courses = $this->db->getCourses();
				include_once("view/question_course_v.php");
			}

			if ($param == "question") {
				$id_course = $_GET["id_course"];
				$id_test = $_GET["id_test"];
				$questions = $this->db->getQuestions($id_course);
				include_once("view/question_v.php");
			}

			if ($param =="question_delete") {
				$id_course = $_GET["id_course"];
				$id_question = $_GET["id_question"];
				$this->db->Delete('question','id_question='.$id_question);
				header("location:index.php?action=question_course&param=question&id_course=$id_course");
			}
		}
	}
?>