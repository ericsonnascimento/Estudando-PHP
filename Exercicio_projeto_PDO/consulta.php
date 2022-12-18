<?php

    require_once 'config.php'; //orientação a objeto, estamos trazendo o config.php para esta página

    function obterAlunos(){
        global $dsn, $user, $pass; //O global está indicando ques estes dados não ficarão local e sim global
        
        $alunos = [];

        try{
            $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]); //Aqui estamos criando PDO com lembrando que o $dsn não tem pass e user e estamos passando agora
            $sql = "SELECT * FROM alunos";
            $stm = $pdo->prepare($sql);//$stm = statement (declaração), Definição: é tudo que é necessário para completar uma instrução para o computador executar.
            $stm->execute();//Aqui ao executar, estamos com os dados do banco
            $alunos = $stm->fetchAll(PDO::FETCH_OBJ); //Aqui estamos transformando com o fetchALL tudo que vier do $stm em objeto ou seja em jsom 
        }catch (PDOException $e) { //Caso ocorra uma error PDOException vai retornar um conjunto vazio logo a baixo []
            $alunos = [];
        }finally{ //Com ou sem erros se tiver o PDO aberto feche o banco
            if ($pdo){
                $pdo = null;
            }
        }
        return $alunos;
}

?>