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
		$this->db = new Question_m();
	}

	public function run(){

		$param = $_GET["param"];
		$id_teacher = $_SESSION["username_teacher"];
		if ($param =='') {
			$answers = $this->db->getAnswers();
			$courses = $this->db->getCourses();

			$name_question = $_POST["name_question"];
			$choice1 = $_POST["choice1"];
			$choice2 = $_POST["choice2"];
			$choice3 = $_POST["choice3"];
			$choice4 = $_POST["choice4"];
			$answer = $_POST["answer"];
			$id_course = $_POST["id_course"];

			if ($_POST["submit"]) {
				$this->db->Insert('question',array(
													'id_question'=>NULL,
													'name_question'=>$name_question,
													'choice1'=>$choice1,
													'choice2'=>$choice2,
													'choice3'=>$choice3,
													'choice4'=>$choice4,
													'answer'=>$answer,
													'id_course'=>$id_course,
													'id_teacher'=>$id_teacher
												));
				header("location:index.php?action=question");
			}
			$questions = $this->db->getQuestions($id_teacher);
			include_once("view/question_v.php");
		}

		if ($param == 'question_edit') {
			$id_question = $_GET["id_question"];
			$answers = $this->db->getAnswers();
			$courses = $this->db->getCourses();
			$question = $this->db->getQuestion($id_question);

			$name_question = $_POST["name_question"];
			$choice1 = $_POST["choice1"];
			$choice2 = $_POST["choice2"];
			$choice3 = $_POST["choice3"];
			$choice4 = $_POST["choice4"];
			$answer = $_POST["answer"];
			$id_course = $_POST["id_course"];

			if ($_POST["sua"]) {
				$this->db->update('question',array(
													'id_question'=>$id_question,
													'name_question'=>$name_question,
													'choice1'=>$choice1,
													'choice2'=>$choice2,
													'choice3'=>$choice3,
													'choice4'=>$choice4,
													'answer'=>$answer,
													'id_course'=>$id_course,
													'id_teacher'=>$id_teacher
												),'id_question='.$id_question);
				header("location:index.php?action=question");
			}
			$questions = $this->db->getQuestions($id_teacher);
			include_once("view/question_edit_v.php");
		}

		if ($param=="question_delete") {
			$id_question = $_GET["id_question"];
			$this->db->Delete('question','id_question='.$id_question);
			header("location:index.php?action=question");
		}
	}
}
?>