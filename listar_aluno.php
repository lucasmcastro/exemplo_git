<html>
<head>
	<title></title>
</head>
<body>
	<h1>Lista de Alunos</h1>
	<?php
		include_once('banco.php');
		$alunos = listar_alunos();
		echo '<table> 
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>Email</th>
				<th>Telefone</th>
				<th>Nota</th>				
				<th></th>
				<th></th>
				<th></th>				
			</tr>';
		//Enquanto fetch retornar algo diferente de nulo
		foreach ($alunos as $aluno) {
			echo '<tr>
					<td>'.$aluno['id'].'</td>
					<td>'.$aluno['nome'].'</td>
					<td>'.$aluno['email'].'</td>
					<td>'.$aluno['telefone'].'</td>
					<td>'.$aluno['nota'].'</td>					
					<td><a href=\'/academico/novo_nota.php?id_aluno='.$aluno['id'].'\'>Cadastrar Notas</a></td>
					<td><a href=\'/academico/alterar_aluno.php?id='.$aluno['id'].'\'>Alterar</a></td>
					<td><a href=\'/academico/remover_aluno.php?id='.$aluno['id'].'\'>Remover</a></td>
				</tr>';
		}
		echo '</table>';
	?>

	<a href='/academico/novo_aluno.php'>Novo Aluno</a>
<?php include_once('footer.php') ?>

