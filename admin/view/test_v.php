<br>
<h2>Elearning - Đề luyện tập</h2>
<hr/>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Mã</th>
			<th>Đề luyện tập</th>
			<th>Giáo Viên</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($tests as $key => $test) {
		?>
			<tr>
				<td><?php echo $test["id_test"]; ?></td>
				<td><?php echo $test["name_test"]; ?></td>
				<td><?php echo $test["name_teacher"]; ?></td>
				<td><a href="index.php?action=test_course&param=test_delete&id_test=<?php echo $test["id_test"]; ?>&id_course=<?php echo $id_course; ?>">
					<button type="button" class="btn btn-danger">Xóa</button></a>
				</td>		
			</tr>
		<?php
			}
		?>
	</tbody>
</table>
