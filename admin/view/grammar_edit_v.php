<script src="../lib/ckeditor/ckeditor.js"></script>

<style type="text/css">
.tittle{
	width: 90%;
	height:50px;
}

.description{
	width: 90%;
	height: 100px;
}

</style>

<form method="POST" action="">
	<select name="id_course">>
	<?php
	foreach ($courses as $key => $course) {
	?>
		<option <?php if($course["id_course"]==$grammar["id_course"]){ echo 'selected="selected"';} ?> value="<?php echo $course["id_course"]; ?>"><?php echo $course["name_course"]; ?></option>
	<?php
	}
	?>
	</select><br><br>

			Tiêu đề<br>
			<textarea class="tittle" name="tittle">
				<?php echo $grammar["tittle"]; ?>
			</textarea>
			<br><br>

			Mô tả<br>

			<textarea class="description" name="description">
				<?php echo $grammar["description"]; ?>
			</textarea><br><br>
			Nội dung<br>
			
			<textarea class="content" id="content" name="content">
				<?php echo $grammar["content"]; ?>
			</textarea>	<script>CKEDITOR.replace('content');</script><br><br>
			<input type="submit" name="submit" value="Lưu">

</form>