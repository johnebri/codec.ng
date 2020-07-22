<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile || Codac.ng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/profile.css">
</head>

<body>
    <main>
        <section class="container">
		<?php include_once "fragments/dashboard_header.php" ?>
            <section class="wrapper">
                <?php include_once "fragments/dashboard_sidebar.php" ?>
                <section class="main_board">
                    <section class="admin_profile_container">
                        <h3>Profile Details</h3>
                        <div class="admin_profile">
                            <div class="admin_profile_pix">
                                <img src="<?php echo base_url(); ?>assets/admin/images/user.png" alt="Admin Picture">
                            </div>
                            <div class="admin_profile_details">
                                <p><span>Name:</span><span>Phileo Maner</span></p>
                                <p><span>Email Address:</span><span>example@example.com</span></p>
                                <p><span>Home Address:</span><span>Jfk, Lekki Lagos Lagos</span></p>
                                <p><span>Nationality:</span><span>Nigeria</span></p>
                                <p><span>Gender:</span><span>Male</span></p>
                                <p><span>Role:</span><span>Super Admin</span></p>
                            </div>

                        </div>
                        <a href="setting.php">Update Profile</a>

                    </section>
                </section>
            </section>
        </section>
        </section>

    </main>
</body>
<script src="<?php echo base_url(); ?>assets/admin/js/dashboard.js"></script>

</html>
