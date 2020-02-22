<style type="text/css">
	
</style>
<h2>Danh sách câu hỏi</h2>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Câu Hỏi Trong Khóa Học</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($courses as $key => $course) {
		?>
			<tr>
				<td><a href="index.php?action=question_course&param=question&id_course=<?php echo $course["id_course"]; ?>"><?php echo $course["name_course"]; ?></a></td>
			</tr>
		<?php
			}
		?>
	</tbody>
</table>