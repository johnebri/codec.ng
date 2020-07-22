<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<meta name='keywords' content='Codec, E-learning,favourite courses' />
	<meta name='description' content='E-learning site, where registered students learn their favourite courses at their own pace' />


	<meta property="og:title" content="Codec | E-learning,favourite courses" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="">
	<meta property="og:url" content="" />
	<meta property="og:description" content="E-learning site, where registered students learn there favourite courses at their own pace" />

	<meta name="twitter:card" content="">
	<meta name="twitter:site" content="">
	<meta name="twitter:creator" content="">
	<meta name="twitter:url" content="">
	<meta name="twitter:title" content="Codec | E-learning,favourite courses">
	<meta name="twitter:description" content="E-learning site, where registered students learn there favourite courses at their own pace">
	<meta name="twitter:image" content="">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- Slick -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick-theme.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick.css" />



	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<title>Codec | E-learning</title>
</head>

<body id="home">
	<!-- SPINNER -->
	<div class="loader">
		<div class="sk-cube-grid">
			<div class="sk-cube sk-cube1"></div>
			<div class="sk-cube sk-cube2"></div>
			<div class="sk-cube sk-cube3"></div>
			<div class="sk-cube sk-cube4"></div>
			<div class="sk-cube sk-cube5"></div>
			<div class="sk-cube sk-cube6"></div>
			<div class="sk-cube sk-cube7"></div>
			<div class="sk-cube sk-cube8"></div>
			<div class="sk-cube sk-cube9"></div>
		</div>
	</div>
	<!-- HEADER SECTION -->
  <?php 
    if ($this->input->cookie('userId', true) != '') {
      include('fragments/std_online_header.php');
    } else {
      include('fragments/std_offline_header.php');
    }
  ?>
  
	

	<!--HERO BACKGROUD SECTION-->
	<section id="hero" class="hero">
		<div class="container-fluid p-0 m-0">
			<div class="hero__bg">
				<div class="row">
					<div class="col-lg-6 col-sm-12 mb-5">
						<div class="hero__body pl-2">
							<h1 class="hero__header">Lorem Ipsum</h1>
							<p class="hero-text">
								<span class="hero__green mr-1">Lorem ipsum dolor</span>sit amet consectetur adipisicing elit. Eligendi, iste.
							</p>
							<a href="#?role=student">
								<button class="signup__btn btn btn-success px-5 mt-3 py-2" data-target="#signupModal" data-toggle="modal">Sign up now</button>
							</a>
						</div>
					</div>
					<div class="col-lg-6 col-sm-12 hero__courses text-center">

						<div class="row px-1">
							<div class="col-sm-1-12 hero__courses-item tech mr-3 mb-3">
								<div class="card">
									<div class="card-body">
										<a href="#"><i class="fa fa-laptop" aria-hidden="true"></i></a>
										<p class="hero__courses-text text-dark"> Technology </p>
									</div>
								</div>
							</div>
							<div class="col-xs-1-12 hero__courses-item lang mr-3 mb-3">
								<div class="card">
									<div class="card-body">
										<a href="#"><i class="fa fa-language" aria-hidden="true"></i></a>
										<p class="hero__courses-text text-dark"> Language </p>
									</div>
								</div>
							</div>
							<div class="col-xs-1-12 hero__courses-item sci mb-3">
								<div class="card">
									<div class="card-body">
										<a href="#"><i class="fas fa-flask" aria-hidden="true"></i></a>
										<p class="hero__courses-text text-dark"> Science</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row px-1">
							<div class="col-xs-1-12 hero__courses-item health mr-3 mb-3">
								<div class="card">
									<div class="card-body">
										<a href="#"><i class="fa fa-heartbeat" aria-hidden="true"></i></a>
										<p class="hero__courses-text text-dark"> Health</p>
									</div>
								</div>
							</div>
							<div class="col-xs-1-12 hero__courses-item bus mr-3 mb-3">
								<div class="card">
									<div class="card-body">
										<a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i></a>
										<p class="hero__courses-text text-dark"> Business</p>
									</div>
								</div>
							</div>
							<div class="col-xs-1-12 hero__courses-item math mr-3 mb-3">
								<div class="card">
									<div class="card-body">
										<a href="#"><i class="fas fa-square-root-alt" aria-hidden="true"></i></a>
										<p class="hero__courses-text text-dark"> Math</p>
									</div>
								</div>
							</div>
						</div>

						<div class="row px-1">
							<div class="col-xs-1-12 hero__courses-item market mr-3">
								<div class="card">
									<div class="card-body">
										<a href="#"><i class="fa fa-bullseye" aria-hidden="true"></i></a>
										<p class="hero__courses-text text-dark"> Marketing</p>
									</div>
								</div>
							</div>
							<div class="col-xs-1-12 hero__courses-item life mr-3">
								<div class="card">
									<div class="card-body">
										<a href="#"><i class="fas fa-pray" aria-hidden="true"></i></a>
										<p class="hero__courses-text text-dark">Lifestyle</p>
									</div>
								</div>
							</div>
							<div class="col-xs-1-12 hero__courses-item human mr-3">
								<div class="card">
									<div class="card-body">
										<a href="#"><i class="fa fa-universal-access" aria-hidden="true"></i></a>
										<p class="hero__courses-text text-dark">Humanities</p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<!--COURSES SECTION-->
	<section class="courses mt-5 w-100" id="courses">

		<div class="courses__type text-center w-100">
			<ul class="nav nav-tabs " id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link hvr-left text-dark" id="trending-tab" data-toggle="tab" href="#trending" role="tab" aria-controls="trending" aria-selected="true">Trending Courses</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark hvr-left" id="popular-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="false">Most Popular Courses</a>
				</li>
				<li class="nav-item">
					<a class="nav-link hvr-left text-dark" id="recent-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="false">Most Recent Courses</a>
				</li>
			</ul>
			<div class="courses__bg py-2">
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="trending" role="tabpanel" aria-labelledby="trending-tab">
						<div class="container-fluid">
							<div class="row mb-4">

								<?php
								$query = $this->db->get('courses');
								$query = $this->db->query("
            SELECT *
            FROM courses ORDER BY course_id DESC
        ");
								$count = $this->db->affected_rows();
								if ($count > 0) {
									$res = $query->result_array();
									foreach ($res as $course) {
										echo '

            <div class="courses-item-1">
              <div class="card">
                <img src="https://source.unsplash.com/Oalh2MojUuk/250x160" class="img-fluid">
                <div class="card-body">
                <div class="card-buttons text-left">
                  <span class="badge badge-dark"></span>
                  <span class="badge badge-danger"></span>
                </div>
                <p class="card-text mt-3 mb-5">' . $course['course_title'] . '</p>
                <a href="' . base_url() . 'course/' . $course['course_id'] . '" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
                </div>
              </div>
              <div class="card2">
                <span class="courses-social-icons">
                <i class="fa fa-heart icon-item" aria-hidden="true"></i>
                <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
                <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
                <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
                </span>
                <div class="card-body">
                <h5 class="card-title h6">Course Description</h5>
                <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i>' . $course['course_title'] . '</h5>
                <p class="card-text small">' . $course['course_description'] . '</p>
                <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
                  aria-hidden="true"></i></a>

                </div>
              </div>
              </div>';
									}
								} else {
									// there are no course
									echo '<h4>There are no courses yet</h4>';
								}
								?>


								<!-- <div class="courses-item-1">
         <div class="card">
          <img src="https://source.unsplash.com/hIgeoQjS_iE/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Diploma</span>
            <span class="badge badge-success">Health</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Diploma in Health Studies</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>

        </div> -->
								<!-- <div class="courses-item-1">
         <div class="card">
          <img src="https://source.unsplash.com/SYTO3xs06fU/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Certificate</span>
            <span class="badge badge-secondary">Business</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Certificate in Business</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div> -->
								<!-- <div class="courses-item-1">
         <div class="card">
          <img src="https://source.unsplash.com/QckxruozjRg/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Certificate</span>
            <span class="badge badge-secondary">Business</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Certificate in Business</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>

        </div> -->
							</div>
							<!-- <div class="row mb-4">
        <div class="courses-item-2">
         <div class="card">
          <img src="https://source.unsplash.com/Nwl7dtZLmlc/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Diploma</span>
            <span class="badge badge-success">Humanities</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Diploma in Humanities</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-2">
         <div class="card">
          <img src="https://source.unsplash.com/KV9F7Ypl2N0/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Diploma</span>
            <span class="badge badge-danger">Language</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Diploma in Language</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-2">
         <div class="card">
          <img src="https://source.unsplash.com/QBpZGqEMsKg/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Certificate</span>
            <span class="badge badge-primary">IT</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Certificate in IT</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-2">
         <div class="card">
          <img src="https://source.unsplash.com/mpN7xjKQ_Ns/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Certificate</span>
            <span class="badge badge-secondary">Business</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Certificate in Business</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
       </div> -->
							<!-- <div class="row mb-4">
        <div class="courses-item-3">
         <div class="card">
          <img src="https://source.unsplash.com/vMV6r4VRhJ8/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Diploma</span>
            <span class="badge badge-danger">Marketing</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Diploma in Marketing</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-3">
         <div class="card">
          <img src="https://source.unsplash.com/KE0nC8-58MQ/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Certificate</span>
            <span class="badge badge-primary">IT</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Certificate in IT</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-3">
         <div class="card">
          <img src="https://source.unsplash.com/i5nMmbr8JYg/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Diploma</span>
            <span class="badge badge-danger">Language</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Diploma in Language</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-3">
         <div class="card">
          <img src="https://source.unsplash.com/5QgIuuBxKwM/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Certificate</span>
            <span class="badge badge-secondary">Business</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Certificate in Business</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
       </div> -->
						</div>
					</div>
					<!-- <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="popular-tab">
      <div class="container-fluid">
       <div class="row mb-4">
        <div class="courses-item-2">
         <div class="card">
          <img src="https://source.unsplash.com/Nwl7dtZLmlc/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Diploma</span>
            <span class="badge badge-success">Humanities</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Diploma in Humanities</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-2">
         <div class="card">
          <img src="https://source.unsplash.com/KV9F7Ypl2N0/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Diploma</span>
            <span class="badge badge-danger">Language</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Diploma in Language</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-2">
         <div class="card">
          <img src="https://source.unsplash.com/QBpZGqEMsKg/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Certificate</span>
            <span class="badge badge-primary">IT</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Certificate in IT</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-2">
         <div class="card">
          <img src="https://source.unsplash.com/mpN7xjKQ_Ns/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Certificate</span>
            <span class="badge badge-secondary">Business</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Certificate in Business</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
       </div>
       <div class="row mb-4">
        <div class="courses-item-3">
         <div class="card">
          <img src="https://source.unsplash.com/vMV6r4VRhJ8/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Diploma</span>
            <span class="badge badge-danger">Marketing</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Diploma in Marketing</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-3">
         <div class="card">
          <img src="https://source.unsplash.com/KE0nC8-58MQ/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Certificate</span>
            <span class="badge badge-primary">IT</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Certificate in IT</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-3">
         <div class="card">
          <img src="https://source.unsplash.com/i5nMmbr8JYg/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Diploma</span>
            <span class="badge badge-danger">Language</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Diploma in Language</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-3">
         <div class="card">
          <img src="https://source.unsplash.com/5QgIuuBxKwM/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Certificate</span>
            <span class="badge badge-secondary">Business</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Certificate in Business</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
       </div>
       <div class="row mb-4">
        <div class="courses-item-1">
         <div class="card">
          <img src="https://source.unsplash.com/Oalh2MojUuk/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Diploma</span>
            <span class="badge badge-danger">Marketing</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Diploma in Marketing</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-1">
         <div class="card">
          <img src="https://source.unsplash.com/hIgeoQjS_iE/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Diploma</span>
            <span class="badge badge-success">Health</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Diploma in Health Studies</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>

        </div>
        <div class="courses-item-1">
         <div class="card">
          <img src="https://source.unsplash.com/SYTO3xs06fU/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Certificate</span>
            <span class="badge badge-secondary">Business</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Certificate in Business</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-1">
         <div class="card">
          <img src="https://source.unsplash.com/QckxruozjRg/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Certificate</span>
            <span class="badge badge-secondary">Business</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Certificate in Business</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>

        </div>
       </div>
      </div>
     </div> -->
					<!-- <div class="tab-pane fade" id="recent" role="tabpanel" aria-labelledby="recent-tab">
      <div class="container-fluid">
       <div class="row mb-4">
        <div class="courses-item-3">
         <div class="card">
          <img src="https://source.unsplash.com/vMV6r4VRhJ8/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Diploma</span>
            <span class="badge badge-danger">Marketing</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Diploma in Marketing</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-3">
         <div class="card">
          <img src="https://source.unsplash.com/KE0nC8-58MQ/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Certificate</span>
            <span class="badge badge-primary">IT</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Certificate in IT</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-3">
         <div class="card">
          <img src="https://source.unsplash.com/i5nMmbr8JYg/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Diploma</span>
            <span class="badge badge-danger">Language</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Diploma in Language</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-3">
         <div class="card">
          <img src="https://source.unsplash.com/5QgIuuBxKwM/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Certificate</span>
            <span class="badge badge-secondary">Business</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Certificate in Business</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
       </div>
       <div class="row mb-4">
        <div class="courses-item-2">
         <div class="card">
          <img src="https://source.unsplash.com/Nwl7dtZLmlc/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Diploma</span>
            <span class="badge badge-success">Humanities</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Diploma in Humanities</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-2">
         <div class="card">
          <img src="https://source.unsplash.com/KV9F7Ypl2N0/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Diploma</span>
            <span class="badge badge-danger">Language</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Diploma in Language</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-2">
         <div class="card">
          <img src="https://source.unsplash.com/QBpZGqEMsKg/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Certificate</span>
            <span class="badge badge-primary">IT</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Certificate in IT</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-2">
         <div class="card">
          <img src="https://source.unsplash.com/mpN7xjKQ_Ns/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Certificate</span>
            <span class="badge badge-secondary">Business</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Certificate in Business</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
       </div>
       <div class="row mb-4">
        <div class="courses-item-1">
         <div class="card">
          <img src="https://source.unsplash.com/Oalh2MojUuk/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Diploma</span>
            <span class="badge badge-danger">Marketing</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Diploma in Marketing</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-1">
         <div class="card">
          <img src="https://source.unsplash.com/hIgeoQjS_iE/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Diploma</span>
            <span class="badge badge-success">Health</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Diploma in Health Studies</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>

        </div>
        <div class="courses-item-1">
         <div class="card">
          <img src="https://source.unsplash.com/SYTO3xs06fU/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Certificate</span>
            <span class="badge badge-secondary">Business</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Certificate in Business</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>
        </div>
        <div class="courses-item-1">
         <div class="card">
          <img src="https://source.unsplash.com/QckxruozjRg/250x160" class="img-fluid">
          <div class="card-body">
           <div class="card-buttons text-left">
            <span class="badge badge-dark">Certificate</span>
            <span class="badge badge-secondary">Business</span>
           </div>
           <p class="card-text mt-3 mb-5">Lorem Ipsum Dolor.</p>
           <a href="#" class="btn btn-md px-5 btn-primary mt-3">Start Now</a>
          </div>
         </div>
         <div class="card2">
          <span class="courses-social-icons">
           <i class="fa fa-heart icon-item" aria-hidden="true"></i>
           <i class="fa fa-facebook icon-item" aria-hidden="true"></i>
           <i class="fa fa-twitter icon-item" aria-hidden="true"></i>
           <i class="fa fa-linkedin icon-item" aria-hidden="true"></i>
          </span>
          <div class="card-body">
           <h5 class="card-title h6">Certificate in Business</h5>
           <h5 class="card-title h6 mt-4"> <i class="fa fa-home" aria-hidden="true"></i> Lorem Ipsum</h5>
           <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex corrupti veritatis
            placeat? Commodi, dolorem consequatur.</p>
           <a href="#" class="nav-link">More Information <i class="ml-1 fa fa-question question"
             aria-hidden="true"></i></a>

          </div>
         </div>

        </div>
       </div>
      </div>
     </div> -->
				</div>
				<div class="morebtn pb-5">
					<button class="mt-3 px-4 btn btn-md btn-primary">More Courses</button>
				</div>
			</div>
		</div>

	</section>

	<!-- COUNTER SECTION -->
	<section class="counter__bg" id="counter__bg">
		<div class="container m-auto counter__items text-center">
			<div class="learner text-light">
				<i class="fas fa-user-friends"></i>
				<span class="counter">13</span>
				<p class="counter-text">Lorem Ipsum</p>
			</div>
			<div class="graduates text-light">
				<i class="fa fa-graduation-cap" aria-hidden="true"></i>
				<span class="counter">2</span>
				<p class="counter-text">Lorem Ipsum</p>
			</div>
			<div class="course text-light">
				<i class="fas fa-book-open    "></i>
				<span class="counter">1000</span>
				<p class="counter-text">Lorem Ipsum</p>
			</div>
			<div class="countries text-light">
				<i class="fas fa-globe" aria-hidden="true"></i>
				<span class="counter">195</span>
				<p class="counter-text">Lorem Ipsum</p>
			</div>
		</div>
	</section>

	<!-- TESTIMONIAL SECTION -->
	<section class="stories">
		<div class="slider review padding-one">
			<div class="review__stories">
				<figure class="stories__shape">
					<img src="https://res.cloudinary.com/osdev/image/upload/v1570362578/befitassets/img/customer1_utnvds.png" alt="" class="rounded-circle">
				</figure>
				<div class="stories__text">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim rem commodi iste praesentium incidunt
						consectetur suscipit laboriosam quo omnis.
						<span class="stories__name text-center">Timothy Keller</span>
					</p>
				</div>
			</div>
			<div class="review__stories">
				<figure class="stories__shape">
					<img src="https://res.cloudinary.com/osdev/image/upload/v1570362584/befitassets/img/customer2_jkw9bn.png" alt="" class="rounded-circle">
				</figure>
				<div class="stories__text opacify">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim rem commodi iste praesentium incidunt
						consectetur suscipit laboriosam quo omnis.
						<span class="stories__name text-center margin-top-md">Mary Jane</span>
					</p>
				</div>
			</div>
			<div class="review__stories">
				<figure class="stories__shape">
					<img src="https://res.cloudinary.com/osdev/image/upload/v1570362588/befitassets/img/customer3_vozygg.png" alt="" class="rounded-circle">
				</figure>
				<div class="stories__text opacify">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim rem commodi iste praesentium incidunt
						consectetur suscipit laboriosam quo omnis.
						<span class="stories__name text-center margin-top-md">Peter Parker</span>
					</p>
				</div>
			</div>
		</div>

	</section>

	<!-- LEARN MORE SECTION -->
	<section class="learnmore" id="learnmore">
		<div class="container-fluid text-center">
			<div class="support-1">
				<img src="img/cambridge.png" alt="">
				<img src="img/columbia.png" alt="">
				<img src="img/google.png" alt="">
				<img src="img/microsoft.png" alt="">
			</div>
			<div class="learmore__header text-light">
				<h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, iste.</h2>
				<button class="btn btn-lg btn-success px-3 mt-3">Start Learning Now!</button>
			</div>
			<div class="support-2">
				<img src="img/mit.png" alt="">
				<img src="img/openstax.png" alt="">
				<img src="img/saylor.png" alt="">
				<img src="img/stanford.png" alt="">
			</div>
		</div>
	</section>

	<!-- FOOTER SECTION -->
	<section id="footer" class="footer w-100">
		<a href="#home" class="text-light">
			<span class="footer__go-up text-light">
				<i class="fa fa-angle-up arrow-up" aria-hidden="true"></i>
			</span>
		</a>
		<footer class="footer section-padding">
			<div class="navigation__container w-100">
				<div class="footer__navigation">
					<img src="<?php echo base_url(); ?>assets/img/footer-triangles.png" alt="footer bg" class="footer__bg">
					<div class="container">
						<div class="nav-container">
							<h6 class="footer__header one">ABOUT CODEC
								<hr>
							</h6>
							<ul class="footer__links">
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum lolo</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum</a>
								</li>
							</ul>
						</div>
						<div class="nav-container">
							<h6 class="footer__header three">LEARNING
								<hr>
							</h6>
							<ul class="footer__links">
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum </a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum </a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum </a>
								</li>

							</ul>
						</div>
						<div class="nav-container">
							<h6 class="footer__header two">MORE
								<hr>
							</h6>
							<ul class="footer__links">
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum</a>
								</li>
							</ul>
						</div>
						<div class="nav-container">
							<h6 class="footer__header four">CONNECT
								<hr>
							</h6>
							<ul class="footer__links">
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="fa fa-facebook" aria-hidden="true"></i><span class="ml-2">Facebook </span>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="fa fa-instagram" aria-hidden="true"></i><span class="ml-2">Instagram</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="fa fa-twitter" aria-hidden="true"></i><span class="ml-2">Twitter</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="fa fa-linkedin" aria-hidden="true"></i><span class="ml-2"> Linkedin </span>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="fa fa-envelope" aria-hidden="true"></i><span class="ml-2">Customer Support</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer__copyright text-light py-3">

					<ul class="copyright__links">
						<h5 class="title">CODEC</h5>
						<li class="nav-item">
							<a href="#" class="nav-link">
								&copy; Codec 2019
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								Privacy
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								Terms
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								Cookie Policy
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								Sitemap
							</a>
						</li>
					</ul>
				</div>
			</div>
		</footer>
	</section>


	<?php include 'fragments/modals.php'; ?>

	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script src=" https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>

	<script src="<?php echo base_url(); ?>assets/js/plugin.js"></script>
	</script>
</body>

</html>
