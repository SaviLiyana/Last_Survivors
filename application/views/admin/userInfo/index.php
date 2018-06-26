  <div class="py-3">
    <h1>Clients</h1><hr>
    <div class="table-responsive">
      <table id="DataTable" class="table table-hover">
        <?php $count = 1; ?>
        <thead>
          <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">User Name</th>
            <th scope="col">Address</th>
            <th scope="col">Tele</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($clients as $client) : ?>
            <tr>
              <td><?php echo $client['firstName']; ?></td>
              <td><?php echo $client['lastName']; ?></td>
              <td><?php echo $client['br_userName']; ?></td>
              <td><?php echo $client['address']; ?></td>
              <td><?php echo $client['tele']; ?></td>
            </tr>
            <?php $count++; ?>
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
