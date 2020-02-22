<?php
include("database.php");
/**
* 
*/
class Grammar_m extends database
{
	public function getCourses(){
		$sql = "SELECT * FROM course ORDER BY id_course ASC";
		$result=$this->Query($sql);
		$courses = $this->LoadAllRow($result);
		return $courses;
	}

	public function getGrammars(){
		$sql = "SELECT * FROM grammar";
		$result = $this->Query($sql);
		$grammars = $this->LoadAllRow($result);
		return $grammars;
	}

	public function getGrammar($id_grammar){
		$sql = "SELECT * FROM grammar WHERE id_grammar = $id_grammar";
		$result=$this->QUery($sql);
		$grammar = $this->LoadOneRow($result);
		return $grammar;
	}
	
}
?>