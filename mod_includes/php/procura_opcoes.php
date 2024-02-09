<?php
$dia = $_POST['dia'];
if($dia == "Segunda-Feira")
{
	echo "
	<option value=''>Opção do Prato</option>
	<option value='Carne ao Molho Madeira'>Carne ao Molho Madeira</option>
	<option value='Filé de Peixe'>Filé de Peixe</option>
	
	";
}

if($dia == "Terça-Feira")
{
	echo "
	<option value=''>Opção do Prato</option>
	<option value='Carne Recheada'>Carne Recheada</option>
	<option value='Frango Crocante'>Frango Crocante</option>
	
	";
}

if($dia == "Quarta-Feira")
{
	echo "
	<option value=''>Opção do Prato</option>
	<option value='Bife Parmegiana - Frango'>Bife Parmegiana - Frango</option>
	<option value='Bife Parmegiana - Carne'>Bife Parmegiana - Carne</option>
	<option value='Bife a Rolê'>Bife a Rolê</option>
	
	";
}

if($dia == "Quinta-Feira")
{
	echo "
	<option value=''>Opção do Prato</option>
	<option value='Bife Acebolado'>Bife Acebolado</option>
	<option value='Frango Grelhado'>Frango Grelhado</option>
	
	";
}

if($dia == "Sexta-Feira")
{
	echo "
	<option value=''>Opção do Prato</option>
	<option value='Estrogonofe de Carne'>Estrogonofe de Carne</option>
	<option value='Estrogonofe de Frango'>Estrogonofe de Frango</option>
	<option value='Lagarto ao Molho de Laranja'>Lagarto ao Molho de Laranja</option>
	
	";
}

if($dia == "Sábado")
{
	echo "
	<option value=''>Opção do Prato</option>
	<option value='Feijoada'>Feijoada</option>
	<option value='Medalhão de Frango'>Medalhão de Frango</option>
	
	";
}
?>