<?php
session_start();
include_once './connect.php';
$db = mysqli_connect('localhost', 'root', '', 'reddit');
$errors = array(); 

if(isset($_POST['addsub'])){
    $name = $_POST['ime'];
    $opis = $_POST['opis'];
	$pravi = '/'.$opis;
	$query = "INSERT INTO kategorije (ime, opis) VALUES (?, ?)";
    $stmt = $db->prepare($query);
    $stmt->execute([$name, $pravi]);
    $stmt->close();
}
?>