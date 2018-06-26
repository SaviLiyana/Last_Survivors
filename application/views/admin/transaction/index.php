    <div class="row mx-0">
      <div class="md-6 py-3 form-inline">
        <label class="mr-1">Select Date</label>
        <input type="date" id="Date" class="form-control column_filter_date mr-2" data-column="0" >
      </div>
      <div class="md-6 py-3 form-inline">
        <label class="mr-1">Select Type</label>
        <select id="col1_filter" class="form-control column_type_filter" data-column = "1">
          <option value="All">All</option>
          <option value="buy">buy</option>
          <option value="sell">sell</option>
        </select>
      </div>
    </div>
    <div class="table-responsive">
      <table id='DataTable' class="table table-hover" style="width: 100%; float: left;">
        <thead>
          <tr>
            <th>Date:Time</th>
            <th>Transaction Type</th>
            <th>Share Code</th>
            <th>Company</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($orders as $order): ?>
        <tr>
          <td><?php echo $order['Create_Date']; ?></td>
          <td><?php echo $order['type']; ?></td>
          <td><a href="brokershareselected.php"><?php echo $order['c_code']; ?></a></td>
          <td><a href="brokershareselected.php"><?php echo $order['c_name']; ?></a></td>
          <td><?php echo $order['amount']; ?></td>
          <td><?php echo $order['qty']; ?></td>
          <td><?php echo $order['amount']*$order['qty']; ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
