<?php session_start(); ?>
<?php require_once 'config.php'; ?>
<?php require_once 'protect_page.php'; ?>
<?php require_once 'Action.php'; ?>
<?php $actions = new Action($connect,$_SESSION['name']); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reports</title>
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
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <?php include 'menu.php'; ?>
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                      <div id="chart-container">
                          <div class="card-body">
                             <canvas id="graphCanvas"></canvas>
                          </div>
                      </div>
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <?php include 'footer.php'; ?>

        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>

          $(document).ready(function () {
              showGraph();
          });


          function showGraph()
          {
              {
                  $.post("report_data.php",
                  function (data)
                  {
                      var pupils = data.pupil;
                      var scores = data.scores;

                      console.log(data)
                      console.log(scores)
                      console.log(pupils)

                      var chartdata = {
                          labels: pupils,
                          datasets: [
                              {
                                  label: 'Line graph showing student scores ',
                                  backgroundColor: 'rgb(160, 160, 160)',
                                  borderColor: 'rgb(160, 160, 160)',
                                  tension: 0.5,
                                  data: scores
                              }
                          ]
                      };

                      $('#graphCanvas').css('height',350);

                      var graphTarget = $("#graphCanvas");

                      var lineGraph = new Chart(graphTarget, {
                          type: 'bar',
                          data: chartdata,
                          options: {
                              maintainAspectRatio: false,
                              responsive: true,
                              scales: {
                                  y: {
                                      suggestedMax: 20
                                  }
                              }
                          }
                      });


                  });
              }
          }
        </script>

    </body>
  </html>
