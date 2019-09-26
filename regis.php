<?php
session_start();
include_once './connect.php';
$db = mysqli_connect('localhost', 'root', '', 'reddit');
$errors = array(); 

if (isset($_POST['registracija'])) {
    $firstn = mysqli_real_escape_string($db, $_POST['name']);
    $loastn = mysqli_real_escape_string($db, $_POST['surname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password_1 = mysqli_real_escape_string($db, $_POST['pass']);
    $password_2 = mysqli_real_escape_string($db, $_POST['pass2']);

  if ($password_1 != $password_2) {
	array_push($errors, "Passwords do not match");
  }
    
  $preverjanje = "SELECT * FROM users WHERE nickname='$username' LIMIT 1";
  $rezultat = mysqli_query($db, $preverjanje);
  $user = mysqli_fetch_assoc($rezultat);
  


    if ($user['mail'] === $email) {
      array_push($errors, "Email is already in use");
    }

    $preverjanje1 = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $rezultat1 = mysqli_query($db, $preverjanje);
    $user1 = mysqli_fetch_assoc($rezultat1);
    
  
  
      if ($user['mail'] === $email) {
        array_push($errors, "Email is already in use");
      }

  if (count($errors) == 0) {
  	$passwrd = md5($password_1);
  	$query = "INSERT INTO users (ime, priimek, nickname, email, password) 
  			  VALUES('$firstn','$lastn', '$username', '$email', '$passwrd')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Prijava je bila uspešna";
  	header('location: login.php');
  }
}