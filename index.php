<?php
require 'view.php';
$query = tampildata("SELECT * FROM tbl_barang");
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Latihan</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
   <div class="container">
      <h1 class="mt-3">Data Barang</h1>
      <a href="add-data.php">
         <button class="btn btn-primary">Tambah Data</button>
      </a>
      <table class="table table-striped">
         <thead>
            <tr>
               <th>Kode</th>
               <th>Nama Barang</th>
               <th>Satuan</th>
               <th>Harga Jual</th>
               <th>Actions</th>
            </tr>
         </thead>
         <tbody>
            <?php foreach ($query as $row) : ?>
               <tr>
                  <td><?= $row['kode'] ?></td>
                  <td><?= $row['nama_barang'] ?></td>
                  <td><?= $row['satuan'] ?></td>
                  <td><?= $row['harga_jual'] ?></td>
                  <td>
                     <button class="btn btn-warning">Ubah</button>
                     <button class="btn btn-danger">Hapus</button>
                  </td>
               </tr>
            <?php endforeach ?>
         </tbody>

      </table>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>