<?php
$dsn="mysql:host=localhost;dbname=finance_db;charset=utf8";
$pdo=new PDO($dsn,'root','');

$sql="UPDATE `daily_account` SET ";
    $tmp=[];
    foreach($_POST as $key => $value){
        $tmp[]="`$key`='$value'";
    }
$sql .= join(",",$tmp);
$sql .="WHERE `id` ='{$POST[id]}'";