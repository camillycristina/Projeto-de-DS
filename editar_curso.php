<?php

    include 'conexao.php';

    $codigo = $_POST['codigo'];
    $Nome = $_POST['nome'];
    $Descricao = $_POST['descricao'];
    $Carga_horaria = $_POST['carga'];
    $Area = $_POST['area'];

    $consulta = "UPDATE cursos SET Nome = '$Nome',
                                  Descricao = '$Descricao',
                                 Carga_horaria = $Carga_horaria, 
                                 Area = '$Area'
                                WHERE codigo = $codigo";

    mysqli_query($conexao, $consulta);

    header('location: ver_curso.php');
?>