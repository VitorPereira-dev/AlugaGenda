CREATE DATABASE registro;
USE registro;
CREATE TABLE tbl_juridica(
  id_registro_juridica INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  usuario VARCHAR(50) NOT NULL,
  email VARCHAR (200) NOT NULL,
  senha VARCHAR(32) NOT NULL,
  nome VARCHAR(100) NOT NULL,
  cnpj CHAR(14) NOT NULL,
  telefone INT(11) NOT NULL,
  endereco VARCHAR(100) NOT NULL,
  data_cadastro DATETIME NOT NULL
);
CREATE TABLE tbl_fisico(
  id_usuario_prestador_fisico INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  usuario VARCHAR(50) NOT NULL,
  email VARCHAR (200) NOT NULL,
  senha VARCHAR(32) NOT NULL,
  nome VARCHAR(100) NOT NULL,
  cpf CHAR(11) NOT NULL,
  telefone INT(11) NOT NULL,
  endereco VARCHAR(100) NOT NULL,
  data_cadastro DATETIME NOT NULL
);
CREATE TABLE tbl_cliente(
  id_usuario_cliente INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  usuario VARCHAR(50) NOT NULL,
  email VARCHAR (200) NOT NULL,
  senha VARCHAR(32) NOT NULL,
  nome VARCHAR(100) NOT NULL,
  telefone INT(11) NOT NULL,
  data_cadastro DATETIME NOT NULL
);
CREATE TABLE logar(
  id_usuario_prestador INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  usuario VARCHAR(50) NOT NULL,
  senha VARCHAR(32) NOT NULL,
  id_registro_juridica INT NOT NULL,
  id_usuario_prestador_fisico INT NOT NULL,
  id_usuario_cliente INT NOT NULL,
  CONSTRAINT fk_id_juridica FOREIGN KEY (id_registro_juridica) REFERENCES tbl_juridica(id_registro_juridica),
  CONSTRAINT fk_id_fisico FOREIGN KEY (id_usuario_prestador_fisico) REFERENCES tbl_fisico(id_usuario_prestador_fisico),
  CONSTRAINT fk_id_cliente FOREIGN KEY (id_usuario_cliente) REFERENCES tbl_cliente(id_usuario_cliente)
);
