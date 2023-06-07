<?php
    require('../conn.php');

    $id_tare = $_POST['id_tare'];
    $tarefa = $_POST['tarefa'];
    $prazo = $_POST['prazo'];


    if(empty($tarefa) || empty($prazo)){
        echo "Os valores não podem ser vazios";
    }else{
        $update_tare = $pdo->prepare("UPDATE lista set 
        tarefa = :tarefa, 
        prazo = :prazo, WHERE 
        id_tare = :id_tare;");
    

    $update_tare->execute(array(
        ':id_tare' => $id_tare,
        ':tarefa'=> $tarefa,
        ':prazo'=> $prazo
    ));

    echo 'sucesso';
    }

?>