<?php 
	foreach ($viewContent as $key => $value) 
	{?>
		<section class="post" style="margin-left:5%;" style="margin-right:5%;">
			<h1 class="post-title"><?php echo $value->title ; ?></h1>
			<div class="post-description"><?php echo $value->content ; ?></div>
			<h3><?php echo $value->timasetning ; ?></h3>
		</section>
<?php  
	}?>