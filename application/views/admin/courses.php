<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students || Codac.ng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/courses.css">
</head>

<body>
    <main>
        <section class="container">
		<?php include_once "fragments/dashboard_header.php" ?>
            <section class="wrapper">
                <?php include_once "fragments/dashboard_sidebar.php" ?>
                <section class="main_board">
                    <section class="search">
                        <form action="" id="search">
                           <div class="form-group">
                            <input type="text" name="search_value" placeholder="Search..." >
                        </div>
                        </form>
                    </section>
                  <section class="courses-container" id="courses-container">
                      <!-- <article class="course">
                          THIS IS A SAMPLE; ACTUAL DATA IS FROM JS FILE
                    <badge>${num}</badge>
                    <img src="./images/image.png" alt="course image">
                    <p class="course_title">${course.title}</p>
                    <p>By: <a >${course.aurthor}</a></p>
                    <a class="likes">likes: ${course.likes}</a>
                    <a class="subscribers">Sub: ${course.subscribers}</a>
                    </article> -->
                  </section>
                </section>
            </section>
        </section>

        </section>

    </main>
</body>
<script src="<?php echo base_url(); ?>assets/admin/js/dashboard.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/courses.js"></script>

</html>
