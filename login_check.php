<?php
session_start();
include_once './connect.php';
$db = mysqli_connect('localhost', 'root', '', 'reddit');
$errors = array(); 

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['pass']);
    $user_id = 0;
	$role = '';
    $stmt = $db->prepare("SELECT id, nickname, password, role FROM users WHERE nickname=? AND password=? LIMIT 1");
    $stmt->bind_param('ss', $username, $password);
    $stmt->execute();
    $stmt->bind_result($user_id, $username, $password, $role);
    $stmt->store_result();
    if($stmt->num_rows == 1)  //To check if the row exists
        {
            if($stmt->fetch()) //fetching the contents of the row
            {
               if ($role == 'admin') {
                   header('Location: homea.php');
               } else {
                   $_SESSION['Logged'] = 1;
                   $_SESSION['user_id'] = $user_id;
                   $_SESSION['username'] = $username;
                   header('Location: home.php');
               }
           }

    }
    $stmt->close();
}
?>