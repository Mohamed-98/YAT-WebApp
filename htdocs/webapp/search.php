<input class="form-control" type="text" id="search" placeholder="Search">
<div id="result">

</div>


<script>

 $(document).ready(function (){
	 
	 $('#search').keyup(function (){
		  //$('#result').html(K);
		 var K = $(this).val();
		  if(K==''){
			  $('#result').html('');
			 }
			else{
					 $.ajax({

						 url:'proc.php' ,
						 type:'GET' ,
						 data:'key='+K,

						 success:function (show){
							 $('#result').html(show);
						 }


					 });

			   }

		 });

 });

</script>
