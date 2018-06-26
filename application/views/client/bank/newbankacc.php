  <div class="col-md-6 mx-auto py-5">
    <div class="card rounded-0">
      <div class="card-header text-center">
        <legend>Create New Bank Account</legend>
      </div>
      <div class="card-body">
        <?php echo form_open('Clientnewbankacc/save'); ?>
        <input type="hidden" name="usercode" id="usercode" value="">
          <fieldset>
            <div class="form-group">
              <label>First Name</label>
              <input type="text" class="form-control" name="txt_fname" placeholder="Enter First Name" required>
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <label>Last Name</label>
              <input type="text" class="form-control" name="txt_lname" placeholder="Enter Last Name" required>
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <label>Address</label>
              <input type="text" class="form-control" name="txt_add" placeholder="Enter Address" required>
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="txt_email" placeholder="Enter Email" required>
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <label>Telephone</label>
              <input type="text" class="form-control" name="txt_tele" pattern="(?=.*\d).{10}" title="Must contain numbers only, and the length is 10" placeholder="Enter Telephone" required>
            </div>
          </fieldset>

          <fieldset>
            <div class="form-group">
              <label>User Name</label>
              <input type="text" class="form-control" name="txt_uname" placeholder="Enter User Name" pattern="(?=.*[a-z]){}" title="Must contain only lowercase letters" required>
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" id="pwd" name="txt_pwd" placeholder="Create new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <label>Re-type Password</label>
              <input type="password" class="form-control" id="rpwd" name="txt_rpwd" placeholder="Re-type Password" required>
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <input type="submit" id="btnSubmit" name="submit"  value='Save' class="btn btn-primary btn-block btn-default btn-warning"/>
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

    //Create Random usercode
      function makeid() {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        for (var i = 0; i < 10; i++)
          text += possible.charAt(Math.floor(Math.random() * possible.length));
        return text;
      }
      document.getElementById('usercode').value = makeid();
  </script>
