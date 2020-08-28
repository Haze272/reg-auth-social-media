<?php
session_start();
$roleid = $_SESSION['user']['role']

function roleChoose($roleid) {
    $sql = "SELECT * FROM roles WHERE id = :index AND roleName = :pass";
}

?>