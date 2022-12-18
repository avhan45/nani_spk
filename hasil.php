<?php 
include("core/config.php");
include("core/fungsi.php");
include("template/headers.php");


$query = "SELECT DISTINCT kd_kriteria,kriteria.nama_kriteria FROM nilai,kriteria WHERE nilai.id_kriteria=kriteria.id_kriteria";
$result = mysqli_query($con,$query);

$query2   = "SELECT * FROM guru";
$result2  = mysqli_query($con,$query2);

?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Hasil Analisa</h1>
      <hr style="height:5px;">
    </div><!-- End Page Title -->

    <section>
      
    <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabel Nilai Kriteria</h5>

              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-primary">
                <thead>
                  <tr>
                    <th scope="col">Nama Guru</th>
                    <?php 
                    foreach($result as $row){
                    ?>
                    <th scope="col"><?= $row['kd_kriteria']; ?></th>
                    <?php } ?>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($result2 as $rw): ?>
                  <tr>
                    <td scope="row"><?= $rw['nama_guru'];?></td>
                    <?php 
                    $id = $rw['id_guru'];
                    $qry = "SELECT DISTINCT kriteria.nama_kriteria,nilai.nilai FROM nilai,kriteria WHERE nilai.id_kriteria=kriteria.id_kriteria AND nilai.id_guru='$id'";
                    $res = mysqli_query($con,$qry);
                      foreach($res as $rr){ ?>
                      <td><?= $rr['nilai']; ?></td>
                      <?php } ?>
                   
                  </tr>
                  <?php endforeach; ?>
                  
                </tbody>
              </table>
              <!-- End Primary Color Bordered Table -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabel Nilai Normalisasi</h5>

              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-primary">
                <p>
                  <a href="nilai_normalisasi.php" class="btn btn-primary btn-sm" >Lakukan Proses Normalisasi</a>
                  <a href="hapus_normalisasi.php" class="btn btn-primary btn-sm">Bersihkan Normalisasi</a>
                </p>
                <thead>
                  <tr>
                    <th scope="col">Nama Guru</th>
                    <?php 
                    foreach($result as $row){
                    ?>
                    <th scope="col"><?= $row['kd_kriteria']; ?></th>
                    <?php } ?>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($result2 as $rw): ?>
                  <tr>
                    <td scope="row"><?= $rw['nama_guru'];?></td>
                    <?php 
                    $id = $rw['id_guru'];
                    $qry = "SELECT DISTINCT kriteria.nama_kriteria,normalisasi.nilai_normalisasi FROM normalisasi,kriteria WHERE normalisasi.id_kriteria=kriteria.id_kriteria AND normalisasi.id_guru='$id'";
                    $res = mysqli_query($con,$qry);
                      foreach($res as $rr){ 
                        ?>
                      <td><?= $rr['nilai_normalisasi']; ?></td>
                      <?php } ?>
                  </tr>
                  <?php endforeach; ?>
                  
                </tbody>
              </table>
              <!-- End Primary Color Bordered Table -->

            </div>
          </div>

          <!-- Hasil Analisa -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title analisa">Tabel Hasil Analisa</h5>

              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-primary">
                <p>
                  <a href="nilai_analisa.php" class="btn btn-primary btn-sm" >Lakukan Proses Analisa</a>
                  <a href="hapus_analisa.php" class="btn btn-primary btn-sm">Bersihkan Analisa</a>
                </p>
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Guru</th>
                    <?php 
                    foreach($result as $row){
                    ?>
                    <th scope="col"><?= $row['kd_kriteria']; ?></th>
                    <?php } ?>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach($result2 as $ra): ?>
                  <tr>
                    <td><?= $no++;?></td>
                    <td scope="row"><?= $ra['nama_guru'];?></td>
                    <?php 
                    $id = $ra['id_guru'];
                    $qry = "SELECT DISTINCT kriteria.nama_kriteria,perhitungan.nilai_perhitungan FROM perhitungan,kriteria WHERE perhitungan.id_kriteria=kriteria.id_kriteria AND perhitungan.id_guru='$id'";
                    $res = mysqli_query($con,$qry);

                      foreach($res as $rr){ ?>
                      <td><?= number_format($rr['nilai_perhitungan'],2); ?></td>
                      <?php } ?>
                      <td>
                       <?php 
                    $qry2 = "SELECT id_guru,id_kriteria,SUM(perhitungan.nilai_perhitungan) as total FROM perhitungan WHERE id_guru='$id' ";
                    $ck = mysqli_query($con,$qry2);
                      
                        foreach($ck as $cek){
                          $id_g = $cek['id_guru'];
                          $rank = $cek['total'];
                        echo number_format($cek['total'],3);
                        
                      }
                      $qry3 = "SELECT DISTINCT id_guru,nilai_rangking FROM rangking WHERE id_guru = '$id_g'";
                      $sr = mysqli_query($con, $qry3);
                      if(mysqli_num_rows($sr) == 0){
                        saveRangking($id_g,$rank);
                      }
                      ?>
                      </td>
                      
                    </tr>
                    <?php endforeach; ?>
                  
                </tbody>
              </table>
              <!-- End Primary Color Bordered Table -->

            </div>
          </div>

          <!-- Tabel Rangking -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabel Rangking</h5>

              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-primary">
               
                <thead>
                  <tr>
                    <th scope="col">Rangking</th>
                    <th scope="col">Nama Guru</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no=1;
                  $query3 = "SELECT * FROM rangking INNER JOIN guru WHERE rangking.id_guru=guru.id_guru ORDER BY nilai_rangking DESC";
                  $r = mysqli_query($con, $query3);
                      foreach($r as $rw):

                  ?>
                  <tr>
                    <td><?=$no++; ?></td>
                        <td><?= $rw['nama_guru']; ?></td>
                        <td><?= round($rw['nilai_rangking'],3); ?></td>

                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <!-- End Primary Color Bordered Table -->

              <button class="btn btn-primary btn-sm" id="cetak" onclick="print_page()">Print</button>
              <a href="laporan.php" target="_BLANK" class="btn btn-primary btn-sm">Cetak Pdf</a>
              
            </div>
          </div>
        </section>
        
        <!-- <a href="#" id="cetak">Print</a> -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script>
    //  $("#cetak").click(function(){
    //     window.print();
        
    //  });
    function print_page(){
      window.print();
      
    }
  </script>
</body>

</html>