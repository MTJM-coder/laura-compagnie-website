<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $to='jaudelmerlando@gmail.com';
    $subject="Nouveau message de Laura-compagnie.com";
    $nom=$_POST['nom']??'';
    $phone=$_POST['phone']??'';
    $service=$_POST['service']??'';
    $email=$_POST['email']??'';
    $userMsg=$_POST['message']??'';

    $message="Nom : ".$nom."\n";
    $message.="Email : ".$email."\n";
    $message.="Telephone : ".$phone."\n";
    $message.="Service : besoin de ".$service."\n";
    $message.="Message : ".$message."\n";

    $header="From : ".$email;

    if(mail($to,$subject,$message,$header)){
        echo "message envoyé avec succees";
    }
    else{
        echo "erreur lors du traitement";
    }
}
?>