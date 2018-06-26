  <h4 class="text-center py-3">Leader Board</h4>
  <div class="table-responsive">
    <table id="DataTable" class="table table-hover" style="width: 100%; float: left;">
      <thead>
        <tr>
          <th>Rank</th>
          <th>Name</th>
          <th>Bank Value</th>
          <th>Shares Value</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <?php $count = 1; ?>
        <?php foreach ($rankings as $ranking): ?>
          <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $ranking['USERNAME']; ?></td>
            <td><?php echo $ranking['bank_balance']; ?></td>
            <td><?php echo $ranking['share_total']; ?></td>
            <td><?php echo $ranking['line_total']; ?></td>
          </tr>
          <?php $count++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <script>
  setTimeout(function() {
    location.reload();
  }, 30000);
  </script>
