<?php  
require_once __DIR__.'../../src/SimpleXLSX.php';

  if ( $xlsx = SimpleXLSX::parse('../BASE.xlsx') ) {
    // echo "Conectado";
    
   
  } else {
  	echo "Erro";
    echo SimpleXLSX::parseError();
  }

?>