<?php
$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$cinsiyet=$_POST['cinsiyet'];
$email=$_POST['email'];
$password=$_POST['sifre'];
$date=$_POST['time'];
$sehir=$_POST['Şehirler'];
$yas=$_POST['number'];
$adres=$_POST['mesaj'];

echo "<font size=6 >Bilgileriniz<br>";
echo "İsminiz:";
echo $ad."<br>";
echo "Soyadınız:";
echo $soyad."<br>";
echo "Cinsiyetiniz:";
echo $cinsiyet."<br>";
echo "Email:";
echo $email."<br>";
echo "Şifreniz:";
echo $password."<br>";
echo "Doğum tarihiniz:";
echo $date."<br>";
echo "şehriniz:";
echo $sehir."<br>";
echo "Yaşınız:";
echo $yas."<br>";
echo "Adres Bilgileriniz:";
echo $adres."<br>";
header("Refresh:5 ; url=iletisim.html");


?>