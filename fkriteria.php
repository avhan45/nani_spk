<?php
include("core/config.php");
include("core/fungsi.php");

// cek Jika Tombol Simpan di tekan
if(isset($_POST['simpan'])){
    $kd_kriteria = $_POST['kd_kriteria'];
    $nama   = $_POST['nama_kriteria'];
    $attribut   = $_POST['attribut'];
    $bobot  = $_POST['bobot'];
    
    // Input Data ke dalam database
    saveKriteria($kd_kriteria,$nama,$attribut, $bobot);
    header('location: data_kriteria.php');
}

// Cek Jika Tombol delete di tekan 
if(isset($_POST['delete'])){
    $id = $_POST['id'];

    // Hapus Record Data Kriteria
    delKriteria($id);
    header("location: data_kriteria.php");
}

// Cek Jika Tombol Edit di tekan 
if(isset($_POST['edit'])){
    $id = $_POST['id_kriteria'];
    $kd_kriteria = $_POST['kd_kriteria'];
    $nama = $_POST['nama_kriteria'];
    $attribut = $_POST['attribut'];
    $bobot = $_POST['bobot'];
    // Update record data kriteria
    updateKriteria($id,$kd_kriteria,$nama,$attribut,$bobot);
    header("location: data_kriteria.php"); 
}