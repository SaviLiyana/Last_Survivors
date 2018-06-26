  <div class="col-md-6 mx-auto py-5">
    <div class="card rounded-0">
      <div class="card-header text-center">
        <legend>Logging into the Broker Account</legend>
      </div>
      <div class="card-body">
        <?php echo form_open('clientloginbroker/login'); ?>
            <form class="form-horizontal" action="#">
                <div class="form-group">
                    <label style="float:left" for="username">User Name :</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter User Name" name="uname">
                </div>
                <div class="form-group">
                    <label style="float:left" for="pwd">Password :</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pwd">
                </div>
                <div class="form-group">
                  <input type="submit" id="login-button" value="Log in" class="btn btn-primary btn-block btn-default btn-info"/><br/>
                  <a href="<?php base_url() ?>newbrokeracc" class="btn btn-primary btn-block btn-default btn-info">Create New Account</a>
                </div>
              </form>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
