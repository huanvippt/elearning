<br>
<h2>Elearning - Sinh Viên</h2>
	<a href="index.php?action=student&param=student_add"><button type="button" class="btn btn-primary">Thêm sinh viên
	</button></a>
<hr/>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Mã SV</th>
			<th>Tên Sinh Viên</th>
			<th>Email</th>
			<th>Số điện thoại</th>
			<th>Tài khoản</th>
			<th>Mật khẩu</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($students as $key => $student){
		?>
		<tr>
			<td>
				<?php echo $student["id_student"]; ?>
			</td>
			<td>
				<?php echo $student["name_student"]; ?>
			</td>
			<td>
				<?php echo $student["email"]; ?>
			</td>
			<td>
				<?php echo $student["phone_number"]; ?>
			</td>
			<td>
				<?php echo $student["username"]; ?>
			</td>
			<td>
				<?php echo $student["password"]; ?>
			</td>
			<td><a href="index.php?action=student&param=student_edit&id=<?php echo $student["id_student"]; ?>">
				<button type="button" class="btn btn-warning">Sửa</button></a>
			</td>
			<td><a href="index.php?action=student&param=student_delete&id=<?php echo $student["id_student"]; ?>">
				<button type="button" class="btn btn-danger">Xóa</button></a>
			</td>		
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
