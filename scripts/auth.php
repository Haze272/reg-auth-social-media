<?php

session_start();

require_once('db_connection.php');

if ($_POST['login'] == '' || $_POST['password'] == '')
    header("Location: /authorization.php");
else {
	$sql = "SELECT * FROM users WHERE login = :login AND password = :pass"; //Формируем запрос без данных
	$result = $pdo->prepare($sql);
	$result->bindvalue(':login', $_POST['login']);	//Заполняем данные
	$result->bindvalue(':pass', $_POST['password']);	//Заполняем данные. Пароли хранить в открытом виде, дело такое. Поэтому двойной md5, хотя хуй знает нормально ли так хэшировать
	$result->execute( ); //Выполняем запросы
	$result = $result->fetchAll(); //переводим обьект ПДО в массив данных, для удобной работы
	
    if (count($result)>0) { //Если база вернула 1 значение, значит и логин и пароль совпали. отлично
		$_SESSION['user'] = $result[0]; //сохраняем обьект пользователя в сессии
		header("Location: /index.php");
	} else echo '<meta charset="UTF-8">Логин или пароль не верный или пользователь не существует';
}

?>