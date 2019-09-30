<?php
session_start();
include_once './connect.php';

$errors = array(); 

if(isset($_POST['addsub'])){
    $name = $_POST['ime'];
    $opis = $_POST['opis'];
	$pravi = '/'.$opis;
	$query = "INSERT INTO kategorije (ime, opis) VALUES (?, ?)";
    $stmt = $db->prepare($query);
	$stmt -> bind_param('ss', $name, $opis);
    $stmt->execute();
    $stmt->close();
	header('Location: new_post.php');
}
?>