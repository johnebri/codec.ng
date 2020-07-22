<div class="side-bar">
	<span class="toggle__sidebar toggle__right">
		<i class="fa fa-angle-double-left left" aria-hidden="true"></i>
		<i class="fa fa-angle-double-right right" aria-hidden="true"></i>
	</span>
	<aside class="dashboard__user">
		<div class="dashboard__user-tabs">
			<span class="dash dassh"><a href="<?php echo base_url(); ?>studentDashboard" class="dassh">Dashboard</a></span>
			<span class="profile prof"><a href="<?php echo base_url(); ?>studentProfile" class="prof">Profile</a></span>
		</div>

		<div class="dashboard__info">
			<div class="dashboard__info-img">

				<?php
					$query = $this->db->get_where('users', array("user_id" => $this->input->cookie('userId', true)) );
					$res = $query->result_array();
					foreach($res as $user) {
						$image = $user['image'];
					}

					if($image != '') {
						// there is an image
						echo '<img src="'.base_url().'assets/img/profile-pictures/'.$image.'" alt="user picture">';
					} else {
						// there is no image
						echo '<img src="'.base_url().'assets/img/user.png" alt="user picture">';
					}
				?>

			</div>

			<div class="dashboard__info-name mt-1">
				<h2 class="firstname">
					<?php echo $this->input->cookie('fullname',true); ?>
				</h2>
				<h2 class="lastname">
					<!-- Iredokun -->
				</h2>
			</div>

			<div class="dashboard__info-links">
				<h5>My Quick Links</h5>
				<ul class="link-list">
					<li><a href="#">Continue Learning</a></li>
					<li><a href="#">Learner Record</a></li>
					<li><a href="#">Learner Report</a></li>
				</ul>
			</div>
		</div>
	</aside>
</div>
