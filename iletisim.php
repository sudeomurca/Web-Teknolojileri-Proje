<?php
    $isim=$_POST['firstname'];
    $soyisim=$_POST['lastname'];
    $cinsiyet=$_POST['cinsiyet'];
    $Spor=$_POST['spor'];
    $Sehir=$_POST['sehir'];
    $bilgi=$_POST['bilgi'];
    $Email=$_POST['email'];
    
    echo "İsim: $isim <br>";
    echo "Soyisim: $soyisim <br>" ;
    echo "Cinsiyet: $cinsiyet <br>";
    echo "Sehir: $Sehir <br>";
    echo "Seçtiği spor: ";
    echo "E-mail: $Email <br>";
    foreach ($Spor as $key => $value) {
       echo "$value ";
    }
    echo "<br> Text Area: $bilgi <br>";
   
?>