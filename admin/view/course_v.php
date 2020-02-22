<br>
<h2>Elearning - Khóa học</h2>
	<a href="index.php?action=course&param=course_add"><button type="button" class="btn btn-primary">Thêm khóa học</button></a>
<hr/>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Mã Khóa học</th>
			<th>Tên Khóa học</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($courses as $key => $course){
		?>
			<tr>
				<td><?php echo $course["id_course"] ?></td>
				<td><?php echo $course['name_course']."<br>"; ?></td>
				<td><a href="index.php?action=course&param=course_edit&id=<?php echo $course['id_course']; ?>">
					<button type="button" class="btn btn-warning">Sửa</button></a>
				</td>
				<td><a href="index.php?action=course&param=course_delete&id=<?php echo $course['id_course']; ?>">
					<button type="button" class="btn btn-danger">Xóa</button></a>
				</td>		
			</tr>
		<?php
			}
		?>
	</tbody>
</table>
