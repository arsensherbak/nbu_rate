<?php
header('Content-Type: application/json');
$rate = file_get_contents('rate.txt');
echo json_encode(['rate' => $rate]);
