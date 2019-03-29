<?php
include('config.php');
$post_id = $_POST['postId'];
$title = $_POST['title'];
$content = $_POST['content'];

$updatePost = "UPDATE  `posts` SET title = '$title' , content = '$content' 
               WHERE post_id = '$post_id' ";

$connect->exec($updatePost);
//header("Location:dashboard.php?page=manage_posts.php");
header("Location:dashboard.php?page=edit_post.php&postId=$post_id&msg");