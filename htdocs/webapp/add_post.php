<?php
 include('config.php');
 if(isset($_POST['t']) && isset($_POST['c'])){
	 //echo $_POST['t'] . ' : ' . $_POST['c']; 
	 
	 $title = $_POST['t'];
	 $content = $_POST['c'];
	 
	 $addPost = "INSERT INTO `posts`(`post_id`, `title`, `content`, `created_date`, `user_id`)
	          VALUES (NULL,'$title','$content',NOW(),1)";
	 
	 
	 $connect->exec($addPost);
	 echo 'Post Created Successfuly';
	 
 }