<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        Nome do Paciente:
        <input type="text" name="nome_p">
        <br>Sexo:
        <input type="radio" name="sexo" value="M">M
        <input type="radio" name="sexo" value="F">F
        <br>Data da Consulta:
        <input type="date" name="data">
        <br>Médico:
        <select name="medico">
            <option value="Dr. Carlos Henrique">Dr. Carlos Henrique</option>
            <option value="Dr. Carlos Henrique">Dr. Davidson</option>
            <option value="Dr. Carlos Henrique">Dr. Sidio</option>
        </select>
        <br><input type="submit" value="Cadastrar">
    </form>
    <?php
        include './conexao.php';
        $nome_p = $_POST['nome_p'];
        $sexo = $_POST['sexo'];
        $data = $_POST['data'];
        $medico = $_POST['medico'];
        $inserir = $con -> query
        ("INSERT INTO paciente VALUES(0,'$nome_p', 
        '$sexo','$data','$medico')");
        if($inserir){
          echo "Cadastro realizado com sucesso";
          echo "<script>ok() </script>";
        }else{
            echo "Cadastro não realizado";
            echo "<script>ok() </script>";
        }
    ?>
</body>
</html>