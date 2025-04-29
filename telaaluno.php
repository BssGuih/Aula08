<?php require_once 'cabecalho.php'; ?>
<form action="telaaluno.php" method="POST">
	<h1>Casdastro de aluno</h1>
	<p>Digite a matrícula:</p>
	<p><input type="number" name="matricula" step="1" min="1" required></p>
	<p>Digite o nome:</p>
	<p><input type="text" name="nome" size="40" maxlength="70" pattern="[a-zA-Z\sçÇãÃéÉêÊúÚóÓ]{2,70}" required></p>
	<p>Endereço:</p>
	<p><input type="text" name="endereco" size="50" maxlength="100" pattern="[a-zA-Z\sçÇãÃéÉêÊúÚóÓ]{5,100}" required></p>
	<p>Email:</p>
	<p><input type="email" name="email" size="30" maxlength="50" required></p>
	<p>Cor de fundo do perfil:</p>
	<p><input type="color" name="corperfil" required></p>
	<p><input type="submit" name="botao" value="Cadastrar"></p>
</form>
<?php

if (isset($_POST['botao'])){
	require_once 'model/Aluno.php';
	$aluno=new Aluno();
	$aluno->setMatricula($_POST['matricula']);
	$aluno->setNome($_POST['nome']);
	$aluno->setEndereco($_POST['endereco']);
	$aluno->setEmail($_POST['email']);
	$aluno->setCorperfil($_POST['corperfil']);
	echo "<section class='resultado' style='background-color:".$aluno->getCorperfil()."'>";
	echo "<p>Matrícula: ".$aluno->getMatricula()." !</p>";
	echo "<p>Bem vindo: ".$aluno->getNome()." !</p>";
	echo "<p>Endereço: ".$aluno->getEndereco()." !</p>";
	echo "<p>Email: ".$aluno->getEmail()." !</p>";
	echo "</section>";
}
?>
</html>
</body>
