<?php 
	include('cima.php');
	include('conexao.php');
	include('banco_produtos.php');
?> 
<?php 
	if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true"){
		echo '<p class="alert-success" align="center">Produto apagado com sucesso.</p>';
	};

?>
        <table class="table table-striped table-bordered">
            <tr>
                <td>Nome</td>
                <td>Preço</td>
                <td>Descrição</td>
                <td>Categoria</td>
                <td>Usado</td>
            </tr>
            <?php
                $produtos = listaProduto($conexao);
                foreach ($produtos as $produto) {
            ?>
            <tr>
                <td><?php echo $produto['nome']?></td>
                <td><?php echo $produto['preco']?></td>
                <td><?php echo substr($produto['descricao'], 0, 40)?></td>
                <td><?php echo $produto['categoria_nome']?></td>
                <td><?php if($produto['usado'] == true ){echo "sim"; } else{echo "não";};?></td>
                <td>
                    <form action="alterar_produto.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $produto['id']?>">
                        <button class="btn btn-primary">alterar</button>
                    </form>
                </td>
                <td>
                    <form action="deletar.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $produto['id']?>">
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