<?php
// Array data siswa
$ATK = array(
    array('Barang' => 'Buku', 'Harga' => 30000),
    array('Barang' => 'Pensil', 'Harga' => 12000),
    array('Barang' => 'Penghapus', 'Harga' => 10000),
    array('Barang' => 'Rautan', 'Harga' => 15000)
);

// Perulangan untuk menampilkan data siswa
foreach ($ATK as $data) {
    $barang = $data['Barang'];
    $harga = $data['Harga'];

    // Percabangan berdasarkan usia siswa
    if ($harga > 15000) {
        echo "$barang harganya cukup mahal.";
    } elseif ($harga > 10000) {
        echo "$barang harganya sedang";
    } else {
        echo "$barang sangat murah";
    }
    echo "<br>";
}
?>