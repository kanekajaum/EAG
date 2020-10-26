<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SPED</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="shortcut icon" href="img/icone.ico"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
<div style="display:none;">
<?php 
if (empty($_SESSION)) {
  session_start();

}
?>
</div>
  <nav>
    <div class="nav-wrapper " style="background: #265d72;padding-left: 10%;padding-right: 10%;">
      <a href="./" class="brand-logo">EAG Consultoria</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">

        <?php  
            if (isset($_SESSION['usuario'])) {
              ?>
              <li><?php echo $_SESSION['usuario'] ?></li>
              <li> - </li>
              <li>
                <form action="action/logout.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $_SESSION['usuario']; ?>">
                  <button type="submit" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">vpn_key</i></button>
                </form>
              </li>
              <?php

            }else{
              echo "<li>Ajuda</li>";
            }
            ?>

      </ul>
    </div>
  </nav>
        