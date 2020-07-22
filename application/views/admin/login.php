<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

	<div class="container">
			<div class="col-md-6 col-md-offset-3">
				<h2 style="text-align: center;">Admin Login</h2>
				<br><br>
				<?php 
					if(isset($loginError)) {
						echo '<p style="color:red;">Incorrect credentials</p>';
					}
				?>
				<form method="post" action="<?php echo base_url(); ?>admin/loginAction">
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
					</div>
					<br>
					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
					</div>
					<br>
					<p style="float: right;"><a href="<?php echo base_url(); ?>admin/forgotPassword">Forgot password</a></p>
					<button type="submit" class="btn btn-success">Login</button>
				</form>
			</div>
	</div>

</body>

</html>
