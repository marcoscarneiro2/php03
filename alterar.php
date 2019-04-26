<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Escola Santa Paciência</title>
</head>
<body>
    <div class="container">
       <?php
         $id = $_GET["id"];
        include_once 'conexao.php';
        $sql = "select * from aluno where id='$id' "
        ?>
       
        <h3>Alterar Dados</h3>
        <form action="alterardado.php" method="post" style="width:300px">
            Nome: <input type="text" name="nome" class="form-control" value="<?php echo $row['nome']?>">
            
            E-mail: <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
            
            Telefone: <input type="tel" name="telefone" class="form-control" value="<?php echo $row['telefone']; ?>">
            <br>
            <input type="submit" class="btn btn-success" value="Alterar">
        </form>  
    </div>
</body>
</html>