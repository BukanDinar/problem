<?php
include("konek.php");
if(isset($_POST['simpan'])){
  	$tgl_kegiatan = $_POST['tgl_kegiatan'];
    $lokasi = $_POST['lokasi'];
    $acara = $_POST['acara'];
    $kartani_distribusi = $_POST['kartani_distribusi'];
    $kartani_terealisasi = $_POST['kartani_terealisasi'];

    $panitia_bank = $_POST['panitia_bank'];
    $panitia_dinas = $_POST['panitia_dinas'];
    $panitia_keamanan = $_POST['panitia_keamanan'];
    $panitia_ppl = $_POST['panitia_ppl'];
    $panitia_desa = $_POST['panitia_desa'];
   
    $nota1a_jumlah = $_POST['nota1a_jumlah'];
    $nota1b_jumlah = $_POST['nota1b_jumlah'];
    $nota1c_jumlah = $_POST['nota1c_jumlah'];
   
    $nota2a_jumlah = $_POST['nota2a_jumlah'];
    $nota2b_jumlah = $_POST['nota2b_jumlah'];
    $nota2c_jumlah = $_POST['nota2c_jumlah'];
    $nota2d_jumlah = $_POST['nota2d_jumlah'];
    $nota2e_jumlah = $_POST['nota2e_jumlah'];
  
    $nota3a_jumlah = $_POST['nota3a_jumlah'];
    $nota3b_jumlah = $_POST['nota3b_jumlah'];
    $nota3c_jumlah = $_POST['nota3c_jumlah'];
    $nota3d_jumlah = $_POST['nota3d_jumlah'];
    $nota3e_jumlah = $_POST['nota3e_jumlah'];
   
    $nota4a_jumlah = $_POST['nota4a_jumlah'];
    $nota4b_jumlah = $_POST['nota4b_jumlah'];
    $nota4c_jumlah = $_POST['nota4c_jumlah'];
    $nota4d_jumlah = $_POST['nota4d_jumlah'];
    $nota4e_jumlah = $_POST['nota4e_jumlah'];
    
    $nota5a_jumlah = $_POST['nota5a_jumlah'];
    $nota5b_jumlah = $_POST['nota5b_jumlah'];
    $nota5c_jumlah = $_POST['nota5c_jumlah'];
   
    $nota6a_jumlah = $_POST['nota6a_jumlah'];
   
    $status = $_POST['status'];

    $nota1_jumlah = $nota1a_jumlah + $nota1b_jumlah + $nota1c_jumlah;
    $nota2_jumlah = $nota2a_jumlah + $nota2b_jumlah + $nota2c_jumlah + $nota2d_jumlah + $nota2e_jumlah;
    $nota3_jumlah = $nota3a_jumlah + $nota3b_jumlah + $nota3c_jumlah + $nota3d_jumlah + $nota3e_jumlah;
    $nota4_jumlah = $nota4a_jumlah + $nota4b_jumlah + $nota4c_jumlah + $nota4d_jumlah + $nota4e_jumlah;
    $nota5_jumlah = $nota5a_jumlah + $nota5b_jumlah + $nota5c_jumlah;
    $nota6_jumlah = $nota6a_jumlah;
    $total = $nota1_jumlah + $nota2_jumlah + $nota3_jumlah + $nota4_jumlah + $nota5_jumlah + $nota6_jumlah;

    $sql = "UPDATE kas_keluar SET tgl_kegiatan='$tgl_kegiatan', lokasi='$lokasi',acara='$acara', kartani_distribusi='$kartani_distribusi', 
    kartani_terealisasi='$kartani_terealisasi', 
    panitia_bank='$panitia_bank',
    panitia_dinas='$panitia_dinas', 
    panitia_keamanan='$panitia_keamanan', 
    panitia_ppl='$panitia_ppl', 
    panitia_desa='$panitia_desa',

    nota1a_jumlah='$nota1a_jumlah', 
    nota1b_jumlah='$nota1b_jumlah',
    nota1c_jumlah='$nota1c_jumlah', 

    nota2a_jumlah='$nota2a_jumlah', 
    nota2b_jumlah='$nota2b_jumlah', 
    nota2c_jumlah='$nota2c_jumlah', 
    nota2d_jumlah='$nota2d_jumlah', 
    nota2e_jumlah='$nota2e_jumlah', 

    nota3a_jumlah='$nota3a_jumlah',
    nota3b_jumlah='$nota3b_jumlah', 
    nota3c_jumlah='$nota3c_jumlah', 
    nota3d_jumlah='$nota3d_jumlah', 
    nota3e_jumlah='$nota3e_jumlah', 

    nota4a_jumlah='$nota4a_jumlah', 
    nota4b_jumlah='$nota4b_jumlah', 
    nota4c_jumlah='$nota4c_jumlah', 
    nota4d_jumlah='$nota4d_jumlah', 
    nota4e_jumlah='$nota4e_jumlah', 

    nota5a_jumlah='$nota5a_jumlah', 
    nota5b_jumlah='$nota5b_jumlah', 
    nota5c_jumlah='$nota5c_jumlah', 

    nota6a_jumlah='$nota6a_jumlah', 
    status='$status' WHERE id_nota=$id_nota";
    $query = mysqli_query($db, $sql);
    if($query1){
        header('Location:admin.php?page=keluar');
    }else{
        die("Gagal menyimpan perubahan...");

    }
}else{
    die("Akses dilarang...");
}

?>