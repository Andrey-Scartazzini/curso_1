<?php require_once('cima.php')?>
<?php require_once('banco_categoria.php')?>
<?php require_once("logica_usuario.php"); verificaUsuario();?>
		<?php
		$id = $_POST["id"];
		$nome = $_POST['nome'];
        if($nome != '') {
            if(alteraCategoria($conexao, $nome, $id)){
                $_SESSION["success"] = "Categoria $nome foi alterado";
                header("Location: lista_categoria.php");
            }
            else{
                $_SESSION["danger"] = "Categoria $nome não foi alterado";
                header("Location: lista_categoria.php");
            };
        }
        else {
            $_SESSION["danger"] = "Categoria $nome não foi alterado";
            header("Location: lista_categoria.php");
        }
        ?>
		?>
	</body>
</html>