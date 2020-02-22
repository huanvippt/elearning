<br>
<h2>Teacher - Đề luyện tập</h2>
<hr/>
<form method="POST" action="">
	<textarea class="form-control" rows="2" placeholder="Text input" name="name_test"></textarea>
	<input type="submit" name="create" value="Tạo">
</form>
<hr/>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Tên Đề luyện tập</th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($tests as $key => $test) {
		?>
		<tr>
			<td>
				<a href="index.php?action=test_course&param=test&id_test=<?php echo $test["id_test"]; ?>&id_course=<?php echo $id_course; ?>"><?php echo $test["name_test"]; ?></a>
			</td>
			<td>
				<a href="index.php?action=test_course&param=test&id_test=<?php echo $test["id_test"]; ?>&id_course=<?php echo $id_course; ?>"><button type="button" class="btn btn-info">Soạn</button></a>
			</td>
			<td><a href="index.php?action=test_course&param=test_edit&id_test=<?php echo $test["id_test"]; ?>&id_course=<?php echo $id_course; ?>">
				<button type="button" class="btn btn-warning">Sửa</button></a>
			</td>
			<td><a href="index.php?action=test_course&param=test_delete&id_test=<?php echo $test["id_test"]; ?>&id_course=<?php echo $id_course; ?>">
				<button type="button" class="btn btn-danger">Xóa</button></a>
			</td>		
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
