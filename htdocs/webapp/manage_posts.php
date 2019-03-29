<?php
  include('config.php');
  $sql = "SELECT posts.post_id,posts.title,LEFT(posts.content,100) as 'Details',posts.created_date,users.user_name
  		  FROM posts , users 
          WHERE posts.user_id = users.user_id
		  ORDER BY posts.created_date DESC ";
  $stmt = $connect->query($sql) ;
  $myPosts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<table id="posts" class="table table-striped table-bordered" style="width:100%">
    <thead>
	  <tr>
		 <th>Title</th>
		 <th>Content</th>
		 <th>Created Date</th>
		 <th>User</th>
		 <th>Control</th>
		 <th>Comments</th>
	   </tr>
	</thead>
	
	<tbody>
	 <?php
		foreach($myPosts as $post){
	 ?>
			
		     	<tr>
			       <td><?=  $post['title'] ?> </td>
				   <td><?=  $post['Details'] ?><a href='' class='btn btn-link'> ...</a></td>
				   <td><?=  $post['created_date'] ?></td>
				   <td><a href='#'><?= $post['user_name'] ?> </a></td>
 				   
					<td class='text-center'>
				      <a href='dashboard.php?page=edit_post.php&postId=<?= $post['post_id'] ?>' class='glyphicon glyphicon-edit' title='Edit'></a>
					  <a href='delete_post.php?postId=<?= $post['post_id'] ?>' class='glyphicon glyphicon-trash' title='Delete'></a>
				   </td>
					
					<td class="text-center">
					  <a class="glyphicon glyphicon-eye-open" href="dashboard.php?page=comments.php&pid=<?=$post['post_id'] ?>"></a>
					</td>
	<?php
		}
	?>
	</tbody>
	
</table>

<script>
 $(document).ready(function() {
    $('#posts').DataTable();
});	
</script>