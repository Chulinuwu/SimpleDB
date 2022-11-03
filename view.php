<?php 
	$tab = "View";
	$error = "";
	

			include('link/connect.php');
		
	include('template/header.php');
?>
	<div class="row">
		<div class="col-3">
		</div>
	<div class="col-6">
		<h1>Department Store VIP Customers</h1>

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

			<div class="input-group mb-3">
				<span class="error" style="color: red;"><?php echo $error; ?></span>
			</div>			
			<a href="index.php"><button type="button" class="btn btn-secondary">HOME</button></a>
			<a href="edit.php"><button type="button" class="btn btn-secondary">BACK</button></a>
		</form>
	</div>
	<div class="col-3">
		</div>
</div>
	
<?php include("template/footer.php"); ?>