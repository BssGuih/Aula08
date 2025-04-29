<?php require_once 'cabecalho.php'; ?>
<form action="media.php" method="GET">
	<h1>Média do intervalo</h1>
	<p>Digite o início</p>
	<p><input type="number" name="inicio"
	    step="1" required></p>
	<p>Digite o fim:</p>
	<p><input type="number" name="fim"
	    step="1" required></p>
	<p><input type="submit" name="botao"
		value="Calcule"></p>
	</form>
	<?php
	if(isset($_GET['botao'])){
		$inicio=$_GET['inicio'];
		$fim=$_GET['fim'];
		$media=0;
		$elementos=0;
		$contador=$inicio;
		if($inicio<$fim){
			while($contador<=$fim){
				$media=$media+$contador;
				$contador++;
				$elementos++;
			}

		    }else if($inicio>$fim){
				while($contador>=$fim){
					$media=$media=$contador;
					$contador--;
					$elementos++;
				}
			}
				else{
					echo"<section class='resultado'>";
					echo"<p>O início e o fim são iguais!</p>";
					echo"</section>";
				}
				if($inicio!=$fim){
					$media=$media/$elementos;
					echo"<section class='resultado'>";
					echo"<p>A média é $media !</p>";
					echo"</section>";
				}
			}
?>
</html>
</body>