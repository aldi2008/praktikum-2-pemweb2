<?php
$proses= $_POST['proses'];
$nama_customer = $_POST['nama'];
$pilih_produk = $_POST['pilih'];
$barang = $_POST['jumlah'];


if(!empty($proses)) {
    echo 'Proses : '.$proses;
    echo '<br/>Nama Customer: '.$nama_customer;
    echo '<br/>Pesanan Yang Dipilih : '.$pilih_produk;
    echo '<br/>Jumlah Pesanan : '.$barang;
}
?>