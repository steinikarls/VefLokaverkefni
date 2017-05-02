<?php 
    foreach ($allContent as $results => $value) 
    {
?>
        <div><h2><a href="<?php echo URL . 'Content/viewPost/' . $value->id ?>"><?php echo $value->title ;?></a></h2><h4><?php echo $value->timasetning;?></h4></div>
        <div><a href="<?php echo URL . 'Content/editPost/' . $value->id ?>">edit</a>&nbsp;<a href="<?php echo URL . 'Content/deletePost/' . $value->id ?>">delete</a></div>
<?php 
	}
?>
<div><h2><a href="<?php echo URL . 'Content/newPost/'?>">Post</a></h2></div>


               