<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admins || Codac.ng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/admins.css">

</head>

<body>
    <main>
        <section class="container">
			<?php include_once "fragments/dashboard_header.php" ?>
            <section class="wrapper">
                <?php include_once "fragments/dashboard_sidebar.php" ?>
                <section class="main_board">
                    <!-- <section>Hello world</section> -->
                    <section class="table">
                        <h3>Admins Information</h3>
                        <p class="control">
							<a href="<?php echo base_url(); ?>admin/newAdmin"><button class="active" id="newAdmin"> + New Admin</button></a>
                            <!-- <button class="active" id="active">Active Admins</button>
                            <button id="deactivated">Deactivated Admins</button> -->
                        </p>
                        <div class="table_container">
                            <table class="table-bordered">
                                <tbody>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                    </tr>
									<?php
										$query = $this->db->get_where("admins");
										if($this->db->affected_rows() > 0) {
											// admins found
											$sn = 1;
											foreach($query->result_array() as $admin) {
												echo '
												<tr>
													<th>'.$sn.'</th>
													<th>'.$admin["firstname"].' '.$admin["lastname"].'</th>
													<th>'.$admin["email"].'</th>
													<th>'.$admin["role"].'</th>													
												</tr>';
												$sn++;
											}
										} else {
											// no admin found
											echo '<h4>No registered admins found</h4>';
										}
									?>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </section>
            </section>
        </section>
        </section>

    </main>
</body>
<script src="<?php echo base_url(); ?>assets/admin/js/admins.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/dashboard.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</html>
