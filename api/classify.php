<?php
include_once '../config.php'
$con=mysql_connect($mysql_host.":".$mysql_port,$mysql_name,$mysql_password)
if(!$con)
{
    die("could not get connection");
}
$clasify=mysql_query("select * from note.classify where id=1");
var_dump($clasify);
?>
