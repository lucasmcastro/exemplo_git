	<?php 
		include_once('header.php');		
		include_once('banco.php');
		$sql = 'SELECT * FROM alunos WHERE id='.$_GET['id'].';';
		$resultado = mysql_query($sql);
		$aluno = mysql_fetch_assoc($resultado);
	?>

	<form action='/academico/alterar_aluno.php?id=<?php echo $_GET['id'] ?>' method='post'>
		Nome:<input type='text' name='nome' value='<?php echo $aluno['nome'] ?>' required><br />
		Email:<input type='text' name='email' value='<?php echo $aluno['email'] ?>' required><br />
		Telefone:<input type='text' name='telefone' value='<?php echo $aluno['telefone'] ?>' required><br />
		<button type='submit'>ENVIAR</button>
	</form>

	<?php 
		if(count($_POST) > 0){
			$sql = 'UPDATE alunos SET 
				nome=\''.$_POST['nome'].'\',
				email=\''.$_POST['email'].'\',
				telefone=\''.$_POST['telefone'].'\'
				WHERE id='.$_GET['id'].';';
			mysql_query($sql);
			echo '<p>o aluno foi alterado.</p>';
			echo '<p><a href=\'/academico/listar_aluno.php\'>Voltar</a></p>';
		}
	?>
<?php include_once('footer.php') ?>
