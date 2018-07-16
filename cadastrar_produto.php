<?php include("cima.php")?>
<?php include("conexao.php")?>
<?php
    include("banco_categoria.php");
	$categorias = listaCategorias($conexao);
?>
		<div class="cantainer">
			<div class="principal">
				<form action="cadastrar_produto_1.php" method="post">
					<table class="table">
                        <tr>
                            <td colspan="2">
                                Formulário de Produtos
                            </td>
                        </tr>
						<tr>
							<td>Nome</td> 
							<td><input class="form-control" type="text" name="nome"></td>
						</tr>
						<tr>
							<td>Descrição</td> 
							<td><textarea class="form-control" name="descricao"></textarea></td>
						</tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" name="usado" value="true">usado
                            </td>
                        </tr>
						<tr>
							<td>
								Categoria
							</td>
                            <td>
                                <select name='categoria_id' class="form-control">
								<?php foreach($categorias as $categoria){?>
                                    <option value="<?= $categoria['id']?>"> <?= $categoria['nome']?></option>
								<?php } ?>
                                </select>
							</td>
						</tr>
						<tr>
							<td>Preço</td>
							<td><input class="form-control" type="number" name="preco"></td>
						</tr>
						<tr>
							<td colspan="2"><button class="btn btn-primary" type="submit">cadastrar</button></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</body>
</html>