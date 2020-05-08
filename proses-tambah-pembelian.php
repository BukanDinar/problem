<?php
include("konek.php");
if(isset($_POST['daftar1'])){

    $nomor_beli=$_POST['nomor_beli'];
    $tgl_beli=$_POST['tgl_beli'];
    $kode_supplier=$_POST['kode_supplier'];
    $total_beli=$_POST['total_beli'];
    $total_diskon=$_POST['total_diskon'];
    $total_bayar=$_POST['total_bayar'];
    $hutang=$_POST['hutang'];

    $sql ="INSERT INTO pembelian (nomor_beli, tgl_beli, kode_supplier, total_beli, total_diskon, total_bayar, hutang) VALUES ('$nomor_beli', '$tgl_beli', '$kode_supplier', '$total_beli', '$total_diskon', '$total_bayar', '$hutang')";
    
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: pembelian.php?status=Data+Berhasil+Ditambah');
    } else {
         header('Location: pembelian.php?status=tambah-pembelian-gagal');
    }
} else {
    die("Akses dilarang...");
}

?>
