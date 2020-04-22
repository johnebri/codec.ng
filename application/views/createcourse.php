<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <meta name='keywords' content='Codec, E-learning,favourite courses' />
 <meta name='description'
  content='E-learning site, where registered students learn there favourite courses at their own pace' />
 <meta property="og:title" content="Codec | E-learning,favourite courses" />
 <meta property="og:type" content="website" />
 <meta property="og:image" content="">
 <meta property="og:url" content="" />
 <meta property="og:description"
  content="E-learning site, where registered students learn there favourite courses at their own pace" />
 <meta name="twitter:card" content="">
 <meta name="twitter:site" content="">
 <meta name="twitter:creator" content="">
 <meta name="twitter:url" content="">
 <meta name="twitter:title" content="Codec | E-learning,favourite courses">
 <meta name="twitter:description"
  content="E-learning site, where registered students learn there favourite courses at their own pace">
 <meta name="twitter:image" content="">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/createcourse.css">
 <title>Codac | CREATE COURSE</title>
</head>

<body>
  <section class="header-nav">
   <div class="header-nav__bg">
    <span class="header-nav__toggle">
    <a href="index.html">
     <img src="<?php echo base_url(); ?>assets/img/codaclogo.png" alt="logo">
    </a>
    </span>
   </div>
   
  </section>

<section class="courseupload">
<h2>Upload a course</h2>
<p><a href="<?php echo base_url(); ?>dashboard"><button>Back to Dashboard</button></a></p>

<form class="mt-5 form" method="post" action="<?php echo base_url(); ?>createCourseAction">

<?php
  if(isset($_GET['success'])) {
    echo '<h3 style="color:green">Course Created Successfully</h3>';
  }
  if(isset($_GET['error'])) {
    echo '<h3 style="color:red">There was an error. Please try again</h3>';
  }
?>
 <!-- <div class="form-group">
   <input type="file" class="p-3 form-control-file" name="courseFile" id="exampleFormControlFile1" required>
 </div> -->
 <div class="form-group">
  <label for="title">Video URL</label>
   <input type="url" name="videoUrl" id="videoUrl" class="form-control form-control-lg" required>
 </div>
 <div class="form-group">
  <label for="title">Course Title</label>
   <input type="text" name="title" id="title" class="form-control form-control-lg" required>
 </div>
 <div class="form-group">
  <label for="description">Course Description</label>
  <textarea class="form-control" name="description" id="description" placeholder="Write about course..." required></textarea>
 </div>
 <input type="submit" value="Upload Course" class="py-3 btn btn-lg btn-block btn-outline-success">
</form>
</section>

<hr class="bottom-border">
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>

</html>
