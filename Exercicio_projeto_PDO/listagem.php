<html>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<body class="container">
    <h1>Alunos</h1>
    <p><a href="novo.html" class="btn btn-primary">Novo Aluno</a></p>

<?php
    require_once 'inclusao.php';
    require_once 'consulta.php';

    //Esta página servirá tanto pra listagem quanto para efetivar uma inclusão
    if (isset($_POST["nome"])){ //isset está filtrando se esta menssagem esta vido de um formulário via POST
        $mensagem = incluir($_POST["nome"], $_POST["entrada"]); //incluir é uma função que terá os dados matricula, nome e entrada que foi enviado através do formulário
        echo ("<hr/>" . $mensagem. "<hr/>");
    }
    $alunos = obterAlunos();
?>

    <table class="table">
        <tr class="table-dark">
            <td>Matricula</td>
            <td>Nome</td>
            <td>Entrada</td>
        </tr>

<?php
    foreach ($alunos as $obj){ //For de $aluno que passa a ter o apelido $obj terá uma linha na tabela com os respectivos dados.
        echo "<tr><td>$obj->matricula</td>";
        echo "<td>$obj->nome</td>";
        echo "<td>$obj->entrada</td></tr>";
}
?>
    </table>   
</body>
</html>



