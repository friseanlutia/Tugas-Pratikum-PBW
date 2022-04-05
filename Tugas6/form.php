<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="style.css" rel='stylesheet'>

        <title>Input Data</title>
    </head>

<body>

<div class="container">
    <form action="input.php" method="POST" enctype="multipart/form-data">
        <div class="row d-flex justify-content-center mb-5 login">
            <h3>INPUT DATA</h3>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label for="npm" class="form-label">NPM</label>
                        <input type="text" class="form-control" placeholder="NPM lengkap" id="npm" name="npm">
                    </div>

                    <div class="mb-3">
                        <br>
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="nama" placeholder="Nama lengkap"class="form-control" id="nama">
                    </div>

                    <div class="mb-3">
                        <br>
                        <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-select mb-3" name="jurusan" id="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                            </select>
                    </div>

                    <div class="mb-3">
                        <br>
                        <label for="makul" class="form-label">Mata Kuliah</label>
                            <select class="form-select mb-3" name="makul" id="makul">
                                <option value="1">Basis Data</option>
                                <option value="2">Pemprograman Berbasis Web</option>
                                <option value="3">Algoritma dan Struktur Data</option>
                                <option value="4">Kajian Jurnal Informatika</option>
                            </select>
                    </div>

                    <div class="mb-3">
                        <br>
                        <label for="sks" class="form-label">Jumlah SKS</label>
                            <select class="form-select mb-3" name="sks" id="sks">
                                <option value="3">3</option>
                                <option value="3">3</option>
                            </select>
                    </div>

                    <div class="mb-3">
                        <br>
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" placeholder="Almat Lengkap" name='alamat' id="alamat" style="height: 100px"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" name="register">Submit</button>
                </div>
        </div>
    </form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
</body>
</html>