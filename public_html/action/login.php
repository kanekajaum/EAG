<?php 
//SESSAO

session_start();

// Conexão
include_once 'connect.php';


if (isset($_POST)) {
	

    $contador = 2;
	$quantidadeArquivos = count($xlsx->rows());

	while ($contador < $quantidadeArquivos) {

	  	if ($_POST['login_nome'] == $xlsx->rows()[$contador][1] && $_POST['login_senha'] == $xlsx->rows()[$contador][7]) {

	  	$_SESSION['mensagem'] = "Login em ".$xlsx->rows()[$contador][1];
	  	$_SESSION['usuario'] = $xlsx->rows()[$contador][1];
	  	$_SESSION['id'] = $xlsx->rows()[$contador][0];

	  	if ($xlsx->rows()[$contador][1] == 'suporte') {
	  		header("Location: ../adm.php");
	  	}if($xlsx->rows()[$contador][1] != 'suporte'){
	  		header("Location: ../cliente.php");
	  		
	  	}
      	
  		}else {
  			// $_SESSION['mensagem'] = "Usuario ou senha estão incorretos!";
      		// header("Location: ../teste.php");
     //  		echo '<div class="alert alert-danger text-center">Usuario ou senha estão incorretos!<br><a href="../teste.php">Voltar para a pagina de Login</a></div>';
  			// exit;
  			
  		}

    $contador++;
    }


}


?>
