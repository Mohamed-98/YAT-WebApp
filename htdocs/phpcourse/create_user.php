<?php
include('config.php');
if(isset($_POST['submit'])){
	
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$usname = $_POST['username'];
	$uspass = SHA1($_POST['password']);
	$role = $_POST['userType'];
	
	$addUser = "INSERT INTO `users`(`user_id`, `first_name`, `last_name`, `user_name`, `user_pass`,    `user_type`) 
	VALUES (NULL,'$fname','$lname','$usname','$uspass','$role')";
	
	$connect->exec($addUser);
	echo 'User Created Successfuly..';
	
}

?>


<form action="" method="post">

    <input class="form-control" type="text" name="firstname" placeholder="First Name"><br>
	<input class="form-control" type="text" name="lastname" placeholder="Last Name"><br>
	<input class="form-control" type="text" name="username" placeholder="UserName"><br>
	<input class="form-control" type="text" name="password" placeholder="Password"><br>
	<select class="form-control" name="userType">
	 <option>--User Role--</option>
	  <option value="admin">Admin</option>
	  <option value="editor">Editor</option>
	  <option value="user">User</option>	
	</select>
	<br>
	<button class="btn btn-primary" type="submit" name="submit" >Create User</button>
	
</form>