<?php

$conn = mysqli_connect('localhost', 'Axar238', 'test123', 'reviews');

if(!$conn){
    echo 'connection error'. mysqli_connection_error();
}


?>
