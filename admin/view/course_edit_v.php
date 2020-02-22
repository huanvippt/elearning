<style type="text/css">
	table tr{
		height: 50px;
	}
	.cot{
		padding: 20px;
	}
</style>
<br><br>
<form method="POST" action="index.php?action=course&param=course_edit&id=<?php echo $_GET['id'] ?>" class="form-group">
	<table class="table">
		<h2>Sửa Khóa Học</h2>
		<tr>
			<td class="cot">
				Mã khóa học
			</td>
			<td>
				<input class="form-control" type="text" name="id_course" value="<?php  echo $course['id_course']; ?>">
			</td>
		</tr>
		<tr>
			<td class="cot">
				Tên Khóa học
			</td>
			<td>
				<input class="form-control" type="text" name="name_course" value="<?php  echo $course["name_course"]; ?>">
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



