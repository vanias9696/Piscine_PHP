<?php
$dbc = mysqli_connect("localhost", "root", 'SvituSone4ko');
mysqli_query($dbc, "CREATE DATABASE IF NOT EXISTS shop42");
$dbc = mysqli_connect("localhost", "root", 'SvituSone4ko', "shop42");
$sql_content = file_get_contents('Rushh00.sql');
mysqli_multi_query($dbc, $sql_content);
header("Location: /");
?>