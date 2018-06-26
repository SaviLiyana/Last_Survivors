  <div class="py-3">
    <a href="<?php echo base_url('admin/create'); ?>" class="btn btn-lg btn-info">+ Add New</a>
    <hr>
    <div class="md-8 py-3 form-inline">
      <div class="form-group">
        <label class="mr-1">Select Sector</label>
        <select name='dropdown' id="col2_filter" class="form-control column_filter" data-column="2">
            <option value="All" >All</option>
          <?php foreach ($categories as $category) : ?>
            <option value="<?php echo $category['category_name']; ?>"><?php echo $category['category_name']; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>
    <div class="table-responsive">
      <table id="DataTable" class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Share Code</th>
            <th scope="col">Company</th>
            <th scope="col">Category</th>
            <th scope="col">Starting price</th>
            <th scope="col">Current price</th>
            <th scope="col">Change %</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($sector_details as $sector_detail ): ?>
          <tr>
            <td><?php echo $sector_detail['c_code']; ?></td>
            <td><?php echo $sector_detail['c_name']; ?></td>
            <td><?php echo $sector_detail['category_name']; ?></td>
            <td>12</td>
            <td>14</td>
            <td>2%</td>
            <td><a class="btn btn-info btn-block" href="<?php echo base_url(); ?>admin/shares/<?php echo $sector_detail['cid']; ?>">View</a></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <script>
  setTimeout(function() {
    location.reload();
  }, 30000);
  </script>
