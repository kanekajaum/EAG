
  <html lang="pt-br">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;500&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <link rel="stylesheet" href="dist/jquery.flipster.min.css">
     <script src="dist/jquery.flipster.min.js"></script>
     <link rel="shortcut icon" href="img/icone.ico"/>
     <link rel="stylesheet" href="css\index.css">

      <title>SPED</title>
 
    </head>
    <body >
	<div class="">

	  <nav class="">
	    <input type="checkbox" id="check">
	    <label for="check" class="checkbtn">
	      <i class="fa fa-bars"></i>
	    </label>
	    <label class="logo">EAG Consultoria</label>
	    <ul id="check_1">
	      <!-- <li><a class="nav-l" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">&hellip;</a></li> -->
	      <li id="element"></li>
	      <script type="text/javascript">
	      	var sessao = "";

	      </script>
	      <li><a href="./index.php" onClick="history.go(-1);sessionStorage.removeItem('sessao');">Voltar</a></li>

	    </ul>
	  </nav>
	  <br><br>
<style>

.box {margin-top: 5%;}
.login_cliente{margin-top:5%;width: 30%;background-color: #d1d0de;}

@media( max-width: 768px){
	.login_cliente {width: 80%;margin-top: 20%;}
	.login_cliente img{width: 100;}

}
</style>


      <div class="login_cliente collapse.show container" id="login_cliente">
      	<div class="collapse.show" id="collapseExample">
        <form class="px-4 py-3" method="POST" id="formulario_tal" action=" <?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="form-group">
          	<img src="sped.png" class="rounded mx-auto d-block" width="160" alt="...">
          <?php
          ini_set('error_reporting', E_ALL);
          ini_set('display_errors', true);
          $usuario = "usuario";
          $senha = "senha";

          require_once __DIR__.'/src/SimpleXLSX.php';

          ?>
          <label for="exampleDropdownFormPassword2">Empresa</label>
            <!-- <select class="custom-select" name="login_nome" id="inputGroupSelect01">
              <option selected>Cliente</option> -->
          <?php 


          if ( $xlsx = SimpleXLSX::parse('BASE.xlsx') ) {
          //   $contador = 2;
          //   $quantidadeArquivos = count($xlsx->rows());

          //     while ($contador < $quantidadeArquivos) {


              // echo "<option id value=".$xlsx->rows()[$contador][1].">".$xlsx->rows()[$contador][1]."</option>";

          //       $contador++;
          //     }
          } else {
            echo SimpleXLSX::parseError();
          }
          // echo '<div>';

          ?>

            <!-- </select> -->
            <input type="text" class="form-control" id="exampleDropdownFormText" name="login_nome" placeholder="Empresa">
          </div>
          <div class="form-group">
            <label for="exampleDropdownFormPassword2">Senha</label>
            <input type="password" class="form-control" id="exampleDropdownFormPassword4" name="login_senha" placeholder="Senha">
          </div><br>
          <div class="text-center ">
          	<button type="submit" class="btn btn-primary text-center btn-lg" name="entrar">Entrar</button>          	
          </div><br>

        </form>
        </div>
      </div>




  <?php

?>
<div style="display: none;">
<?php
	
  $login = $_POST['login_nome'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['login_senha'];
  
?>
</div>
<?php
    if (isset($entrar)) {
      $contador = 2;
      $quantidadeArquivos = count($xlsx->rows());

        while ($contador < $quantidadeArquivos) {


          if($login == "suporte"){


            if($senha == "SPGGA@1914"){

            	

             ?><script type="text/javascript">
 				var verificacao = "sucesso_adm";
				sessionStorage.setItem("sessao", "sucesso_adm");
				

             </script>
             <?php

            

             
            }else{

              ?>
              <script type="text/javascript">
                
                var verificacao = "erro";
                sessionStorage.setItem("sessao", "sucesso");

              </script>
              <?php
            }
          }else{
          	
             ?><script type="text/javascript">
 				
				
				var verificacao = "sucesso";

             </script>
             <?php

          	 
          }

         $contador++;
          
        }
    }
  ?>

	  <script type="text/javascript">

	  

	  </script>
	

  <br><br><hr>

  <!--         fim do login        -->
    <div class="adm" class="adm" id="adm" style="display: none;">



      <form class="container" action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
      <?php
      ini_set('error_reporting', E_ALL);
      ini_set('display_errors', true);

      require_once __DIR__.'/src/SimpleXLSX.php';

      echo '<h1>Portal SPED</h1><div>';


      ?>
        <select class="custom-select" name="txt_nome" id="inputGroupSelect01">
          <option selected>Cliente</option>
    <?php 


    if ( $xlsx = SimpleXLSX::parse('BASE.xlsx') ) {
      $contador = 2;
      $quantidadeArquivos = count($xlsx->rows());

        while ($contador < $quantidadeArquivos) {

        // print_r( $xlsx->rows()[2][1] );
        echo "<option id value=".$xlsx->rows()[$contador][1].">".$xlsx->rows()[$contador][1]."</option>";
        // echo $xlsx->rows()[$contador][0]. "|" .$xlsx->rows()[$contador][1]."<br>";
        
        // echo $quantidadeArquivos;

          $contador++;
        }
    } else {
      echo SimpleXLSX::parseError();
    }
    echo '<div>';

    ?>

      </select>
    <br><br>

      <input class="form-control" type="text" name="nome_arquivo" placeholder="Nome do Arquivo" multiple><br>

      <!-- <input class="btn " type="file" name="arquivo[]" multiple><br><br> -->


        <input type="file" class="" id="" lang="pt-br" type="file" name="arquivo[]" multiple>


      <br><br>

      <input class="btn btn-dark" type="submit" name="enviar-formulario">
    </form>
    <br><br>


    <?php 
    if (isset($_POST['enviar-formulario'])):

      // echo $_POST['txt_nome'];
      // var_dump($_FILES);



      $formatosPermitidos = array("png", "PNG", "jpeg", "jpg", "gif", "zip", "ZIP", "txt", "TXT", "RAR", "rar");
      $quantidadeArquivos = count($_FILES['arquivo']['name']);
      $nome = $_POST['txt_nome'];
      $nome_arquivo = $_POST['nome_arquivo'];
      $contador = 0;


	


      while ($contador < $quantidadeArquivos):


      $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
      $nomeC = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_FILENAME);

      if (in_array($extensao, $formatosPermitidos)) {
          
        $pasta = "arquivos/";
        $pastaNome = $nome."/";
        $temporario = $_FILES['arquivo']["tmp_name"][$contador];
        $novoNomeE = $nome_arquivo.".$extensao";
        $novoNome = $nomeC.".".$extensao;

        if($nome_arquivo != ""){
          if (file_exists($pasta.$pastaNome)) {
          
            if (move_uploaded_file($temporario, $pasta.$pastaNome.$novoNomeE)) {
              
              echo'<div class="alert alert-success" role="alert">Upload feito com sucesso '.$novoNomeE.'</div>';
              echo $novoNomeE;
            }else{
              
              echo'<div class="alert alert-danger" role="alert">Erro, não foi possivel fazer o Upload do arquivo '.$temporario.'</div>';
            }
          }else{
            mkdir('arquivos/'.$pastaNome, 0777, true);
          }

        }else{
          if (file_exists($pasta.$pastaNome)) {
          
            if (move_uploaded_file($temporario, $pasta.$pastaNome.$novoNome)) {
              echo'<div class="alert alert-success" role="alert">Upload feito com sucesso '.$novoNome.'</div>';
              // var_dump();
            }else{
              echo'<div class="alert alert-danger" role="alert">Erro, não foi possivel fazer o Upload do arquivo '.$temporario.'</div>';
            }
          }else{
            mkdir('arquivos/'.$pastaNome, 0777, true);
          }
        }
      }else{
        echo "Arquivo ".$extensao." não permitida <br>";
      }

      $contador++;
      endwhile;

    endif;


    ?>

<!--                               fim da inclusao                                       -->
<!--                               inicio da lista                                       -->

    <hr>



      <div class="container">

        <?php
          $path = "arquivos/";
          $diretorio = dir($path);



?>
<table class="table table-sm table-bordered">
  <thead class="thead-dark ">
    <tr>
      <th scope="col">Empresas</th>
    </tr>
  </thead>
  <tbody class="table-hover">

<?php
        

      while($arquivo = $diretorio -> read()){


        if ($arquivo == "." || $arquivo == "..") {
          # code...
        }else{
        



       $diret = scandir($path.$arquivo);
       $qtd = count($diret) -2;

       
       

        echo '<tr>';
        echo    '<td><button type="button" class="btn" data-toggle="modal" data-target="#'.$arquivo.'">'.$arquivo.'</button>';
        if ($qtd == 0) {
          echo  '<span class="badge badge-light float-right" style="margin-top: 1%;">Vazio</span>';
        }else{
          echo '<span class="badge badge-primary float-right" style="margin-top: 1%;">'.$qtd.'</span>';
        }

        echo'</td>';
        echo '</tr>';

        }

      }


?>
  </tbody>
</table>



<?php
$dire = dir($path);

      while($arqui = $dire -> read()){


        if ($arqui == "." || $arqui == "..") {
          # code...
        }else{

?>

<?php echo '<div class="modal fade" id="'.$arqui.'" tabindex="-1" role="dialog" aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">'?>;
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="TituloModalLongoExemplo"><?php echo $arqui ?></h5>
      </div>
      <div class="modal-body">
<!--  -->

<table class="table text-center table-bordered table-hover">
  <thead class="thead-dark ">
    <tr>
      <th>Empresa</th>
      <th>Download</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
<!--  -->
  <?php
    $path = "arquivos/".$arqui."/";
    $diret = dir($path);
    while($arq = $diret -> read()){
      if ($arq == "." || $arq == "..") {

      }else{


	?>

      <tr>
        <td><?php echo $arq; ?></td>
        <?php echo '<td><a href="'.$path.$arq.'" download=""><i class="fa fa-download" style="font-size:24px"></i></a></td>'?>	
        <td><a class="btn btn-danger" style="font-size: 1.3rem;" href="excluir.php?id=<?php echo $path.$arq; ?>">&#128465;</a></td>


      </tr>

	<?php

      }
    }
    $diret->close();
    
    ?>
<!--  -->
  </tbody>
</table>

<!--  -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<?php

        }

      }


?>



    
      </div>


<!--                               fim da lista                                        -->
  </div>

<!--              -->

          </div>
        </div>
      
    </div> 
    <div class="cliente" id="cliente" style="display: none; margin-bottom: 5%;">
<!--  -->

<div style="display: none;">
  	<?php

	  $login = $_POST['login_nome'];
	  $entrar = $_POST['entrar'];
	  $senha = $_POST['login_senha'];

	?>
</div>
<?php

      $contador = 2;
      $quantidadeArquivos = count($xlsx->rows());

        while ($contador < $quantidadeArquivos) {


          if($login == $xlsx->rows()[$contador][1]){


            if($senha == $xlsx->rows()[$contador][7]){

             $log = $xlsx->rows()[$contador][1];
             echo '<div class="alert alert-success text-center" role="alert">'.$log.'</div>';

            }else{
              header('Location: sped.php');
              echo '<div class="alert alert-danger text-center" role="alert">Senha incorreta</div>';

            }
          }

         $contador++;
          
        }
    
?>

  <!--           -->
<div class="lista_arquivos text-center container" id="lista_arquivos" >
  <table class="table table-hover table-bordered text-center">
    <thead class="thead-dark">
      <th scope="col">Nome</th>
      <th scope="col">Download</th>
    </thead>
    <tbody class="text-center">
      

  <?php 
 
  $usuario_logado = $_POST['login_nome'];
  $path = "arquivos/".$usuario_logado."/";
  $dire = dir($path);



    while($arq = $dire -> read()){
        if ($arq == "." || $arq == "..") {
        	# code...
        }else{
	?>
		<tr> 
			<td><?php echo  $arq; ?></td>
			<?php 
			echo '<td><a href="'.$path.$arq.'" download=""><img src=" baixar_new.png"></a></td>'
			?>
		</tr>
	<?php
    	}
  	}
      $dire -> close();
?>
    </tbody>
  </table>
</div>



<!--  -->
	</div>
</div>
<!-- //footer -->


<script type="text/javascript">
var sessao = sessionStorage.getItem("sessao")

    if (sessao == "sucesso_adm") {
    	$("#login_cliente").css("display","none");
    	document.getElementById('adm').style.display = 'block';
    	// document.getelementbyclass('login_cliente').style.display = 'none';
    	document.getElementById('cliente').style.display = 'none';


        // $("#adm").css("display","block");
        // $("#login_cliente").css("display","none");
        // $("#cliente").css("display","none");

    }
    if (verificacao == "sucesso") {
		document.getElementById('cliente').style.display = 'block';
		document.getElementById('login_cliente').style.display = 'none';
    document.getElementById('adm').style.display = 'none';
    	

    }

    if (sessao == "erro" || verificacao == "erro") {
      alert('<?php echo  "Senha incorreta"?>');
      
    } 
      // $('#adm').attr('style', 'display:none;');

      // $("#adm").css("display","block");
    // echo 'document.getElementsByClassName("login").style.display = "none"';
    // echo 'document.getElementsByClassName("adm").style.display = "block"';
	var element = document.getElementById('element');

	if (sessao == null || sessao == "") {
	element.innerHTML = '<a onClick="history.go(-1);sessionStorage.removeItem("sessao");" class="nav-l" href="adm.php">Voltar</a>'
	}if(sessao = "sucesso_adm"){
	element.innerHTML = 'onClick="history.go(-1)" class="nav-l" href="adm.php">Logout</a>';
	}
</script>



    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="https://unpkg.com/blip-chat-widget" type="text/javascript"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="javascript/index.js"></script>

     <script src="javascript/index.js" type="text/javascript"></script>
  </body>

</html>