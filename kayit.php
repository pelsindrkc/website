<?php
require 'baglan.php';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa | pd eğitim</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/f699762119.js" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital@1&display=swap" rel="stylesheet">
</head>
<body>
    <section id="menu">
       <h2> <div id="logo"> <i class="fas fa-chalkboard-teacher"></i>
            PD EĞİTİM
</h2>
        </div>
        <nav>
            <a href="anasayfa.php"><i class="fas fa-home ikon"></i>Anasayfa</a>
            <a href="hakkimizda.php"><i class="fas fa-info ikon"></i>Hakkımızda</a>
            <a href="egitimler.php"><i class="fas fa-user-graduate ikon"></i>Eğitimler</a>
            <a href="iletisim.php"><i class="fas fa-map-pin ikon"></i>İletişim</a>
        </nav>
    </section>
    <div class="login">
           <div class="login-screen">
               <div class="app-title">
                   <h1>Kayıt Ol</h1>
               </div>
               <form action="islem.php" method="post">
               <div class="login-form">
                   <div class="control-group">
                       <input type="text" name="username" class="login-field" placeholder="Kullanıcı Adı" id="login-name">
                       <label class="login-field-icon fui-user" for="login-name"></label>
                   </div>
                   <div class="control-group">
                       <input type="password" name="password" class="login-field" placeholder="Şifre" id="login-pass">
                       <label class="login-field-icon fui-user" for="login-pass"></label>
                    </div>
                    <div class="control-group">
                       <input type="password" name="password_again" class="login-field" placeholder="Tekrar Şifre" id="login-pass">
                       <label class="login-field-icon fui-user" for="login-pass"></label>
                    </div>
                                       
                    <button href="kayit.php" name="kayit" class="btn btn-primary btn-large btn-block">Kayıt Ol</button>
               </div> 
</form>
<a href="anasayfa.php"><button href="anasayfa.php" name="giris" class="btn btn-primary btn-large btn-block">Giriş Yap</button></a>
        </div>    
   </div>
  
</body>
</html>