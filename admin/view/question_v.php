<br>
<h2>Elearning - Câu hỏi</h2>
<hr/>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Mã</th>
			<th>Câu hỏi</th>
			<th>Giáo Viên</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($questions as $key => $question) {
		?>
			<tr>
				<td><?php echo $question["id_question"]; ?></td>
				<td><?php echo $question["name_question"]; ?></td>
				<td><?php echo $question["name_teacher"]; ?></td>
				<td><a href="index.php?action=question_course&param=question_delete&id_question=<?php echo $question["id_question"]; ?>&id_course=<?php echo $id_course; ?>">
					<button type="button" class="btn btn-danger">Xóa</button></a>
				</td>		
			</tr>
		<?php
			}
		?>
	</tbody>
</table>
