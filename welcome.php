<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: index.php');
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="stylewlcome.css">
	<style>
	
	.header {
	width: 80%;
	margin: 50px auto 0px;
	color: white;
	background: green;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}

.content {
	width: 80%;
	margin: 0px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;
}

.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}

.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
</style>
</head>
<body>

<div class="header">
	<h2>Index Page</h2>
</div>
<div class="content">
	<?php if (isset($_SESSION['success'])) : ?>
		<div class="error success">
			<h3>
				<?php 
					echo $_SESSION['success'];
					unset($_SESSION['success']);
				?>
			</h3>
		</div>
	<?php endif ?>

	<?php if (isset($_SESSION['username'])) : ?>
		<p>Welcome <strong><?php echo $_SESSION['username']; ?><strong></p>
		<p> <a href="index.php?logout='1'" style="color: red">logout</a></p>
	<?php endif ?>
</div>

</body>
</html>