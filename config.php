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
        $_SESSION['email'] = $user['email'];
        $_SESSION['fullname'] = $user['name'];
        $_SESSION['role'] = $user['auther'];

        return true;
    } else {
        return 'wrong password';
    }

}

function statics($conn, $username) {
    $articles = $conn-> query("SELECT * from article where username='$username'") -> fetchAll();
    $arichivedArticles = $conn-> query("SELECT * from article where username= '$username' and status='archived'") -> fetchAll();
    $publishedArticles = $conn-> query("SELECT * from article where username= '$username' and status='published'") -> fetchAll();
    $comments = $conn-> query("SELECT * FROM comment JOIN article ON comment.articleId = article.articleId WHERE article.username = '$username'") -> fetchAll();
    
    return ['total' => count($articles), 'archived'=>count($arichivedArticles), 'published'=>count($publishedArticles), 'comments'=>count($comments)];
} 
?>