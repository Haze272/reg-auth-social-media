<?php
session_start();

$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];

require_once('db_connection.php');


$sql = "SELECT * FROM users WHERE login = :login";
$stmt = $pdo->prepare($sql);
$stmt->execute(['login' => $login]);
$task = $stmt->fetch(PDO::FETCH_ASSOC);

if(!empty($task)) {
    $message = "Введённая логин уже зарегестрирован";
    $_SESSION['message'] = $message;

    header("Location: /registration.php");
    exit;
}

$sql = "SELECT * FROM users WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->execute(['email' => $email]);
$task2 = $stmt->fetch(PDO::FETCH_ASSOC);

if(!empty($task2)) {
    $message = "Введённая электронная почта уже зарегестрирована";
    $_SESSION['message'] = $message;

    header("Location: /registration.php");
    exit;
}


$sql = "INSERT INTO users (login, email, password) VALUES(:login, :email, :password)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['login' => $login, 'email' => $email, 'password' => $password]);

$_SESSION['emailRegistrated'] = $email;

header("Location: /registrated.php");

?>