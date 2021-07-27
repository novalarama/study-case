<?php 

// koneksi
$conn = new mysqli('localhost', 'root', '', 'test');

// simpan data
if (isset($_POST['submit'])) {
 $nb = $_POST['nama_barang'];
 $hrg = $_POST['harga'];
 $qty = $_POST['qty'];

 $q = mysqli_query($conn, "INSERT INTO produk (nama_barang, harga, qty) VALUES ('$nb', '$hrg', '$qty')");

 if($q) {
  header('Location: index.php');
 } else {
  echo "<script>alert('Gagal menambahkan data'); window.location.href = index.php;</script>";
 }
}

 // perintah tampil data
 $q = mysqli_query($conn, "SELECT * FROM produk");
     
 $total = 0;
 $tot_bayar = 0;
 $no = 1;

 while ($r = $q->fetch_assoc()) {
  // total adalah hasil dari harga x qty
  $total = $r['harga'] * $r['qty'];
  // total bayar adalah penjumlahan dari keseluruhan total
  $tot_bayar += $total;
?>
