<?php
ob_start();
session_start();
require 'baglan.php';
if(isset($_POST['kayit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_again = @$_POST['password_again'];

    if(!$username){
        echo "Lütfen Kulllanıcı Adınızı Girin";
    }elseif(!$password || !$password_again){
        echo "Lütfen Şifrenizi Girin";
    }elseif($password != $password_again){
        echo "Girdiğiniz Şifreler Birbirleriyle Aynı Değil";
    }else{
        $sorgu = $db->prepare('INSERT INTO users SET user_name = ?, user_password = ?');
        $ekle = $sorgu-> execute([
            $username,$password
        ]);
        if($ekle){
            echo "Kayıt Başarıyla Gerçekleşti, Yönlendiriliyorsunuz";
            header('Refresh:2; anasayfa.php');
        }else{
            echo "Bir Hata Oluştu, Tekrar Kontrol Edin";
        }
    }

}
if(isset($_POST['giris'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!$username){
        echo "Kullanıcı Adını Girin";
    }elseif(!$password){
        echo "Şifrenizi Girin";
    }else{
        $kullanici_sor = $db->prepare('SELECT * FROM users WHERE user_name = ? || user_password = ?');
        $kullanici_sor->execute([
            $username, $password
        ]);
        $say = $kullanici_sor->rowCount();
        if($say==1){
            $_SESSION['username'] = $username;
            echo "Başarıyla Giriş Yaptınız, Yönlendiriliyorsunuz";
            header('Refresh:2; egitimler.php');
        }else{
            echo "Bir Hata Oluştu, Tekrar Kontrol Edin";
        }
    }
}
?>