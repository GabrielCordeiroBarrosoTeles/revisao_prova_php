<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <h3>Clientes cadastrados</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>SEXO</th>
                    <th>DATA</th>
                    <th>MEDICO</th>
                </tr>
            </thead>
            <?php
                include './conexao.php';
                $sql = "SELECT * FROM paciente";
                $resultado = mysqli_query($con, $sql);
                while($dados = mysqli_fetch_array($resultado)){
            ?>    
            <tbody>
                <tr>
                    <!--
                        Os nomes que estão aí tem que está iguais
                        aos que você colocou no banco de dados
                    -->
                    <td><?php echo $dados['id'] ?></td>
                    <td><?php echo $dados['nome_P'] ?></td>
                    <td><?php echo $dados['sexo'] ?></td>
                    <td><?php echo $dados['data'] ?></td>
                    <td><?php echo $dados['medico'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
  </html>