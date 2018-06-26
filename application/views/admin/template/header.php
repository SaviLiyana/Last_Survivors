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
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon.png">
</head>
 <body>
   <div class="preloader"></div>
     <nav class="navbar navbar-expand-lg navbar-dark bg-info">
      <div class="container">
         <a class="navbar-brand" href="#"><img class="company-logo" src="<?php echo base_url(); ?>assets/images/logo.png"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarColor01">
           <ul class="navbar-nav mr-auto">
            <li class="nav-item" >
              <a class="nav-link <?php if($title == "Home") echo "active"; ?>" href="<?php echo base_url(); ?>admin/startup">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($title == "Shares") echo "active"; ?>" href="<?php echo base_url(); ?>admin/shares">Shares</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($title == "Transactions") echo "active"; ?>" href="<?php echo base_url(); ?>admin/transaction">Transactions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($title == "Orders") echo "active"; ?>" href="<?php echo base_url(); ?>admin/orders">Order Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if($title == "Users") echo "active"; ?>" href="<?php echo base_url(); ?>admin/users">User Details</a>
            </li>
          </ul>
          <ul class="navbar-nav navbar-right">
            <li class="nav-item dropdown">
              <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">logout</button>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item">Hi <?php echo $adminuser['user_name'] ?>!</a>
                  <a class="dropdown-item" href="<?php echo base_url(); ?>admin/logout">Log Out</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
       </div>
     </nav>
<!--  -->
    <?php if($this->session->flashdata('login_success')) : ?>
      <?php echo '<p class="alert alert-success text-center">'.$this->session->flashdata('login_success').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('login_failed')) : ?>
      <?php echo '<p class="alert alert-danger text-center">'.$this->session->flashdata('login_failed').'</p>'; ?>
    <?php endif; ?>
    <div class="pushfooter">
      <div class="container" style="background: white; min-height: 100vh;">
