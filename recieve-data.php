<?php


$userid = filter_input(INPUT_GET, 'userId');
$name = filter_input(INPUT_GET, 'name');

echo "User ID: $userid <br>";
echo "Name: $name";