<?php include('conecta.php')?>
<?php
	function listaCategorias($conexao){
		$categorias = array();
		$query = "select * from categorias";
		$resultado = mysqli_query($conexao, $query);
		while($categoria = mysqli_fetch_assoc($resultado)){
			array_push($categorias, $categoria);
		};
		//var_dump($categorias);
		return $categorias;
	}
?>