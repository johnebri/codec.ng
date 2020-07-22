<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password || Codac.ng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/change_password.css">
</head>

<body>
    <main>
        <section class="container">
        <?php include_once "fragments/dashboard_header.php" ?>
            <section class="wrapper">
                <?php include_once "fragments/dashboard_sidebar.php" ?>
                <section class="main_board">	

                    <form method="post" action="<?php echo base_url(); ?>admin/changePasswordAction">
						<h3>Change your password</h3>
						
						<?php
							if(isset($errors)) {
								foreach($errors as $error) {
									echo '<p style="color: red; text-align: center;">'.$error.'</p>';
								}
							}
							if(isset($success)) {
								echo '<p style="color: red; text-align: center;">Password updated successfully</p>';
							}
							if(isset($changePasswordError)) {
								echo '<p style="color:red; text-align: center;">Error! Please try again</p>';
							}
						?>

                        <div class="form-group">
                            <label for="old_password">Old Password:</label>
                            <input type="password" name="oldPassword" placeholder="Enter your old password" required>
                        </div>
                        <div class="form-group">
                            <label for="new_password">New Password:</label>
                            <input type="password" name="newPassword" placeholder="Enter a new password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm_new_password">Comfrim New Password:</label>
                            <input type="password" name="confirmNewPassword" placeholder="Confirm your new password" required>
                        </div>
                        <button type="submit">Change Pasword</button>
                    </form>
                </section>
            </section>
        </section>
        </section>

    </main>
</body>
<script src="<?php echo base_url(); ?>assets/admin/js/dashboard.js"></script>

</html>
