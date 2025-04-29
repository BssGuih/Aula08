<?php require_once 'cabecalho.php'; ?>
<form action="livro.php" method="POST">
	<h1>Comparação de livros</h1>
	<p>Digite o 1&ordm; autor:</p>
	<p><input type="text" name="autor1"
		size="50" maxlength="70"
		pattern="[a-zA-Z\sçÇãÃéÉêÊ]{2,70}"
		required></p>
		<p>Digite o título do 1&ordm;:</p>
		<p><input type="text" name="titulo1"
			size="50" maxlength="100"
			pattern="[a-zA-Z0-9\s!sçÇãÃéÉêÊ:]{1,100}"
			required></p>
			<p>Digite o n&ordm; de páginas:</p>
			<p><input type="number" name="paginas1"
				min="1" step="1" required></p>

	<p>Digite o 2&ordm; autor:</p>
	<p><input type="text" name="autor2"
		size="50" maxlength="70"
		pattern="[a-zA-Z\sçÇãÃéÉêÊ]{2,70}"
		required></p>
		<p>Digite o título do 2&ordm;:</p>
		<p><input type="text" name="titulo2"
			size="50" maxlength="100"
			pattern="[a-zA-Z0-9\s!sçÇãÃéÉêÊ:]{1,100}"
			required></p>
			<p>Digite o n&ordm; de páginas:</p>
			<p><input type="number" name="paginas2"
				min="1" step="1" required></p>
				<p><input type="submit" name="botao" value="Compare"></p>
		</form>
		<?php

		if (isset($_POST['botao'])){
			$autor1=$_POST['autor1'];
			$titulo1=$_POST['titulo1'];
			$paginas1=$_POST['paginas1'];
			$autor2=$_POST['autor2'];
			$titulo2=$_POST['titulo2'];
			$paginas2=$_POST['paginas2'];
			echo "<section class='resultado'>";
			if ($paginas1>$paginas2){
				echo "<p>O livro $titulo1 do $autor1 é o maior!</p>";
			}else if($paginas2>$paginas1){
				echo "<p>Os livros $titulo1 e $titulo2 são do mesmo tamanho</p>";
		}
		echo "</section>";
	}
	?>
	</html>
</body>


