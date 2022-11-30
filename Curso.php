<html>
    <head>
            <meta charset="utf-8">
    </head>
    <body>

        <?php if(!isset($_GET['editar'])){ ?>

            <form method="POST" action="processa_curso.php">
                <label> NOME DO CURSO:</label>
                <input type="text" name="Nome" placeholder="Digite seu nome do curso"></br></br>
                <label>DESCRICAO:</label>
                <input type="text" name="Descricao" placeholder="Digite sua descricao"></br></br>
                <label> CARGA HORARIA:</label>
                <input type="number" name="Carga" placeholder="Digite sua carga horaria"></br></br>
                <label>AREA:</label>
                <input type="text" name="Area"placeholder="Digite sua area"></br></br>

                <input type="submit" value="CADASTRAR">
            </form>

        <?php }else{ ?>           
                       
                            <?php include 'conexao.php'; 
                                $consulta = "SELECT * FROM curso";
                                $consulta2 = mysqli_query($conexao, $consulta);

                                while($linha = mysqli_fetch_array($consulta2)){ ?>
                                    <?php if($linha['codigo'] == $_GET['editar']){ ?>
                        <form method="POST" action="editar_curso.php">
                            <input type="hidden" name="codigo" value="<?php echo $linha['codigo']; ?>">
                            <label> NOME DO CURSO:</label>
                            <input type="text" name="Nome" value="<?php echo $linha['Nome']; ?>"></br></br>
                            <label>DESCRICAO:</label>
                            <input type="text" name="Descricao" value="<?php echo $linha['Descricao']; ?>"></br></br>
                            <label> CARGA HORARIA:</label>
                            <input type="number" name="Carga" value="<?php echo $linha['Carga']; ?>"></br></br>
                            <label>AREA:</label>
                            <input type="text" name="Area" value="<?php echo $linha['Area']; ?>"></br></br>

                            <input type="submit" value="EDITAR">
                        </form>
                <?php } ?>  <!--FECHA CHAVE DO IF-->
            <?php } ?> <!--FECHA CHAVE DO WHILE-->
        <?php } ?> <!--FECHA CHAVE DO ELSE-->
    </body>
</hmtl>