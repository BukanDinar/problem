<?php
        include ("konek.php");
        $id_nota = $_GET['id_nota'];
        $sql = "SELECT * FROM kas_keluar WHERE id_nota='$id_nota'";
        $query = mysqli_query($db, $sql);

?>
<script>
  window.print();
</script>
<div class="box box-warning">
            <div class="box-header with-border">
              
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">

<form action="" method="POST">
       
        <table align="center" border="1" style="width: 80%;>
          <tr class="form-group">
            <th colspan="3" style="text-align: center; text-decoration-color: black;"><h2>NOTA DISTRIBUSI KARTANI</h2></th>
          </tr>
          <tr class="form-group">
            <td style="height: 30px;">Bank X Cabang</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td>Cirebon Yos Sudarso</td>
          </tr>
          <tr class="form-group">
            <td style="width: 46%">Tanggal Kegiatan</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="date" name="tgl_kegiatan" value="<?php echo $mhs['tgl_kegiatan'] ?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td>Lokasi/Titik Penyaluran</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="text" name="lokasi" value="<?php echo $mhs['lokasi']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td>Acara</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="text" name="acara" value="<?php echo $mhs['acara']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td>Jumlah KARTANI yang akan didistribusikan</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="text" name="kartani_distribusi" value="<?php echo $mhs['kartani_distribusi']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td>Jumlah KARTANI yang terdistribusi</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="text" name="kartani_terealisasi" value="<?php echo $mhs['kartani_terealisasi']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td>Jumlah panitia yang ikut</td>
            <th style="width: 4%; text-align: center"> : </th>
            <td><input readonly type="text" name="panitia_jumlah" value="<?php echo $mhs['panitia_jumlah']?>" class="form-control"></td>
            <tr class="form-group">
                <td>Bank X</td>
                <th style="width: 4%; text-align: center;"> : </th>
                <td><input readonly type="text" name="panitia_bank" value="<?php echo $mhs['panitia_bank']?>" class="form-control"></td>
            </tr>
            <tr class="form-group">
                <td>Dinas</td>
                <th style="width: 4%; text-align: center;"> : </th>
                <td><input readonly type="text" name="panitia_dinas" value="<?php echo $mhs['panitia_dinas']?>" class="form-control"></td>
            </tr>
            <tr class="form-group">
                <td>Keamanan dari luar</td>
                <th style="width: 4%; text-align: center;"> : </th>
                <td><input readonly type="text" name="panitia_keamanan" value="<?php echo $mhs['panitia_keamanan']?>" class="form-control"></td>
            </tr>
            <tr class="form-group">
                <td>PPL</td>
                <th style="width: 4%; text-align: center;"> : </th>
                <td><input readonly type="text" name="panitia_ppl" value="<?php echo $mhs['panitia_ppl']?>" class="form-control"></td>
            </tr>
            <tr class="form-group">
                <td>Perangkat Desa</td>
                <th style="width: 4%; text-align: center;"> : </th>
                <td><input readonly type="text" name="panitia_desa" value="<?php echo $mhs['panitia_desa']?>" class="form-control"></td>
            </tr>
          </tr>
          <tr>
            <td colspan="3" style="height: 25px;"></td>
            
          </tr>
          <tr class="form-group">
            <td colspan="3" style="height: 30px;"><b>Tenaga SDM</b></td>
          </tr>
          <tr class="form-group">
            <td>Tenaga PKL</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota1a_jumlah" value="<?php echo $mhs['nota1a_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td>Lembur PKL dan pegawai yang terlibat diproject GVP</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota1b_jumlah" value="<?php echo $mhs['nota1b_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td>Ekstra fooding saat lembur untuk pegawai yang terlibat diproject GVP</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota1c_jumlah" value="<?php echo $mhs['nota1c_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td  colspan="3" style="height: 30px;"><b>Pengangkutan</b></td>
          </tr>
          <tr class="form-group">
            <td>Sewa kendaraan (jika ada)</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota2a_jumlah" value="<?php echo $mhs['nota2a_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td>Bahan bakar kendaraan (BBM) saat pelaksanaan project</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota2b_jumlah" value="<?php echo $mhs['nota2b_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td>Driver (jika mobil sewa)</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota2c_jumlah" value="<?php echo $mhs['nota2c_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td>Biaya tol atau e-money</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota2d_jumlah" value="<?php echo $mhs['nota2d_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td>Biaya Parkir</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota2e_jumlah" value="<?php echo $mhs['nota2e_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td colspan="3" style="height: 30px;">Akomodasi</td>
          </tr>
          <tr class="form-group">
            <td>Tenda / Sewa gedung / pendopo / balai desa</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota3a_jumlah" value="<?php echo $mhs['nota3a_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td>Kursi</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota3b_jumlah" value="<?php echo $mhs['nota3b_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td>Banner (banner cukup dibuat sekali)</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota3c_jumlah" value="<?php echo $mhs['nota3c_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td>Biaya keamanan dari luar (bukan <i>security</i> dari Bank X</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota3d_jumlah" value="<?php echo $mhs['nota3d_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td>Biaya kebersihan</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota3e_jumlah" value="<?php echo $mhs['nota3e_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td colspan="3" style="height: 30px;"><b>ATK yang berkaitan dengan project GVP</b></td>
          </tr>
          <tr class="form-group">
            <td>Kertas</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota4a_jumlah" value="<?php echo $mhs['nota4a_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td>Foto copy dan Perlengkapan</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota4b_jumlah" value="<?php echo $mhs['nota4b_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td>Steples dan isi</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota4c_jumlah" value="<?php echo $mhs['nota4c_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td>Materai</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota4d_jumlah" value="<?php echo $mhs['nota4d_jumlah']?>"  class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td>Odner</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota4e_jumlah" value="<?php echo $mhs['nota4e_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td colspan="3" style="height: 30px;">Konsumsi pada saat event/kegiatan</td>
          </tr>
          <tr class="form-group">
            <td>Sarapan pagi/snack</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota5a_jumlah" value="<?php echo $mhs['nota5a_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td>Makan siang</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota5b_jumlah" value="<?php echo $mhs['nota5b_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td>Air mineral</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota5c_jumlah" value="<?php echo $mhs['nota5c_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td colspan="3" style="height: 30px;"><b>Biaya penyuluh/pendamping</b></td>
          </tr>
          <tr class="form-group">
            <td>Biaya penyuluh/pendamping pada event/Kegiatan yang dilaksanakan saat hari libur</td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input readonly type="number" name="nota6a_jumlah" value="<?php echo $mhs['nota6a_jumlah']?>" class="form-control"></td>
          </tr>
          <tr class="form-group">
            <td><b>Status</b></td>
            <th style="width: 4%; text-align: center;"> : </th>
            <td><input disabled type="enum" name="status" value="<?php echo $mhs['status'] ?>"></td>
          </tr>
         
      </th>
    </tr>
  </table>
        
    </form>

  </div>
</div>
