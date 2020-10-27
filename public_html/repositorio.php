<!DOCTYPE html>
<html class="blue lighten-3">

<title>Repositorio</title>
<?php
// HEADER
include_once 'includes/header.php';
// Mensagem
include_once 'includes/mensagem.php';

if (!empty($_SESSION['nome'])) {
  
  if ($_SESSION['nome'] == 'suporte') {
    header("Location: adm.php");
  }else{
    header("Location: cliente.php");
  }
}

?>


<div >
  <div class="container blue lighten-3" >
    <h4 class="col s6 " style="text-align: center;padding: 2%;color: #fff;">Bem vindo ao
    Portal de Repositórios da
    EAG Consultoria</h4>
    


  </div>
</div>



<?php  
  include_once 'includes/footer.php';
?>

</html>