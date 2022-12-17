<?php

define('HOST', 'localhost');
define('PORT', '3350'); //porta correta 3306, colocado porta 3350 para simular o erro.
define('DBNAME', 'db');
define('USER', 'root');
define('PASS', '');

//"$dsn" é a nossa string de conexão
try {
    $dsn = new PDO("mysql:host=".HOST.";port=".PORT.";dbname=".DBNAME.";user=".USER.";pass=".PASS);

}catch (PDOException $e) {
    echo "A conexão falhou e retornou a seguinte mensagem de erro: " . $e->getMessage();
}

$dsn = null;

//ERRO APRESENTADO NÁ PÁGINA PHP:
//A conexão falhou e retornou a seguinte mensagem de erro: SQLSTATE[HY000] [2002] Nenhuma conexão pôde ser feita porque a máquina de destino as recusou ativamente.