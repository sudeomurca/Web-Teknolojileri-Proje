<?php
$email=$_POST['email'];
$sifre=$_POST['psw'];


if($email=="g231210027@sakarya.edu.tr"&& $sifre=="g231210027"){
    header("location:http://localhost/H6/hakkında.html");
    
}
else{
    header("location:http://localhost/H6/index.html");
}

?>