<h3 align="center"><strong>Đề Luyện tập</strong></h3>
<hr />
<form method="POST" action="">
	<?php
		foreach ($questions as $key => $question) {
			$key++;
	?>

	<h4><?php echo $key.'. '.$question["name_question"]; ?></h4>

	<input type="radio" name="<?php echo $question["id_question"]; ?>" value="A"><label><?php echo $question["choice1"]; ?></label><br>
	<input type="radio" name="<?php echo $question["id_question"]; ?>" value="B"><label><?php echo $question["choice2"]; ?></label><br>
	<input type="radio" name="<?php echo $question["id_question"]; ?>" value="C"><label><?php echo $question["choice3"]; ?></label><br>
	<input type="radio" name="<?php echo $question["id_question"]; ?>" value="D"><label><?php echo $question["choice4"]; ?></label><br>
	<?php
	}
	?>
	<input type="submit" name="submit" value="submit">
</form>
