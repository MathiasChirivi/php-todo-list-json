<?php
header('Content-Type: application/json');

$todoList = file_get_contents("dati.json");

$todoListDati = json_decode($todoList, true);

if( isset($_POST['newTask']) ) {
    $nameObject = $_POST["newTask"];

    $newObject = array(
        "text" => $nameObject,
        "done" => false
    );

    $todoListDati[] = $newObject;
    file_put_contents("dati.json", json_encode($todoListDati) );
} else if (isset($_POST['change'])){
    $changeIndex = $_POST['index'];
    $todoListDati[$changeIndex]['done'] = !$todoListDati[$changeIndex]['done'];
    file_put_contents("dati.json", json_encode($todoListDati) );
} elseif (isset($_POST["removeIndex"])) {
    $todosIndex = $_POST["removeIndex"];
    array_splice($todoListDati, $todosIndex, 1);
    file_put_contents("dati.json", json_encode($todoListDati));
}

$todoList = json_encode($todoListDati);

echo $todoList;

?>
