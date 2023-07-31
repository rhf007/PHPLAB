<?php 

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "rahafhazem5122002");
define("DB_DATABASE", "lab4");

$mysqli = new mysqli();
$mysqli->connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

/* $sql = "CREATE TABLE userdata(
    id int auto_increment PRIMARY KEY,
    name varchar(100) not null,
    email varchar(30) unique not null,
    room int,
    ext varchar(20),
    img varchar(150)
)"; */

/* $result = $mysqli->query($sql);
if (!$result) {
    die("Error creating table: " . $mysqli->error);
}
 */
//var_dump($result);

/* $mysqli->close();
 */?>