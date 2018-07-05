<?php 
	session_start();
	require '../Model/AddData.php';
	$firstname = $_SESSION['userData']['first_name'];
	$lastname = $_SESSION['userData']['last_name'];
	$email = $_SESSION['userData']['email'];	
	$dato = new AddData();	
	$dato->CreateBBDD();
	$dato->CreateTable();
	$dato->AddUser($firstname, $lastname, $email);
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="margin-top: 50px">
		<div class="row justify-content-center" >
			<div class="col-md-4 border border border-success col-md-offset-4" align="center"> 
				<br><h1>Thanks!</h1>			
				<img class="rounded-circle" src="<?php echo $_SESSION['userData']['picture']['url'] ?>">
				<h3><?php echo $firstname?> <?php echo $lastname?></h3>
				
				<h5> for joining us</h5>
				<h6>You profile was successfully loaded</h6>
				<br>
						
			</div>
		</div>
	</div>
</body>
</html>