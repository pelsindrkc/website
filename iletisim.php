<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim | pd eğitim</title>
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
   <section id="iletisim"> 
    <div class="container">
        <h3 id="h3iletisim">İletişim</h3>
        <div id="iletisimopak">
            <div id="formgroup">
                <div id="solform">
                    <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control" > <!required alanı doldurmak zorunlu->
                    <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                </div>
                <div id="sagform">
                <input type="email" name="mail" placeholder="Email Adresi" required class="form-control" >
                    <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                </div>
                <textarea name="mesaj" id="" cols="30" placeholder="Mesaj Giriniz" rows="10" required class="form-control"></textarea>
                <input type="submit" value="Gönder">
            </div>
            <div id="adres">

            <h4 id="adresbaslik">Adres: </h4>
            <p class="adresp"> Mehmet Akif Ersoy Mah.</p>
            <p class="adresp">Akyıldız Caddesi</p>
            <p class="adresp">Oğuz Bey Sokak No:123</p>
            <p class="adresp">0322 456 66 48</p>
            <p class="adresp">Email:pdegitim@gmail.com</p>
            </div>
        </div>
<footer>

<div id="copyright"> 2020 Tüm Hakları Saklıdır.</div>
<div id="socialfooter">
    <a href="#"><i class="fab fa-facebook-f social"></i></a>
    <a href="#"><i class="fab fa-google-plus-g social"></i></a>
    <a href="#"><i class="fab fa-twitter social"></i></a>
</div>
</footer>
    </div>


    </section>
    </body>
</html>