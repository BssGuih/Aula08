<?php require_once 'cabecalho.php'; ?>
<form action="escola.php" method="POST">
	<h1>Escola de natação</h1>
	<p>Nome do Aluno</p>
	<p><input type="text" name="nome"
		size="50" maxlength="70"
		pattern="[a-zA-Z\sçÇãÃéÉêÊ]{2,70}" required></p>
		<p>Data de nascimento</p>
		<p><input type="date" name="datanasci" 
		min="1908-01-01" max="<?= date('Y-m-d')?>" 
		required></p>
		<p><input type="submit" name="botao" value="Cadastre"></p>
	</form>
	<?php

	if (isset($_POST['botao'])){
		$nome=$_POST['nome'];
		$datanasci=new DateTime($_POST['datanasci']);
		$hoje=new DateTime(date('Y-m-d'));
		$idade=$hoje ->diff($datanasci)->y;
		echo "<section class='resultado'";
		if ($idade<6){
			echo "<p>$nome não pode fazer aula!</p>";
        }else if($idade>=6&&$idade<=10){
        	echo "<p>$nome está na turma peixinho!</p>";
        	echo "<img src='img/peixinho.webp'>";
        }else if($idade>=11&&$idade<=14){
        	echo "<p>$nome está na turma peixe!</p>";
        	echo "<img src='img/tilapia.jpg>";
        }else if($idade>=15&&$idade<=17){
        	echo "<p>$nome está na turma bagre!</p>";
        	echo "<img src='img/bagre.jpg>";
        }else if($idade>=18&&$idade<=100){
        	echo "<p>$nome está na turma tubarão!</p>";
        	echo "<img src='img/tubarao.jpg>";
        }else{
        	echo "<p>Não atendemos essa faixa!</p>";
        }
    }
    ?>

        
	

	
