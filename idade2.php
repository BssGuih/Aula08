<?php require_once 'cabecalho.php'; ?>
<section class="resultado">
<?php
	/*
	$ano=$_GET['ano'];
	$idade=date('Y')-$ano;
	*/
	$datanasci=$_GET['datanasci'];
	$hoje=date('Y-m-d');
	$datanasci=new DateTime($datanasci);
	$hoje=new DateTime($hoje);
	$idade=$hoje->diff($datanasci)->y;

	echo "<p>Sua idade é $idade!</p>";
	echo "<div><a href='idade.php' class='link'> 
	Novo Cálculo?</a></div>";

?>	
</section>
</body>
</html>