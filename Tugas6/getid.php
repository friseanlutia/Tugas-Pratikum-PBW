<?php
include("koneksi.php");

$id = $_GET["id"];

$sql = "SELECT * FROM krs WHERE id=$id";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);
?>