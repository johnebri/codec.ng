<section class="sidebar" id="sidebar">
	<div class="admin_info">
		<img src="<?php echo base_url(); ?>assets/admin/images/user.png" alt="admin image">
		<p><?php echo $this->session->userdata("fullname"); ?></p>
		<p></p>
	</div>
	<div class="sidebar_menu">
		<ul>
			<li class="dashboard-menu"><a href="<?php echo base_url(); ?>admin/dashboard"> <i class="fas fa-chart-line"></i> Dashboard </a></li>
			<!-- <li class="courses-menu"><a href="<?php echo base_url(); ?>admin/courses"> <i class="fas fa-calendar-day"></i> Courses </a></li> -->
			<!-- <li class="students-menu"><a href="<?php echo base_url(); ?>admin/students"> <i class="fa fa-user-graduate"></i> Students </a></li> -->
			<!-- <li class="tutors-menu"><a href="<?php echo base_url(); ?>admin/tutors"> <i class="fas fa-chalkboard-teacher"></i> Tutors </a></li> -->
			<li class="admins-menu"><a href="<?php echo base_url(); ?>admin/admins"> <i class="fas fa-user-cog"></i> Admins </a></li>
			<!-- <li class="profile-menu"><a href="<?php echo base_url(); ?>admin/profile"> <i class="fa fa-cogs"></i> Profile </a></li> -->
			<li class="change-password-menu"><a href="<?php echo base_url(); ?>admin/changePassword"> <i class="fa fa-key"></i> Change Password </a></li>
			<li class="logout"><a href="<?php echo base_url(); ?>admin/logout"> <i class="fa fa-lock"></i> Log out </a></li>
		</ul>
	</div>
</section>
