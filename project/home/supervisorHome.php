<!DOCTYPE html>
<html>	
	<?php 
		include "../includes/navbar.php";
		include "../db_handler.php";
	?>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css?<?php echo time(); ?> /">
		<link rel="stylesheet" href="css/style1.css?<?php echo time(); ?> /">
		<link rel="stylesheet" href="css/tile.css?<?php echo time(); ?> /">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script> 
		<title>Home</title>
	</head>
	<body>
		<div class="container">
			<div class="wrapper">
			<h1>Welcome
			<?php 
				if (isset($_GET['id'])) {
					$user = mysqli_real_escape_string($conn, $_GET['id']);
					$sql = "SELECT * FROM users WHERE username = '$user'"; 
					$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
				
			        while($row = mysqli_fetch_array($result)) { 
			        	$name = $row['name'];
						echo " " . $name . " (Supervisor)";
					}
				}
			?>
		</h1>
		<hr>
		<div class="col-md-6"><h3>User Manegment</h3>
			<button type="button" class="btn btn-success"><a href="../prof/view-modules.php">View Modules</a></button>
			<button type="button" class="btn btn-primary"><a href="../supervisor/students-view.php">Assign Tutors</a></button>
			<button type="button" class="btn btn-warning"><a href="../supervisor/view-students.php">View Students</a></button>
		</div>
		</div>
	</body>
		<?php include "../includes/footer.php" ?>
	</div>
</html>

<style type="text/css">
	a, a:hover, a:active, a:visited { 
		color: white;
	}
</style>