<?php

$product = [
    ["name" => "Lenava", "qty" => 4, "price" => 1000000],
    ["name" => "Aser", "qty" => 2, "price" => 1500000],
    ["name" => "Toyiba", "qty" => 6, "price" => 2000000],
    ["name" => "Doll", "qty" => 1, "price" => 1200000],
    ["name" => "Susa", "qty" => 3, "price" => 1700000],
];
//buat code untuk menghitung total jumlah yang dibeli beli

/**Menentukan barang yang akan dibeli
$barang = $product[2]["name"];
echo "Nama Barang : $barang , ";
//menentukan jumlah
$jumlah = $product[2]["qty"];
echo "Jumlah  : $jumlah , ";
//memasukkan harga per barang
$harga = $product[2]["price"];
echo "Harga : $harga , ";

//Menentukan total yang harus dibayar
$total = $jumlah*$harga;
echo "Total yang harus dibayarkan adalah : Rp $total"
*/

$product = [
    ["name" => "Lenava", "qty" => 4, "price" => 1000000],
    ["name" => "Aser", "qty" => 2, "price" => 1500000],
    ["name" => "Toyiba", "qty" => 6, "price" => 2000000],
    ["name" => "Doll", "qty" => 1, "price" => 1200000],
    ["name" => "Susa", "qty" => 3, "price" => 1700000],
];
/** buat code untuk menghitung total jumlah yg dibeli */
$total = 0;
for ($i=0; $i < count($product); $i++) { 
    $totalEachItem = $product[$i]["qty"] * $product[$i]["price"];
    $total += $totalEachItem;
    // $total = $total + $totalEachItem;
}
// echo "Total of all item is $total"
?>