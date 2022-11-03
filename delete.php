<?php 
	$tab = "DELETE";
	$error = "";
	if(!isset($_GET["submit"])){
		echo "";
	}else{		

        if(empty($_GET["Firstname"]) || empty($_GET["Lastname"]) || empty($_GET["Phone"]) || empty($_GET["Goods"] )|| empty($_GET["Amount"])){
			$error = "All entries must be filled...";
		}else{

			include('link/connect.php');
            $id = $_GET['id'];
			$Firstname = $_GET["Firstname"];
			$Lastname = $_GET["Lastname"];
			$Phone = $_GET["Phone"];	
            $Goods = $_GET["Goods"];
            $Amount = $_GET["Amount"];

			$sql = "DELETE FROM VIPcustomers WHERE id = '$id'";

			if(mysqli_query($conn, $sql)){
				echo "Deleted successfully";
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
		<h1>REFUELLING CUSTOMER</h1>

		<form action="delete.php" method="GET">
			<!-- RECORD ID -->
			<div class="input-group mb-3">
				<span class="input-group-text">ID</span>
				<input type="text" class="form-control" name="id" aria-label="Product Name" value="<?php echo $_GET['id']; ?>" readonly>				
			</div>
			<!-- CAR BRAND -->
			<div class="input-group mb-3">
				<span class="input-group-text">FIRSTNAME</span>
				<input type="text" class="form-control" name="Firstname" aria-label="Product Name"  value="<?php echo $_GET['Firstname']?>" readonly>				
			</div>

            <div class="input-group mb-3">
				<span class="input-group-text">LASTNAME</span>
				<input type="text" class="form-control" name="Lastname" aria-label="Product Name"  value="<?php echo $_GET['Lastname']?>" readonly>				
			</div>

            <div class="input-group mb-3">
				<span class="input-group-text">PHONE</span>
				<input type="text" class="form-control" name="Phone" aria-label="Product Name"  value="<?php echo $_GET['Phone']?>" readonly>				
			</div>
			
            <div class="input-group mb-3">
				<span class="input-group-text">GOODS</span>
				<input type="text" class="form-control" name="Goods" aria-label="Product Name"  value="<?php echo $_GET['Goods']?>" readonly>				
			</div>

            <div class="input-group mb-3">
				<span class="input-group-text">AMOUNT</span>
				<input type="text" class="form-control" name="Amount" aria-label="Product Name"  value="<?php echo $_GET['Amount']?>" readonly>				
			</div>
			<!-- GAS TYPE -->
			
			<div class="input-group mb-3">
				<span class="error" style="color: red;"><?php echo $error; ?></span>
			</div>
			
			<a href="index.php"><button type="button" class="btn btn-secondary">HOME</button></a>
			<input type="submit" name="submit" class="btn btn-secondary" value="DELETE">
		</form>
	</div>
	<div class="col-3">
		</div>
</div>

<?php include("template/footer.php"); ?>