<?php include("cima.php")?>
<?php include("conexao.php")?>
<?php include("banco_categoria.php"); $categorias = listaCategorias($conexao);?>
<?php include("banco_produtos.php")?>
<?php
    $id = $_POST["id"];
    $produto = BuscaProduto($conexao, $id);
    $usado = $produto['usado'] ? "checked='checked'" : "";
?>
<h1>Alterando produto</h1>
		<div class="cantainer">
			<div class="principal">
				<form action="alterar_produto_1.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
					<table class="table">
						<tr>
							<td>Nome</td> 
							<td><input class="form-control" type="text" name="nome" value="<?= $produto['nome'] ?>"></td>
						</tr>
                        <tr>
                            <td>Preço</td>
                            <td><input class="form-control" type="number" name="preco" value="<?= $produto['preco']?>"></td>
                        </tr>
						<tr>
							<td>Descrição</td> 
							<td><textarea class="form-control" name="descricao"><?= $produto['descricao'] ?></textarea></td>
						</tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" name="usado" value="true" <?= $usado ?>$usado>usado
                            </td>
                        </tr>
						<tr>
							<td>
								Categoria
							</td>
                            <td>
                                <select name='categoria_id' class="form-control">
								<?php foreach($categorias as $categoria){
                                    $acategoria = $produto['categoria_id'] == $categoria['id'];
                                    $selecao = $acategoria ? "selected='selected'" : "";
								    ?>
                                    <option value="<?= $categoria['id']?>" <?= $selecao ?>> <?= $categoria['nome']?></option>
								<?php } ?>
                                </select>
							</td>
						</tr>
						<tr>
							<td colspan="2"><button class="btn btn-primary" type="submit">Alterar</button></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>