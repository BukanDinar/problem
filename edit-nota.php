<?php
include("konek.php");
if( !isset($_GET['id_nota'])){
 //  header('Location: kas-keluar.php');
}
$id_nota = $_GET['id_nota'];
$sql = "SELECT * FROM kas_keluar WHERE id_nota='$id_nota'";
$query = mysqli_query($db, $sql);
$mhs = mysqli_fetch_assoc($query);
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>
<div class="box box-warning">
            <div class="box-header with-border">
              
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">

<form action="proses-edit-nota.php" method="POST">
        <fieldset>
        <table border="1" width="100%">
          <tr class="form-group">
            <th colspan="3" style="text-align: center; text-decoration-color: black;"><h2>NOTA DISTRIBUSI KARTANI</h2></th>
          </tr>
          <tr class="form-group">
            <th style="height: 30px;">Bank X Cabang</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;Cirebon Yos Sudarso</td>
          </tr>
          <tr class="form-group">
            <th style="width: 46%">Tanggal Kegiatan</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="date" name="tgl_kegiatan" value="<?php echo $mhs['tgl_kegiatan'] ?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th>Lokasi/Titik Penyaluran</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="text" name="lokasi" value="<?php echo $mhs['lokasi']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th>Acara</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="text" name="acara" value="<?php echo $mhs['acara']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th>Jumlah KARTANI yang akan didistribusikan</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="text" name="kartani_distribusi" value="<?php echo $mhs['kartani_distribusi']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th>Jumlah KARTANI yang terdistribusi</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="text" name="kartani_terealisasi" value="<?php echo $mhs['kartani_terealisasi']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th colspan="3" style="height: 30px;">Jumlah panitia yang ikut</th>
            
            <tr class="form-group">
                <th>Bank X</th>
                <th style="width: 4%; text-align: center;"> : </th>
                <td><input type="text" name="panitia_bank" value="<?php echo $mhs['panitia_bank']?>" class="form-control"></td>
            </tr>
            <tr class="form-group">
                <th>Dinas</th>
                <th style="width: 4%; text-align: center;"> : </th>
                <td><input type="text" name="panitia_dinas" value="<?php echo $mhs['panitia_dinas']?>" class="form-control"></td>
            </tr>
            <tr class="form-group">
                <th>Keamanan dari luar</th>
                <th style="width: 4%; text-align: center;"> : </th>
                <td><input type="text" name="panitia_keamanan" value="<?php echo $mhs['panitia_keamanan']?>" class="form-control"></td>
            </tr>
            <tr class="form-group">
                <th>PPL</th>
                <th style="width: 4%; text-align: center;"> : </th>
                <td><input type="text" name="panitia_ppl" value="<?php echo $mhs['panitia_ppl']?>" class="form-control"></td>
            </tr>
            <tr class="form-group">
                <th>Perangkat Desa</th>
                <th style="width: 4%; text-align: center;"> : </th>
                <td><input type="text" name="panitia_desa" value="<?php echo $mhs['panitia_desa']?>" class="form-control"></td>
            </tr>
          </tr>
          <tr>
            <td colspan="3" style="height: 40px;"></td>
            
          </tr>
          <tr class="form-group">
            <th colspan="3" style="height: 30px;">Tenaga SDM</th>
          </tr>
          <tr class="form-group">
            <th>Tenaga PKL</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota1a_jumlah" value="<?php echo $mhs['nota1a_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th>Lembur PKL dan pegawai yang terlibat diproject GVP</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota1b_jumlah" value="<?php echo $mhs['nota1b_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th>Ekstra fooding saat lembur untuk pegawai yang terlibat diproject GVP</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota1c_jumlah" value="<?php echo $mhs['nota1c_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th colspan="3" style="height: 30px;">Pengangkutan</th>
          </tr>
          <tr class="form-group">
            <th>Sewa kendaraan (jika ada)</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota2a_jumlah" value="<?php echo $mhs['nota2a_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th>Bahan bakar kendaraan (BBM) saat pelaksanaan project</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota2b_jumlah" value="<?php echo $mhs['nota2b_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th>Driver (jika mobil sewa)</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota2c_jumlah" value="<?php echo $mhs['nota2c_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th>Biaya tol atau e-money</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota2d_jumlah" value="<?php echo $mhs['nota2d_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th>Biaya Parkir</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota2e_jumlah" value="<?php echo $mhs['nota2e_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th colspan="3" style="height: 30px;">Akomodasi</th>
          </tr>
          <tr class="form-group">
            <th>Tenda / Sewa gedung / pendopo / balai desa</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota3a_jumlah" value="<?php echo $mhs['nota3a_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th>Kursi</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota3b_jumlah" value="<?php echo $mhs['nota3b_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th>Banner (banner cukup dibuat sekali)</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota3c_jumlah" value="<?php echo $mhs['nota3c_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th>Biaya keamanan dari luar (bukan <i>security</i> dari Bank X</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota3d_jumlah" value="<?php echo $mhs['nota3d_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th>Biaya kebersihan</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota3e_jumlah" value="<?php echo $mhs['nota3e_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th colspan="3" style="height: 30px;">ATK yang berkaitan dengan project GVP</th>
          </tr>
          <tr class="form-group">
            <th>Kertas</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota4a_jumlah" value="<?php echo $mhs['nota4a_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th>Foto copy dan Perlengkapan</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota4b_jumlah" value="<?php echo $mhs['nota4b_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th>Steples dan isi</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota4c_jumlah" value="<?php echo $mhs['nota4c_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th>Materai</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota4d_jumlah" value="<?php echo $mhs['nota4d_jumlah']?>"  class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th>Odner</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota4e_jumlah" value="<?php echo $mhs['nota4e_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th colspan="3" style="height: 30px;">Konsumsi pada saat event/kegiatan</th>
          </tr>
          <tr class="form-group">
            <th>Sarapan pagi/snack</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota5a_jumlah" value="<?php echo $mhs['nota5a_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th>Makan siang</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota5b_jumlah" value="<?php echo $mhs['nota5b_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th>Air mineral</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota5c_jumlah" value="<?php echo $mhs['nota5c_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <th colspan="3" style="height: 30px;">Biaya penyuluh/pendamping</th>
          </tr>
          <tr class="form-group">
            <th>Biaya penyuluh/pendamping pada event/Kegiatan yang dilaksanakan saat hari libur</th>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input type="number" name="nota6a_jumlah" value="<?php echo $mhs['nota6a_jumlah']?>" class="form-control"></td>
          </tr>
          <div class="form-group">
                    <label hidden for="status">Status Kredit</label>
                    <?php $status = $mhs['status']; ?>   
                      <label hidden><input type="radio" name="status" id="optionsRadios2" value="Sudah Divalidasi" <?php echo ($status == 'Sudah Divalidasi') ? "checked": "" ?>>Sudah Divalidasi</label>
                      <label hidden=""><input type="radio" name="status" id="optionsRadios2" value="Belum Divalidasi" <?php echo ($status == 'Belum Divalidasi') ? "checked": "" ?>>Belum Divalidasi</label>
                  </div>
          <tr>
            <td colspan="3">
            <input type="submit" value="Update" class="btn btn-primary btn-block" name="simpan" /></td><!--
          <button type="submit" class="btn btn-primary btn-block btn-lg" value="simpan" name="simpan">Update</button>-->
        </td>
          </tr>
      </th>
    </tr>
  </table>
        </fieldset>
    </form>
  </div>
</div>
