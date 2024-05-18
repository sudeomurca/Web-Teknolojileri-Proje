<?php
$email=$_POST['email'];
$sifre=$_POST['psw'];


if($email=="g231210027@sakarya.edu.tr"&& $sifre=="g231210027"){
    header("location:http://localhost/h6/hakk%c4%b1nda.html");
    
}
else{
    header("location:http://localhost/h6/index.html");
}

?>