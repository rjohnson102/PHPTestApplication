<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn_string = "host=localhost port=5432 dbname=dvdrental user=postgres password=Funkytown7";
$dbconn4 = pg_connect($conn_string);

$dbname = pg_dbname($dbconn4);
$result = pg_query($dbconn4, 'SELECT * FROM actor');

$arr = pg_fetch_all($result);

foreach ($arr as &$value){
    echo json_encode($value);
}

echo $dbname;

?>
