  <div class="col-md-6 mx-auto py-3">
    <div class="card rounded-0">
      <div class="card-body">
        <?php echo form_open('Shares/save'); ?>
          <fieldset>
            <legend>Add new company shares</legend>
            <div class="form-group">
              <label style="float:left">Company Code</label>
              <input type="text" class="form-control" name="txt_code" placeholder="Enter Company Code" required>
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <label style="float:left">Company Name</label>
              <input type="text" class="form-control" name="txt_name" placeholder="Enter Company Name" required>
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <label style="float:left">Company Telephone</label>
              <input type="text" class="form-control" name="txt_tele" placeholder="Enter Company Telephone" pattern="(?=.*\d).{10}" title="Must contain numbers only, and the length is 10">
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <label style="float:left">Select Category</label>
              <select class="form-control" name="select-category">
                <?php foreach ($categories as $category) : ?>
                  <option value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <label style="float:left">Starting Price</label>
              <input type="number" step="0.01" value="0.00" class="form-control" name="txt_esp" placeholder="Enter Starting Price" required>
            </div>
            <div class="form-group">
              <input type="submit" name='submit' value='Submit' class="btn btn-primary btn-block" onclick="return confirm('Are you sure?')"/>
            </div>
          </fieldset>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
