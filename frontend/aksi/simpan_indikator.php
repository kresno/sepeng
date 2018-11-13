<?php 
include '../config/koneksi.php';

$kegiatan_id = $_POST['kegiatan_id'];
$satuan = $_POST['satuan'];
$ksatu = $_POST['ksatu'];
$rsatu = $_POST['rsatu'];
$kdua = $_POST['kdua'];
$rdua = $_POST['rdua'];
$ktiga = $_POST['ktiga'];
$rtiga = $_POST['rtiga'];
$kempat = $_POST['kempat'];
$rempat = $_POST['rempat'];
$klima = $_POST['klima'];
$rlima = $_POST['rlima'];
$kenam = $_POST['kenam'];
$renam = $_POST['renam'];
$ktujuh = $_POST['ktujuh'];
$rtujuh = $_POST['rtujuh'];

$sql = "INSERT INTO indikator_kegiatan(kegiatan_id, satuan, ksatu, rsatu, kdua, rdua, ktiga, rtiga, kempat, rempat, klima, rlima, kenam, renam, ktujuh, rtujuh) VALUES ('$kegiatan_id', '$satuan', '$ksatu', '$rsatu', '$kdua', '$rdua', '$ktiga', '$rtiga', '$kempat', '$rempat', '$klima','$rlima', '$kenam', '$renam', '$ktujuh', '$rtujuh')";
if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
}else{
    echo "<script>alert('Data Berhasil di Simpan'); window.location.href='../indikator.php';</script>";
}

?>