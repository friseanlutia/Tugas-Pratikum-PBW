<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register OpMind</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        
        <div class="col-md-6">
        <p>&larr; <a href="index.php">Home</a>
            <h4>Temukan teman baru!</h4>
            <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
            
            <form action="do_register.php" method="POST">

            <div class="form-group">
                <label for="name">Nama</label>
                <input class="form-control" type="nama" name="name" placeholder="Masukkan Nama Lengkap" />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Masukkan Alamat Email" />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Masukkan Password" />
            </div>

            <div class="form-group">
                <label for="password">Konfirmasi Password</label>
                <input class="form-control" type="password" name="confirm_password" placeholder="Masukkan Kembali Password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="register" value="Registrasi" />

            </form>
        </div>

        <div class="col-md-6">
            <img class="img img-responsive" src="img/berteman.jpg" />
        </div>

    </div>
</div>

</body>
</html>