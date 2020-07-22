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
	<title>Codec | Reset Password</title>
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
	<section id="topnav" class="topnav">
		<div class="topnav__container">
			<div class="topnav__bg">
				<div class="group-1">
					<div class="topnav__logo">
						<a href="#" class="navbar-brand text-light">Codec</a>
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
								<a class="text-light" href="#">Lorem Ipsum</a>
								<i class="fa fa-angle-down" aria-hidden="true"></i>
								<i class="fa fa-angle-up" aria-hidden="true"></i>
							</li>
							<li class="ml-3 toggle-2">
								<a class="text-light" href="#">Lorem Ipsum</a>
								<i class="fa fa-angle-down" aria-hidden="true"></i>
								<i class="fa fa-angle-up" aria-hidden="true"></i>
							</li>
							<li class="ml-3 toggle-3">
								<a class="text-light" href="#">Lorem Ipsum</a>
								<i class="fa fa-angle-down" aria-hidden="true"></i>
								<i class="fa fa-angle-up" aria-hidden="true"></i>
							</li>
						</ul>
					</div>

					<div class="auth">
						<div class="auth__buttons">

							<a href="#?role=student">
								<button class="btn btn-success signup-btn signupbtn" data-id="student" data-target="#signupModal" data-toggle="modal">Sign Up</button>
							</a>

							<a href="#?role=student">
								<button class="btn text-light login-btn" data-target="#loginModal" data-toggle="modal">Log In</button>
							</a>

							<span class="language">
								<span class="abbriev">en</span>
								<i class="fa fa-globe" aria-hidden="true"></i>
							</span>
						</div>
					</div>
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
				<!-- MOBILE VIEW -->
				<div class="mobile">
					<li class="mobile-logo">
						<a href="#" class="nav-link navbar-brand">CODEC</a>
					</li>
					<ul>
						<li class="togglenav">
							<i class="fa fa-bars" aria-hidden="true"></i>
							<i class="fa fa-times" aria-hidden="true"></i>
						</li>
						<li class="search-icon">
							<i class="fa fa-search" aria-hidden="true"></i>
						</li>

						<li class="mobile-login">
							<a href="#" class="">Hello, Log in <i class="fas fa-user"></i> </a>
						</li>
					</ul>
				</div>

			</div>

			<!-- DROPDOWN SEARCH FORM -->
			<div class="search-container hidden-on-mobile displayed-on-mobile">
				<form method="GET" action="" accept-charset="UTF-8" id="header-search-form">
					<input maxlength="200" autocomplete="off" placeholder="Search for courses" id="autocomplete" name="query" type="text">
					<button class="search-btn">
						<i class="fa fa-search" aria-hidden="true"></i>
					</button>
				</form>
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


			<div class="toggle">

				<ul class="toggle__nav w-100 text-center">
					<li class="toggle__nav-item">
						<a class="toggle__nav-link" href="#">Course Categories</a></li>

					<li class="toggle__nav-item"><a class="toggle__nav-link" href="#">Cerficate Course</a></li>
					<li class="toggle__nav-item"><a class="toggle__nav-link" href="#">Diploma Course</a></li>
					<li class="toggle__nav-item"><a class="toggle__nav-link" href="#">Courses for Jobs</a></li>
					<li class="toggle__nav-item"><a class="toggle__nav-link" href="<?php echo base_url(); ?>tutors">Instructors</a></li>
					<li class="toggle__nav-item"><a class="toggle__nav-link" href="#">Help</a></li>

				</ul>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row mt-4">

				<div class="col-md-6">

					<?php 
						if(isset($length)) {
							echo '<p class="text-danger">'.$length.'</p>';
						}
						if(isset($match)) {
							echo '<p class="text-danger">'.$match.'</p>';
						}

						if(isset($_GET['success'])) {
							echo '<p class="text-success">Your password has been updated</p>';
						}
						if(isset($_GET['error'])) {
							echo '<p class="text-success">Passowr reset failed</p>';
						}
					?>

					<form method="post" action="<?php echo base_url(); ?>resetPasswordAction">
						<input type="hidden" value="<?php echo $userId; ?>" name="userId" />
						<input type="hidden" value="<?php echo $code; ?>" name="code" />
						<div class="form-group">
							<label for="password">New Password</label>
							<input type="password" name="password" class="form-control" id="password" required>
						</div>
						<div class="form-group">
							<label for="confirmPassword">Confirm New Password</label>
							<input type="password" name="confirmPassword" class="form-control" id="confirmPassword" required>
						</div>

						<button type="submit" class="btn btn-primary">Submit</button>

					</form>

				</div>
			</div>
		</div>
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
