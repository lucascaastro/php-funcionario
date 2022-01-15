<?php

  $funcionarios = [
    ['id' => 4, 'nome' => 'João', 'salario' => 1500],
    ['id' => 21, 'nome' => 'José', 'salario' => 1230.50],
    ['id' => 34, 'nome' => 'Maria', 'salario' => 1678.54]
  ];
  
  function findId($funcionarios, $id){
    foreach ($funcionarios as $func){
      if ($func['id'] == $id){
        return $func;
      } 
    }
    return null;
  }


  $id = $_POST['id'];

  $func = findId($funcionarios, $id);

  if(is_null($func)){
    echo "Funcionario não encontrado";
    die();
  }

  echo $func['nome'] . ' R$ ' . number_format($func['salario'],2);

?>