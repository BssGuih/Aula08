<?php require_once 'cabecalho.php'; ?>
<form action="senac2.php" method="GET">
	<h1>Instituição de Ensino</h1>
	<p>Digite uma Instituição de ensino:</p>
	<p><input type="text" name="Instituicao"
		size="30" maxlength="30"
		pattern="[a-zA-Z\sçÇãÃéÉêÊ]{3,30" required></p>
		<P><Input type="submit" name="botao"
			value="enviar"></p>
</form>
</body>
</html>			
