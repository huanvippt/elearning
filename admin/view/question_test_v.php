<?php
	foreach ($tests as $key => $test) {

?>
		<a href="index.php?action=question_course&param=question&id_course=<?php echo $course["id_course"]; ?>&id_test=<?php echo $id_test; ?>"><?php echo $test["name_test"]; ?></a><br>
<?php
	}
?>