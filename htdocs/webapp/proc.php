
<?php
include('config.php');
if(isset($_GET['key'])){
	$K = '%' . $_GET['key'] . '%';
	$sql = "SELECT * FROM posts WHERE title LIKE '$K' ";
	
	$stmt = $connect->query($sql);
	$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
	if($stmt->rowCount()>0){ ?>
		<table class="table table-bordered">
		  <thead>
			<tr>
			  <th>Title</th>
			  <th>Content</th>
			  </tr>
			</thead>
			<tbody>
		
	 <?php	foreach($posts as $post){ ?>

			<tr>
			  <td><?= $post['title']?></td>
			  <td><?= $post['content']?></td>
			</tr>

		<?php }	
	 }else {
		echo '<p>Not Found..</p>';
	 }
}
?>	
	</tbody>
</table>