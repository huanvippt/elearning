<style type="text/css">
	table tr{
		height: 50px;
	}
	.cot{
		padding: 20px;
	}
</style>
<br><br>
<form method="POST" action="index.php?action=teacher&param=teacher_edit&id=<?php echo $_GET['id'] ?>" class="form-group">
	<table class="table">
		<h2>Sửa thông tin giáo viên</h2>
		<tr>
			<td class="cot">
				Mã Giáo viên
			</td>
			<td>
				<input class="form-control" type="text" name="id_teacher" value="<?php echo $teacher["id_teacher"]; ?>">
			</td>
		</tr>
		<tr>
			<td class="cot">
				Tên Giáo viên
			</td>
			<td>
				<input class="form-control" type="text" name="name_teacher" 
								value="<?php echo $teacher["name_teacher"]; ?>">
			</td>
		</tr>
		<tr>
			<td class="cot">
				Email
			</td>
			<td>
				<input class="form-control" type="text" name="email" value="<?php echo $teacher["email"]; ?>">
			</td>
		</tr>
		<tr>
			<td class="cot">
				Số điện thoại
			</td>
			<td>
				<input class="form-control" type="text" name="phone_number" value="<?php echo $teacher["phone_number"]; ?>">
			</td>
		</tr>
		<tr>
			<td class="cot">
				Tài Khoản
			</td>
			<td>
				<input class="form-control" type="text" name="username" value="<?php echo $teacher["username"]; ?>">
			</td>
		</tr>
		<tr>
			<td class="cot">
				Mật Khẩu
			</td>
			<td>
				<input class="form-control" type="text" name="password" value="<?php echo $teacher["password"]; ?>">
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



