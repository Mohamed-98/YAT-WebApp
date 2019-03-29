<?php
include('config.php');
$id =  $_GET['postId'];

$delPost = "DELETE FROM posts WHERE post_id = '$id'";
$connect->exec($delPost);

// Redirect User 
header("Location:dashboard.php?page=manage_posts.php");