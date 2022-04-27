<?php

include("koneksi.php");

$nim = isset( $_POST["nim"]) ? $_POST["nim"] : "";
$nama = isset( $_POST["nama"]) ? $_POST["nama"] : "";
$semester_1 = isset( $_POST["semester_1"])  ? $_POST["semester_1"] : "";
$semester_2 = isset( $_POST["semester_2"])  ? $_POST["semester_2"] : "";
$semester_3 = isset( $_POST["semester_3"])  ? $_POST["semester_3"] : "";

$sql = "INSERT INTO nilai_mahasiswa (nim, nama, semester_1, semester_2, semester_3) VALUES ('".$nim."','".$nama."','".$semester_1."','".$semester_2."','".$semester_3."');";

$query = mysqli_query($conn,$sql);

if($query){
    $msg = "Data Mahasiswa Berhasil Ditambahkan";
}else{
    $msg = "Data Gagal Ditambahkan";
}

$respone = array(
    'status' => "OK",
    'msg' => $msg
);

echo json_encode($respone,JSON_PRETTY_PRINT);
?>