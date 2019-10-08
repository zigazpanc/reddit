<?php
session_start();
include('connect.php');
if(isset($_POST['addcoment'])){
	$komentar = $_POST['komentar'];
	$ime = $_POST['ime'];
	$userid = $_SESSION['user_id'];
	$postid = $_SESSION['ajdiposta'];
	$query = "INSERT INTO `komentarji`(`user_id`, `post_id`, `ime`, `komentar`) VALUES (?,?,?,?)";
	$stmt = $db->prepare($query);
	$stmt->bind_param('iiss' , $userid, $postid, $ime, $komentar);
	$stmt->execute();
}

header( "refresh:0;url=home.php" );
?>