<?php 
session_start();
// HEADER
include_once 'includes/header.php';
// Mensagem
include_once 'includes/mensagem.php';
    

?>
<div class="row">
	<div class="container">
		<!--  -->
		<br>
		<table class="striped centered">
			<thead>
				<tr>
					<th>Arquivos</th>
					<th>Baixar</th>
				</tr>
			</thead>
			<tbody>
			<!--  -->
			  <?php
			    $path = "arquivos/".$_SESSION['usuario']."/";
			    $diret = dir($path);
			    while($arq = $diret -> read()){
			      if ($arq == "." || $arq == "..") {

			      }else{


				?>

			      <tr>
			        <td><?php echo $arq; ?></td>
			       	<td><a class="btn" href="<?php echo $path.$arq; ?>" download=""><i class="material-icons">file_download</i></a></td>	
			      </tr>

				<?php

			      }
			    }
			    $diret->close();
			    
			    ?>
			<!--  -->
			</tbody>
		</table>
	</div>
</div>