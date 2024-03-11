<?php

if (isset($_POST['proses'])) {
  $proses = $_POST['proses'];
  $nama_customer = $_POST['nama'];
  $pilih_produk = $_POST['pilih'];
  $barang = $_POST['jumlah'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Form Belanja Online</title>
</head>

<body>
  <div class="container py-5">
    <div class="card mx-auto">
      <div class="card-header">
        <h7 class="card-tittle">Form Belanja</h7>
      </div>
      <div class="card-body">
        <h5>Belanja Online</h5>
        <div class="container py-5">
          <div class="row">
            <div class="col-md-4 text-left">
              <h5>Daftar Harga</h5>
              <table>
                <tr>
                  <th>Produk</th>
                  <th>Harga</th>
                </tr>
                <tr>
                  <td>TV</td>
                  <td style="float: right;">Rp. 4.200.000</td>
                </tr>
                <tr>
                  <td>Kulkas</td>
                  <td style="float: right;">Rp. 3.100.000</td>
                </tr>
                <tr>
                  <td>Mesin Cuci</td>
                  <td style="float: right;">Rp. 3.800.000</td>
                </tr>
              </table>
            </div>
            <div class="col-md-8">
              <div class="card mx-auto">
              </div>
            </div>
          </div>
        </div>
        <form method="post" action="">
          <div class="form-group row">
            <label for="nama" class="col-4  col-form-label text-right">Customer</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-address-card-o"></i>
                  </div>
                </div>
                <input id="nama" name="nama" placeholder="nama Customet" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="pilih" class="col-4  col-form-label text-right">Pilih Produk</label>
            <div class="col-8">
              <select id="pilih" name="pilih" class="custom-select">
                <option value="Pilih Produk">Pilih Produk</option>
                <option value="TV">TV</option>
                <option value="KulKas">Kulkas</option>
                <option value="Mesin Cuci">Mesin Cuci</option>
              </select>
            </div>
          </div>
      </div>
      <div class="form-group row">
        <label for="jumlah" class="col-4  col-form-label text-right">Jumlah Pesanan</label>
        <div class="col-8">
          <select id="jumlah" name="jumlah" class="custom-select">
            <option value="jumlah">jumlah</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="proses" type="submit" class="btn btn-primary" value="Pesanan Akan Diproses">Kirim</button>
        </div>
      </div>
      </form>
    </div>
  </div>
  </div>
  <hr>
  <?php

  if (isset($_POST['proses'])) {
    $proses = $_POST['proses'];
    $nama_customer = $_POST['nama'];
    $pilih_produk = $_POST['pilih'];
    $barang = $_POST['jumlah'];

    // Daftar harga produk
    $harga_produk = array(
      'TV' => 4200000,
      'Kulkas' => 3100000,
      'Mesin Cuci' => 3800000
    );

    // Menghitung total harga
    $total_harga = $harga_produk[$pilih_produk] * $barang;
  }
  ?>

  <!-- Setelah form -->
  <?php if (isset($proses)) : ?>
    <hr>
    <h5>Detail Pesanan</h5>
    <p>Proses: <?= $proses ?></p>
    <p>Nama Customer: <?= $nama_customer ?></p>
    <p>Pesanan Yang Dipilih: <?= $pilih_produk ?></p>
    <p>Jumlah Pesanan: <?= $barang ?></p>
    <?php if (isset($total_harga)) : ?>
      <p>Total Harga: Rp. <?= number_format($total_harga, 0, ',', '.') ?></p>
    <?php endif; ?>
  <?php endif; ?>

</body>

</html>
