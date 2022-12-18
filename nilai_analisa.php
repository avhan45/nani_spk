<?php
include("core/config.php");


$query = "SELECT normalisasi.id_kriteria,normalisasi.id_guru,bobot FROM normalisasi,kriteria, guru WHERE normalisasi.id_kriteria=kriteria.id_kriteria AND normalisasi.id_guru=guru.id_guru";
$result = mysqli_query($con, $query);

foreach($result as $r){
    $id_k = $r['id_kriteria'];
    $id_g = $r['id_guru'];
    $bobot = $r['bobot'];

    $query2 = "SELECT nilai_normalisasi FROM normalisasi WHERE id_guru='$id_g' AND id_kriteria='$id_k' ";
    $result2 = mysqli_query($con,$query2);

    foreach($result2 as $rr){
        $nilai_n = $rr['nilai_normalisasi'];

        $b = $bobot / 100;

        $h = $nilai_n * $b;
        // var_dump($h);die();
        $cek = "SELECT * FROM perhitungan WHERE id_guru='$id_k' AND id_kriteria='$id_k' AND nilai_perhitungan='$h' ";

        $ck = mysqli_query($con,$cek);
        if(mysqli_num_rows($ck) == 0) {
            $query3 = "INSERT INTO perhitungan (id_guru,id_kriteria,nilai_perhitungan) VALUES ('$id_g','$id_k','$h')";
            mysqli_query($con,$query3);
        }elseif(mysqli_num_rows($ck) == 1){
            echo "<script>alert('Normalisasi Sudah di lakukan');
                   windows.location.href='hasil.php';
            </script>"   ;
           } 
    }
}
header('location: hasil.php');