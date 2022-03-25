<?php
//variabel bandara keberangkatan
$bandara_keberangkatan = array(
    // nama bandara asal => pajak
    "Soekarno-Hatta (CGK)" => 50000,
    // nama bandara asal => pajak
    "Halim Perdana Kusuma (HLP)" => 30000,
    // nama bandara asal => pajak
    "Bandara Internasional Minangkabau (BIM)" => 40000,
    // nama bandara asal => pajak
    "Ngurah Rai (DPS)" => 20000

);
// membuat array asosiatif bandara tujuan
$bandara_tujuan = array(
    // nama bandara tujuan => pajak
    "Bandara Internasional Minangkabau (BIM)" => 100000,
    // nama bandara tujuan => pajak
    "Soekarno-Hatta (CGK)" => 100000,
    // nama bandara tujuan => pajak
    "Halim Perdana Kusuma (HLP)" => 100000,
    // nama bandara tujuan => pajak
    "Ngurah Rai (DPS)" => 100000,
);

//fungsi untuk mengambil value dari key bandara
// atau mengambil pajak sesuai bandara
function getPajakAsal($bandara_asal, $tujuan)
{
    $pajak = $bandara_asal[$tujuan];
    return $pajak;
}
function getPajakTujuan($bandara_tujuan, $tujuan)
{
    $pajak = $bandara_tujuan[$tujuan];
    return $pajak;
}
?>

<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Link Font  -->
    <link href="https://fonts.google.com/specimen/Red+Hat+Mono" rel="stylesheet">
    <link href="https://fonts.google.com/noto/specimen/Noto+Sans+KR" rel="stylesheet">

    <!--Link Css-->
    <link rel="stylesheet" href="style.css">

    <!-- Link Js-->
    <title>Booking Tiket Pesawat</title>
  </head>

  <body id="home">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <a class="navbar-brand" href="#">KAMANG JAYA</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="#home">HOME</a>
            <a class="nav-link" href="#jadwal">JADWAL</a>
            <a class="nav-link" href="#pendaftaran">PENDAFTARAN</a>
            <a class="nav-link" href="#contact">CONTACT</a>
          </div>
        </div>
    </nav>
  
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">WELCOME TO KAMANG JAYA</h1>
        </div>
      </div>
    <!-- Akhir Jumbotron -->

    <!-- Container -->

    <!--Jadwal-->
      <section class="jadwal" id="jadwal">
        <div class="container">
          <div class="row jusitify-content-center">
            <h4 class=jadwal>JADWAL PENERBANGAN</h4>

        <?php
        $file = 'data/maskapai.json';
        $data_maskapai = array();

        $file_json = file_get_contents($file);

        $data_maskapai = json_decode($file_json, true);

        if (isset($_POST['submit'])) {
            $pajak = getPajakAsal($bandara_asal, $_POST['asal']) + getPajakTujuan($bandara_tujuan, $_POST['tujuan']);
            $total = $pajak + $_POST['harga'];

            $inputUser = array(
                "Maskapai" => $_POST['maskapai'],
                "Asal_penerbangan" => $_POST['asal'],
                "tujuan_penerbangan" => $_POST['tujuan'],
                "Harga_tiket" => $_POST['harga'],
                "Pajak" => $pajak,
                "Total_harga" => $total
            );

            array_push($data_maskapai, $inputUser);

            $data_json = json_encode($data_maskapai, JSON_PRETTY_PRINT);
            file_put_contents($file, $data_json);
        }

        ?>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Maskapai</th>
                        <th scope="col">Bandara Keberangkatan</th>
                        <th scope="col">Bandara Tujuan</th>
                        <th scope="col">Harga Tiket</th>
                        <th scope="col">Pajak</th>
                        <th scope="col">Total Harga Tiket</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data_maskapai as $data => $value) : ?>
                        <tr>
                            <td><?= $data_maskapai[$data]['Maskapai']; ?></td>
                            <td><?= $data_maskapai[$data]['bandara_keberangkatan']; ?></td>
                            <td><?= $data_maskapai[$data]['bandara_tujuan']; ?></td>
                            <td><?= $data_maskapai[$data]['Harga_tiket']; ?></td>
                            <td><?= $data_maskapai[$data]['Pajak']; ?></td>
                            <td><?= $data_maskapai[$data]['Total_harga']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
          </div>
          </div>  
        </div>         
      </section>
      <!-- Akhir Jadwal-->

      <!-- Pendaftaran -->
      <section class="pendaftaran" id="pendaftaran">
        <div class="container">
        <div class="row jusitify-content-center">
          <div class="col-lg-6 pendaftaran">
              <h4>PENDAFTARAN</h4>

                <form action="" method="POST">
                    <div class="mb-3">
                      <label for="maskapai" class="form-label">Maskapai</label>
                      <input type="text" class="form-control" id="maskapai" name="maskapai">
                    </div>

                    <label for="asal" class="form-label">Asal Keberangkatan</label>
                    <select class="form-select mb-3" name="asal" id="asal">
                      <option selected>Pilih Bandara</option>
                      <?php foreach ($bandara_keberangkatan as $bandara => $pajak) : ?>
                      <option value="<?= $bandara ?>"><?= $bandara; ?></option>
                      <?php endforeach; ?>
                    </select>

                    <label for="tujuan" class="form-label">Tujuan Bandara</label>
                    <select class="form-select mb-3" name="tujuan" id="tujuan">
                      <option selected>Pilih Bandara</option>
                      <?php foreach ($bandara_tujuan as $bandara => $pajak) : ?>
                      <option value="<?= $bandara ?>"><?= $bandara; ?></option>
                      <?php endforeach; ?>
                    </select>

                    <div class="mb-3">
                    <label for="harga" class="form-label">Harga Tiket</label>
                    <input type="text" class="form-control" name="harga" id="harga">
                    </div>

                    <button class="btn btn-success" name="submit">Simpan</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Akhir Pendaftaran -->

    <!-- Contact-->
    <section class="contact" id="contact">
      <div class="container">
        <div class="row jusitify-content-center">
          <h3>CONTACT</h3>

          <form class="contact">
            <div class="mb-3">
              <label for="inputEmail" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="email" placeholder="Masukin Email">
            </div>

            <div class="mb-3">
              <div class="row form">
                <div class="col-lg-6">
                  <label for="inputNama" class="form-label">Nama Depan</label>
                  <input type="text" class="form-control" id="inputNama" aria-describedby="nama" placeholder="Nama Depan Kamu">
                </div>

                <div class="col-lg-6">
                  <label for="inputNama" class="form-label">Nama Belakang</label>
                  <input type="text" class="form-control" id="inputNama" aria-describedby="nama" placeholder="Nama Belakang Kamu">
                </div>
              </div>
            </div> 

            <div class="mb-3">
              <label for="floatingTextarea2" class="form-label">Komentar</label>
                <div class="form-floating">
                  <textarea class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
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
    <!-- Akhir Contact -->


      <!-- Footer -->
      <div class="container">
      <div class="row footer">
        <div class="col text-right">
          <p>2022 All Rights Reserved by Frise Anesha Lutia</p>
        </div>
      </div>
      <!-- Akhir Footer -->
    </div>
    </div>
    <!-- Akhir Container -->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>

