<html>

    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <table style="border: 2px solid #ccc;">
            <thead>
                <th>NOME DO CURSO</th>
                <th>AREA</th>
                <th>EDITAR</th>
                <th>DELETAR</th>
            </thead>
            <tbody>
                <?php
                    include 'conexao.php';

                    $consulta = 'SELECT * FROM curso';
                    $consulta_cursos = mysqli_query($conexao, $consulta);

                    while($linha = mysqli_fetch_array($consulta_cursos)){
                        echo '<tr><td>' . $linha['Nome'] . '</td>';
                        echo '<td>' . $linha['Area'] . '</td>';
                ?>

                <td>
                    <a href="Curso.php?editar=<?php echo $linha['codigo']; ?>">
                    <input type="submit" value="EDITAR">
                    </a></td>

                <td><a href="deleta_curso.php?codigo=<?php echo $linha['codigo']; ?>">
                <input type="submit" value="DELETAR"/>
                </a></td></tr>  

                <?php   
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>