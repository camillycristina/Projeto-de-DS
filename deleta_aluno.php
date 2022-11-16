<?php

    include 'conexao.php';

    $id = $_GET['ID'];
    $consulta = "DELETE FROM alunos WHERE ID = $id";

    mysqli_query($conexao, $consulta);

    header('location: ver_aluno.php');
?>