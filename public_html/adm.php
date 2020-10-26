<?php 
// HEADER
include_once 'includes/header.php';
// Mensagem
include_once 'includes/mensagem.php';

// if (isset($_SESSION['usuario'])) {

// 	echo $_SESSION['usuario'];
// }
?>

<div >

      <form class="container" id="formFiles" action="action/adicionar.php" method="POST" enctype="multipart/form-data">
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

      

      <!-- <input class="btn " type="file" name="arquivo[]" multiple><br><br> -->


        <input type="file" class="" id="" lang="pt-br" type="file" name="arquivo[]" multiple>

        
      <br><br><br>

      <input class="btn btn-dark" type="submit" name="enviar-formulario">
    </form>
    <br><br>
    <span id="progressBarSpan"></span>
    <div class="progress big spinner-blue-only" >
      <div class="determinate" id="progressBar" >
        
      </div>
    </div>

    <br><br>

<!--  -->
<script type="text/javascript">
  var formFiles, divReturn, progressBar;

  formFiles = document.getElementById('formFiles');
  divReturn = document.getElementById('divReturn');
  progressBar = document.getElementById('progressBar');
  progressBarSpan = document.getElementById('progressBarSpan');

formFiles.addEventListener('submit', sendForm, false);

function sendForm(evt){

  var formData, ajax, pct;

  formData = new FormData(evt.target);

  ajax = new XMLHttpRequest();

  ajax.onreadystatechange = function(){
    if (ajax.readyState == 4) {
      formFiles.reset();
      divReturn.textContent = ajax.response;
      progress.style.display = 'block';
    }else{
      progress.style.display = 'block';
      divReturn.style.display = 'block'
    }
  }

  ajax.upload.addEventListener('progress', function(evt){
    pct = Math.floor((evt.loaded * 100) / evt.total);
    progressBar.style.width = pct + '%';
    progressBarSpan.innerHTML = pct + '%';

    console.log(pct);
  } ,false);

  ajax.open('POST', 'arquivos');
  ajax.send(formData);


}


</script>
<!--  -->

    <?php 
    

    ?>

<!--                               fim da inclusao                                       -->
<!--                               inicio da lista                                       -->

    <hr>



      <div class="container">

        <?php
          $path = "arquivos/";
          $diretorio = dir($path);



?>

<table class="table table-sm table-bordered responsive-table striped">
  <thead class="thead-dark ">
    <tr>
      <th scope="col">Empresas</th>
      <th scope="col right"><span class="right">Qtd</span></th>
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



       $array = [$arquivo];

       sort($array);

        // print_r($array[0]);
        
        echo '<tr>';
        echo '<td><a href="#modal'.$array[0].'" class="modal-trigger"><i>'.$array[0].'</i></a></td>';
        if ($qtd != 0) {
          echo '<td><span class="new badge right">'.$qtd.'</span></td>';
        }else{
           echo '<td><span class="badge red darken-3 right while">Vazio</span></td>';
       
        }
        
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

    echo ' <div id="modal'.$arqui.'" class="modal">';
?>

	 
	    <div class="modal-content">
<!-- 	       -->
		<table class="striped">
			<thead>
				<tr>
					<th><span >Arquivo:</span></th>
					<th><span class="right">Baixar:</span></th>
					<th><span class="right">Excluir:</span></th>
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
       	<td><a class="btn right" href="<?php echo $path.$arq; ?>" download=""><i class="material-icons ">file_download</i></a></td>	
        <td>
        	<form action="action/excluir.php" method="POST">
		  		<input type="hidden" name="id" value="<?php echo '../'.$path.$arq; ?>">
		  		<button type="submit" name="btn-deletar" class="btn red right"><i class="material-icons ">delete</i></button>
        	</a>
		  	</form>
        </td>
      </tr>

	<?php

      }
    }
    $diret->close();
    
    ?>
<!--  -->
			</tbody>
		</table>




<!-- 	    	 -->
	    </div>
	    <div class="modal-footer">
	     
	  		<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
	  	
	    </div>
	</div>

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
		      <th><span class="right">Download</span></th>
		      <th><span class="right">Delete</span></th>
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

<?php  
include_once 'includes/footer.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>