<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
    <link rel="shortcut icon" href="img/frog-head.png" type="image/png">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Cadastro de Tarefas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>
            body {
            background-image: url('img/sapo.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1 style="text-align:center;">Cadastro de Tarefas</h1>
            <br>
            <form action="" method="post" id="formulario">
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Tarefa: </label>
                        <input type="text" name="tarefa" id="" class="form-control">
                    </div>
                </div>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Prazo de Entrega: </label>
                        <input type="date" name="prazo" id="" class="form-control">
                    </div>
                </div>
                <br>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-success" value="CADASTRAR TAREFA">
                        <a href="tabela_tare.php" type="button" class="btn btn-primary float-end">Tarefas Cadastradas</a>
                    </div>
                    </div>
                </div>
            </form>
            <div id="resultado"></div>
        </div>
        <script
        src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script>
            $("#formulario").submit(function(){
                event.preventDefault();
                var dados =  $(this).serialize();
                $.ajax({
                    type:'POST',
                    url:'CRUD/cad_tare.php',
                    data: dados,
                    success: function(data){
                        $("#resultado").html(data);
                    }
                });
            });
        </script>
    </body>
</html>