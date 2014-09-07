<?php

include "conexao.php";

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cidade = $_POST['cidade'];

$sql = "INSERT INTO user (nome, sobrenome, cidade)
        VALUES('$nome','$sobrenome','$cidade')";

$query = mysql_query($sql);

mysql_close();

header("location: index.html");