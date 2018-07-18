<?php include("logica_usuario.php"); verificaUsuario();?>
<?php include('cima.php')?>
<?php include('banco_categoria.php')?>
		<?php
		$nome = $_POST['nome'];
		if(insereCategoria($conexao, $nome)){
			echo "<p class='text-success'>Categoria $nome foi cadastrado</p>";
		}
		else{ echo "<p class='text-danger'>Categoria $nome não foi cadastrado</p>";
		};
		?>
	</body>
</html>