  <div class="row py-3">
    <div class="col-md-6 mx-auto my-5">
      <div class="card rounded-0">
        <div class="card-header text-center">
          <legend>Change Your Password</legend>
        </div>
        <div class="card-body">
          <?php echo form_open('ClientEditBank/updatebankpassword'); ?>
          <fieldset>
            <div class="form-group">
              <label style="float:left">User Name</label>
              <input type="text" class="form-control" name="txt_uname" value="<?php echo $bankdata['ba_userName'] ?>" placeholder="Enter User Name" readonly>
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
              <input type="submit" id="btnSubmit1" name="submit"  value='Save' class="btn btn-primary btn-block btn-default btn-warning" onclick="return confirm('Are you sure?')">
            </div>
          </fieldset>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
        <!-- user Data -->
    <div class="col-md-6 mx-auto my-5">
      <div class="card rounded-0">
        <div class="card-header text-center">
          <legend>Edit Your Account Information</legend>
        </div>
        <div class="card-body">
          <?php echo form_open('ClientEditBank/updatebankuser'); ?>
          <fieldset>
            <div class="form-group">
              <label style="float:left">First Name</label>
              <input type="text" class="form-control" name="txt_fname" placeholder="Enter First Name" value="<?php echo $bankdata['firstName'] ?>" autocomplete="off" required>
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <label style="float:left">Last Name</label>
              <input type="text" class="form-control" name="txt_lname" placeholder="Enter Last Name" value="<?php echo $bankdata['lastName'] ?>" autocomplete="off" required>
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <label style="float:left">Address</label>
              <input type="text" class="form-control" name="txt_add" placeholder="Enter Address" value="<?php echo $bankdata['address'] ?>" autocomplete="off" required>
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <label style="float:left">Email</label>
              <input type="email" class="form-control" name="txt_email" placeholder="Enter Email" value="<?php echo $bankdata['email'] ?>" autocomplete="off" required>
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <label style="float:left">Telephone</label>
              <input type="text" class="form-control" name="txt_tele" pattern="(?=.*\d).{10}" title="Must contain numbers only, and the length is 10" value="<?php echo $bankdata['tele'] ?>" placeholder="Enter Telephone" required>
            </div>
            <div class="form_group">
              <input type="submit" id="btnSubmit2" name="submit"  value='Save' class="btn btn-primary btn-block btn-default btn-warning" onclick="return confirm('Are you sure?')"/>
            </div>
          </fieldset>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
  <script>
    var pwd = document.getElementById("pwd");
    var rpwd = document.getElementById("rpwd");
    var btnsubmit = document.getElementById("btnSubmit1");
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
