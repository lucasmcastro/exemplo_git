	<?php include_once('header.php'); ?>
	<h1>Novo Aluno</h1>
	<form action = '/academico/novo_aluno.php' method = 'POST'>
		Nome:<input type='text' name='nome' required><br />
		Email:<input type='text' name='email'required><br />
		Telefone:<input type='text' name='telefone'required><br />
		<button type='submit'>ENVIAR</button>
	</form>

	<?php
		//Caso a requisição seja POST
		if (count($_POST) > 0) {
			include_once('banco.php');			
			//SQL para inserir novo aluno
			$sql_insert='insert into alunos 
				(nome,email,telefone) values(\''
				.$_POST['nome'].'\',\''
				.$_POST['email'].'\',\''
				.$_POST['telefone'].'\');';
			//execute a query
			mysql_query($sql_insert);

			echo '<p>o aluno foi adicionado.</p>';
			echo '<p><a href=\'/academico/listar_aluno.php\'>Voltar</a></p>';

		}
	?>
	<?php include_once('footer.php') ?>
