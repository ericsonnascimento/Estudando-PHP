<?php
    require_once 'config.php';

    function incluir($nome, $entrada){
        global $dsn, $user, $pass;
        $mensagem = "";
        try{
            $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION]);
            $sql = "INSERT INTO alunos VALUES (?,?)";
            $stm = $pdo->prepare($sql);
            $stm->execute([$nome, $entrada]);
            $mensagem = "Aluno incluido com sucesso!";
        }catch (PDOException $e){
            $mensagem = "Erro ao incluir aluno.";
        }
        finally{
            if ($pdo){
                $pdo = null;
            }
        }
        return $mensagem;
    }
    ?>