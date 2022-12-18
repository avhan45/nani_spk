<?php 
include("core/config.php");

$query = "SELECT DISTINCT nilai.id_guru,nilai.id_kriteria FROM nilai,kriteria,guru WHERE kriteria.id_kriteria=nilai.id_kriteria AND guru.id_guru=nilai.id_guru";
$result = mysqli_query($con,$query);
// $nill = array();
foreach($result as $res){
    $id_g = $res['id_guru'];
    $id_k = $res['id_kriteria'];

    // echo "<pre>";
    // print_r($id_k);
    // echo "</pre>";

    $query2     = "SELECT kriteria.nama_kriteria,attribut, MAX(nilai.nilai) as hasilmax FROM nilai,kriteria,guru WHERE kriteria.id_kriteria=nilai.id_kriteria AND kriteria.id_kriteria='$id_k'";
    $max    = mysqli_query($con,$query2);

    foreach($max as $m){
        $query3  = "SELECT nilai FROM nilai WHERE id_kriteria='$id_k' AND id_guru='$id_g'";
        $nilai   = mysqli_query($con,$query3);
        
        foreach($nilai as $nil){
            if($m['attribut'] == 'benefit'){
                $nilai_normalisasi = number_format($nil['nilai'] / $m['hasilmax'],2);

            }else{
                $query4     = "SELECT kriteria.nama_kriteria,attribut, MIN(nilai.nilai) as hasilmax FROM nilai,kriteria,guru WHERE kriteria.id_kriteria=nilai.id_kriteria AND kriteria.id_kriteria='$id_k'";
                $min    = mysqli_query($con,$query4);
                foreach($min as $mi){

                    $nilai_normalisasi = number_format($nil['nilai'] / $mi['hasilmax'],2);
                }
            }


           
            $cek = "SELECT * FROM normalisasi WHERE id_guru='$res[id_guru]' AND id_kriteria='$res[id_kriteria]' AND nilai_normalisasi='$nilai_normalisasi' ";
            $ck = mysqli_query($con,$cek);

            if(mysqli_num_rows($ck) == 0) {
                    $query = "INSERT INTO normalisasi (id_guru,id_kriteria,nilai_normalisasi) VALUES ('$id_g','$id_k','$nilai_normalisasi')";
                    mysqli_query($con,$query);
            
                }elseif(mysqli_num_rows($ck) == 1){
                 echo "<script>alert('Normalisasi Sudah di lakukan');
                        windows.location.href='hasil.php';
                 </script>"   ;
                }   
        }
    }
    
}
header("location: hasil.php");