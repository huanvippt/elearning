<script src="../lib/ckeditor/ckeditor.js"></script>

<style type="text/css">
.tittle{
	width: 90%;
	height:50px;
	! important
}

.description{
	width: 90%;
	height: 100px;
	! important
}

</style>

<form method="POST" action="">
	<select name="id_course">
	<?php
	foreach ($courses as $key => $course) {
	?>
		<option value="<?php echo $course["id_course"]; ?>"><?php echo $course["name_course"]; ?></option>
	<?php
	}
	?>
	</select><br><br>

			Tiêu đề<br>
			<textarea class="form-control" rows="2" placeholder="Text input"  name="tittle">
				
			</textarea>
			<br><br>

			Mô tả<br>

			<textarea class="form-control" rows="2" placeholder="Text input"  name="description">
				
			</textarea><br><br>

			Nội dung<br>
			
			<textarea class="content " id="content" name="content">

				
			</textarea>	<script>CKEDITOR.replace('content');</script><br><br>
			<input type="submit" name="submit" value="Lưu">

</form>