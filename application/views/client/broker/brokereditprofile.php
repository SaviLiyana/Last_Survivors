  <div class="col-md-6 mx-auto py-5">
    <div class="card rounded-0">
      <div class="card-header text-center">
        <legend>Change Your Password</legend>
      </div>
      <div class="card-body">
        <?php echo form_open('Clientbrokereditprofile/savepassword'); ?>
          <fieldset>
            <div class="form-group">
              <label style="float:left">User Name</label>
              <input type="text" class="form-control" name="txt_uname" value="<?php echo $brokerdata['br_userName'] ?>" placeholder="Enter User Name" disabled>
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <label style="float:left">Old Password</label>
              <input type="password" class="form-control" id="opwd" name="txt_opwd" placeholder="Enter Old Password" autocomplete="off" required>
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <label style="float:left">New Password</label>
              <input type="password" class="form-control" id="pwd" name="txt_pwd" placeholder="Enter new password" autocomplete="off" required>
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <label style="float:left">Re-type Password</label>
              <input type="password" class="form-control" id="rpwd" name="txt_rpwd" placeholder="Re-type New Password" autocomplete="off" required>
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <input type="submit" id="btnSubmit" name="submit"  value='Save' class="btn btn-primary btn-block btn-default btn-warning" style="float:left"/>
            </div>
          </fieldset>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
  <script>
    var pwd = document.getElementById("pwd");
    var rpwd = document.getElementById("rpwd");
    var btnsubmit = document.getElementById("btnSubmit");
    //Validate Password
      function validateValue(){
        if(pwd.value != rpwd.value) {
          rpwd.setCustomValidity("Password not match");
        }
        else {
          rpwd.setCustomValidity("");
        }
      }
      btnsubmit.onclick = validateValue;
  </script>
