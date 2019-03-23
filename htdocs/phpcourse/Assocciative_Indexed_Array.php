<?php
// Assocciative Indexed Array 

/*$data = array(
	          'Name' => 'Ahmed',
	          'Age'=>25,
	          'Salary'=>1000.585,
	          'Status'=>true
             );
			 */

$data['Name'] = 'Ahmed' ;
$data['Age'] = 25;
$data['Salary'] = 1000.858;
$data['Status'] = true;

foreach($data as $key=>$value)
{
	echo $key . ' => ' .$value . '<br>';
}
  
/*echo '<pre>';
   print_r($data);
echo '</pre>';*/
