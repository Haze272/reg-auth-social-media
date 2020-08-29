<?php
session_start();
$roleid = $_SESSION['user']['role'];

function roleChoose($roleid) {
    $sql = "SELECT * FROM roles WHERE id = :index AND roleName = :roleName";
	$result = $pdo->prepare($sql);
	$result->bindvalue(':index', $roleid);	//Заполняем данные
	$result->execute( ); //Выполняем запросы
    $result = $result->fetchAll(); //переводим обьект ПДО в массив данных, для удобной работы
    
}

?>