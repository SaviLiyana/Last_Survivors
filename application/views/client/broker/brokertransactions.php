
<div class="container "><br/>

<br/>

   <div class="col-md-3">
     <h6>Date</h6>
      <input type="date" id="Date" class="form-control column_filter_date" data-column="0" >
   </div>
  <div class="table-responsive">
    <table id="DataTable" class="table table-hover" style="width: 100%; float: left;">

      <thead>
        <tr>
          <th>Date:Time</th>
          <th>Transaction Type</th>
          <th>Share Code</th>
          <th>Description</th>
          <th>Price</th>
          <th>Qty</th>
          <th>Total</th>
        </tr>
      </thead>

      <tbody>

        <?php foreach ($transactions as $transaction) : ?>
        <tr>
          <td><?php echo $transaction["Create_Date"] ?></td>
          <td><?php echo $transaction["type"] ?></td>
          <td><?php echo $transaction["c_code"] ?></td>
          <td><?php echo $transaction["c_name"] ?></td>
          <td><?php echo $transaction["amount"] ?></td>
          <td><?php echo $transaction["qty"] ?></td>
          <td><?php echo ($transaction["amount"])*($transaction["qty"]) ?></td>
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
