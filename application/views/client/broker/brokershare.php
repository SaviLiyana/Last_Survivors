  <div class="md-6 py-3 form-inline">
    <label class="mr-1">Select Sector</label>
    <select class="form-control column_filter" name="sector" id="col2_filter" data-column="2" >
      <option value="All">All</option>
      <?php foreach ($categories as $category) : ?>
        <option value="<?php echo $category['category_name']; ?>"><?php echo $category['category_name']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="table-responsive">
    <table id="DataTable" class="table  table-hover">
      <thead>
        <tr>
          <th scope="col">Share Code</th>
          <th scope="col">Description</th>
          <th scope="col">Sector</th>
          <th scope="col">Starting price</th>
          <th scope="col">Current price</th>
          <th scope="col">Change %</th>
          <th scope="col">View</th>
          <th scope="col">Buy/Sell</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($sector_details as $sector_detail ): ?>
        <tr>
          <td><?php echo $sector_detail['c_code']; ?></td>
          <td><?php echo $sector_detail['c_name']; ?></td>
          <td><?php echo $sector_detail['category_name']; ?></td>
          <td><?php echo $sector_detail['c_starting_share_value']; ?></td>
          <td><?php echo $sector_detail['c_current_share_value']; ?></td>
          <td><?php echo round((($sector_detail['c_current_share_value']-$sector_detail['c_starting_share_value'])/$sector_detail['c_starting_share_value'])*100, 2) ; ?>%</td>
          <td><a class="btn btn-info btn-block" href="<?php echo base_url(); ?>brokershareselected/<?php echo $sector_detail['cid']; ?>">View</a></td>
          <td><a class="btn btn-warning btn-block" href="<?php base_url() ?>brokerbuysell">Place Order</a></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <script>
  setTimeout(function() {
    location.reload();
  }, 30000);
  </script>
