<?php

include 'conexao.php';

    $Nome = $_POST['nome'];
    $Descricao = $_POST['descricao'];
    $Carga_horaria = $_POST['carga'];
    $Area = $_POST['area'];

    $query = "INSERT INTO curso(Nome, Descricao, Carga, Area)
                    VALUES('$Nome', '$Descricao', $Carga_horaria, '$Area')";

    mysqli_query($conexao, $query);

    header('location: ver_curso.php');

?>