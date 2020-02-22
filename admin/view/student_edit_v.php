<style type="text/css">
	table tr{
		height: 50px;
	}
	.cot{
		padding: 20px;
	}
</style>
<br><br>
<form method="POST" action="index.php?action=student&param=student_edit&id=<?php echo $_GET['id'] ?>" class="form-group">
	<table class="table">
		<h2>Sửa thông tin sinh viên</h2>
		<tr>
			<td class="cot">
				Mã Sinh viên
			</td>
			<td>
				<input class="form-control" type="text" name="id_student" value="<?php echo $student["id_student"]; ?>">
			</td>
		</tr>
		<tr>
			<td class="cot">
				Tên Sinh viên
			</td>
			<td>
				<input class="form-control" type="text" name="name_student" value="<?php echo $student["name_student"];?>">
			</td>
		</tr>
		<tr>
			<td class="cot">
				Email
			</td>
			<td>
				<input class="form-control" type="text" name="email" value="<?php echo $student["email"]; ?>">
			</td>
		</tr>
		<tr>
			<td class="cot">
				Số điện thoại
			</td>
			<td>
				<input class="form-control" type="text" name="phone_number" value="<?php echo $student["phone_number"]; ?>">
			</td>
		</tr>
		<tr>
			<td class="cot">
				Tài Khoản
			</td>
			<td>
				<input class="form-control" type="text" name="username" value="<?php echo $student["username"]; ?>">
			</td>
		</tr>
		<tr>
			<td class="cot">
				Mật Khẩu
			</td>
			<td>
				<input class="form-control" type="text" name="password" value="<?php echo $student["password"]; ?>">
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



