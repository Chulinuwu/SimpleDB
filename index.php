<?php
	$tab = 'DEPARTMENT STORE';
	include('link/connect.php');

	if(!$conn){
		die("Connection failed: ". mysqli_connect_error());
	}

	$sql = "SELECT * FROM VIPcustomers ORDER BY id ASC";
	$result = mysqli_query($conn, $sql);
	
	include('template/header.php');
?>


	<div class="row">
		<div class="col-3">
		</div>
		<div class="col-6">
		<h1 >Department Store VIP Customers</h1>				
		<table class="table">
			<thead>
				<tr>
					<td style = "color: #A084CA;">ID</td>
					<td style = "color: #A084CA;">FIRSTNAME</td>
					<td style = "color: #A084CA;">LASTNAME</td>
					<td style = "color: #A084CA;">NUMBER</td>
					<td style = "color: #A084CA;">GOODS</td>
					<td style = "color: #A084CA;">AMOUNT</td>
					<td style = "color: #A084CA;">TIME STAMP</td>
					<td style = "color: #A084CA;">Notify</td>
				</tr>
			</thead>
			<tbody>			
					<?php 
						if(mysqli_num_rows($result) > 0){
							while($row=mysqli_fetch_assoc($result)){				
								echo "<tr>";
								echo "<td style = 'color: #A084CA;'>$row[id]</td>";
								echo "<td style = 'color: #A084CA;'>$row[Firstname]</td>";
								echo "<td style = 'color: #A084CA;'>$row[Lastname]</td>";
								echo "<td style = 'color: #A084CA;'>$row[Phone]</td>";
								echo "<td style = 'color: #A084CA;'>$row[Goods]</td>";
								echo "<td style = 'color: #A084CA;'>$row[Amount]</td>";
								echo "<td style = 'color: #A084CA;'>$row[BOOKING_DATE]</td>";
								echo '<td style = "color: #A084CA;"><a style = "color : white;"href="edit.php"><button type="button" class="btn btn-secondary">Edit</a></button></td>';
								echo "</tr>";						
							}
						}				
						mysqli_close($conn);	
					?>	
			</tbody>	
		</table>
		
		<a href="append.php"><button type="button" class="btn btn-secondary">ADD</button></a>
	
		</div>
	</div>