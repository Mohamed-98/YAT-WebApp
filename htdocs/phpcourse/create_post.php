<?php
  include('config.php');
  if(isset($_POST['submit'])){
	  $title = $_POST['title'];
	  $content = $_POST['content'];
	  
	  $connect->exec("INSERT INTO `posts`(`post_id`, `title`, `content`, `created_date`, `user_id`)
	    VALUES (NULL,'$title','$content',NOW(),2)");
	
	  echo 'Post Created Successfuly..';
  }
  

?>
<form action="" method="post">
  
   <input class="form-control" type="text" name="title" placeholder="Title"><br>
  <textarea class="form-control" name="content" placeholder="Content"></textarea><br>
  <button class="btn btn-primary" type="submit" name="submit" >Create Post</button>

</form>