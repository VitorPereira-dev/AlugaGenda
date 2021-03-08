<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));


$sql = "INSERT INTO tbl_juridica (nome, usuario, senha) VALUES ('$nome', '$usuario', '$senha') ";
$query = mysqli_query($conexao, $sql);
if (!$query) {
	echo (mysqli_error($conexao));
}else{
	echo "<script> alert('dados inseridos com sucesso!')</script>";
}
//$sql = "select count(*) as total from tbl_juridica where usuario = $usuario";
//$result = mysqli_query($conexao, $sql);
//$row = mysqli_fetch_assoc($result);

//if($row['total'] == 1) {
//	$_SESSION['usuario'] = true;
//	header('Location: cadastro.php');
//	exit;
//}

//$sql = "INSERT INTO registro2 (nome, usuario, senha, data_cadastro) VALUES ('$nome', '$usuario', '$senha', NOW())";

// if($conexao->query($sql) === TRUE) {
// 	$_SESSION['status_cadastro'] = true;
// }

$conexao->close();

header('Location: logar.php');
exit;
?>