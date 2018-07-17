<?php include("logica_usuario.php"); verificaUsuario();?>
<?php
	include('cima.php');
	include('conecta.php');
	include('banco_produtos.php');
?>
<?php
$id = $_POST['id'];
removeProduto($conexao, $id);
header("Location: lista.php?removido=true");
die();
?>