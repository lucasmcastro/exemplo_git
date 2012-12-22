CREATE DATABASE academico;
USE academico;

CREATE TABLE alunos (
	id int NOT NULL AUTO_INCREMENT,
	nome varchar(100) NOT NULL,
	email varchar(100) NOT NULL,
	telefone varchar(100) NULL,
	PRIMARY KEY (id)
);

CREATE TABLE notas (
	id int NOT NULL AUTO_INCREMENT,
	nota integer NOT NULL,
	id_aluno int NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (id_aluno) REFERENCES alunos(id)
);