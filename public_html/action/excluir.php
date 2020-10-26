<?php 

	if(isset($_POST)){

		$id = $_POST['id'];

		unlink($id);
		$_SESSION['mensagem'] = 'Deletado com sucesso ';
		header("Location: ../adm.php");
	}else{
		$_SESSION['mensagem'] = 'Erro ao deletar!';
    	header("Location: ../adm.php");
	}
	

?>
