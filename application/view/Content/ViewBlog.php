<?php 
	foreach ($viewContent as $key => $value) 
	{?>
		<div><h1><?php echo $value->title ; ?></h1></div>
		<div><?php echo $value->content ; ?></div>
		<div><h3><?php echo $value->timasetning ; ?></h3></div><?php  
	}?>