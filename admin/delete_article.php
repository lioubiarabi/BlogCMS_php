<?php
session_start();
require '../config.php';

if (!isset($_SESSION['username'])) {
    header("Location: auth-login.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $deleteComments = $conn->prepare("DELETE FROM comment WHERE articleId = ?");
    $deleteComments->execute([$id]);

    $stmt = $conn->prepare( "DELETE FROM article WHERE articleId = ?");
    $stmt->execute([$id]);
    header("Location: table-datatable.php");
} else {
    header("Location: table-datatable.php");
    exit();
}
