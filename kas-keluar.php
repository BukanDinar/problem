<?php include("konek.php"); ?>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             Data Kas Keluar
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Lokasi/Titik Penyaluran</th>
                                            <th>Acara</th>
                                            <th>Jumlah</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

<?php
$sql = "SELECT * FROM kas_keluar";
        $query = mysqli_query($db, $sql);
        $no = 1;

        while($mhs = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>".date('d M Y', strtotime($mhs['tgl_kegiatan']))."</td>";
            echo "<td>".$mhs['lokasi']."</td>";
            echo "<td>".$mhs['acara']."</td>";
            echo "<td align='align'>Rp. ".number_format($mhs['total']).",-"."</td>";
            echo "<td>".$mhs['status']."</td>";
            echo "<td>";
            echo "<a href='admin.php?page=lihat&id_nota=".$mhs['id_nota']."'>Lihat</a> | ";
            echo "<a href='admin.php?page=editnota&id_nota=".$mhs['id_nota']."'>Edit</a> | ";
            echo "<a href='hapus.php?id_nota=".$mhs['id_nota']."'>Hapus</a>";
            echo "</td>";
            

            echo "</tr>";
            $no++;
        }
        
        ?>


             </tbody>
              <tr>
                <th colspan="5" style="text-align: center; font-size: 17px">Total Kas Keluar</th>
                <th colspan="2" style="text-align: right; font-size: 17px">
                    <?php
                        echo "Rp".number_format($mhs['total']).",-"."";
                        
                     ?>
                                            </th>

                                        </tr>
                                </table>
                            </div>
<!-- MODALS START -->
                            <div class="panel panel-default">
                        
                        <div class="panel-body">
                        	<nav>
                            <a class="btn btn-success btn-lg" href="?page=tambahkeluar">
                              Tambah Data
                            </a>
                        </nav>
                        </div>
                    </div>

                    </div>
                </div>
</div>
<!-- JQUERY SCRIPTS -->
<script src="js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
<script src="js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
<script src="js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
<script src="js/custom.js"></script>