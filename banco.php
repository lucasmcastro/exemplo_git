<?php 
	mysql_connect('localhost:/tmp/mysql.sock','root','');
	mysql_select_db('academico');

	function inserir($dados, $tabela){
		$campos = array();
		$valores = array();
		foreach ($dados as $chave => $valor) {
			$campos[] = $chave;
			$valores[] = '\''.$valor.'\'';
		}
		$campos = implode(',', $campos);
		$valores = implode(',', $valores);
		$sql = 'INSERT INTO '.$tabela.' ('.$campos.') VALUES ('.$valores.');';
		mysql_query($sql);
	}

	function remover($id_objeto, $tabela){
		$sql = 'DELETE FROM '.$tabela.' WHERE id='.$id_objeto.';';
		mysql_query($sql);
	}

	function listar_todos($tabela){
		$sql = 'SELECT * FROM '.$tabela.';';
		$resultado = mysql_query($sql);
		$objetos = array();
		while($objeto = mysql_fetch_assoc($resultado)){
			$objetos[] = $objeto;
		}
		return $objetos;		
	}

	function listar_alunos(){
		$sql = 'SELECT a1.id, a1.nome, a1.email, a1.telefone, n1.nota FROM alunos a1 INNER JOIN notas n1 ON n1.id_aluno=a1.id;';
		$resultado = mysql_query($sql);
		$objetos = array();
		while($objeto = mysql_fetch_assoc($resultado)){
			$objetos[] = $objeto;
		}
		return $objetos;		
	}

?>
