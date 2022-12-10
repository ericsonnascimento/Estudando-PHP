<html>
    <body>
        <h1>Login do Usuário</h1>
        <?php
            if (isset($_GET["erro"]))
                echo ("<hr/><h2>".$_GET["erro"]."</h2><hr/>");
// Neste formulário utiliza POST para segurança, o ideal é utilizar TLS (https) configurado no Apache não no PHP
       ?>
        <form action="login.php" method="POST">
            <p>login: <input type="text" name="login"/></p>
            <p>senha: <input type="password" name="senha"/></p>
            <input type="submit" value="enviar"/>
        </form>
    </body>
</html>