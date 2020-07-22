<!DOCTYPE html>
<html lang="en">

<head>
	<title>Reset Password</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

	<div class="container">
			<div class="col-md-6 col-md-offset-3">
				<h2 style="text-align: center;">Reset Password</h2>
				<br><br>
				<?php 
					if(isset($errors)) {
						foreach($errors as $error) {
							echo '<p>'.$error.'</p>';
						}
					}
				?>
				<form method="post" action="<?php echo base_url(); ?>admin/resetPasswordAction">
					<?php 
						if(!isset($code)) {
							echo 'unauthorized access';
							exit();
						}
					?>
					<input type="hidden" name="code" value="<?php echo $code; ?>" />
					<div class="form-group">
						<label for="password">New Password:</label>
						<input type="password" class="form-control" id="password" placeholder="Enter New Password" name="password" required>
					</div>
					<br>
					<div class="form-group">
						<label for="confirmPassword">Confirm Password:</label>
						<input type="password" class="form-control" id="confirmPassword" placeholder="Confirm New Password" name="confirmPassword" required>
					</div>
					<br>
					<p style="float: right;"><a href="<?php echo base_url(); ?>admin/login">Login</a></p>
					<button type="submit" class="btn btn-success">Reset Password</button>
				</form>
			</div>
	</div>

</body>

</html>
