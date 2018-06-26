  <div class="py-3">
    <h3 style="text-align: center;">Market Analysis on Predictions</h3><br/>
    <div class="row">
      <div class="col-md-6">
        <div class="table-responsive">
          <table id="DataTable" class="table table-hover" >
            <thead>
              <tr>
                <th colspan="4">Top Gaining Trends</th>
              </tr>
              <tr>
                <th>Code</th>
                <th>Description</th>
                <th>Price</th>
                <th>Buy</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($gains as $gain ): ?>
              <tr>
                <td><?php echo $gain["c_code"]; ?></td>
                <td><?php echo $gain["c_name"]; ?></td>
                <td><?php echo $gain["c_current_share_value"]; ?></td>
                <td><a class="btn btn-success btn-block" href="<?php echo base_url(); ?>brokerbuysell" style="color:white;">buy</a></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-6">
        <div class="table-responsive">
          <table id="DataTable1" class="table table-hover">
            <thead>
              <tr>
                <th colspan="4">Top Losing Trends</th>
              </tr>
              <tr>
                <th>Code</th>
                <th>Description</th>
                <th>Price</th>
                <th>Sell</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($losses as $loss ): ?>
              <tr>
                <td><?php echo $loss["c_code"]; ?></td>
                <td><?php echo $loss["c_name"]; ?></td>
                <td><?php echo $loss["c_current_share_value"]; ?></td>
                <td><a class="btn btn-danger btn-block" href="<?php echo base_url(); ?>brokerbuysell" style="color:white;">sell</a></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script>
  setTimeout(function() {
    location.reload();
  }, 30000);
  </script>
