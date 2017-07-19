<?php

include_once 'autoloader.php';

$publication = [];

$db = mysqli_connect('localhost', 'root', 'root', 'publication');
if (mysqli_connect_errno()) {
    echo 'Нет подключения к базе' . mysqli_connect_error();
}

$result = mysqli_query($db, 'SELECT * FROM publications');

while ($row = mysqli_fetch_array($result)) {
    $publication[] = new $row['type']($row);
}

var_dump($publication);