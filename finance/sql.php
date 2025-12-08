<?php
// all(); //呼叫器//
function all(){ //這個選取指定的值但未顯示//
$dsn="mysql:host=localhost;charset=utf8;dbname=finance_db";
$pdo=new PDO($dsn,'root','');
$sql="SELECT * FROM `daily_account`";

$rows=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);

foreach($rows as $exp){
    
    echo $exp['item'];
    echo " - ";
    echo $exp['date'];
    echo " - ";
    echo $exp['payment'];
    echo "<br>";
}
}
?>