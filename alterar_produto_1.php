<?php include('cima.php')?>
<?php include('conecta.php')?>
<?php include('banco_produtos.php')?>
		<?php
		$id = $_POST["id"];
		$preco = $_POST["preco"];
		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];
        $categoria_id = $_POST['categoria_id'];
		if (array_key_exists('usado',$_POST)) {
            $usado = "true";
        } else{
		    $usado = "false";
        };

		if(alteraProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado, $id)){
			echo "<p class='text-success'>Produto $nome , com o valor de $preco foi alterado</p>";
		}
		else{ echo "<p class='text-danger'>Produto $nome não foi alterado</p>";
		};
		?>
	</body>
</html>