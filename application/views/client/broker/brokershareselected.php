  <div class="py-3" align="center">
    <div class="row">
      <div class="col-md-6">
        <div class="text-left">
          <h3><?php echo $share["c_code"]; ?> - <?php echo $share["c_name"]; ?> - <?php echo $share["c_current_share_value"]; ?></h3>
        </div>
      </div>
      <div class="col-md-6">
        <div class="text-right">
          <a class="btn btn-info" href="<?php echo base_url(); ?>brokerbuysell">Place Order</a>
        </div>
      </div>
    </div>
  </div>
  <h4 class="text-center py-3">Previous Market Values</h4>
  <?php if ($share_value != NULL) : ?>
  <div id="chartContainer" class="mb-4" style="height: 370px;"></div>
  <script>
    window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {
      animationEnabled: true,
      theme: "light2",
      axisY:{
        includeZero: false
      },
      data: [{
        type: "line",
        dataPoints: [
          { y: <?php echo $share_value["v_t1"]; ?> },
          { y: <?php echo $share_value["v_t2"]; ?> },
          { y: <?php echo $share_value["v_t3"]; ?> },
          { y: <?php echo $share_value["v_t4"]; ?> },
          { y: <?php echo $share_value["v_t5"]; ?> },
          { y: <?php echo $share_value["v_t6"]; ?> },
          { y: <?php echo $share_value["v_t7"]; ?> },
          { y: <?php echo $share_value["v_t8"]; ?> },
          { y: <?php echo $share_value["v_t9"]; ?> },
          { y: <?php echo $share_value["v_t10"]; ?> },
          { y: <?php echo $share_value["v_t11"]; ?> },
          { y: <?php echo $share_value["v_t12"]; ?> },
          { y: <?php echo $share_value["v_t13"]; ?> },
          { y: <?php echo $share_value["v_t14"]; ?> },
          { y: <?php echo $share_value["v_t15"]; ?> },
          { y: <?php echo $share_value["v_t16"]; ?> },
          { y: <?php echo $share_value["v_t17"]; ?> },
          { y: <?php echo $share_value["v_t18"]; ?> },
          { y: <?php echo $share_value["v_t19"]; ?> },
          { y: <?php echo $share_value["v_t20"]; ?> }
        ]
      }]
    });
    chart.render();
    }
  </script>
  <?php endif; ?>
  <div class="row">
    <div class="col-md-6">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th colspan="2">Buyers</th>
            </tr>
            <tr>
              <th>Price</th>
              <th>Qty</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($buy_orders as $buy_order) : ?>
            <tr>
              <td><?php echo $buy_order["amount"] ?></td>
              <td><?php echo $buy_order["qty"] ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-6">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th colspan="2">Sellers</th>
            </tr>
            <tr>
              <th>Price</th>
              <th>Qty</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($sell_orders as $sell_order) : ?>
            <tr>
              <td><?php echo $sell_order["amount"] ?></td>
              <td><?php echo $sell_order["qty"] ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script>
  setTimeout(function() {
    location.reload();
  }, 30000);
  </script>
