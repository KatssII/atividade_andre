<?php
    require ("conn.php");

    if (isset($_GET['lista'])){
        $lista = $_GET['lista'];
    }
    else{
        header("Location: index_tare.php");
    }
    
    $tabela_tare = $pdo->prepare("SELECT * FROM lista WHERE id_tare=:id_tare;");
    $tabela_tare->execute(array(':lista'=>$lista));
    $rowTable = $tabela_tare->fetchAll();

?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
    <link rel="shortcut icon" href="frog-head.png" type="image/png">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Cadastro de Usuários</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 style="text-align:center;">Edição de Usuários</h1>
            <br>
            <form action="CRUD/update_tare.php" method="post" id="formulario">
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Tarefa: </label>
                        <input type="text" name="tarefa" id="" class="form-control" value=<?php echo $rowTable[0]['tarefa']?>>
                    </div>
                </div>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Prazo: </label>
                        <input type="text" name="prazo" id="" class="form-control" value=<?php echo $rowTable[0]['prazo']?>>
                    </div>
                </div>
                <br>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-success" value="SALVAR ALTERAÇÕES">
                        <a href="tabela_tare.php" type="button" class="btn btn-primary float-end">Tabela de Tarefas</a>
                    </div>
                </div>
                <input type="hidden" name='id_tare' value=<?php echo $rowTable[0]['id_tare']?>>
            </form>
            <div id="resultado"></div>
        </div>
        <script
        src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>