  <h3 class="text-center py-3"><?php echo $userdata_broker['user_name']; ?> - Current Portfolio</h3>
  <div class="table-responsive">
    <table id="DataTable" class="table table-hover">
      <thead>
        <tr>
          <th>Bought Date : Time</th>
          <th>Code</th>
          <th>Description</th>
          <th>Bought Price</th>
          <th>Qty</th>
          <th>Sell Now</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($filled_buying_orders as $filled_buying_order) : ?>
        <tr>
          <td><?php echo $filled_buying_order["Create_Date"] ?></td>
          <td><?php echo $filled_buying_order["c_code"]; ?></td>
          <td><?php echo $filled_buying_order["c_name"]; ?></td>
          <td><?php echo $filled_buying_order["amount"] ?></td>
          <td><?php echo $filled_buying_order["qty"]; ?></td>
          <td><a class="btn btn-success btn-block" href="<?php echo base_url(); ?>brokerbuysell">sell</a></td>
        </tr>
        <?php endforeach; ?>
     </tbody>
    </table>
  </div>
  <hr>
  <h3 class="text-center py-3">Pending Orders</h3>
  <div class="table-responsive">
    <table id="DataTable1" class="table table-hover">
      <thead>
        <tr>
          <th>Order Date : Time</th>
          <th>Type</th>
          <th>Code</th>
          <th>Description</th>
          <th>Price</th>
          <th>Qty</th>
          <th>Cancel Now</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($pending_orders as $pending_order) : ?>
        <tr>
          <td><?php echo $pending_order["Create_Date"] ?></td>
          <td><?php echo $pending_order["type"] ?></td>
          <td><?php echo $pending_order["c_code"] ?></td>
          <td><?php echo $pending_order["c_name"] ?></td>
          <td><?php echo $pending_order["amount"] ?></td>
          <td><?php echo $pending_order["qty"] ?></td>
          <td>
            <?php echo form_open('clientbrokerhome/cancelorder/'.$pending_order['order_id']); ?>
            <input type="submit" class="btn btn-danger btn-block" value="Cancel" onclick="return confirm('Are you sure, you want to cancel this order?')">
            <?php echo form_close(); ?>
          </td>
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
