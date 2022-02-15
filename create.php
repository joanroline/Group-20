<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Assignment</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
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
                              <h3>Create Assignment</h3>
                          <?php endif; ?>

                        </div>
                        <div class="module-body">
                          <form class="form-vertical" method="POST" action="controller.php?create=true">

                            <div class="module-body">

                              <div class="control-group">
                                <div class="controls row-fluid">
                                  <input class="span12" type="text" name="assignment_number" placeholder="Assignment Number">
                                </div>
                                <?php if(!empty($_SESSION['assignment_number_error'])): ?>
                                        <?php foreach($_SESSION['assignment_number_error'] as $error): ?>
                                                <p class="invalid_entry"><?php echo $error ?></p>
                                        <?php endforeach; ?>
                                        <?php unset($_SESSION['assignment_number_error']); ?>
                                <?php endif; ?>
                              </div>

                              <div class="control-group">
                                <div class="controls row-fluid">
                                  <input class="span12" type="text" name="assignment_list" placeholder="Assignment List">
                                </div>
                                <?php if(!empty($_SESSION['assignment_list_error'])): ?>
                                        <?php foreach($_SESSION['assignment_list_error'] as $error): ?>
                                                <p class="invalid_entry"><?php echo $error ?></p>
                                        <?php endforeach; ?>
                                        <?php unset($_SESSION['assignment_list_error']); ?>
                                <?php endif; ?>
                              </div>

                              <div class="control-group">
                                <div class="controls row-fluid">
                                  <input class="span12" type="time" name="start_time" placeholder="Start time">
                                </div>
                                start_time

                                <?php if(!empty($_SESSION['start_time_error'])): ?>
                                        <?php foreach($_SESSION['start_time_error'] as $error): ?>
                                                <p class="invalid_entry"><?php echo $error ?></p>
                                        <?php endforeach; ?>
                                        <?php unset($_SESSION['start_time_error']); ?>
                                <?php endif; ?>
                              </div>

                              <div class="control-group">
                                <div class="controls row-fluid">
                                  <input class="span12" type="time"  name="end_time" placeholder="End time">
                                </div>
                                end_time

                                <?php if(!empty($_SESSION['end_time_error'])): ?>
                                        <?php foreach($_SESSION['end_time_error'] as $error): ?>
                                                <p class="invalid_entry"><?php echo $error ?></p>
                                        <?php endforeach; ?>
                                        <?php unset($_SESSION['end_time_error']); ?>
                                <?php endif; ?>
                              </div>

                              <div class="control-group">
                                <div class="controls row-fluid">
                                  <input class="span12" type="date"  name="date" placeholder="Assignment Date">
                                </div>
                                assignment_date

                                <?php if(!empty($_SESSION['assignment_date_error'])): ?>
                                        <?php foreach($_SESSION['assignment_date_error'] as $error): ?>
                                                <p class="invalid_entry"><?php echo $error ?></p>
                                        <?php endforeach; ?>
                                        <?php unset($_SESSION['assignment_date_error']); ?>
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
