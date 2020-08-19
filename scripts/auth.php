<?php

session_start();

$login = $_POST['login'];
$password = $_POST['password'];

require_once('db_connection.php');



/**
 * Обработчик формы авторизации
 * Site: http://bezramok-tlt.ru
 * Авторизация пользователя
 */

 //Ключ защиты
 if(!defined('BEZ_KEY'))
 {
     header("HTTP/1.1 404 Not Found");
     exit(file_get_contents('./../../404.html'));
 }

 //Если нажата кнопка то обрабатываем данные
 if(isset($_POST['submit']))
 {
    if(empty($_POST['login']))
        $err[] = 'Не введен Логин';

    if(empty($_POST['password']))
        $err[] = 'Не введен Пароль';

    //Проверяем наличие ошибок и выводим пользователю
    if(count($err) > 0)
        echo showErrorMessage($err);
    else
    {
        /*Создаем запрос на выборку из базы
        данных для проверки подлиности пользователя*/
        $sql = 'SELECT *
                FROM users     /* `'. BEZ_DBPREFIX .'reg` */
                WHERE `login` = "'. escape_str($_POST['login']) .'"
                AND `status` = 1';
        $res = mysqlQuery($sql);

        //Если логин совподает, проверяем пароль
        if(mysql_num_rows($res) > 0)
        {
            //Получаем данные из таблицы
            $row = mysql_fetch_assoc($res);

            if(md5(md5($_POST['password']).$row['salt']) == $row['password'])
            {
                $_SESSION['user'] = true;

                //Сбрасываем параметры
                header("Location: /authorizated.php");
                exit;
            }
            else
                echo showErrorMessage('Неверный пароль!');
        }
        else
            echo showErrorMessage('Логин <b>'. $_POST['login'] .'</b> не найден!');
    }

 }

?>