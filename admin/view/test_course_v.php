<style type="text/css">
</style>
<h2>Danh sách đề luyện tập</h2>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Đề luyện tập Trong Khóa Học</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($courses as $key => $course) {
		?>
			<tr>
				<td><a href="index.php?action=test_course&param=test&id_course=<?php echo $course["id_course"]; ?>"><?php echo $course["name_course"]; ?></a></td>
			</tr>
		<?php
			}
		?>
	</tbody>
</table>