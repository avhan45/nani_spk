<?php 
include("template/headers.php");
include("core/config.php");
include("core/fungsi.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM kriteria WHERE id_kriteria=$id";
    $result = mysqli_query($con, $query);
}

?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Data Kriteria</h1>
      <hr style="height:5px;">
      
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Edit Kriteria</h5>

              <!-- General Form Elements -->
              <form action="fkriteria.php" method="post">
                  <?php foreach($result as $row): ?>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Kode Kriteria</label>
                  <div class="col-sm-9">
                      <input type="hidden" name="id_kriteria" value="<?= $row['id_kriteria']; ?>">
                    <input type="text" name="kd_kriteria" class="form-control" value="<?= $row['kd_kriteria']; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Kriteria</label>
                  <div class="col-sm-9">
                      <input type="hidden" name="id_kriteria" value="<?= $row['id_kriteria']; ?>">
                    <input type="text" name="nama_kriteria" class="form-control" value="<?= $row['nama_kriteria']; ?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Attribut</label>
                  <div class="col-sm-9">
                      <select name="attribut" class="form-control">
                        <option value="<?= $row['attribut']; ?>"><?= $row['attribut']; ?></option>
                        <option value="benefit">Benefit</option>
                        <option value="cost">Cost</option>
                      </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Bobot</label>
                  <div class="col-sm-9">
                    <input type="number" name="bobot" value="<?= $row['bobot']; ?>" class="form-control">
                  </div>
                </div>
                <?php endforeach; ?>

                <div class="row mb-3">
                    <div class="col-sm-2"></div>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="edit">Update</button>
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