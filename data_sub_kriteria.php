<?php 
$page = "Sub Kriteria";
include("template/headers.php");
include("core/config.php");
include("core/fungsi.php");

// $query = "SELECT * FROM sub_kriteria,kriteria WHERE sub_kriteria.id_kriteria=kriteria.id_kriteria";
$query = "SELECT * FROM crips,kriteria WHERE crips.id_kriteria=kriteria.id_kriteria ORDER BY crips.id_kriteria ASC";
$result = mysqli_query($con,$query);

$query2 = "SELECT SUM(nilai) as total FROM crips WHERE id_kriteria=1";
$res = mysqli_query($con,$query2);


?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Sub Kriteria</h1>
      <hr style="height:5px;">
      
    </div><!-- End Page Title -->

    <a href="tambah_subkriteria.php" class="btn btn-primary mb-3"><i class="bi bi-plus"></i> Tambah Data Sub Kriteria</a>
    <button onclick="history.back()" class="btn btn-secondary mb-3" style="float: right;"><i class="bi bi-arrow-return-left"></i> Kembali</button>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
            
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col" rowspan="2" >No</th>
                    <th scope="col" rowspan="2">Kriteria</th>
                    <th scope="col" rowspan="2">Nama Sub Kriteria</th>
                    <th scope="col" rowspan="2">ket</th>
                    <th scope="col" rowspan="2">Bobot</th>
                    <!-- <th scope="col" rowspan="2">Total</th> -->
                    <th scope="col" rowspan="2">Aksi</th>
                  </tr>

                
                </thead>
                <tbody>
                  <?php 
                    $no= 1;
                  foreach($result as $row): 
                    ?>
                  <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td ><?= $row['kd_kriteria']; ?></td>
                    <td style="width: 60% !important;">
                      <?php
                      $crips = $row['crips'];
                      $sub = strlen($crips);
                      if($sub > 70){
                      ?>
                      <!-- <?= $sub ?> -->
                      <?= substr($row['crips'],0,70); ?> 
                      <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#lanjut<?= $row['id_crips'] ?>">
                          Lanjut
                        </button>
                      <?php }else{  ?>
                        <?= $crips; ?>
                        <?php } ?>
                    </td>
                    <td><?= $row['keterangan']; ?></td>
                    <td><?= $row['nilai']; ?></td>

                    <td>
                      <form action="fsubkriteria.php" method="post">
                        <input type="hidden" name="id_crips" value="<?= $row['id_crips']; ?>">
                        <a href="edit_subkriteria.php?id=<?=$row['id_crips']; ?>" class="btn btn-warning btn-sm " name="edit"><i class="bi bi-pencil"></i></a> | <button  class="btn btn-danger btn-sm" name="delete"><i class="bi bi-trash"></i></button>
                      </form>
                      </td>

                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="lanjut<?= $row['id_crips'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                    <p>
                                      <?= $row['crips'] ?>
                                    </p>
                                  </div>
                                 
                            </div>
                          </div>
                        </div>
                  <?php endforeach; ?>
                 
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>
                      <!-- Lanjut Baca -->
                     <!-- Button trigger modal -->
                        

                     
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
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    
    $(document).ready(function() {
      // if($("#ya").val() == 1){
      //   $("#ya").attr("checked", true);
      // }else{
      //   $("#ya").attr("checked", false);
      // }
      // $.ajax({
      //   type: "POST",
      //   url: "core/ajax.php",
      //   data: {
      //     id:
      //     nilai:1
      //   },
      //   success: function
      // });
    });

  </script>


</body>

</html>