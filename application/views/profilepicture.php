<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name='keywords' content='Codac, E-learning,favourite courses' />
	<meta name='description' content='E-learning site, where registered students learn their favourite courses at their own pace' />
	<meta property="og:title" content="Codac | E-learning,favourite courses" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="">
	<meta property="og:url" content="" />
	<meta property="og:description" content="E-learning site, where registered students learn there favourite courses at their own pace" />
	<meta name="twitter:card" content="">
	<meta name="twitter:site" content="">
	<meta name="twitter:creator" content="">
	<meta name="twitter:url" content="">
	<meta name="twitter:title" content="Codac | E-learning,favourite courses">
	<meta name="twitter:description" content="E-learning site, where registered students learn there favourite courses at their own pace">
	<meta name="twitter:image" content="">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nav.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/studentdashboard.css">
	<title>Codac | Profile Picture</title>

	<script>
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
				$('#prevImg')
					.attr('src', e.target.result);
				};

				reader.readAsDataURL(input.files[0]);
			}
		}
	</script>

</head>

<body>
	<!-- HEADER SECTION -->
	<section id="topnav" class="topnav">
		<div class="topnav__container">
			<div class="topnav__bg">
				<div class="group-1">
					<div class="topnav__logo">
						<a href="index.php" class="navbar-brand">
							<img src="<?php echo base_url(); ?>assets/img/codaclogo.png" alt="codac logo" style="width: 44px;"></a>
					</div>
					<div class="form-group form__search m-0">
						<form class="form-inline my-2 my-lg-0" id="searchcourse">
							<input maxlength="200" autocomplete="off" placeholder="Search for courses" id="autocomplete" name="search" type="text" class="form-control form-control-lg topnav__search">
							<button class="topnav__search-btn btn btn-primary">
								<i class="fa fa-search" aria-hidden="true"></i>
							</button>
						</form>
					</div>
				</div>
				<div class="group-2">
					<div class="topnav__links">
						<ul class="topnav__links-container">
							<li class="toggle-1">
								<a class="text-light" href="javascript:void(0)">Lorem</a>
								<i class="fa fa-angle-down" aria-hidden="true"></i>
								<i class="fa fa-angle-up" aria-hidden="true"></i>
							</li>
							<li class="ml-3 toggle-2">
								<a class="text-light" href="javascript:void(0)">Lorem Ips</a>
								<i class="fa fa-angle-down" aria-hidden="true"></i>
								<i class="fa fa-angle-up" aria-hidden="true"></i>
							</li>
							<li class="ml-3 toggle-3">
								<a class="text-light" href="javascript:void(0)">Lorem</a>
								<i class="fa fa-angle-down" aria-hidden="true"></i>
								<i class="fa fa-angle-up" aria-hidden="true"></i>
							</li>
						</ul>
					</div>
					<div class="auth">
						<span class="user__pic">
							<img src="<?php echo base_url(); ?>assets/img/user.png" alt="user" style="width: 30px;" class="user__image">
						</span>
						<div class="notification">
							<i class="fa fa-bell-o" aria-hidden="true"></i>
						</div>
						<div class="dropleft mr-2">
							<div class="cart" id="cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-cart-plus" aria-hidden="true"></i>
							</div>
							<ul class="dropdown-menu pt-5 px-5" aria-labelledby="cart">
								<hr>
								<p class="cart-message">
									You have nothing in your cart.Why not add something?
								</p>
								<a href="#">
									<button class="btn btn-md btn__button">Shop</button>
								</a>
							</ul>
						</div>
						<div class="language__select">
							<span class="abbriev">en</span>
							<i class="fa fa-globe" aria-hidden="true"></i>
						</div>
						<!-- LANGUAGE DROPDOWN -->
						<div class="language__globe">
							<ul>
								<li><a href="#">English</a></li>
								<li><a href="#">Spanish</a></li>
								<li><a href="#">French</a></li>
								<li><a href="#">Italian</a></li>
								<li><a href="#">Brazilian Portugese</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="dropdown-1">
				<span class="technology"> <a href="#"><i class="fa fa-laptop" aria-hidden="true"></i></a>
					<p class="hero__courses-text text-dark"> Technology </p>
				</span>
				<span class="language"> <a href="#"><i class="fa fa-language" aria-hidden="true"></i></a>
					<p class="hero__courses-text text-dark"> Language </p>
				</span>
				<span class="science"> <a href="#"><i class="fas fa-flask" aria-hidden="true"></i></a>
					<p class="hero__courses-text text-dark"> Science</p>
				</span>
				<span class="heartbeat"><a href="#"><i class="fa fa-heartbeat" aria-hidden="true"></i></a>
					<p class="hero__courses-text text-dark"> Health</p>
				</span>
				<span class="business"><a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i></a>
					<p class="hero__courses-text text-dark"> Business</p>
				</span>
				<span class="mathematics"> <a href="#"><i class="fas fa-square-root-alt" aria-hidden="true"></i></a>
					<p class="hero__courses-text text-dark"> Math</p>
				</span>
				<span class="marketing"><a href="#"><i class="fa fa-bullseye" aria-hidden="true"></i></a>
					<p class="hero__courses-text text-dark"> Marketing </p>
				</span>
				<span class="lifestyle"> <a href="#"><i class="fas fa-pray" aria-hidden="true"></i></a>
					<p class="hero__courses-text text-dark"> Lifestyle </p>
				</span>
				<span class="humanities"><a href="#"><i class="fa fa-universal-access" aria-hidden="true"></i></a>
					<p class="hero__courses-text text-dark"> Humanities </p>
				</span>
				<span class="allapp"><a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
					<p class="hero__courses-text text-dark"> All Categories </p>
				</span>
			</div>
			<div class="dropdown-2">
				<span>
					<a href="#"><i class="fa fa-certificate" aria-hidden="true"></i>
					</a>
					<p class="hero__courses-text text-dark"> Certificate Courses</p>
				</span>
				<span> <a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i></a>
					<p class="hero__courses-text text-dark"> Diploma Courses </p>
				</span>
				<span> <a href="#"><i class="fas fa-wave-square" aria-hidden="true"></i></a>
					<p class="hero__courses-text text-dark"> Learning Paths</p>
				</span>
			</div>
			<div class="dropdown-3">
				<span> <a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i></a>
					<p class="hero__courses-text text-dark"> Get Career Skills and Guidance</p>
				</span>
				<span> <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
					<p class="hero__courses-text text-dark"> Find Courses for Specific Jobs</p>
				</span>
			</div>
		</div>
	</section>
	<aside class="user_menu">
		<i class="fa fa-caret-up" aria-hidden="true"></i>
		<div class="user_details">
			<img src="<?php echo base_url(); ?>assets/img/user.png" alt="">
			<div class="user_btn">
				<p class="name"><?php echo $this->input->cookie('fullname',true); ?></p>
				<a href="#">
					<button class="btn btn-danger">View Profile</button>
				</a>
			</div>
		</div>
		<div class="actions">
			<p><a href="#"><i class="far fa-play-circle"></i>Resume Study</a></p>
			<p><a href="#"><i class="fa fa-user"></i>My Dashboard</a></p>
			<p><a href="#"><i class="fa fa-cog"></i>Account Settings</a></p>
			<p><a href="#"><i class="fa fa-question-circle"></i>Help</a></p>
			<p><i class="fa fa-power-off"></i><a href="<?php echo base_url(); ?>logout">Logout</a></p>
		</div>
	</aside>
	<!-- DASHBOARD SECTION -->
	<section class="dashboard">
		<!-- SIDE BAR -->
		<?php include('fragments/student_profile_sidebar.php'); ?>
		<!-- DASHBOARD WIDGET -->
		<!-- <div class="dashboard__widget widget">
			<div class="dashboard__widget-card">
				<div class="dashboard__widget-card-header">
					<h5>Courses in Progress</h5>
				</div>
				<div class="dashboard__widget-card-body">
					<h5 class="course-num">0</h5>
					<a href="#" class="p-2">
						Complete your Courses
					</a>
				</div>
			</div>
			<div class="dashboard__widget-card">
				<div class="dashboard__widget-card-header">
					<h5>Completed Courses</h5>
				</div>
				<div class="dashboard__widget-card-body">
					<p>Keep learning and become an Codac Graduate!</p>
					<a href="#" class="p-2">
						Resume Study
					</a>
				</div>
			</div>
			<div class="dashboard__widget-card">
				<div class="dashboard__widget-card-header">
					<h5>My Certificates</h5>
				</div>
				<div class="dashboard__widget-card-body">
					<p>You have no Certificates yet. Purchase a Certificate to see it here</p>
					<a href="#" class="p-2">
						Resume Study
					</a>
				</div>
			</div>
			<div class="dashboard__widget-card">
				<div class="dashboard__widget-card-header">
					<h5>Goals and Achievement</h5>
				</div>
				<div class="dashboard__widget-card-body">
					<p>No Medal Yet</p>
					<a href="#" class="p-2">
						View Goals & Medals
					</a>
				</div>
			</div>
			<div class="dashboard__widget-card">
				<div class="dashboard__widget-card-header">
					<h5>Study Hours</h5>
				</div>
				<div class="dashboard__widget-card-body">
					<h4>0</h4>
					<h6>Hours Used</h6>
				</div>
			</div>
		</div> -->
		<!-- PROFILE WIDGET -->
		<div class="profile__widget widget">
			<h1 class="display-4 text-center">Profile Picture</h1>
			<?php
				if(isset($_GET["success"])) {
					echo '
					<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<strong>Great! </strong> Profile Picture saved successfully
					</div>';
				}

				if(isset($error)) {
					echo '
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<strong>Opps! </strong> An error has occurred. Please try again
					</div>';
				}

				if(isset($imageError)) {
					echo '
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<strong>Opps! </strong> '.$imageError.'
					</div>';
				}
			?>
			<form action="<?php echo base_url(); ?>uploadPictureAction" method="post" enctype="multipart/form-data">

				<div class="form-group form-bg">

					<?php
						$query = $this->db->get_where('users', array("user_id" => $this->input->cookie('userId', true)) );
						$res = $query->result_array();
						foreach($res as $user) {
							$image = $user['image'];
						}

						if($image != '') {
							// there is an image
							echo '<img src="'.base_url().'assets/img/profile-pictures/'.$image.'" id="prevImg">';
						} else {
							// there is no image
							echo '<img src="'.base_url().'assets/img/no-image.jpg" id="prevImg">';
						}
					?>

					

					<br>

					<input type="file" class="form-control" name="profilePicture" onchange="readURL(this)" />

				</div>

				<div class="form-details form-bg">
					<button type="submit" class="btn btn-primary">Save </button>
				</div>

			</form>

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
							<h6 class="footer__header one">ABOUT CODAC
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
						<h5 class="title">CODAC</h5>
						<li class="nav-item">
							<a href="#" class="nav-link">
								&copy; CODAC 2019
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

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/nav.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/studentdash.js"></script>

</body>

</html>
