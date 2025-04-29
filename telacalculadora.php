<?php require_once 'cabecalho.php'; ?>
<form action="telacalculadora.php" method="GET">
	<h1>Calculadora</h1>
	<p>Digite um número:</p>
	<p><input type="number" name="numero1"
		step="0.01" required></p>
	<p>Digite outro número:</p>
	<p><input type="number" name="numero2"
		step="0.01" required></p>
	<p>Operação:</p>
	<p>
	    <input type="radio" name="operacao"
		value="+" required>+
	    <input type="radio" name="operacao"
		value="-" required>-
		<input type="radio" name="operacao"
		value="*" required>x
		<input type="radio" name="operacao"
		value="/" required>&divide;
		</p>
		<p><input type="submit" name="botao"
		value="Calcule"></p>
</form>
<?php
    if(isset($_GET['botao'])){
    	require_once 'model/Calculadora.php';
    	$calculadora=new Calculadora();
    	$calculadora->setNumero1($_GET['numero1']);
        $calculadora->setNumero2($_GET['numero2']);
        echo"<section class='resultado'>";
        switch ($_GET['operacao']) {
        case '+':
        	echo $calculadora->somar($calculadora->getNumero1(),$calculadora->getNumero2());
        	break;
        case "-":

        	echo $calculadora->subtrair($calculadora->getNumero1(),$calculadora->getNumero2());
        	break;
        case "*":

        	echo $calculadora->multiplicar($calculadora->getNumero1(),$calculadora->getNumero2());
        	break;
        case "/":

        	echo $calculadora->dividir($calculadora->getNumero1(),$calculadora->getNumero2());
        	break;
        }
        echo"</section>";
    }
?>
</html>
</body>

        	
        	
        
    