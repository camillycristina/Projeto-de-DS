<html>
 <head>
   <meta charset="utf-8">
</head>

<body>
 <form method="POST" action ="processa_matricula.php">
 <select name= "escolha_aluno">
  <option>Selecione um aluno: </option>
     <?php
        include 'conexao.php';
        $consulta = "SELECT * FROM alunos";
        $consulta_aluno = mysqli_query($conexao, $consulta);
        while($linha = mysqli_fetch_array($consulta_aluno)){
            echo '<option value="' .$linha['ID'] . '">' .
            $linha['NOME'] . '</option>';
        }
    ?>

    </select>

    </br></br>

    <select name= "escolha_curso">
  <option>Selecione um curso: </option>
     <?php
        include 'conexao.php';
        $consulta = "SELECT * FROM cursos";
        $consulta_curso = mysqli_query($conexao, $consulta);
        while($linha = mysqli_fetch_array($consulta_curso)){
            echo '<option value="' .$linha['codigo'] . '">' .
            $linha['Nome'] . '</option>';
        }
    ?>

    </select>

</form>
</body>
</html>
     