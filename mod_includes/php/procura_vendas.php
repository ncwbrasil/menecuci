<?php
include('connect.php');
$fil_categoria = $_POST['categoria'];
$sqlprocura = "SELECT * FROM aux_subcategorias 
		 LEFT JOIN aux_categorias ON aux_categorias.cat_id = aux_subcategorias.subcat_categoria
		 WHERE subcat_categoria = :categoria
		 ORDER BY subcat_descricao ";
$stmt = $PDO->prepare($sqlprocura);
$stmt->bindParam(':categoria', 	$fil_categoria);
              
$stmt->execute();
$rows = $stmt->rowCount();
if($rows>0)
{
	echo "<option value=''>Selecione a Subcategoria</option>";
	while($result = $stmt->fetch())
	{
		echo "<option value='".$result['subcat_id']."'>".$result['subcat_descricao']."</option>";
	}
}
else
{
	echo "<option value='0'> Não há subcategoria cadastrada</option>";
}
?>


