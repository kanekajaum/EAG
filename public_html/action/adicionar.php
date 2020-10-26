<?php 
//SESSAO

session_start();

// Conexão
include_once 'connect.php';

if (isset($_POST)):

      // echo $_POST['txt_nome'];
      // var_dump($_POST);



      $formatosPermitidos = array("png", "PNG", "jpeg", "jpg", "gif", "zip", "ZIP", "txt", "TXT", "RAR", "rar");
      $quantidadeArquivos = count($_FILES['arquivo']['name']);
      $nome = $_POST['txt_nome'];
      $nome_arquivo = "";
      $contador = 0;


      while ($contador < $quantidadeArquivos):


      $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
      $nomeC = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_FILENAME);

      if (in_array($extensao, $formatosPermitidos)) {
          
        $pasta = "../arquivos/";
        $pastaNome = $nome."/";
        $temporario = $_FILES['arquivo']["tmp_name"][$contador];
        $novoNomeE = $nome_arquivo.".$extensao";
        $novoNome = $nomeC.".".$extensao;

        if($nome_arquivo != ""){
          if (file_exists($pasta.$pastaNome)) {
          
            if (move_uploaded_file($temporario, $pasta.$pastaNome.$novoNomeE)) {
              


                $_SESSION['mensagem'] = 'Upload feito com sucesso: '.$novoNomeE;
      			header("Location: ../adm.php");


            }else{
              
              	$_SESSION['mensagem'] = 'Erro no upload do arquivo: '.$temporario;
      			header("Location: ../adm.php");
            }
          }else{
            mkdir('../arquivos/'.$pastaNome, 0777, true);
          }

        }else{
          if (file_exists($pasta.$pastaNome)) {
          
            if (move_uploaded_file($temporario, $pasta.$pastaNome.$novoNome)) {
                $_SESSION['mensagem'] = 'Upload feito com sucesso: '.$novoNome;
      			    header("Location: ../adm.php");
            }else{
              	$_SESSION['mensagem'] = 'Erro no upload do arquivo: '.$temporario;

      			    header("Location: ../adm.php");
            }
          }else{
            
            mkdir('../arquivos/'.$pastaNome, 0777, true);
            
            $_SESSION['mensagem'] = 'Diretorio criado com sucesso';
            header("Location: ../adm.php");
          }
        }
      }else{
       	$_SESSION['mensagem'] = "Arquivo ".$extensao." não permitida <br>";
        header("Location: ../adm.php");
      }

      $contador++;
      endwhile;

    endif;




?>