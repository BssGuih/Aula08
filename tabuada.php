<?php require_once 'cabecalho.php'; ?>
<form action="tabuada.php" method="GET">
	<h1>Tabuada</h1>
	<p>Digite um número</p>
	<p><Input type="number" name="numero"
		step="1" required></p>
		<p><input type="submit" name="botao" value="Calcule"></p>
	</form>
	<?php
	if (isset($_GET['botao'])){
		$numero=$_GET['numero'];
		$contador=1;
		echo "<section class='resultado'>";
			while($contador<=10){
				$result=$numero*$contador;
				echo "<p>$numero x $contador = $result</p>";
				$contador++;
			}
			echo "</section>";
		}
?>
</body>
</html>

		