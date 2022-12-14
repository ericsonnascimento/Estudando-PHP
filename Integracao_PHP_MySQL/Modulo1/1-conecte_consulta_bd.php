<?php

//Constantes para armazenamento das variáveis de conexão (Cadastrado dados do meu "db" de teste).
define('HOST', 'localhost');
define('DBNAME', 'db');
define('USER', 'root');
define('PASSWORD', '');

//Conectando com o Servidor
$conn = mysqli_connect(HOST, USER, PASSWORD, DBNAME) or die( ' Não foi possível conectar.' );

//Realizando uma consulta no BD na tabela "cliente" onde constão: id, nome, email, time_created, time_update
$instrucaoSQL = "Select id, nome, email, time_created, time_update From cliente";
$stmt = mysqli_prepare($conn, $instrucaoSQL);
mysqli_stmt_bind_result($stmt, $id, $nome, $email, $time_created, $time_update);
mysqli_stmt_execute($stmt);

while (mysqli_stmt_fetch($stmt)) {
echo nl2br("\n\n". $id . "\t");//acrescentado "nl2br" no primeiro código para o while colocar um embaixo do outro
echo $nome . "\t";
echo $email . "\t";
echo $time_created . "\t";
echo $time_update . "\n";
}

//Encerrando a conexão
mysqli_close($conn);