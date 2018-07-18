<?php require_once('cima.php')?>
<?php require_once('banco_categoria.php')?>
<?php require_once("logica_usuario.php"); verificaUsuario();?>
		<?php
		$id = $_POST["id"];
		$nome = $_POST['nome'];
		if(alteraCategoria($conexao, $nome, $id)){
			echo "<p class='text-success'>Categoria $nome foi alterado</p>";
		}
		else{ echo "<p class='text-danger'>Categoria $nome não foi alterado</p>";
		};
		?>
	</body>
</html>