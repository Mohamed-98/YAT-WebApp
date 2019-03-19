<?php
function setTitle()
{
	global $title;
	if(isset($title)){
		echo $title;
	}
}



function returnTotalPosts()
{
	return 10;
}