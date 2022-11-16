<html>
    <head>
            <meta charset="utf-8">
    </head>
    <body>

        <?php if(!isset($_GET['editar'])){ ?>

            <form method="POST" action="processa_curso.php">
                <label> NOME DO CURSO:</label>
                <input type="text" name="nome" placeholder="Digite seu nome do curso"></br></br>
                <label>DESCRICAO:</label>
                <input type="text" name="descricao" placeholder="Digite sua descricao"></br></br>
                <label> CARGA HORARIA:</label>
                <input type="text" name="carga" placeholder="Digite sua carga horaria"></br></br>
                <label>AREA:</label>
                <input type="text" name="area"placeholder="Digite sua area"></br></br>

                <input type="submit" value="CADASTRAR">
            </form>

        <?php }else{ ?>           
                       
                            <?php include 'conexao.php'; 
                                $consulta = "SELECT * FROM cursos";
                                $consulta2 = mysqli_query($conexao, $consulta);

                                while($linha = mysqli_fetch_array($consulta2)){ ?>
                                    <?php if($linha['codigo'] == $_GET['editar']){ ?>
                        <form method="POST" action="editar_curso.php">
                            <input type="hidden" name="codigo" value="<?php echo $linha['codigo']; ?>">
                            <label> NOME DO CURSO:</label>
                            <input type="text" name="nome" value="<?php echo $linha['Nome']; ?>"></br></br>
                            <label>DESCRICAO:</label>
                            <input type="text" name="descricao" value="<?php echo $linha['Descricao']; ?>"></br></br>
                            <label> CARGA HORARIA:</label>
                            <input type="text" name="carga" value="<?php echo $linha['Carga_horaria']; ?>"></br></br>
                            <label>AREA:</label>
                            <input type="text" name="area" value="<?php echo $linha['Area']; ?>"></br></br>

                            <input type="submit" value="EDITAR">
                        </form>
                <?php } ?>  <!--FECHA CHAVE DO IF-->
            <?php } ?> <!--FECHA CHAVE DO WHILE-->
        <?php } ?> <!--FECHA CHAVE DO ELSE-->
    </body>
</hmtl>