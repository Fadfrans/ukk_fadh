<?php
require 'function.php';
require 'fungsiCRUD.php';
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Riwayat</title>
</head>

<body>
  <header>
    <?php include("header.php") ?>
    <div class="container">
      <a href="javascript:history.back()" class="btn btn-secondary">Kembali</a>
    </div>
  </header>
  <!-- navigasi -->
  <?php include "nav.php"; ?>
  <div class="container">
    <h1 class="text-center">Riwayat Aktivitas</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Activity</th>
          <th scope="col">Status</th>
          <th scope="col">Priority</th>
          <th scope="col">Tanggal</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        $query = mysqli_query($con, "SELECT * FROM tasks");
        while ($row = mysqli_fetch_array($query)) {
          ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['name_task']; ?></td>
            <td><?= $row['status_task']; ?></td>
            <td><?= $row['priority']; ?></td>
            <td><?= $row['date_task']; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </script>
</body>

</html>
