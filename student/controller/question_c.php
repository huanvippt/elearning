 <?php
include_once("student/model/question_m.php");
 class Question_c
 {
 	var $db;
 	function __construct()
 	{
 		$this->db = new Question_m();
 	}

 	public function run(){
 		$param = $_GET["param"];
 		if ($param =='') {
 			$courses= $this->db->getCourses();
 			include_once("student/view/question_course_v.php");
 		}

 		if ($param=='test') {
 			$id_course =  $_GET["id_course"];
 			$tests = $this->db->getTests($id_course);
 			include_once('student/view/question_test_v.php');
 		}

 		if ($param == 'question') {
 			$id_course =  $_GET["id_course"];
 			$id_test = $_GET["id_test"];
 			$questions = $this->db->getQuestions($id_course,$id_test);
 			$course =  $this->db->getCourse($id_course);
 			$total= count($questions);
 			$score = 0;

 			foreach ($questions as $key => $question) {
 				$pick = $_POST[$question["id_question"]];
 				$answer = $question["answer"];
 				if ($pick == $answer) {
 					$score++;
 				}
 			}
 			if (isset($_POST["submit"])) {
 				echo "Số câu đúng: ".$score."/".$total."<br>";
 				$result = ($score/$total)*10;
 				echo "Điểm của bạn là:".$result."<br>";
 				echo "<hr>";
 				echo "Đáp án là: "."<br>";
 				foreach ($questions as $key => $question) {
 					$key ++;
 					echo "Câu ".$key.": ".$question["answer"]."<br>";
 				}
 				echo "<hr>";
 			}
 			include_once("student/view/question_v.php");
 		}
 	}
 }
?>