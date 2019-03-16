
<?php
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
				   <span class="glyphicon glyphicon-cog"></span> Posts Management</a>
			  
			   <a href="dashboard.php?page=search.php" class="list-group-item">
				   <span class="glyphicon glyphicon-search" ></span> Search</a>
			  
			   <a href="#" class="list-group-item"><span class="glyphicon glyphicon-log-out"></span> Sign out</a>
			</div>
 	  	
 	  </div>
 	  
 	  <div class="col-md-9">
 	  	
 	  	  <div class="panel panel-default">
		    <div class="panel-heading">
			   <h3 class="panel-title">Page Title</h3>
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
<?php 
 include('footer.php');
?>

