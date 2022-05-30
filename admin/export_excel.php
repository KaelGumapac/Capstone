<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=24/7BalikbayanFunResort.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'includes/db_inc.php';
	
	$output = "";
	
	$output .="
		<table>
			<thead>
				<tr>
					<th>First Name</th>
					<th>Email</th>
					<th>Check in Date</th>
					<th>Check out Date</th>
					<th>Room Used</th>
				</tr>
			<tbody>
	";
	
	$query = $data->query("SELECT * FROM `records`") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td>".$fetch['full_name']."</td>
					<td>".$fetch['email']."</td>
					<td>".$fetch['check_in']."</td>
					<td>".$fetch['check_out']."</td>
					<td>".$fetch['room']."</td>
				</tr>
	";
	}
	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>