<?php
include("koneksi.php");
?>

<!Doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Nilai Mahasiswa</title>
  </head>
  <body>
    <br><h3>NILAI MAHASISWA</h3><br>
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">NIM</th>
                        <th scope="col" >Nama</th>
                        <th scope="col">Nilai Semester 1</th>
                        <th scope="col">Nilai Semester 2</th>
                        <th scope="col">Nilai Semester 3</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM nilai_mahasiswa";
                    $query = mysqli_query($conn,$sql);
                    $data = mysqli_fetch_array($query);
                    ?>
                    <?php foreach ($query as $row) : ?>
                        <tr>
                            <td><?= $row['nim']; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['semester_1']; ?></td>
                            <td><?= $row['semester_2']; ?></td>
                            <td><?= $row['semester_3']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </section> 

   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
