<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exibe Animal</title>
</head>
<body>
	<?php
		include ("Ave.php");
        include ("Mamifero.php");
        include ("Anfibio.php");
        include ("Peixe.php");


		$peso = $_POST['peso'];
		$comprimento = $_POST['comprimento'];
		$altura = $_POST['altura'];
		$cor_pre = $_POST['cor_pre'];
		$nome = $_POST['nome'];
		$tipo = $_POST['tipo'];

		echo "<fieldset>
			<legend>Animal Cadastrado</legend>";
        if ($tipo == 'Ave') {
        	
        	$altura_max = $_POST['altura_max'];
        	$ave = new Ave($peso, $comprimento, $altura, $cor_pre, $nome, $altura_max);
        	echo "<b>$tipo : </b> $nome <br/>";
        	$ave->exibe_ave();

        } elseif ($tipo == 'Mamifero') {

        	$vel_max = $_POST['vel_max'];
        	$mamifero = new Mamifero($peso, $comprimento, $altura, $cor_pre, $nome, $vel_max);
        	echo "<b>$tipo : </b> $nome <br/>";
        	$mamifero->exibe_mamifero();

        } elseif ($tipo == 'Anfibio') {

        	$temp_maxsub = $_POST['temp_maxsub'];
        	$anfibio = new Anfibio($peso, $comprimento, $altura, $cor_pre, $nome, $temp_maxsub);
        	echo "<b>$tipo : </b> $nome <br/>";
        	$anfibio->exibe_anfibio();

        } elseif ($tipo == 'Peixe') {

        	$temperatura_media = $_POST['temperatura_media'];
        	$peixe = new Peixe($peso, $comprimento, $altura, $cor_pre, $nome, $temperatura_media);
        	echo "<b>$tipo : </b> $nome <br/>";
        	$peixe->exibe_peixe();

        }

        echo "</fieldset>";



	?>

</body>
</html>