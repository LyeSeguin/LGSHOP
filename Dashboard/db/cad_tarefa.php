<?php

include_once ("conexao.php");
session_start();

//Armazena os seguintes dados
$nome = $_POST['nome'];
$data = $_POST['data'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];


$sql = " 
            INSERT INTO 
            produtos ( nome, data, categoria, descricao)
            VALUES
            ('$nome', '$data', '$categoria', '$descricao')
        ";

        
echo $sql;
if (mysqli_query($con, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
if($sql == true){
    header("Location:../home.php");
}

