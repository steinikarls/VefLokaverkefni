<?php 
    foreach ($allContent as $results => $value) 
    {
?>
        <div class="posts" style="margin-left:3em;">
        	<h2 class="post-title">
        	<a href="<?php echo URL ."Content/viewPost/?postid="?><?php echo htmlspecialchars($value->id);?>"><?php echo $value->title ;?></a>
        	</h2>
        	<section class="post">
        		<header class="post-meta">
        			<h4><?php echo $value->timasetning;?></h4>
        			<a href="<?php echo URL ."Content/editPost/?postid="?><?php echo htmlspecialchars($value->id);?>">edit</a>&nbsp;<a href="<?php echo URL ."Content/deletePost/?postid="?><?php echo htmlspecialchars($value->id);?>">delete</a>
        		</header>
        	</section>
        </div>
<?php 
	}
?>
<div style="margin-left:3em;"><h2><a href="<?php echo URL . 'Content/newPost/'?>">Post</a></h2></div>


              