<!DOCTYPE html>
<html lang="en">

<head>
	<title>Forgot Password</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

	<div class="container">
			<div class="col-md-6 col-md-offset-3">
				<h2 style="text-align: center;">Forgot Password</h2>
				<br><br>
				<?php 
					if(isset($forgotPasswordError)) {
						echo '<p style="color:red;">Email does not exist</p>';
					}
					if(isset($_GET["emailSent"])) {
						echo '<p style="color:green;">Email Sent</p>';
					}
				?>
				<form method="post" action="<?php echo base_url(); ?>admin/forgotPasswordAction">
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
					</div>
					<br>
					<p style="float: right;"><a href="<?php echo base_url(); ?>admin/login">Login</a></p>
					<button type="submit" class="btn btn-success">Reset Password</button>
				</form>
			</div>
	</div>

</body>

</html>
