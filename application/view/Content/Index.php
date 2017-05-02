<?php 
    foreach ($allContent as $results => $value) 
    {
?>
        <div><h2>
        <a href="<?php echo URL ."Content/viewPost/?postid="?><?php echo htmlspecialchars($value->id);?>"><?php echo $value->title ;?></a>
        </h2><h4><?php echo $value->timasetning;?></h4></div>
        <div><a href="<?php echo URL ."Content/editPost/?postid="?><?php echo htmlspecialchars($value->id);?>">edit</a>&nbsp;<a href="<?php echo URL ."Content/deletePost/?postid="?><?php echo htmlspecialchars($value->id);?>">delete</a></div>
<?php 
	}
?>
<div><h2><a href="<?php echo URL . 'Content/newPost/'?>">Post</a></h2></div>


              