<?php require_once 'cabecalho.php'; ?>
<form action="fatorial.php" method="GET">
	<h1>Cálculo do Fatorial</h1>
		<p>Digite um número</p>
		<p><input type="number" name="numero"
			step="1" min='0' required></p>
			<p><input type="submit" name="botao" value="Calcule"></p>
		</form>
		<?php
		if (isset($_GET['botao'])){
			$numero=$_GET['numero'];
			$contador=1;
			$result=1;
			echo"<section class='resultado'>";
			while($contador<=$numero){
				$result=$contador*$result;
				$contador++;
				
			}
			$result=number_format($result,1,',','.');
            echo"<p>$numero!= $result<p>";
			echo "</section>";
		}
?>
