	<?php
		include_once('header.php');
		include_once('banco.php');
		remover($_GET['id'],'alunos');
		echo '<p>o aluno foi removido.</p>';
		echo '<p><a href=\'/academico/listar_aluno.php\'>Voltar</a></p>';
		include_once('footer.php')
	?>