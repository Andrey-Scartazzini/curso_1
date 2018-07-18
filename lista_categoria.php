<?php 
	require_once('cima.php');
	require_once('banco_categoria.php');
	require_once('logica_usuario.php');
?>
        <table class="table table-striped table-bordered">
            <tr>
                <td>Nome</td>
            </tr>
            <?php
                $categorias = listaCategorias($conexao);
                foreach ($categorias as $categorias) {
            ?>
            <tr>
                <td><?php echo $categorias['nome']?></td>
                <td>
                    <form action="alterar_categoria.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $categorias['id']?>">
                        <button class="btn btn-primary">alterar</button>
                    </form>
                </td>
                <td>
                    <form action="deletar_categoria.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $categorias['id']?>">
                        <button class="btn btn-danger">remover</button>
                    </form>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
	</body>
</html>