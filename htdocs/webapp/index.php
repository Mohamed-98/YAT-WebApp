<?php 
 session_start();
 $title = 'Login'; 
 include('header.php');
 include('config.php'); 
  /*if(isset($_GET['submit'])){
	  echo 'Welcome ' . $_GET['username'];
  }*/
  
  if(isset($_POST['submit']))
  {
	  $usname = $_POST['username'];
	  $uspass = SHA1($_POST['password']);
	  
	  $sql = "SELECT * FROM users WHERE user_name=:username  AND user_pass=:password ";
	  $stmt = $connect->prepare($sql);
	  
	  $stmt->execute(array(
	  
		  'username' => $usname,
		  'password' => $uspass 
	  
	  ));
	  $row = $stmt->fetch();
	  $count = $stmt->rowCount();
	  if($count ==1){
		  $_SESSION['userId'] = $row['user_id'];
		  $_SESSION['username'] = $row['first_name'] . ' ' . $row['last_name'];
		  $_SESSION['userType'] = $row['user_type'];
		  header('Location:dashboard.php');
	  }else{
		  $errLogin =  'Invalid Login..';
	  }
	  
	  
	  

	  
	  /*if($usname ==''){
		  $errors[] = 'Username field is required';
	  }
	  
	  if($uspass == ''){
		  $errors[] = 'Password field is required';
	  }*/
  }
?>
 <div class="container">
 	
 	<form class="login-form"  method="post">
 	    <?php
		if(!empty($errors)){
		  for($i=0;$i<count($errors);$i++){
			  echo "<ul><li> $errors[$i] </li></ul>";
		  }
		}
		
		if(isset($errLogin)){
			echo $errLogin;
			
		}
		?>
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
<?php include('footer.php'); ?>


