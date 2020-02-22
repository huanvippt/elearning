<?php
include_once("model/test_m.php");
class Test_c
{
	var $db;
	function __construct()
	{
		$this->db = new Test_m();
	}

	public function run(){
		$param = $_GET["param"];

		if ($param=='') {
			$courses = $this->db->getCourses();
			include_once('view/test_course_v.php');
		}

		if ($param=='test_create'){
			$id_course = $_GET["id_course"];
			$id_teacher = $_SESSION["username_teacher"];
			$courses = $this->db->getCourses();
			$tests = $this->db->getTests($id_course,$id_teacher);
			$id_course= $_GET["id_course"];
				if ($_POST["create"]) {
					$name_test = $_POST["name_test"];
					$this->db->Insert('test',array(
												'id_test'=>NULL,
												'name_test'=>$name_test,
												'id_course'=>$id_course,
												'id_teacher'=>$id_teacher
												));
					header("location:index.php?action=test_course&param=test_create&id_course=$id_course");
				}
			include_once("view/test_create_v.php");
		}

		if ($param == 'test_edit') {
			$id_test=$_GET["id_test"];
			$id_course = $_GET["id_course"];
			$id_teacher = $_SESSION["username_teacher"];
			$test = $this->db->getTest($id_test);
			if ($_POST["luu"]) {
				$name_test = $_POST["name_test"];
				$this->db->Update('test',array(
												'name_test'=>$name_test
												),'id_test='.$id_test);
				header("location:index.php?action=test_course&param=test_create&id_course=$id_course");
			}
			include_once("view/test_edit_v.php");
		}

		if ($param=='test_delete') {
			$id_course = $_GET["id_course"];
			$id_test= $_GET["id_test"];
			$this->db->Delete('test','id_test='.$id_test);
			header("location:index.php?action=test_course&param=test_create&id_course=$id_course");
		}

		if ($param=='test') {
			$id_course = $_GET["id_course"];
			$id_test= $_GET["id_test"];
			$questions= $this->db->getQuestions();
			$questions_quiz=$this->db->getQuestions_quiz($id_test);
			include_once("view/test_v.php");
		}

		if ($param=='add_question') {
			$id_question= $_GET["id_question"];
			$id_test=$_GET["id_test"];
			$id_course = $_GET["id_course"];
			$question = $this->db->getQuestion($id_question);
			$name_question = $question["name_question"];
			$choice1 = $question['choice1'];
			$choice2 = $question['choice2'];
			$choice3 = $question['choice3'];
			$choice4 = $question['choice4'];
			$answer = $question["answer"];
			$this->db->Insert('quiz_test',array(
												'id'=>NULL,
												'id_question'=>$id_question,
												'id_test'=>$id_test,
												'id_course'=>$id_course,
												'name_question'=>$name_question,
												'choice1'=>$choice1,
												'choice2'=>$choice2,
												'choice3'=>$choice3,
												'choice4'=>$choice4,
												'answer'=>$answer
												));
			header("location:index.php?action=test_course&param=test&id_test=$id_test&id_course=$id_course");
		}

		if ($param=='question_delete') {
			$id_test=$_GET["id_test"];
			$id=$_GET["id"];
			$this->db->Delete('quiz_test','id='.$id);
			header("location:index.php?action=test_course&param=test&id_test=$id_test");
		}

	}
}
?>