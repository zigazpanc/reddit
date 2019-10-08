<?php 

session_start();
require_once("googleAPI/vendor/autoload.php");
$gClient = new Google_Client();
$gClient->setClientId("");
$gClient->setClientSecret("");

?>