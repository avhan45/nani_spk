<?php 
$page = "Nilai Guru";
include("template/headers.php");
include("core/config.php");
include("core/fungsi.php");

$query  = "SELECT * FROM kriteria";
$result = mysqli_query($con,$query);
$qry = "SELECT * FROM crips";
$query3 = mysqli_query($con,$qry);
$query2 = "SELECT * FROM guru";
$res    = mysqli_query($con,$query2);

?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Input Nilai Guru</h1>
      <hr style="height:5px;">
      
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Input Nilai Guru</h5>

              <!-- General Form Elements -->
              <form action="fnilai.php" method="post">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Nama Guru</label>
                  <div class="col-sm-9">
                   <select name="nama_guru" class="form-control">
                       <option value="">--Pilih Guru--</option>
                        <?php foreach($res as $r):?>
                       <option value="<?= $r['id_guru']; ?>"><?= $r['nama_guru'];?></option>
                       <?php endforeach; ?>
                   </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Kriteria</label>
                  <div class="col-sm-9">
                   <select name="kriteria" id="kriteria" class="form-control">
                       <option value="">--Pilih Kriteria--</option>
                        <?php foreach($result as $row):?>
                       <option value="<?= $row['id_kriteria']; ?>"><?= $row['nama_kriteria'];?></option>
                       <?php endforeach; ?>
                   </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Nilai</label>
                  <div class="col-sm-9">
                    <div id="tampildata"></div>
                  <!-- <select name="nilai" id="nilai" class="form-control">
                       <option value="">--Pilih Sub Kriteria--</option>
                        <?php foreach($query3 as $row):?>
                       <option value="<?= $row['nilai']; ?>"><?= $row['crips'];?></option>
                       <?php endforeach; ?>
                   </select>
                  </div> -->
                </div>
                <!-- <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Nilai</label>
                  <div class="col-sm-9">
                    <input type="text" name="nilai" class="form-control">
                    <?php foreach($result as $r):?>
                        <input type="hidden" name="bobot" value="<?= $r['bobot']; ?>">
                    <?php endforeach; ?>
                  </div>
                </div> -->

                <div class="row mb-3">
                    <div class="col-sm-3"></div>
                  <div class="col-sm-9">
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
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      // $("#tampildata").load("core/tampildata.php");
      $("#kriteria").bind('change', function(){
      var kriteria = $("#kriteria").val();

      $.ajax({
        method: 'POST',
        url: "core/tampildata.php",
        data: {kriteria: kriteria},
        success: function(data){
          $('#tampildata').html(data);
        }
      });
      });

    });

  </script>



</body>

</html>