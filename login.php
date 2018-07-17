<?php include('conecta.php');
include('banco_usuario.php');
include('logica_usuario.php');
$senha = $_POST['senha'];
$email = $_POST['email'];
$usuario = buscaUsuario($conexao, $email, $senha);
if ($usuario == null){
    $_SESSION["danger"] = "Usuário ou senha inválida";
    header("Location: index.php");
}
else{
    logausuario($email);
    $_SESSION["success"] = "Usuário lougado com sucesso";
    header("Location: index.php");
};
die();
?>