<?php
  include('config.php');
  $sql = "SELECT * FROM `posts` ORDER BY created_date DESC";
  $stmt = $connect->query($sql) ;
  $myPosts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<table id="posts" class="table table-striped table-bordered" style="width:100%">
    <thead>
	  <tr>
		 <th>Title</th>
		 <th>Content</th>
		 <th>Created Date</th>
		 <th>Control</th>
	   </tr>
	</thead>
	
	<tbody>
	 <?php
		foreach($myPosts as $post){
			
			echo "<tr>
			       <td>" . $post['title'] . "</td>
				   <td>" . $post['content'] . "</td>
				   <td>" . $post['created_date'] . "</td>
				   <td class='text-center'>
				      <a href='#' class='glyphicon glyphicon-edit' title='Edit'></a>
					  <a href='#' class='glyphicon glyphicon-trash' title='Delete'></a>
				   </td>
				 </tr>";
		}
	?>
	</tbody>
	
</table>


<script>
 $(document).ready(function() {
    $('#posts').DataTable();
});	
</script>