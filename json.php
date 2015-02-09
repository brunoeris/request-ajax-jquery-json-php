<?php

include "conexao.php";

$newsql = "SELECT * FROM user";
$result = mysql_query($newsql);

$rows = array();
while($r = mysql_fetch_assoc($result)) {
    $rows[] = $r;
}

    echo json_encode($rows);

    mysql_close();