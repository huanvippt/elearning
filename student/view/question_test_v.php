<br />
<h2>Danh sách đề luyện tập</h2>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Đề luyện tập</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($tests as $key => $test) {
		?>
			<tr>
				<td><a href="index.php?action=question&param=question&id_course=<?php echo $id_course; ?>&id_test=<?php echo $test["id_test"]; ?>"><?php echo $test["name_test"];?></a></td>
			</tr>
		<?php
			}
		?>
	</tbody>
</table>