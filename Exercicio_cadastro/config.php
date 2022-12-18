<?php

define('HOST', 'localhost');
define('PORT', '3306'); //porta correta 3306, colocado porta 3350 para simular o erro.
define('DBNAME', 'escola');
define('USER', 'root');
define('PASS', '');

//"$dsn" é a nossa string de conexão
try {
    $dsn = new PDO("mysql:host=".HOST.";port=".PORT.";dbname=".DBNAME.";user=".USER.";pass=".PASS);
    echo "Conectado com sucesso";

}catch (PDOException $e) {
    echo "A conexão falhou e retornou a seguinte mensagem de erro: " . $e->getMessage();
}

$dsn = null;