<?php
session_start();
include_once './connect.php';
$db = mysqli_connect('localhost', 'root', '', 'reddit');
$username = $_POST['username'];
$pass = $_POST['pass'];
//preverim, če sem prejel podatke
if (!empty($username) && !empty($pass)) {
    //$pass = sha1($pass.$salt);
    
    $query = "SELECT * FROM users WHERE nickname=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$username]);
    
    if ($stmt->rowCount() == 1) {
        $username = $stmt->fetch();
        if (password_verify($pass, $username['pass'])) {
            $_SESSION['user_id'] = $user['id'];               
            header("Location: index.php");
            die();
        }
    }
}
header("Location: home.php");