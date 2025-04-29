<?php require_once 'cabecalho.php'; ?>
<form action="pares.php" method="GET">
	<h1>Contagem de pares</h1>
	<p>Quantos números você vai digitar?</p>
	<p><input type="number" name="quantidade" min="2" max="10" step="1" required></p>
	<p><input type="submit" name="botao" value="Confirmar"></p>
</form>
<?php
    if(isset($_GET['quantidade'])){
    	$quantidade=$_GET['quantidade'];
    	echo "<form action='pares.php' method='GET'>";
    	for($contador=1;$contador<=$quantidade;$contador++){
    		echo "<p>Digite o $contador&ordm;:</p>";
    		echo "<p><input type='number' name='numero$contador' step='1' required></p>";
    	}
    	echo "<input type='hidden' name='quantidade' value='$quantidade'>";
    	echo "<p><input type='submit' name='botao2' value='Verifique'></p>";
    	}else if(isset($_GET['botao2'])){
    		$quantidade=$_GET['quantidade'];
    		$vetor=[];
    		for ($contador=0; $contador<$quantidade; $contador++){
    			$aux=$contador+1;
    			$vetor[$contador]=$_GET["numero$aux"];
    		}
    		$cont_pares=0;
    		echo "<section class='resultado'><p>";
    		foreach($vetor as $v){
    			if($v%2==0){
    				$cont_pares++;
    			}
    		}
    		echo "<p>Foram $cont_pares pares!</p>";
    		echo "</p></section>";
    	}
 ?>
 </body>
 </html>
    