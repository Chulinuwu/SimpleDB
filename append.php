<?php 
	$tab = "APPEND";
	$error = "";
	if(!isset($_GET["submit"])){
		echo "When you Finish entering your form , please click 'APPEND'";
	}else{		

		if(empty($_GET["Firstname"]) || empty($_GET["Lastname"]) || empty($_GET["Phone"]) || empty($_GET["Goods"] )|| empty($_GET["Amount"])){
			$error = "All entries must be filled...";
		}else{

			include('link/connect.php');

			$Firstname = $_GET["Firstname"];
			$Lastname = $_GET["Lastname"];
			$Phone = $_GET["Phone"];	
            $Goods = $_GET["Goods"];
            $Amount = $_GET["Amount"];

			$sql = "INSERT INTO VIPcustomers(Firstname,Lastname,Phone , Goods,Amount) VALUES('$Firstname', '$Lastname', '$Phone', '$Goods', '$Amount')";

			if(mysqli_query($conn, $sql)){
				echo "New record created successfully";
			} else{
				echo "Error: ".$sql."<br>".mysqli_error($conn);
			}
			mysqli_close($conn);

			header("location: index.php");
		}		
	}
	include('template/header.php');
?>
	<div class="row">
		<div class="col-3">
		</div>
	<div class="col-6">
		<h1>Department Store VIP Customers</h1>

		<form action="append.php" method="GET">
			<!-- Firstname -->
			<div class="input-group mb-3" >
				<span class="input-group-text"  >Firstname</span>
				<input style="background-color:#FFF5E4;" type="text" class="form-control" name="Firstname" aria-label="Firstname" placeholder="Enter your Firstname">				
			</div>
			<!-- Lastname -->
			<div class="input-group mb-3">				
				<span class="input-group-text" >Lastname</span>
				<input style="background-color:#FFF5E4;" type="text" class="form-control" name="Lastname" aria-label="Lastname"placeholder="Enter your Last Name">
			</div>
            
            <div class="input-group mb-3">				
				<span class="input-group-text" >Phone</span>
				<input style="background-color:#FFF5E4;" type="text" class="form-control" name="Phone" aria-label="Phone"placeholder="Enter your Phone Number">
			</div>
            <div class="input-group mb-3">				
				<span class="input-group-text" >Goods</span>
				<input style="background-color:#FFF5E4;" type="text" class="form-control" name="Goods" aria-label="Goods"placeholder="Enter your Goods">
			</div>
            <div class="input-group mb-3">				
				<span class="input-group-text" >Amount</span>
				<input style="background-color:#FFF5E4;" type="text" class="form-control" name="Amount" aria-label="Amount "placeholder="Enter your Amount">
			</div>
			<!-- GAS TYPE -->
			
			<div class="input-group mb-3">
				<span class="error" style="color: red;"><?php echo $error; ?></span>
			</div>
			
			<a href="index.php"><button type="button" class="btn btn-secondary">HOME</button></a>
			<input type="submit" name="submit" class="btn btn-secondary" value="APPEND">
		</form>
	</div>
	<div class="col-3">
		</div>
</div>
	
<?php include("template/footer.php"); ?>

