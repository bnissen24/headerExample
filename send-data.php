<?php

$userid = filter_input(INPUT_POST, 'userId');
$name = filter_input(INPUT_POST, 'name');

header("Location: recieve-data.php?userId=$userid&name=$name");