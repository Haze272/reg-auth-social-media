<?php
session_start();

$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];

require_once('db_connection.php');

/*
$sql = "SELECT * FROM search WHERE login = :login";
$stmt = $pdo->prepare($sql);
$stmt->execute(['login' => $login]);
$task = $stmt->fetch(PDO::FETCH_ASSOC);

if(!empty($login)) {
    $message = "Введённая логин уже зарегестрирован";
    $_SESSION['message'] = $message;

    header("Location: /index.php");
    exit;
}
*/

$sql = "INSERT INTO users (login, email, password) VALUES(:login, :email, :password)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['login' => $login, 'email' => $password, 'password' => $password]);

header("Location: /registration.php");

?>