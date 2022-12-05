<?php
//si le formulaire a été soumis
ini_set("SMTP","smtp.gmail.com");
ini_set("sendmail_from","amanedoukoupro@gmail.com>");
ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","465");
if(isset($_POST)) {
    $message = "Ce message vous a été envoyé via la page contact du site web  
        Nom : " . $_POST["p_name"] . "
        Email : " . $_POST["p_email"] . "
        Sujet : " . $_POST["p_subject"] . "
        Téléphone : " . $_POST["p_phone"] . "
        Message : " . $_POST["p_message"];
    $retour = mail("amanedoukoupro@gmail.com",$_POST["p_subject"],$message,"From:".$_POST["p_email"]."\r\n"."Reply-to:".$_POST["p_email"]);


/*
if(isset($_POST["p_message"])){
    $message = "Ce message vous a été envoyé via la page contact du site web  
        Nom : " . $_POST["p_name"] . "
        Email : " . $_POST["p_email"] . "
        Sujet : " . $_POST["p_subject"] . "
        Téléphone : " . $_POST["p_phone"] . "
        Message : " . $_POST["p_message"];
    $retour = mail("amanedoukoupro@gmail.com",$_POST["p_subject"],$message,"From:".$_POST["p_email"]."\r\n"."Reply-to:".$_POST["p_email"]);

    $recaptchaResponse = $_POST["g-recaptcha-reponse"];
    $_SERVE ="";
    $userIp = $_SERVE["REMOTE_ADDR"];
    $request = "https://www.google.com/recaptcha/api/siteverify?secret=6LcviAUhAAAAAI6cnRWTtieG0QCwPRABki1zAd9Y&reponse={$recaptchaResponse}&remoteip={userIp}";
    $content = file_get_contents($request);
    $json = json_decode($content);

    if ($json->success = "true") {
        echo "OK";
    } else {
        echo "KO";
    }

    if ($json->success = "true") {
        header("Location:../index.php?msg=Message envoyé !");
    } else {
        header("Location:../index.php?msg=Message non envoyé !");
    }
*/
}
?>