<?php
// define('HOST', 'localhost');
// define('USUARIO', 'root');
// define('SENHA', '');
// define('DB', 'registro3');

$HOST = "localhost";
$USUARIO = "root";
$SENHA = "";
$BD = "registro3";
$conexao = mysqli_connect($HOST, $USUARIO, $SENHA) or die ('Não foi possível conectar');
$DB = mysqli_select_db($conexao, $BD);