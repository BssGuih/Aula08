<?php require_once 'cabecalho.php'; ?>
<section class="resultado">
<?php

$instituicao=$_GET['instituicao'];
    /*if ($instituicao=="SENAC") {*/
    	if(srtolower($instituicao)=="senac"){
	echo "<p>Muito bem! Uma ótima escolha!</p>";
}else{
	echo"<P>Que pena! Poderia ser SENAC!</p>";
}
echo "<div><a href='senac.phb' class='link'>
Outra Instituição?</a></div>";

?>
</section>
</body>
</html>

         