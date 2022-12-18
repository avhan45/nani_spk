<?php 
include("template/headers.php");
include("core/config.php");
include("core/fungsi.php");


?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Data Kriteria</h1>
      <hr style="height:5px;">
      
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Tambah Kriteria</h5>

              <!-- General Form Elements -->
              <form action="fkriteria.php" method="post">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Kode Kriteria</label>
                  <div class="col-sm-9">
                    <input type="text" name="kd_kriteria" class="form-control" autofocus>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Kriteria</label>
                  <div class="col-sm-9">
                    <input type="text" name="nama_kriteria" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Attribut</label>
                  <div class="col-sm-9">
                    <select name="attribut" class="form-control">
                      <option value="">--Pilih Attribut--</option>
                      <option value="benefit">Benefit</option>
                      <option value="cost">Cost</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Bobot</label>
                  <div class="col-sm-9">
                    <input type="number" name="bobot" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-2"></div>
                  <div class="col-sm-10">
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