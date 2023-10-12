<?php
    //get id
    $index = (int)$_GET['index'];
 
    //fetch data from json
    $data = file_get_contents('books.json');
    $data = json_decode($data, true);
 
    //delete the row with the index
    $data = array_values($data);
    unset($data[$index]);
 
    //encode back to json
    $data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('books.json', $data);
 
    header('location: index.php');
?>