<?php

include "conexao.php";

$newsql = "SELECT * FROM user";
$result = mysql_query($newsql);

$rows = array();
while($r = mysql_fetch_assoc($result)) {
    $rows[] = $r;
}

// ##### Modo Estático #####
/* array referente a 3 pessoas
    $var = Array(
    array(
        "nome"=>"João",
        "sobreNome"=>"Silva",
        "cidade"=>"Maringá"
    ),
    array(
        "nome"=>"Ana",
        "sobreNome"=>"Rocha",
        "cidade"=>"Londrina"
    ),
    array(
        "nome"=>"Véra",
        "sobreNome"=>"Valério",
        "cidade"=>"Cianorte"
    ));
*/
// convertemos em json e colocamos na tela
    echo json_encode($rows);

    //fecha a conexão com o banco
    mysql_close();