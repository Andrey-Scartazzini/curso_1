<?php include('cima.php')?>
<?php include('logica_usuario.php')?>
<h1>Seja bem-vindo.</h1>
<?php
if (isset($_GET["logout"]) && $_GET["logout"] == true){
    echo "<p class='alert-success'>Deslogado com sucesso.</p>";
};
if (isset($_GET["falhadeseguranca"]) && $_GET["falhadeseguranca"] == true){
    echo "<p class='alert-success'>Loge antes de acessar outras paginas.</p>";
};
if (isset($_GET["login"]) && $_GET["login"] == true){
    echo "<p class='alert-success'>Logado com sucesso</p>";
};
if (isset($_GET["login"]) && $_GET["login"] == false){
    echo "<p class='alert-danger'>Usuário ou senha inválida</p>";
};
if (usuarioestalogado()){
    echo "<p class='alert-success'>Voce esta logado. <a href='logout.php'>Deslogar</a></p>";
}
else {
    echo '
    <h2>Login</h2>
    <form action="login.php" method="post">
        <table class="table">
            <tr>
                <td>Email</td>
                <td><input calss="form-control" type="email" name="email"></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input calss="form-control" type="password" name="senha"></td>
            </tr>
            <tr>
                <td><button class="bnt bnt-primary">Login</button></td>
            </tr>
        </table>
    </form>';
};
?>
	</body>
</html>