<?php 
foreach ($viewContent as $key => $value) {
	$title = $value->title;
	$content = $value->content;
	$id = $value->id;
}


?>


<form action="<?php echo URL; ?>Content/submitEditBlog" method="post">
	<input placeholder="title" type="text" name="title"  value="<?php echo $title ?>" autofocus>
	<textarea class="tinymce" name="content" ><?php echo $content; ?></textarea>
	<input type="hidden" name="id" value="<?php echo $id ?>">
	<input type="submit" name="insert" value="insert">
</form>
<script type="text/javascript" src="<?php echo URL; ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>plugins/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>plugins/tinymce/init-tinymce.js"></script>

