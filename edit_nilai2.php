<?php 
include("template/headers.php");
include("core/config.php");
include("core/fungsi.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

// $query  = "SELECT * FROM nilai a INNER JOIN kriteria b INNER JOIN guru c INNER JOIN crips d WHERE  a.id_kriteria=b.id_kriteria AND a.id_guru=c.id_guru AND a.crips=d.id_crips AND id_nilai=$id";
$query  = "SELECT * FROM nilai a INNER JOIN kriteria b INNER JOIN guru c INNER JOIN crips d WHERE  a.id_kriteria=b.id_kriteria AND a.id_guru=c.id_guru AND a.nilai=d.id_crips AND id_nilai=$id";
$result = mysqli_query($con,$query);

$query2 = "SELECT * FROM kriteria";
$res2 =mysqli_query($con,$query2);

$qry    = "SELECT * FROM guru";
$res3   = mysqli_query($con,$qry);

$qry4 = "SELECT * FROM crips WHERE id_kriteria";
$res4 = mysqli_query($con,$qry4);
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Nilai Guru</h1>
      <hr style="height:5px;">
      
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Edit Nilai Guru</h5>
              <!-- General Form Elements -->
              <form action="fnilai.php" method="post">
                  <?php foreach($result as $row): ?>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Nama Guru</label>
                  <input type="hidden" name="id_nilai" value="<?=$row['id_nilai']; ?>">
                  <div class="col-sm-9">
                   <select name="nama_guru" id="kriteria" class="form-control">
                       <option value="<?=$row['id_guru']; ?>"><?= $row['nama_guru']; ?></option>

                        <?php foreach($res3 as $rr):?>
                       <option value="<?= $rr['id_guru']; ?>"><?= $rr['nama_guru'];?></option>
                       <?php endforeach; ?>
                   </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Kriteria</label>
                  <div class="col-sm-9">
                   <select name="kriteria" id="kriteria" class="form-control">
                       <option value="<?=$row['id_kriteria']; ?>"><?= $row['nama_kriteria']; ?></option>

                        <?php foreach($res2 as $r):?>
                       <option value="<?= $r['id_kriteria']; ?>"><?= $r['nama_kriteria'];?></option>
                       <?php endforeach; ?>
                   </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Bobot</label>
                  <div class="col-sm-9">
                    <!-- <input type="text" name="subkriteria" class="form-control" value="<?= $row['keterangan']; ?>"> -->
                    <!-- <input type="radio" name="ket" value="<?= $row['keterangan'] ?>"> <?= $row['keterangan'] ?> -->
                    <select name="ket" id="ket" class="form-control">
                          <option value="<?= $row['keterangan'] ?>"><?= $row['keterangan'] ?></option>
                          <?php foreach($res4 as $cr): ?>
                          <option value="<?= $cr['keterangan'] ?>"><?= $cr['keterangan'] ?></option>
                          <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Nilai</label>
                  <div class="col-sm-9">
                    <input type="text" name="nilai" class="form-control" value="<?= $row['nilai']; ?>">
                    <?php foreach($result as $r):?>
                        <input type="hidden" name="bobot" value="<?= $r['bobot']; ?>">
                    <?php endforeach; ?>
                  </div>
                </div>
                <?php endforeach; ?>
                <div class="row mb-3">
                    <div class="col-sm-3"></div>
                  <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                  </div>
                </div>
                    
              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

      </div>
    </section>

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

</body>

</html>