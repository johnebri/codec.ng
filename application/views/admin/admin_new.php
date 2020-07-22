<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Admin|| Codac.ng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/admins.css"> -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/change_password.css">

</head>

<body>
    <main>
        <section class="container">
			<?php include_once "fragments/dashboard_header.php" ?>
            <section class="wrapper">
                <?php include_once "fragments/dashboard_sidebar.php" ?>
                <section class="main_board">
					<form method="post" action="<?php echo base_url(); ?>admin/newAdminAction">
                        <h3>Register a New Admin</h3>
						<?php
							if(isset($_GET["success"])) {
								echo '<p style="color:green;" class="form-group">Success. An email containing login credentials has been sent to the admin</p>';
							}
						?>
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" id="firstname" name="firstname" placeholder="Enter your old password" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" id="lastname" name="lastname" placeholder="Enter a new password" required>
						</div>
						<div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter a new password" required>
						</div>
						<div class="form-group">
                            <label for="role">Role</label>
                            <select id="role" name="role" required>
								<option value="">-- Select Role --</option>
								<option value="ROLE_ADMIN">ADMIN</option>
								<option value="ROLE_SUPER_ADMIN">SUPER_ADMIN</option>
							</select>
                        </div>
                        <button type="submit">Register</button>
                    </form>
                </section>
            </section>
        </section>
        </section>

    </main>
</body>
<script src="<?php echo base_url(); ?>assets/admin/js/admins.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/dashboard.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</html>
