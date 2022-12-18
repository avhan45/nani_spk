<?php 
include("core/config.php");
include("core/fungsi.php");

// Cek Jika Tombol Simpan Di klik
if(isset($_POST['simpan'])){
    $nama       = $_POST['nama_guru'];
    $nip        = $_POST['nip'];
    $jabatan    = $_POST['jabatan'];
    // Simpan data guru ke database
    saveGuru($nama,$nip,$jabatan);
    header("location: data_guru.php");
}
// Jika Tombol edit guru di klik
if(isset($_POST['edit'])){
    $id     = $_POST['id_guru'];
    $nama   = $_POST['nama_guru'];
    $nip    = $_POST['nip'];
    $jabatan = $_POST['jabatan'];
    // Update Data Guru
    updateGuru($id,$nama,$nip,$jabatan);
    header("location: data_guru.php");   
}
// Jika tombol hapus guru di klik
if(isset($_POST['delete'])){
    $id = $_POST['id'];
    // Hapus record guru
    deleteGuru($id);
    header("location: data_guru.php");   
}