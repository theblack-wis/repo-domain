<?php

$query = $_GET['c'];
echo json_encode(['domain' => 'https://google.com/u='.$query]);
