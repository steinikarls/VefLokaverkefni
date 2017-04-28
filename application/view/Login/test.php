

	<form action="<?php echo URL; ?>Login/insert" method="post">
	<input placeholder="title" type="text" name="title" autofocus>
		<textarea class="tinymce" name="content"></textarea>
		<input placeholder="date" type="text" name="date">
		<input type="submit" name="insert" value="insert">
	</form>




<script type="text/javascript" src="<?php echo URL; ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>plugins/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>plugins/tinymce/init-tinymce.js"></script>

