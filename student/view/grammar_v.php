<table class="table table-striped">
	<thead>
		<tr>
			<th>Mã </th>
			<th>Tiêu đề</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($grammars as $key => $grammar) {
			$key++
		?>
		<tr>
			<td>
				<?php echo $key; ?>
			</td>
			<td>
				<?php echo $grammar["tittle"]; ?>
			</td>
			<td>
				<a href="index.php?action=grammar&param=grammar_all&id_grammar=<?php echo $grammar["id_grammar"]; ?>">
				<button type="button" class="btn btn-warning">Đọc thêm</button></a>
			</td>			
		</tr>
		<?php
			}
		?>

	</tbody>
</table>