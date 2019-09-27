<?php
session_start();
include_once './connect.php';
$db = mysqli_connect('localhost', 'root', '', 'reddit');
$errors = array(); 


	if(isset($_POST['registracija'])) {
		$username = $_POST['username'];
		$password = $_POST['pass'];
		$password2 = $_POST['pass2'];
		$firstn = $_POST['name'];
		$lastn = $_POST['surname'];
		$email = $_POST['email'];

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

 
     	$INSERT = "INSERT INTO users (ime, priimek, nickname, email, password) 
  			  VALUES('$firstn','$lastn', '$username', '$email', '$passwrd')";;
     //Prepare stavek
 		  if (count($errors) == 0) {
  			$stmt = $db->prepare($INSERT);
			$stmt->bind_param("s", $firstn, $lastn, $username, $email, $password);
      		$stmt->execute();
      		echo "Registration sucessful";
			$_SESSION['username'] = $username;
  			$_SESSION['success'] = "Prijava je bila uspešna";
  			header('location: login.php');
			 $stmt->close();  
			  
		  }
	}
		?>


