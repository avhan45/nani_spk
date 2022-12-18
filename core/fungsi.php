<?php 

// Menambah Data Kriteria
function saveKriteria($kd_kriteria,$nama,$attribut,$bobot){
    include("config.php");
    $query = "INSERT INTO kriteria (kd_kriteria,nama_kriteria,attribut,bobot) VALUES ('$kd_kriteria','$nama','$attribut','$bobot') ";
    $save = mysqli_query($con,$query);
    
    if(!$save){
        echo "Gagal Menambah Data Kriteria";
        exit();
    }
}

// Menghapus Data Kriteria
function delKriteria($id){
    include("config.php");
    // Menghapus Record Kriteria
    $query = "DELETE FROM kriteria WHERE id_kriteria=$id ";
    mysqli_query($con, $query);
}

// Mengupdate Data Kriteria
function updateKriteria($id,$kd_kriteria,$nama,$attribut,$bobot){
    include("config.php");
    // Update record Kriteria
    $query = "UPDATE kriteria SET kd_kriteria='$kd_kriteria', nama_kriteria='$nama', attribut='$attribut', bobot='$bobot' WHERE id_kriteria='$id' ";
    mysqli_query($con, $query);
}

// Menyimpan Data Guru
function SaveGuru($nama,$nip,$jabatan){
    include('config.php');
    // Simpan record Guru
    $query = "INSERT INTO guru (nama_guru,nip,jabatan) VALUES ('$nama','$nip','$jabatan') ";
    mysqli_query($con,$query);
}

// Update Data Guru
function updateGuru($id,$nama,$nip,$jabatan){
    include("config.php");
    // Update Record Guru
    $query = "UPDATE guru SET nama_guru='$nama',nip='$nip',jabatan='$jabatan' WHERE id_guru='$id' ";
    mysqli_query($con,$query);
}
// Hapus Data Guru
function deleteGuru($id){
    include("config.php");
    // Hapus Record Data Guru
    $query = "DELETE FROM guru WHERE id_guru=$id";
    mysqli_query($con,$query);
}
// Simpan Nilai Guru
function saveNilai($nama,$kriteria,$nilai){
    include("config.php");
    // Simpan Record Data Nilai
    $query = "INSERT INTO nilai (id_guru,id_kriteria,nilai) VALUES ('$nama','$kriteria','$nilai')";
    mysqli_query($con,$query);
}
// Update Nilai Guru
function updateNilai($id,$nama,$kriteria,$nilai){
    include("config.php");
    // Update Record Data Nilai
    $query = "UPDATE nilai SET id_guru='$nama',id_kriteria='$kriteria',nilai='$nilai' WHERE id_nilai=$id ";
    mysqli_query($con,$query);
}
// Hapus Nilai Guru
function deleteNilai($id){
    include("config.php");
    // Hapus Record NIlai Guru
    $query = "DELETE FROM nilai WHERE id_nilai=$id";
    mysqli_query($con,$query);
}
// Simpan Rangking
function saveRangking($id_g,$rank){
    include("config.php");
    // Simpan record Rangking
    $query = "INSERT INTO rangking (id_guru,nilai_rangking) VALUES ('$id_g','$rank')";
    mysqli_query($con,$query);
}
function saveSubKriteria($kriteria,$namasub,$ket,$bobot)
{
    include("config.php");
    // $query = "INSERT INTO crips (id_cirps,id_kriteria,crips,nilai) VALUES (NULL, '$kriteria','$namasub','$nilai')";
    $query = "INSERT INTO crips (id_kriteria,crips,keterangan,nilai) VALUES ('$kriteria','$namasub','$ket','$bobot')  ";
    mysqli_query($con, $query);
}
function  updateSubKriteria($id,$kriteria,$namasub,$ket,$bobot)
{
    include("config.php");

    $query = "UPDATE crips SET id_kriteria='$kriteria', crips='$namasub', keterangan='$ket', nilai='$bobot' WHERE id_crips=$id ";
    mysqli_query($con, $query);
}
function delSubKriteria($id)
{
    include('config.php');
    $query = "DELETE FROM crips WHERE id_crips=$id ";
    mysqli_query($con,$query);
}

function cekNilai($nilai){

    if($nilai == "A"){
        $bobot = 5;
    }else if($nilai == "B"){
        $bobot = 4;
    }else if($nilai == "C"){
        $bobot = 3;
    }else if( $nilai == "D"){
        $bobot = 2; 
    }else if( $nilai == "E"){
        $bobot = 1;
    }
    return $bobot;

}