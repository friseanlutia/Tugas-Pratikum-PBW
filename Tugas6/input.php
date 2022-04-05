<?php 

include "koneksi.php";

if(isset($_POST["submit"])){
    $npm = $_POST["npm"];
    $nama = $_POST["nama"];
    $jurusan = $_POST["jurusan"];
    $makul = $_POST["makul"];
    $sks = $_POST["sks"];
    $alamat = $_POST["alamat"];

    $query = mysqli_query($conn, "INSERT INTO mahasiswa (npm, nama, jurusan, alamat) VALUES ('$npm','$nama','$jurusan','$alamat')");
    if ($query) {
        $query1 = mysqli_query($conn, "INSERT INTO krs (id, mahasiswa_npm, matakuliah_kodemk) VALUES ('','$npm','$makul')");
        $message = "Data berhasil di input";
        $message = urlencode($messae);
        header("Location:../index.php?message={$message}");
    }else{
        $message = "Data gagal di input, periksa kembali";
        $message = urlencode($message);
        header("Location:../index.php?message={$message}");
    }
}
?>