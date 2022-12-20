<?php 
include("template/headers.php");
include("core/config.php");
include("core/fungsi.php");

$query = mysqli_query($con, "SELECT * FROM kriteria");

?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Data Sub Kriteria</h1>
      <hr style="height:5px;">
      
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Tambah Sub Kriteria</h5>

              <!-- General Form Elements -->
              <form action="fsubkriteria.php" method="post">
              <div class="row mb-3">
                  <label for="inputText" class="col-sm-4 col-form-label">Kriteria</label>
                  <div class="col-sm-8">
                   <select name="kriteria" id="kriteria" class="form-control">
                       <option value="">--Pilih Kriteria--</option>
                        <?php foreach($query as $row):?>
                       <option value="<?= $row['id_kriteria']; ?>"><?= $row['nama_kriteria'];?></option>
                       <?php endforeach; ?>
                   </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-4 col-form-label">Nama Sub Kriteria</label>
                  <div class="col-sm-8">
                    <textarea type="text" name="namasub" class="form-control"></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-4 col-form-label">Keterangan</label>
                  <div class="col-sm-8">
                    <input type="radio" name="ket" value="A" style="margin: 20px;"><span style="margin-left: -15px;">A</span>
                    <input type="radio" name="ket" value="B" style="margin: 20px;"><span style="margin-left: -15px;">B</span>
                    <input type="radio" name="ket" value="C" style="margin: 20px;"><span style="margin-left: -15px;">C</span>
                    <input type="radio" name="ket" value="D" style="margin: 20px;"><span style="margin-left: -15px;">D</span>
                    <input type="radio" name="ket" value="E" style="margin: 20px;"><span style="margin-left: -15px;">E</span>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-4 col-form-label">Bobot</label>
                  <div class="col-sm-8">
                    <input type="text" name="bobot" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4"></div>
                  <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
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