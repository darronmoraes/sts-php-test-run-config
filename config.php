<?php

$connection = mysqli_connect("localhost", "root", "password", "sts");

$query = "SELECT * FROM sts.user";

$stm = mysqli_query($connection, $query);

while ($row = mysqli_fetch_array($stm, MYSQLI_ASSOC)) {
    $data[]=$row;
}
print(json_encode($data));
?>