<?php
include('config.php');
$pid =  $_GET['pid'];

$sql = "SELECT * FROM comments WHERE post_id='$pid'";
$result = $connect->query($sql);
$comments = $result->fetchAll(PDO::FETCH_ASSOC);
if($result->rowCount()>0)
{
?>
<table class='table table-bordered'>
<thead>
  <tr>
	 <th>Comment</th>
	 <th>Control</th>
  </tr>	
</thead>	
<tbody>
<?php

foreach($comments as $comm){  ?>
	
	<tr>
	  <td><?= $comm['comment'] ?></td>
		<td>
		  <a href='#' class='glyphicon glyphicon-edit'></a>
		   <a href='#' class='glyphicon glyphicon-trash'></a>
		</td>
	
	</tr>
	
<?php }  
}else{
	echo 'There is no comments..';
}
	?>
	
	
	</tbody>
</table>