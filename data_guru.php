<?php 
include("template/headers.php");
include("core/config.php");

$query = "SELECT * FROM guru";
$result = mysqli_query($con,$query);
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Guru</h1>
      <hr style="height:5px;">
      
    </div><!-- End Page Title -->

    <a href="tambah_guru.php" class="btn btn-primary mb-3"><i class="bi bi-plus"></i> Tambah Data Guru</a>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
            
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nip</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no=1;
                   foreach($result as $row):  ?>
                  <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $row['nama_guru']; ?></td>
                    <td><?= $row['nip']; ?></td>
                    <td><?= $row['jabatan']; ?></td>
                    <td>
                      <form action="fguru.php" method="POST">
                      <input type="hidden" name="id" value="<?= $row['id_guru']; ?>">
                        <a href="edit_guru.php?id=<?= $row['id_guru']; ?>" class="btn btn-warning btn-sm "><i class="bi bi-pencil"></i></a> | <button class="btn btn-danger btn-sm" type="submit" name="delete"><i class="bi bi-trash"></i></button>
                      </form>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

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