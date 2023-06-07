<?php
    require("protected.php");
    require("conn.php");

    $tabela_tare = $pdo->prepare("SELECT id_tare, tarefa, prazo
    FROM lista;");
    $tabela_tare->execute();
    $rowTabela = $tabela_tare->fetchAll();
    
    if (empty($rowTabela)){
        echo "<script>
        alert('Tabela vazia!!!');
        </script>";
    }

?>

<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
    <link rel="shortcut icon" href="frog-head.png" type="image/png">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Lista de tarefas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 style="text-align:center;">Lista de tarefas</h1>
            <br>  
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">TAREFA</th>
            <th scope="col">PRAZO</th>
            <th scope="col">EDITAR TAREFA</th>
            <th scope="col">EXCLUIR TAREFA</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            foreach ($rowTabela as $linha){
                echo '<tr>';
                echo "<th scope='row'>".$linha['id_tare']."</th>";
                echo "<td>".$linha['tarefa']."</td>";
                echo "<td>".$linha['prazo']."</td>";
                echo '<td><a href=edit_usu.php?lista='.$linha['id_tare'].' class="btn btn-warning">Editar</a></td>';
                echo '<td><a href=CRUD\del_tare.php?lista='.$linha['id_tare'].' class="btn btn-danger">Excluir</a></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
        </table>
        <a href="index_tare.php" class="btn btn-primary">CADASTRAR TAREFA</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>