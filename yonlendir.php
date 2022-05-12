<?php
$email=$_POST['emailim'];
$pass=$_POST['passim'];
if($email=="b211210045@sakarya.edu.tr"&&$pass=="b211210045")
{
    echo " HOŞGELDİN B211210045";
    header("Refresh: 3; url=eb.html");
}
else
{
    echo "Hatalı giriş";
    header("Refresh:2; url=index.html");
}

?>