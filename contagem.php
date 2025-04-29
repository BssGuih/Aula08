<?php require_once 'cabecalho.php'; ?>
<form action="contagem.php" method="GET">
	<h1>Contagem de Números</h1>
	<p>Digite o início:</p>
	<p><Input type="number" name="inicio"
		step="1" required></p>
		<p>Digite o fim:</p>
		<p><input type="number" name="fim"
			step="1" required></p>
			<p><input type="submit" name="botao" value="Conte!"></p>
		</form>
		<?php
		if (isset($_GET['botao'])){
			$inicio=$_GET['inicio'];
			$fim=$_GET['fim'];
			echo "<section class='resultado'>";
			$contador=$inicio;
			if($inicio<$fim){
				while($contador<=$fim){
					echo "<p>$contador</p>";
					$contador++;
				}
			}
			else if($inicio>$fim){
            while ($contador>=$fim){
				echo "<p>$contador</p>";
				$contador--;
			}
		}else{
			echo "<p>Os números são iguais!</p>";
		}
		echo "</section>";
	}
		?>
	</body>
</hmtl>