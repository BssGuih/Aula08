<?php require_once 'cabecalho.php'; ?>
<section class="resultado">
<?php
$preco=$_GET['preco'];
$quantidade=$_GET['quantidade'];
$valor=$preco*$quantidade;
$preco=number_format($preco,2,',','.');
$valor=number_format($valor,2,',','.');
echo "<p>Para $quantidade un. a R$ $preco cada o total R$ $valor</p>";
echo "<div><a href='produto.php' class='link'>Comprar Novamente?</a></div>";

?>
</section>
</hmtl>
</body>

