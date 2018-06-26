  <div class="row py-3">
    <div class="col-md-6"><h2>Buying order</h2></div>
    <div class="col-md-6"><h2 align="right">Current Balance : Rs <?php echo $bankbalance['balance']; ?></h2></div>
  </div>
  <?php echo form_open('Clientbrokerbuysell/save'); ?>
  <div class="row mx-0">
    <input type="hidden" value="<?php echo $bankbalance['balance']; ?>" name="txt_balance">
    <input type="hidden" value="<?php echo $bankbalance['ba_id']; ?>" name="txt_ba_id">
    <div class="col-md-3">
      <div class="form-group">
        <h4>Share Code</h4>
        <select class="form-control" name="select-company">
          <?php foreach ($companydata as $company) : ?>
          <option value="<?php echo $company['cid']; ?>" ><?php echo $company['c_code']; ?></option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        <h4>Price</h4>
        <input type="number" id="price" step="0.01" name="txt_price" class="form-control" placeholder="Enter Price" min="1" required>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        <h4>Qty</h4>
        <input type="number" id="qty" name="txt_qty" class="form-control" placeholder="Enter Quantity" min="1" required>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        <h4>&emsp;</h4>
        <input type="submit" id="btnSubmit" name="submit" value="Place Order" class="form-control btn btn-info">
      </div>
    </div>
  </div>
  <?php echo form_close(); ?>
  <hr/>
  <div class="table-responsive"><br/>
    <h2>Selling order</h2>
    <table id="DataTable" class="table table-hover">
      <thead>
        <tr>
          <th>Bought Date : Time</th>
          <th>Code</th>
          <th>Description</th>
          <th>Bought Price</th>
          <th>Qty</th>
          <th>Selling Price</th>
          <th>Sell Now</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($filled_buying_orders as $filled_buying_order) : ?>
        <tr>
          <?php echo form_open('Clientbrokerbuysell/sellingsave'); ?>
          <input type="hidden" name="orderid" value="<?php echo $filled_buying_order['order_id']; ?>">
          <td><?php echo $filled_buying_order["Create_Date"] ?></td>
          <td><?php echo $filled_buying_order["c_code"]; ?></td>
          <td><?php echo $filled_buying_order["c_name"]; ?></td>
          <td><?php echo $filled_buying_order["amount"] ?></td>
          <td><?php echo $filled_buying_order["qty"]; ?></td>
          <td><input type="text" id="sprice" name="sprice" value="" class="form-control" placeholder="Enter Selling Price" required></td>
          <td><input type="submit" class="btn btn-info btn-block" value="Sell"></td>
          <?php echo form_close(); ?>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <script>
    var price = document.getElementById("price");
    var qty = document.getElementById("qty");
    var btnsubmit = document.getElementById("btnSubmit");
    function validateValue()
    {
      var bankbalance = <?php echo $bankbalance['balance']; ?>;
      var amount = price.value * qty.value;
      if(amount > bankbalance) {
        qty.setCustomValidity("Sorry... Insufficient Bank Balance..!");
      }
      else {
        qty.setCustomValidity('');
      }
    }
    btnsubmit.onclick = validateValue;
  </script>
