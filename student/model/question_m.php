<?php
include("database.php");

/**
* 
*/
class Question_m extends database
{
	public function getCourses(){
		$sql = "SELECT * FROM course ORDER BY id_course ASC";
		$result =$this->Query($sql);
		$courses = $this->LoadAllRow($result);
		return $courses;
	}

	public function getQuestions($id_course,$id_test){
		$sql = "SELECT * FROM quiz_test WHERE id_course= $id_course AND id_test=$id_test";
		$result =$this->Query($sql);
		$questions = $this->LoadAllRow($result);
		return $questions;
	}

	public function getCourse($id_course){
		$sql = "SELECT * FROM course WHERE id_course= $id_course";
		$result =$this->Query($sql);
		$course = $this->LoadOneRow($result);
		return $course;
	}

	public function getTests($id_course){
		$sql = "SELECT * FROM test WHERE id_course= $id_course ORDER BY id_test ASC";
		$result =$this->Query($sql);
		$tests = $this->LoadAllRow($result);
		return $tests;
	}
	
}

?>