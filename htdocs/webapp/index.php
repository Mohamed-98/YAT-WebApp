<?php 
  include('header.php');
 
  /*if(isset($_GET['submit'])){
	  echo 'Welcome ' . $_GET['username'];
  }*/

  if(isset($_POST['submit']))
  {
	  $usname = $_POST['username'];
	  $welcome =  'Welcome ' .$usname ;
  }
?>
 <div class="container">
 	
 	<form class="login-form"  method="post">
 	    
		<h3>Login Area</h3>
 		<input class="form-control" type="text" name="username" placeholder="Enter your username" 
			  value="<?php if(isset($usname)) echo $usname ; ?>"  >
 		
		
		<input class="form-control" type="password" name="password" placeholder="Enter your account password">
 		<button class="btn btn-primary" type="submit" name="submit" >Log In</button>
		<?php
		    if(isset($welcome)){
				
				echo '<p class="welcome-msg">' . $welcome . '</p>';
			
			}
		?>
 	</form>
 	
 </div>
<?php
 include('footer.php');
?>


