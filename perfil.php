<?php require_once 'cabecalho.php'; ?>
<form action="perfil2.php" method="POST">
	<h1>Cadastro</h1>
	<p>Digite o seu nome:</p>
	<p><input type="text" name="nome" size="30" maxlength="100" pattern="[a-zA-Z\sçÇãÃéÉêÊúÚóÓ]{2,100}" required></p>
	<p>Digite sua data de nascimento:</p>
	<p><input type="date" name="datanasci" min="<?php
	$hoje=new DateTime(date('Y-m-d'));
	$hoje->modify('-100 years');
	echo $hoje->format('Y-m-d');
    ?>" max="<?=date('Y-m-d') ?>" required></p>

    <p>Cor da letra:</p>
    <p><input type="color" name="corletra" required></p>
    <p>Cor de fundo:</p>
    <p><input type="color" name="corfundo" required></p>
    <p><input type="submit" name="botao" value="Cadastrar"></p>
</form>
</body>
</html>

