  <div class="col-md-6 mx-auto py-5">
    <div class="card rounded-0">
      <div class="card-header text-center">
        <legend>Create New Broker Account</legend>
      </div>
      <div class="card-body">
        <?php echo form_open('Clientnewbrokeracc/brokersave'); ?>
        <fieldset>
          <div class="form-group">
            <label style="float:left">Bank Reference</label>
            <input type="text" class="form-control" name="txt_usercode" placeholder="Enter Bank Reference Code" autocomplete="off" required>
          </div>
        </fieldset>
        <fieldset>
          <div class="form-group">
            <label>User Name</label>
            <input type="text" class="form-control" name="txt_uname" placeholder="Enter User Name" autocomplete="off" placeholder="Enter User Name" pattern="(?=.*[a-z]){}" title="Must contain only lowercase letters" required>
          </div>
        </fieldset>
        <fieldset>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="pwd" name="txt_pwd" placeholder="Creat new password" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
          </div>
        </fieldset>
        <fieldset>
          <div class="form-group">
            <label>Re-type Password</label>
            <input type="password" class="form-control" id="rpwd" name="txt_rpwd" placeholder="Re-type Password" autocomplete="off" required>
          </div>
        </fieldset>
        <fieldset>
          <div class="form-group">
            <input type="submit" id="btnSubmit" name="submit"  value='Save' class="btn btn-primary btn-block btn-default btn-info"/>
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
