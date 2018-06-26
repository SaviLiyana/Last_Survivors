  <div class="md-6 py-3 form-inline">
    <div class="form-group">
      <label class="mr-1">Select Users</label>
      <select name='dropdown' id="Username" class="form-control column_name_filter" data-column="1">
        <option value="All">All</option>
        <?php foreach ($users as $user) : ?>
          <option value="<?php echo $user['firstName']; echo " "; echo $user['lastName']; ?>"><?php echo $user['firstName']; echo " "; echo $user['lastName'];  ?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>
  <h3 class="my-4">Pending Orders</h3>
  <div class="table-responsive">
      <table id="DataTable" class="table table-hover">
        <thead>
          <tr>
            <th>Order Date : Time</th>
            <th>Name</th>
            <th>Type</th>
            <th>Code</th>
            <th>Description</th>
            <th>Price</th>
            <th>Qty</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($orders as $order) : ?>
          <tr>
            <td><?php echo $order["Create_Date"] ?></td>
            <td><?php echo $order["firstName"]; echo " "; echo $order['lastName']; ?></td>
            <td><?php echo $order["type"] ?></td>
            <td><?php echo $order["c_code"] ?></td>
            <td><?php echo $order["c_name"] ?></td>
            <td><?php echo $order["amount"] ?></td>
            <td><?php echo $order["qty"] ?></td>
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
