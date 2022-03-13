<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hasil Form</title>
</head>
<body>

<?php
$nama = $_POST['customer'];
$pilih_produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$total = 0;
$harga_tv = 4200000;
$harga_kulkas = 3100000;
$harga_mesincuci = 3800000;

if($pilih_produk == "Tv") {
    $total = $harga_tv * $jumlah;
} else if($pilih_produk == "Kulkas") {
    $total = $harga_kulkas * $jumlah;
} else if($pilih_produk == "Mesin Cuci") {
    $total = $harga_mesincuci * $jumlah;
}
?>
    <ul class="list-group">
    <li class="list-group-item active" aria-current="true">FORM BELANJA</li>

    <li class="list-group-item"><?php echo "Nama Customer : " . $nama;?></li>
    <li class="list-group-item"><?php echo "<br/> Produk Pilihan : " . $pilih_produk;?></li>
    <li class="list-group-item"><?php echo "<br/> Jumlah Beli : " . $jumlah;?></li>
    <li class="list-group-item"><?php echo "<br/> Total Belanja : Rp" . number_format($total);?></li>
    </ul>
</body>
</html>