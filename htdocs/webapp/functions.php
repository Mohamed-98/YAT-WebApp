<?php
include('config.php');
function setTitle()
{
	global $title;
	if(isset($title)){
		echo $title;
	}
}



function returnTotalPosts()
{
	global $connect;
	$sql = "SELECT COUNT(*) FROM posts";
	$stmt = $connect->query($sql);
	$result = $stmt->fetchColumn();
	return $result;
}