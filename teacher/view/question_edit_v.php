<style type="text/css">
	table tr{
		height: 50px;
	}
	.cot{
		padding: 20px;
	}
</style>
<br>
<div class="row">
<div class="col-xs-6">
	<form method="POST" action="" class="form-group">
		<table class="table">
			<h2>Sửa thông tin câu hỏi</h2>
			<tr>
				<td class="cot">
					Câu hỏi:
				</td>
				<td>
					<input type="text" name="name_question" value="<?php echo $question["name_question"]; ?>">
				</td>
			</tr>
			<tr>
				<td class="cot">
					Đáp án 1:
				</td>
				<td>
					<input type="text" name="choice1" value="<?php echo $question["choice1"]; ?>">
				</td>
			</tr>
			<tr>
				<td class="cot">
					Đáp án 2:
				</td>
				<td>
					<input type="text" name="choice1" value="<?php echo $question["choice2"]; ?>">
				</td>
			</tr>
			<tr>
				<td class="cot">
					Đáp án 3:
				</td>
				<td>
					<input type="text" name="choice1" value="<?php echo $question["choice3"]; ?>">
				</td>
			</tr>
			<tr>
				<td class="cot">
					Đáp án 4:
				</td>
				<td>
					<input type="text" name="choice1" value="<?php echo $question["choice4"]; ?>">
				</td>
			</tr>
			<tr>
				<td class="cot">
					Đáp án:
				</td>
				<td>
					<?php
						foreach ($answers as $key => $answer) {
					?>
							<input <?php if($answer["answer"]==$question["answer"]){echo 'checked="checked"';} ?> type="radio" value="<?php echo $answer["answer"]; ?>" name="answer"><label><?php echo $answer["answer"]; ?></label>
					<?php
						}
					?>
				</td>
			</tr>
			<tr>
				<td class="cot">
					Khóa học: 
				</td>
				<td>
					<select name="id_course" >
						<?php
						foreach ($courses as $key => $course) {
						?>
							<option <?php if($course["id_course"]==$question["id_course"]){echo 'selected="selected"';} ?> value="<?php echo $course["id_course"] ?>"><?php echo $course["name_course"]; ?></option>
						<?php
						}
						?>
						</select>
				</td>
			</tr>	
			<tr>
				<td></td>
				<td>
					<input class="btn btn-primary" type="submit" name="submit" value="Lưu">
				</td>
			</tr>
		</table>
	</form>
</div>
<div class="col-xs-6">
	<br><br>
	<table>
		<?php
			foreach ($questions as $key => $question) {
			$key++;
		?>
		<tr>
			<td>
				<label><?php echo $key.". ".$question["name_question"]; ?></label><br>
				<input type="radio" name="<?php echo $question["id_question"]; ?>"><label><?php echo $question["choice1"]; ?></label><br>
				<input type="radio" name="<?php echo $question["id_question"]; ?>"><label><?php echo $question["choice2"]; ?></label><br>
				<input type="radio" name="<?php echo $question["id_question"]; ?>"><label><?php echo $question["choice3"]; ?></label><br>
				<input type="radio" name="<?php echo $question["id_question"]; ?>"><label><?php echo $question["choice4"]; ?></label><br>
			</td>
		</tr>
		<?php
			}
		?>	
	</table>
</div>
</div>


