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



<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">SPED Fiscal</h3>

    <form action="action/login.php" method="POST">

      <div class="input-field col s12">
        <input type="text" class="form-control" id="login_nome" name="login_nome">
        <label for="nome">Empresa</label>
      </div>

      <div class="input-field col s12">
        <input type="password" class="form-control" id="login_senha" name="login_senha">
        <label for="nome">Senha</label>
      </div>
      <br>

      <button type="submit" name="btn-cadastrar" class="btn">Entrar</button>
      <a href="../index.php" class="btn orange">Voltar</a>
    </form>
  </div>
</div>



<?php  
  include_once 'includes/footer.php';
?>