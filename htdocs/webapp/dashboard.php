
<?php 
$title = 'Dashboard';
include('header.php'); 
?>
 <div class="container">
 	<!-- Grid System -->
 	<div class="row">
 	
 	  <div class="col-md-3">
 	  	   <!-- Side bar -->
 	  	   <div class="list-group">
			   <a href="#" class="list-group-item active"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a>
			  
			   <a href="dashboard.php?page=create_user.php" 
				  class="list-group-item"><span class="glyphicon glyphicon-user"></span> Create user</a>
			  
			   <a href="dashboard.php?page=create_post.php" 
				  class="list-group-item"><span class="glyphicon glyphicon-plus-sign">
				   </span> Create Post</a>
			  
			   <a href="dashboard.php?page=manage_posts.php" class="list-group-item">
				   <span class="glyphicon glyphicon-cog"></span> Posts Management
			       <span class="badge"><?php echo returnTotalPosts() ?></span>
			   </a>
			  
			   <a href="dashboard.php?page=search.php" class="list-group-item">
				   <span class="glyphicon glyphicon-search" ></span> Search</a>
			  
			   <a href="#" class="list-group-item"><span class="glyphicon glyphicon-log-out"></span> Sign out</a>
			</div>
 	  	
 	  </div>
 	  
 	  <div class="col-md-9">
 	  	
 	  	  <div class="panel panel-default">
		    <div class="panel-heading">
			   <h3 class="panel-title">
				  <?php
				     if(isset($_GET['page'])){
						 switch($_GET['page']){
							 case 'create_user.php':
								 echo 'Create New User';
								 break;
							 case 'create_post.php':
								  echo 'Create New Post';
								 break;
							 case 'manage_posts.php':
								 echo 'Post Management';
								 break;
							 case 'search.php':
								 echo 'Search';
								 break;
							 case 'edit_post.php':
								 echo 'Edit Post';
								 break;
						 }
					 }else{
						 echo 'Main Page';
					 }
				   ?>
			   </h3>
		    </div>
		    <div class="panel-body">
			 <?php
			   if(isset($_GET['page']))
			   {
				   include($_GET['page']);
			   }
				else{
					include('default.php');
				}
			 ?>
		    </div>
		</div>

 	  	
 	  </div>
 	
	 </div><!-- End Row -->
 </div><!-- End Container  -->
<?php include('footer.php'); ?>

