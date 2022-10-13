<?php

$query = $_GET['c'];
sleep(2);
echo json_encode(['domain' => 'https://google.com/u='.$query]);
