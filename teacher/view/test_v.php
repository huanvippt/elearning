
<style type="text/css">
	.show{
		height: 1000px;
		overflow: auto;
	}

</style>

<div class="row">
	<div class="col-xs-6">
		<form action="" method="POST">
		<table class="table">
			<?php  
			foreach ($questions as $key => $question) {
				$key++;
			?>
			<tr>
				<td>
					<label><?php echo $key.". ".$question["name_question"] ?></label><br>
					<input type="radio" name=""><label><?php echo $question["choice1"]; ?></label><br>
					<input type="radio" name=""><label><?php echo $question["choice2"]; ?></label><br>
					<input type="radio" name=""><label><?php echo $question["choice3"]; ?></label><br>
					<input type="radio" name=""><label><?php echo $question["choice4"]; ?></label><br>		
				</td>
				<td>
					<a href="index.php?action=test_course&param=add_question&id_question=<?php echo $question["id_question"]; ?>&id_test=<?php echo $id_test; ?>&id_course=<?php echo $id_course; ?>">
					<button type="button" class="btn btn-primary">Chọn</button></a>
				</td>
			</tr>
			<?php
			}
			?>
		</table>
		</form>		

	</div>
	<div class="col-xs-6 show">
	<table class="table">
		<?php  
		foreach ($questions_quiz as $key => $question) {
			$key++;
		?>
		<tr>
			<td>
				<label><?php echo $key.". ".$question["name_question"] ?></label><br>
				<input type="radio" name=""><label><?php echo $question["choice1"]; ?></label><br>
				<input type="radio" name=""><label><?php echo $question["choice2"]; ?></label><br>
				<input type="radio" name=""><label><?php echo $question["choice3"]; ?></label><br>
				<input type="radio" name=""><label><?php echo $question["choice4"]; ?></label><br>		
			</td>
			<td>
				<a href="index.php?action=test_course&param=question_delete&id=<?php echo $question["id"]; ?>&id_test=<?php echo $id_test; ?>">
				<button type="button" class="btn btn-warning">Xóa</button></a>
			</td>
		</tr>
			<?php
			}
			?>
		<tr>
			<td>
				<a href="index.php?action=test_course&param=test_create&id_course=<?php echo $id_course; ?>"><button type="button" class="btn btn-primary">Hoàn Tất</button></a>
			</td>			
		</tr>
	</table>
	</div>
</div>



