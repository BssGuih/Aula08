<?php require_once 'cabecalho.php'; 
require_once 'model/Usuario.php';
$usuario=new Usuario();
$usuario->setNome($_POST['nome']);
$usuario->setCorletra($_POST['corletra']);
$usuario->setCorfundo($_POST['corfundo']);
$usuario->mudarCores($usuario->getCorfundo(),$usuario->getCorletra());
?>
<body style="background-color:<?=$usuario->getCorfundo()?>;color:<?=$usuario->getCorletra()?>">
	<section>
		<h1>Bem-vindo! <?=$usuario->getNome() ?>!</h1>
		<p>Nascimento: <?=$usuario->getDatanasci() ?></p>
	</section>
</body>
</html>
