<?php

$connection = mysqli_connect("localhost", "root", "password", "sts");
if (!$connection) {
    die("Could not connect to server".mysqli_connect_error());
}

$query = "SELECT * FROM sts.user";

$stm = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($stm, MYSQLI_ASSOC)) {
    echo $row['username'].'</br>';
}

?>