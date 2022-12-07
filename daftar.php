<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="masuk.css">
</head>
<body>
    <section>
        <div class="gambar">
            <img src="haha.jpg">
        </div>
        <div class="cntn">
            <div class="lgin">
            <h2>Daftar</h2>
                <form action="submitdaftar.php" method="POST">
                <div class="input">
                    <span>Username</span>
                    <input type="text" name="username" required>
                    </div>
                <div class="input">
                    <span>Buat Kata sandi</span>
                    <input type="password" name="password" required>
                     </div>
                     <div class="input">
                        <span>Ulangi Kata sandi</span>
                        <input type="password" name="password1" required>
                         </div>
                     <div class="input">
                        <input type="submit" value="DAFTAR">
                    <div class="input">
                          <p >Sudah punya akun?<a href="masuk.php">Masuk sekarang</a></p>
</form>
            </div>
        </div>
    </section>
</body>
</html>