<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stock Exchange System | Last Survivors</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon.png">
  </head>
   <body>
     <?php if($this->session->flashdata('login_success')) : ?>
       <?php echo '<p class="alert alert-success text-center">'.$this->session->flashdata('login_success').'</p>'; ?>
     <?php endif; ?>
     <?php if($this->session->flashdata('login_failed')) : ?>
       <?php echo '<p class="alert alert-danger text-center">'.$this->session->flashdata('login_failed').'</p>'; ?>
     <?php endif; ?>
    <div class="preloader"></div>
    <div class="wrapper">
      <div class="containerlogin">
     		<h1 style="color: white;">Welcome</h1>
     		<?php echo form_open('Login/adminlogin'); ?>
     			<input type="text" name="UserName" placeholder="Username" autocomplete="off" required>
     			<input type="password" name="Password" placeholder="Password" required>
     			<input type="submit" id="login-button" value="Login">
        <?php echo form_close(); ?>
     	</div>
     	<ul class="bg-bubbles">
     		<li></li>
     		<li></li>
     		<li></li>
     		<li></li>
     		<li></li>
     		<li></li>
     		<li></li>
     		<li></li>
     		<li></li>
     		<li></li>
     	</ul>
     </div>
   <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.slim.min.js"></script>
   <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
   <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
   <script src="<?php echo base_url(); ?>assets/js/canvasjs.min.js"></script>
   <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>

  </body>
</html>
