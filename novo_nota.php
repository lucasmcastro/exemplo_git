<?php 
	include_once('header.php');
	include_once('banco.php');
	$sql = 'SELECT * FROM alunos WHERE id='.$_GET['id_aluno'].';';
	$resultado = mysql_query($sql);
	$aluno = mysql_fetch_assoc($resultado);
?>

<h1>Cadastrar Nota para <?php echo $aluno['nome']; ?></h1>
<form action='/academico/novo_nota.php?id_aluno=<?php echo $_GET['id_aluno'] ?>' method='post'>
	Nota: <input name='nota' />
	<button type='submit'>Enviar</button>
</form>

<?php 	
	if (count($_POST) > 0) {
		//SQL para inserir nova nota
		$dados = array(
			'id_aluno' => $_GET['id_aluno'],
			'nota' => $_POST['nota']
		);
		inserir($dados, 'notas');
		echo '<p>a nota foi adicionada.</p>';
		echo '<p><a href=\'/academico/listar_aluno.php\'>Voltar</a></p>';

	}
	include_once('footer.php');
?>
