<?php 
include ("getdata.php");
?>

<!Doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel='stylesheet'>

    <title>Akademik Mahasiswa</title>
  </head>

<body id="home">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <a class="navbar-brand" href="#">UNIVERSITAS KAMANG JAYA</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="#home">HOME</a>
            <a class="nav-link" href="#mahasiswa">MAHASISWA</a>
            <a class="nav-link" href="#contact">CONTACT</a>
          </div>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row jusitify-content-center">
                    <h1 class="display-4">AKADEMIK UNIVERSITAS KAMANG JAYA</h1>
                </div>
            </div>
        </div>
    </div>

    <section class= mahasiswa id="mahasiswa">
        <div class="container mahasiswa">
            <div class="row jusitify-content-center">
                <h3>MAHASISWA</h3>
                    <div class="row">
                        <div class="col justify-content-center">
                            <div class='tombol'>
                                <a href="form.php" class="btn btn-primary">Input Data</a>
                                <a href="#tabel" class="btn btn-success">KRS</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>


    <section class="tampil-data" id="tabel">
        <div class="container tampil-data">
            <h2 style="text-align:center;font-weight:bolder;">DAFTAR PENGAMBILAN KRS</h2>
                        <table class="table table-striped" id='table-data'>
                            <thead>
                                <tr>
                                    <th scope="col" >No</th>
                                    <th scope="col" >Nama Lengkap</th>
                                    <th scope="col" >Mata Kuliah</th>
                                    <th scope="col" >Keterangan</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                if (!isset($query)) {
                                    echo "Belum ada yang mengisi KRS";
                                }else{
                                    while ($row = mysqli_fetch_assoc($run)){
                                        echo '<tr>
                                        <td>' . $row['id'] . '</td>
                                        <td>' . $row['nama'] . '</td>
                                        <td>' . $row['namamk'] . '</td>
                                        <td>' . "<span style='color:palevioletred;font-weight:bolder;'>".$row['nama']."</span>". ' Mengambil Mata Kuliah ' . "<span style='color:palevioletred;font-weight:bolder;'>" . $row['namamk'] ."</span>". " ( ".$row['jumlah_sks'] . ' SKS )' . '</td> 
                                        </tr>';
                                    }
                                } 
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </section>

    <section class="contact" id="contact">
      <div class="container">
        <div class="row jusitify-content-center">
          <h3>CONTACT</h3>

          <form class="contact">
            <div class="mb-3">
              <label for="inputEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="email" placeholder="Masukan Email">
            </div>

            <div class="mb-3">
              <div class="row form">
                <div class="col-lg-6">
                  <label for="inputNama" class="form-label">Nama Depan</label>
                  <input type="text" class="form-control" id="inputNama" aria-describedby="nama" placeholder="Nama Depan">
                </div>

                <div class="col-lg-6">
                  <label for="inputNama" class="form-label">Nama Belakang</label>
                  <input type="text" class="form-control" id="inputNama" aria-describedby="nama" placeholder="Nama Belakang">
                </div>
              </div>
            </div> 

            <div class="mb-3">
              <label for="floatingTextarea2" class="form-label">Komentar</label>
                <div class="form-floating" >
                  <textarea class="form-control" id="floatingTextarea2" style="height: 100px" ></textarea>
                </div>
            </div>

            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Saya menyetujui tulisan saya</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="row footer">
        <div class="col text-right">
          <p>2022 All Rights Reserved by Frise Anesha Lutia</p>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>