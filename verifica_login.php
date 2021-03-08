<?php
session_start();
if(!$_SESSION['nome']) {
	header('Location: logar.php');
	exit();
}