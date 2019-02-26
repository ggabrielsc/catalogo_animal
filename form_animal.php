<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Formulário Animal</title>
</head>
<body>
	<?php

		if(empty($_POST)){
		echo "
			<fieldset>
				<legend>Cadastrar animal: </legend>
				<form action=\"form_animal.php\" method=\"POST\">
				Ave<input type=\"radio\" name=\"tipo\" value=\"Ave\"/><br/>
				Mamifero<input type=\"radio\" name=\"tipo\" value=\"Mamifero\"/><br/>
				Anfibio<input type=\"radio\" name=\"tipo\" value=\"Anfibio\"/><br/>
				Peixe<input type=\"radio\" name=\"tipo\" value=\"Peixe\"/> <br/><br/>

				<button type=\"submit\">Próximo</button>
			</fieldset>";
		} else {
			$tipo = $_POST['tipo'];

			echo "
				<form action=\"exibe_animal.php\" method=\"POST\">
					<fieldset>
						<legend>Cadastrar animal: </legend>
						<label>Peso: </label>
						<input type=\"text\" name=\"peso\" placeholder=\"Peso...\"/>
						<label>Comprimento: </label>
						<input type=\"text\" name=\"comprimento\" placeholder=\"Comprimento...\"/><br/>
						<label>Altura: </label>
						<input type=\"text\" name=\"altura\" placeholder=\"Altura...\"/>
						<label>Cor Predominante: </label>
						<input type=\"text\" name=\"cor_pre\" placeholder=\"Cor Predominante...\"/><br/>
						<label>Nome da espécie: </label>
						<input type=\"text\" name=\"nome\" placeholder=\"Nome da espécie...\"/><br/>";

						if ($tipo == 'Ave') {
							echo "
								<label>Altura máximo de vôo: </label>
								<input type=\"text\" name=\"altura_max\" placeholder=\"Altura Máxima de vôo...\"/>";
						} elseif ($tipo == 'Mamifero') {
							echo "
								<label>Velocidade máxima: </label>
								<input type=\"text\" name=\"vel_max\" placeholder=\"Velocidade máxima...\"/>";
						} elseif ($tipo == 'Anfibio') {
							echo "
								<label>Tempo Máximo Submerso: </label>
								<input type=\"text\" name=\"temp_maxsub\" placeholder=\"Tempo máximo submerso...\" />";
						} elseif ($tipo == 'Peixe') {
							echo "
								<label>Temperatura média de sobrevivência: </label>
							<input type=\"text\" name=\"temperatura_media\" placeholder=\"Temperatura média de sobrevîvência...\" />";
						}
					echo "<input type=\"hidden\" name =\"tipo\" value=\"".$tipo."\" />";

					echo "
						<br/><br/>
						<button type=\"submit\">Enviar</button>
						</fieldset>
						</form>";

		}
	?>
</body>
</html>