<?php 
//SESSAO

session_start();

// Conexão
include_once 'connect.php';

if (isset($_POST)) {
	

    session_unset();

    $_SESSION['mensagem'] = "Até mais!";
    header("Location: ../teste.php");
}



?>