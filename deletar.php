<?php include("logica_usuario.php"); verificaUsuario();?>
<?php
	include('cima.php');
	include('conecta.php');
	include('banco_produtos.php');
	include_once('logica_usuario.php');
$id = $_POST['id'];
removeProduto($conexao, $id);
$_SESSION["success"] = "Produto deletado com sucesso";
header("Location: lista.php");
die();
?>