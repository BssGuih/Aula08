<?php require_once 'cabecalho.php'; ?>
<section class="resultado">
<?php
	$numero1=$_GET['numero1'];
	$numero2=$_GET['numero2'];
	$soma=$numero1+$numero2;
	echo "<p>$numero1 = $numero2 = $soma</p>";
	echo "<div><a href='soma.php' class='link'>Novo cálculo?</a></div>";
?>
</body>
</html>
</section>