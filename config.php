<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=brief", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

function checkUser($conn, $username, $pass){
    
    $stmt = $conn->prepare("SELECT * from user where email =? or username =?");
    $stmt->execute([$username, $username]);

    $user = $stmt->fetch();

    if(!$user) return 'wrong username/email';

    if ($user['password'] == $pass) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        return true;
    } else {
        return 'wrong password';
    }

}
?>