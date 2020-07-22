<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setting || Codac.ng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/setting.css">

</head>

<body>
    <main>
        <section class="container">
        <?php include_once "fragments/dashboard_header.php" ?>
            <section class="wrapper">
                <?php include_once "fragments/dashboard_sidebar.php" ?>
                <section class="main_board">
                    <form action="">
                        <h3>Update Your Profile</h3>
                        <div class="form-group picture">
                            <img src="<?php echo base_url(); ?>assets/admin/images/user.png" alt="admin image">
                            <i class="fa fa-upload" id="upload"></i>
                            <input type="file" name="picture" id="admin_pix">
                        </div>
                        <div class="form-group">
                            <label for="fullname">Fullname:</label>
                            <input type="text" name="fullname" value="Phileo Maner">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address:</label>
                            <input type="text" name="email" value="example@emaple.com">
                        </div>
                        <div class="form-group">
                            <label for="address">Home Address:</label>
                            <input type="text" name="address" value="Jyk, Lekki Phase1,Lagos State">
                        </div>
                        <div class="form-group">
                            <label for="role">DoB:</label>
                            <input type="date" name="dob" value="20/05/1995">
                        </div>
                        <div class="form-group">
                            <label for="nationality">Nationality:</label>
                            <input type="text" name="nationality" value="Nigeria">
                        </div>
                        <div class="form-group">
                            <label for="role">Role:</label>
                            <input type="text" name="role" value="Super Admin">
                        </div>
                        <div class="form-group">
                            <label for="twitter">Twitter:</label>
                            <input type="text" name="twitter" value="@Phileomanuel">
                        </div>
                        <div class="form-group">
                            <label for="linkedin">LinkedIn:</label>
                            <input type="text" name="linkedin" value="@Phileomanuel">
                        </div>
                        <div class="form-group">
                            <label for="email">Gender:</label>
                            <input type="radio" value="Male" name="gender">Male <br>
                            <input type="radio" value="Female" name="gender">Female
                        </div>
                        <button>Update Profile</button>
                    </form>
                </section>
            </section>
        </section>
        </section>

    </main>
</body>
<script src="<?php echo base_url(); ?>assets/admin/js/dashboard.js"></script>
<script>
    let uploadPix = document.getElementById("upload");
    let inputpix = document.getElementById("admin_pix")
    uploadPix.addEventListener("click", ()=>{
       inputpix.style.width = "200px";
       inputpix.style.visibility = "visible";
    })
</script>
</html>
