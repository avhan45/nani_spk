<?php
include("template/headers.php");
include("core/config.php");

$query = "SELECT * FROM user";
$result = mysqli_query($con,$query);


?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Manajemen User</h1>
      <hr style="height:5px;">
      
    </div><!-- End Page Title -->

    <button class="btn btn-primary mb-3"><i class="bi bi-plus"></i> Tambah User</button>
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
                    <th scope="col">Username</th>
                    <th scope="col">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      foreach($result as $row){
                        $no=1;
                  ?>
                  <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $row['username']; ?></td>
                    <td>
                      <a href="#" class="btn btn-warning btn-sm "><i class="bi bi-pencil"></i></a> | <a href="#" class="btn btn-danger btn-sm "><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                  <?php  } ?>
                  
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