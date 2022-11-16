<?php

    include 'conexao.php';

    $id = $_POST['ID'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $altura = $_POST['altura'];
    $escolaridade = $_POST['escolaridade'];

    $consulta = "UPDATE alunos SET nome = '$nome',
                                  idade = $idade,
                                 altura = $altura, 
                           escolaridade = '$escolaridade'
                                WHERE ID = $id";

    mysqli_query($conexao, $consulta);

    header('location: ver_aluno.php');
?>