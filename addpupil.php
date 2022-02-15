<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Pupil</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="css/style.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <?php include 'navbar.php'; ?>
        </div>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <?php include 'menu.php'; ?>
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                      <!--/.wrapper-->
                      <div class="content">
                          <div class="module">
                              <div class="module-head">

                                  <?php if(isset($_SESSION['success'])): ?>
                                      <strong>&rarr;<?php echo $_SESSION['success'] ?></strong>
                                      <?php unset($_SESSION['success']); ?>
                                  <?php else: ?>
                                      <h3>Register Pupil</h3>
                                  <?php endif; ?>

                              </div>
                              <div class="module-body">
                                  <form class="form-vertical" method="POST" action="controller.php?addpupil=true">

                                    <div class="module-body">

                                      <div class="control-group">
                                        <div class="controls row-fluid">
                                            <input class="span12" type="number" name="user_code" placeholder="User Code">
                                        </div>
                                        <?php if(!empty($_SESSION['user_code_error'])): ?>
                                                <?php foreach($_SESSION['user_code_error'] as $error): ?>
                                                        <p class="invalid_entry"><?php echo $error ?></p>
                                                <?php endforeach; ?>
                                                <?php unset($_SESSION['user_code_error']); ?>
                                        <?php endif; ?>
                                      </div>

                                      <div class="control-group">
                                        <div class="controls row-fluid">
                                          <input class="span12" type="text" name="first_name" placeholder="First Name">
                                        </div>
                                        <?php if(!empty($_SESSION['first_name_error'])): ?>
                                                <?php foreach($_SESSION['first_name_error'] as $error): ?>
                                                        <p class="invalid_entry"><?php echo $error ?></p>
                                                <?php endforeach; ?>
                                                <?php unset($_SESSION['first_name_error']); ?>
                                        <?php endif; ?>
                                      </div>


                                      <div class="control-group">
                                        <div class="controls row-fluid">
                                          <input class="span12" type="text"  name="last_name" placeholder="Last Name">
                                        </div>
                                        <?php if(!empty($_SESSION['last_name_error'])): ?>
                                                <?php foreach($_SESSION['last_name_error'] as $error): ?>
                                                        <p class="invalid_entry"><?php echo $error ?></p>
                                                <?php endforeach; ?>
                                                <?php unset($_SESSION['last_name_error']); ?>
                                        <?php endif; ?>
                                      </div>

                                      <div class="control-group">
                                        <div class="controls row-fluid">
                                          <input class="span12" type="number" name="contact" placeholder="Contact">
                                        </div>
                                        <?php if(!empty($_SESSION['contact_error'])): ?>
                                                <?php foreach($_SESSION['contact_error'] as $error): ?>
                                                        <p class="invalid_entry"><?php echo $error ?></p>
                                                <?php endforeach; ?>
                                                <?php unset($_SESSION['contact_error']); ?>
                                        <?php endif; ?>
                                      </div>
                                    </div>

                                    <div class="module-foot">
                                      <div class="control-group">
                                        <div class="controls clearfix">
                                          <button type="submit" class="btn btn-primary pull-right">Save</button>
                                        </div>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                            </div>
                          </div>
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>

    <?php include 'footer.php'; ?>

    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="scripts/common.js" type="text/javascript"></script>

</body>
</html>
