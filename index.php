<?php include_once 'baglanti.php'; ?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Like Projesi</title>
    <link rel="stylesheet" href="gerek/girisekrani/savas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<div id="particles-js"></div>
<body class="login">
<div class="container">
    <div class="login-container-wrapper clearfix">
        <div class="logo">
            <i class="fa fa-sign-in"></i>
        </div>
        <div class="Hoşgeldiniz"><strong>Hoşgeldiniz,</strong> Lütfen giriş yapın</div>

        <form class="form-horizontal login-form" action="giris.php" method="post">
            <div class="form-group relative">
                <input name="kadi" class="form-control input-lg" type="text" placeholder="Kullanıcı Adı" required>
                <i class="fa fa-user"></i>
            </div>
            <div class="form-group relative password">
                <input  name="sifre" class="form-control input-lg" type="password" placeholder="Şifre" required>
                <i class="fa fa-lock"></i>
            </div>
            <div class="form-group">
                <button type="submit"  name="gonder" class="btn btn-success btn-lg btn-block">Giriş</button>
            </div>

        </form>
    </div>


</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
</body>
</html>

