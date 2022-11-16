<?php

include 'conexao.php';

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $altura = $_POST['altura'];
    $escolaridade = $_POST['escolaridade'];

    $query = "INSERT INTO alunos(nome, idade, altura, escolaridade)
                    VALUES('$nome', $idade, $altura, '$escolaridade')";

    mysqli_query($conexao, $query);

    header('location: ver_aluno.php');

?>