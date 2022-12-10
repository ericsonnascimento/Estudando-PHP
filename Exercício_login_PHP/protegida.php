<?php
//bloco if- Se não tiver um usuario logado será redirecionado para fom_login.php
//bloco else - Se tiver usuario logado na sessão será exibida uma página <http>
    session_start();
    if (!isset($_SESSION["usuario"]))
        header("Location: form_login.php", true, 301);
    else{
    ?>
    <http>
        <body>
            <h1>Olá <?php echo ($_SESSION["usuario"]) ?></h1>
            <h2><a href="index.php">retornar</a></h2>
        </body>
    </http>
    <?php
        }
?>