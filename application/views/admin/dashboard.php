<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard || Codac.ng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/dashboard.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <main>
        <section class="container">
            <?php include_once "fragments/dashboard_header.php" ?>
            <section class="wrapper">
                <?php include_once "fragments/dashboard_sidebar.php" ?>
                <section class="main_board">
                    <section class="intro">
                        <div class="intro_lead">
                            <h1>Welcome, <?php echo $this->session->userdata("fullname"); ?>!</h1>
                            <!-- <p>Last Login: Monday, 10th February, 2020 -10:20PM</p> -->
                        </div>
                    </section>
                    <!-- <section class="cards">
                        <div class="cards_body">
                            <a href="students.php"><i class="fa fa-user-graduate"></i></a>
                            <span>70</span>
                            <p>Registered Students</p>
                        </div>
                        <div class="cards_body">
                            <a href="tutors.php"><i class="fas fa-chalkboard-teacher"></i></a>
                            <span>7</span>
                            <p>Registered Tutors</p>
                        </div>
                        <div class="cards_body">
                            <a href="courses.php"><i class="fab fa-discourse"></i></a>
                            <span>16</span>
                            <p>Available Courses</p>
                        </div>
                        <div class="cards_body">
                            <a href="admins.php"><i class="fas fa-users-cog"></i></a>
                            <span>3</span>
                            <p>Registered Admins</p>
                        </div>
                    </section>
                </section> -->
            </section>
        </section>

    </main>
</body>
<script src="<?php echo base_url(); ?>assets/admin/js/dashboard.js"></script>
</html>
