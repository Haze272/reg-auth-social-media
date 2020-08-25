<?php

session_start();

if (isset($_POST['isExit']))
    unset($_SESSION["user"]);

header("Location: /index.php");
exit();

?>