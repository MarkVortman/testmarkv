<?php
$title = 'Вход';
include 'temps/temp.php';
mysql_connect("testmarkv", "root", "") or die(mysql_error());
mysql_select_db("mv__db") or die(mysql_error());
// нужно доработать вход