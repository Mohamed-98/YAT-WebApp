
<table border="1" align="center">
	<thead>
	  <tr>
		 <th>Name</th>
		  <th>Age</th>
		  <th>Salary</th>
		  <th>Status</th>
		</tr>
	</thead>
	<tbody>
		<tr>
<?php
// PHP Arrays => Compound Data Types
/*
  1- Numerical Indexed Array 
  2- Assocciative Indexed Array 
*/

//                 0     1     2     3
//$data = array('Ahmed',20,1000.565,true);
$data = array();
//..
//..
//..

$data[] = 'ahmed';
$data[] = 20;
$data[] = 1000.565;
$data[] = true;
$data[] = 'PHP'; 
			
//echo count($data);			
for($i=0;$i<count($data);$i++){
	//echo '<p>' . $data[$i] . '</p>';
	echo  '<td>' . $data[$i] . '</td>';
}


/*echo '<pre>';
print_r($data);
echo '</pre>';*/
	
	
?>
	</tr></tbody>
</table>