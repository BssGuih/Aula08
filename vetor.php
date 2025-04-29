<?php require_once 'cabecalho.php'; ?>
<form action="vetor.php" method="GET">
	<h1>Ordenando números</h1>
	<p>Quantos números você vai digitar?</p>
	<p><input type="number" name="quantidade" min="2" max="10" step="1" required></p>
	<p><input type="submit" name="botao" value="Confirmar"></p>
</form>
<?php
    if(isset($_GET['quantidade'])){
    	$quantidade=$_GET['quantidade'];
    	echo "<form action='vetor.php' method='GET'>";
    	for($contador=1;$contador<=$quantidade;$contador++){
    		echo "<p>Digite o $contador&ordm;:</p>";
    		echo "<p><input type='number' name='numero$contador' step='1' required></p>";
    	}
    	echo "<input type='hidden' name='quantidade' value='$quantidade'>";
    	echo "<p><input type='submit' name='botao2' value='Ordene'></p>";
    	}else if(isset($_GET['botao2'])){
    		$quantidade=$_GET['quantidade'];
    		$vetor=[];
    		for ($contador=0; $contador<$quantidade; $contador++){
    			$aux=$contador+1;
    			$vetor[$contador]=$_GET["numero$aux"];
    		}
    		sor($vetor);
    		echo "<section class='resultado'><p>";
    		foreach($vetor as $V){
    			echo "$v ,";
    		}
    		echo "</p></section>";
    	}
 ?>
 </body>
 </html>
    