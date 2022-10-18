<?php

  $dbHost = 'Localhost';
  $dbUsername = 'root';
  $dbPassword = 'root';
  $dbName = 'novo-formulario';

  $conexao = new msqli($dbHost, $dbUsername, $dbPassword, $dbName);

  if($conexao->connect_errno){
    echo "Erro";
  }
  else {
    echo "Conexão efetuada com sucesso."
  }
  

?>