<!DOCTYPE html>
<html>
<head>
	<title>upload</title>
</head>
<body>




<form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
	<input type="file" name="arquivo"><br>

	<input type="submit" name="enviar-formulario">
</form>



<?php 
if (isset($_POST['enviar-formulario'])):
	$formatosPermitidos = array("png", "jpeg", "jpg", "gif", "zip", "txt");
	$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

	// var_dump($_FILES);

	if (in_array($extensao, $formatosPermitidos)) {
			
		$pasta = "arquivos/";
		$temporario = $_FILES['arquivo']["tmp_name"];
		$novoNome = uniqid().".$extensao";


		if (move_uploaded_file($temporario, $pasta.$novoNome)) {
			$mensagem = "Upload feito com sucesso!!!";
		}else{
			$mensagem = "Erro, não foi possivel fazer o Upload";
		}


	}else{
		$mensagem = "Formato inválido";
	}
// var_dump($_POST);
endif;


echo $mensagem;
?>


</body>
</html>