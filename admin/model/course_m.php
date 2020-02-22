<?php
include("database.php");
class Course_m extends database
{
	public function getAllCourse(){
		$sql = "SELECT * FROM course ORDER BY id_course DESC";
		$result=$this->Query($sql);
		$courses = $this->LoadAllRow($result);
		return $courses;
	}

	public function getOneCourse($id){
		$sql = "SELECT * FROM course WHERE id_course = $id";
		$result = $this->Query($sql);
		$course = $this->LoadOneRow($result);
		return $course;
	}
}

?>