<?php include('conecta.php');
include('banco_usuario.php');
include('logica_usuario.php');
$senha = $_POST['senha'];
$email = $_POST['email'];
$usuario = buscaUsuario($conexao, $email, $senha);
if ($usuario == null){
    header("Location: index.php?login=0");
}
else{
    logausuario($email);
    header("Location: index.php?login=1");
};
die();
?>