<?php
 include('config.php');
 $id =  $_GET['postId'];

 $sql = "SELECT * FROM posts WHERE post_id='$id'";
 $stmt = $connect->query($sql);
 $post = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
 foreach($post as $p){

?>
<!-- <form action="update_post.php?pid=<?//= $id ?>" method="post"> -->
<form action="update_post.php" method="post">
	<?php
		if(isset($_GET['msg'])){
			echo 'Post Update successfuly..';
		}			  
	?>
  <input type="hidden" name="postId" value="<?= $id ?>">
  <input class="form-control" type="text" name="title" placeholder="Title" value="<?= $p['title'] ?>"><br>
  <textarea class="form-control" name="content" placeholder="Content"><?= $p['content']?></textarea><br>
  <button class="btn btn-primary" type="submit" name="submit" >Edit Post</button>

</form>

<?php } 