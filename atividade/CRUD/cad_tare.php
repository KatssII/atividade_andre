<?php
    require('../conn.php');

    $tarefa = $_POST['tarefa'];
    $prazo = $_POST['prazo'];

   
    if(empty($tarefa) || empty($prazo)){
        echo "Os valores não podem ser vazios";
    }else{
        $cad_tare = $pdo->prepare("INSERT INTO lista(tarefa, prazo) 
        VALUES(:tarefa, :prazo)");
        $cad_tare->execute(array(
            ':tarefa'=> $tarefa,
            ':prazo'=> $prazo
        ));

        echo "<script>
        alert('Tarefa cadastrada com sucesso!');
        </script>";
    }
?>