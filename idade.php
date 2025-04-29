<?php require_once 'cabecalho.php'; ?>
<form action="idade2.php" method="GET">
	<h1>Calculo da Idade</h1>
	<!-- <p>Digite seu ano de nascimento:</p>
	 <p><input type="number" name="ano" min="1930"
		max="<?= date('Y') ?>" step="1" required></p> -->
	<p>Digite a data de nascimento:</p>
	<p><input type="date" name="datanasci" 
		min="1930-01-01" max="<?= date('Y-m-d')?>" 
		required></p>
	<p><input type="submit" name="botao" value="Calcular"></p>
</form>
</body>
</html>