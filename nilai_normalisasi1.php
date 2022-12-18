<?php 
include("core/config.php");

$query = "SELECT DISTINCT nilai.id_guru,nilai.id_kriteria FROM nilai,kriteria,guru WHERE kriteria.id_kriteria=nilai.id_kriteria AND guru.id_guru=nilai.id_guru";
$result = mysqli_query($con,$query);

foreach($result as $res){
    $id_k   = $res['id_kriteria'];
    $id_g   = $res['id_guru'];
    $max = "SELECT kriteria.nama_kriteria, MAX(nilai.nilai) as hasilmax FROM nilai,kriteria,guru WHERE kriteria.id_kriteria=nilai.id_kriteria AND kriteria.id_kriteria='$id_k'";
    $mx = mysqli_query($con,$max);
    $mxx = mysqli_fetch_assoc($mx);

    $nil = "SELECT nilai FROM nilai WHERE id_kriteria='$id_k' AND id_guru='$id_g'";
    $nn  = mysqli_query($con,$nil);
    $nl = mysqli_fetch_assoc($nn);

        $id_guru = $res['id_guru'];
        $id_kriteria = $res['id_kriteria'];
        $nilai_normalisasi = number_format($nl['nilai']/$mxx['hasilmax'],2);

    $nimax = number_format($nl['nilai']/$mxx['hasilmax'],2);
    
    // $cek = "SELECT * FROM normalisasi WHERE id_guru='$res[id_guru]' AND id_kriteria='$res[id_kriteria]' AND nilai_normalisasi='$nimax' ";
    // $ck = mysqli_query($con,$cek);
    // $cc = mysqli_fetch_assoc($ck);

    
    // if(mysqli_num_rows($ck) == 0) {
    //     $query = "INSERT INTO normalisasi (id_guru,id_kriteria,nilai_normalisasi) VALUES ('$id_guru','$id_kriteria','$nilai_normalisasi')";
    //     mysqli_query($con,$query);

    // }elseif(mysqli_num_rows($ck) == 1){
    //  echo "<script>alert('Normalisasi Sudah di lakukan');
    //         windows.location.href='hasil.php';
    //  </script>"   ;
    // }

}
// header("location: hasil.php");