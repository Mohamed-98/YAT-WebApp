<?php
  /*include('config.php');
  if(isset($_POST['submit'])){
	  $title = $_POST['title'];
	  $content = $_POST['content'];
	  
	  $connect->exec("INSERT INTO `posts`(`post_id`, `title`, `content`, `created_date`, `user_id`)
	    VALUES (NULL,'$title','$content',NOW(),2)");
	
	  echo 'Post Created Successfuly..';
  }*/
  

?>
<form >
   <div id="result"></div>
   <input class="form-control" type="text" id="title" name="title" placeholder="Title"><br>
  <textarea class="form-control" id="content" name="content" placeholder="Content"></textarea><br>
  <button id="add-post" class="btn btn-primary" type="button" name="submit" >Create Post</button>

</form>

<script>
 $(document).ready(function (){
	 
	 $('#add-post').click(function (){
		 
		 var title = $('#title').val();
		 var content = $('#content').val();
		 
		$.ajax({
			
			url:'add_post.php',
			type:'POST',
			data:{t:title,c:content},
			
			success:function (show){
				$('#result').html(show);
				
			}
			
			
		})
		 
		 
	 });
	 
	 
 });
</script>