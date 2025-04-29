<?php require_once 'cabecalho.php'; ?>
<form action="telaveiculo.php" method="POST">
	<h1>Cadastro do veículo</h1>
	<p>Digite a placa:</p>
	<p><input type="text" name="placa" size="9" maxlength="9" step="1" min="0"></p>
	<p>Digite o modelo:</p>
	<p><input type="text" name="modelo" size="30" maxlength="30" pattern="[a-zA-Z\sçÇãÃéÉêÊúÚóÓ]{2,70}"></p>
	<p>Digite o ano:</p>
	<p><input type="date" name="ano" min="1910-01-01" max="<?date('Y-m-d')?>" required></p>
	<p>Digite o fabricante:</p>
	<P><input type="text" name="fabricante" pattern="[a-zA-Z\sçÇãÃéÉêÊúÚóÓ]{2,70}" maxlength="20" size="20" required></p>
	<p>Seleciona a cor do veículo:</p>
	<p><input type="color" name="corcarro" required></p>
	<p>Digite o valor:</p>
	<p>R$<input type="number" name="valor" step="0.01" min="1" required></p>
	<p><input type="submit" name="botao" value="Cadastre"></p>
</form>
<?php

if (isset($_POST['botao'])){
	require_once 'model/Veiculo.php';
	$veiculos=new Veiculos();
	$veiculos->setPlaca($_POST['placa']);
	$veiculos->setModelo($_POST['modelo']);
	$veiculos->setAno($_POST['ano']);
	$veiculos->setFabricante($_POST['fabricante']);
	$veiculos->setCorcarro($_POST['corcarro']);
	$veiculos->setValor($_POST['valor']);
	echo "<section class='resultado'>";
	echo "<p>Placa: ".$veiculos->getPlaca()." !</p>";
	echo "<p>Modelo: ".$veiculos->getModelo()." !</p>";
	echo "<p>Ano: ".$veiculos->getAno()." !</p>";
	echo "<p>Fabricante: ".$veiculos->getFabricante()." !</p>";
	echo "<p>Cor do veículo: ".$veiculos->getCorcarro()." !</p>";
	echo "<p>Valor do veículo: ".$veiculos->getValor()." !</p>";
}
?>
</html>
</body>


