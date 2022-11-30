<?php

include 'conexao.php';

    $Nome = $_POST['Nome'];
    $Descricao = $_POST['Descricao'];
    $Carga_horaria = $_POST['Carga'];
    $Area = $_POST['Area'];

    $query = "INSERT INTO curso(Nome, Descricao, Carga, Area)
                    VALUES('$Nome', '$Descricao', $Carga_horaria, '$Area')";

    mysqli_query($conexao, $query);

    header('location: ver_curso.php');

?>