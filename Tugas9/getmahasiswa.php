<?php
require_once("koneksi.php");

if(empty($_GET)){

$query = mysqli_query($conn, "SELECT * FROM nilai_mahasiswa");

$result = array();
while($row = mysqli_fetch_array($query)){
    array_push($result, array(
        'nim' => $row['nim'],
        'nama' => $row['nama'],
        'semester_1' => $row['semester_1'],
        'semester_2' => $row['semester_2'],
        'semester_3' => $row['semester_3'],
    ));
}

echo json_encode(
    array('result' => $result)
);
}
?>