<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	  <link type="text/css" href="css/style.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		KindaCare Welcomes You
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">

					<ul class="nav pull-right">

						<li><a href="login.php">
							Login
						</a></li>



						<li><a href="register.php">
							Sign Up
						</a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" method="POST" action="controller.php?register=true">
						<div class="module-head">
							<h3>Sign Up</h3>
						</div>
						<div class="module-body">
              <div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text"  name="name" placeholder="Full Name">
								</div>
                <?php if(!empty($_SESSION['name_error'])): ?>
                        <?php foreach($_SESSION['name_error'] as $error): ?>
  								              <p class="invalid_entry"><?php echo $error ?></p>
                        <?php endforeach; ?>
                        <?php unset($_SESSION['name_error']); ?>
  							<?php endif; ?>
							</div>

							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="email"  name="email" placeholder="Email Address">
								</div>
                <?php if(!empty($_SESSION['email_error'])): ?>
                        <?php foreach($_SESSION['email_error'] as $error): ?>
  								              <p class="invalid_entry"><?php echo $error ?></p>
                        <?php endforeach; ?>
                        <?php unset($_SESSION['email_error']); ?>
  							<?php endif; ?>
							</div>

              <div class="control-group">
                <div class="controls row-fluid">
                  <input class="span12" type="number"  name="contact" placeholder="Contact">
                </div>
                <?php if(!empty($_SESSION['contact_error'])): ?>
                        <?php foreach($_SESSION['contact_error'] as $error): ?>
  								              <p class="invalid_entry"><?php echo $error ?></p>
                        <?php endforeach; ?>
                        <?php unset($_SESSION['contact_error']); ?>
  							<?php endif; ?>
              </div>

              <div class="control-group">
                <div class="controls row-fluid">
                  <input class="span12" type="text"  name="address" placeholder="Address">
                </div>
                <?php if(!empty($_SESSION['address_error'])): ?>
                        <?php foreach($_SESSION['address_error'] as $error): ?>
                                <p class="invalid_entry"><?php echo $error ?></p>
                        <?php endforeach; ?>
                        <?php unset($_SESSION['address_error']); ?>
                <?php endif; ?>
              </div>

							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" name="password" placeholder="Password">
								</div>
                <?php if(!empty($_SESSION['password_error'])): ?>
                        <?php foreach($_SESSION['password_error'] as $error): ?>
                                <p class="invalid_entry"><?php echo $error ?></p>
                        <?php endforeach; ?>
                        <?php unset($_SESSION['password_error']); ?>
                <?php endif; ?>
							</div>

              <div class="control-group">
                <div class="controls row-fluid">
                  <input class="span12" type="password" name="confirm_password" placeholder="Confirm password">
                </div>
              </div>

						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Register</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

  <?php include 'footer.php'; ?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
