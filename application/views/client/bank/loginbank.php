  <div class="col-md-6 mx-auto py-5">
    <div class="card rounded-0">
      <div class="card-header text-center">
        <legend>Logging into the Bank Account</legend>
      </div>
      <div class="card-body">
        <?php echo form_open('clientloginbank/login'); ?>
        <form class="form-horizontal" action="">
        <div class="form-group">
          <label style="float:left">User Name :</label>
          <input type="text" class="form-control" id="uname1" placeholder="Enter User Name" name="uname1" required>
        </div>
        <div class="form-group">
          <label style="float:left">Password :</label>
          <input type="password" class="form-control" id="pwd1" placeholder="Enter Password" name="pwd1" required>
        </div>
        <div class="form-group">
          <input type="submit" id="login-button" value="Log in" class="btn btn-primary btn-block btn-default btn-warning"/>
          <br/>
          <a href="<?php base_url() ?>newbankacc" class="btn btn-primary btn-block btn-default btn-warning">Create New Account</a>
        </div>
        </form>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
