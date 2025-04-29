<?php require_once 'cabecalho.php'; ?>
<form action="produto2.php" metod=GET>
	<h1>Produtos</h1>
	<p>Digite o preço unitário:</p>
	<p><input type="number" name="preco" step="0.01" min="0" required></p>
	<p>Digite a quantidade</p>
	<p><input type="number" name="quantidade" step="1" min="1" required></p>
	<p><input type="submit" name="botao" value="Calcule"></p>
</form>
</body>
</html>
