<?php
// Array untuk menyimpan properti form
$ns1 = ['id'=>1,'komponen'=>'Form','property'=>'method','value'=>'POST'];
$ns2 = ['id'=>1,'komponen'=>'','property'=>'action','value'=>'form_belanja.php'];
$ns3 = ['id'=>3,'komponen'=>'Text ( Customer )','property'=>'name','value'=>'customer'];
$ns4 = ['id'=>4,'komponen'=>'Radio ( Produk Pilihan )','property'=>'name','value'=>'produk'];
$ns5 = ['id'=>1,'komponen'=>'Text (Jumlah Beli )','property'=>'name','value'=>'jumlah'];
$ns6 = ['id'=>3,'komponen'=>'Submit Button (Simpan) ','property'=>'name','value'=>'proses'];

$ar_property = [$ns1, $ns2 , $ns3, $ns4, $ns5, $ns6];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Properti Form Belanja</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    table {
      width:  100%;
    }
    thead {
      background-color: #CAA296;
      color: white;
    }
    tbody tr {
      background-color: #CFD8DC;
    }
    h3 {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <h3 class="mt-5">Berikut properti dari form belanja :</h3>
    <table class="table table-bordered mt-3">
      <thead>
        <tr>
          <th>No</th>
          <th>Komponen Form</th>
          <th>Property</th>
          <th>Value</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $nomor = 1;
        foreach($ar_property as $ns) {
          echo '<tr>';
          echo '<td>'.$nomor.'</td>';
          echo '<td>'.$ns['komponen'].'</td>';
          echo '<td>'.$ns['property'].'</td>';
          echo '<td>'.$ns['value'].'</td>';
          echo '</tr>';
          $nomor++;
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
