<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Stock Market Game</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" >
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" >
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon.png" />
  <style>
    .card{
      background: lightgrey;
    }
  </style>
</head>
<body>
  <div class="preloader"></div>
  <div class="pushfooter">
    <div class="container" style="min-height: 100vh;">
      <div class="col-md-8 mx-auto py-5">
        <div class="card rounded-0 border-0">
          <div class="card-body">
            <h1 align="center" class="mt-3">Welcome to The Stock Market Simulation Game</h1>
            <h3 align="center" class="my-3">Designed by 'Last Survivors'</h3>
            <h3 align="center" class="my-5">Please select the account which you want to log into...!</h3>
            <div class="row">
              <div class="col-md-6">
                <a href="<?php echo base_url(); ?>loginbank" class="btn btn-warning btn-block">Bank Account</a><br>
              </div>
              <div class="col-md-6">
                <a href="<?php echo base_url(); ?>loginbroker" class="btn btn-info btn-block">Broker Account</a><br>
              </div>
            </div>
            <h5 align="center" class="text-danger">Note : First you should have a Bank account to create a Broker Account</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.slim.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/canvasjs.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
</body>
</html>
