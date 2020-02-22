<br>
<h2>Elearning - Giáo Viên</h2>
	<a href="index.php?action=teacher&param=teacher_add"><button type="button" class="btn btn-primary">Thêm giáo viên
	</button></a>
<hr/>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Mã GV</th>
			<th>Tên Giáo Viên</th>
			<th>Email</th>
			<th>Số điện thoại</th>
			<th>Tài khoản</th>
			<th>Mật khẩu</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($teachers as $key => $teacher) {
		?>
		<tr>
			<td>
				<?php echo $teacher["id_teacher"]; ?>
			</td>
			<td>
				<?php echo $teacher["name_teacher"]; ?>
			</td>
			<td>
				<?php echo $teacher["email"]; ?>
			</td>
			<td>
				<?php echo $teacher["phone_number"]; ?>
			</td>
			<td>
				<?php echo $teacher["username"]; ?>
			</td>
			<td>
				<?php echo $teacher["password"]; ?>
			</td>
			<td>
				<a href="index.php?action=teacher&param=teacher_edit&id=<?php echo $teacher["id_teacher"]; ?>">
				<button type="button" class="btn btn-warning">Sửa</button></a>
			</td>
			<td>
				<a href="index.php?action=teacher&param=teacher_delete&id=<?php echo $teacher["id_teacher"]; ?>">
				<button type="button" class="btn btn-danger">Xóa</button></a>
			</td>		
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
