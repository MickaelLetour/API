<?php

$data = ['one', 'two', 'three'];
header("Content-Type: application/json");
header("Content-Encoding: UTF-8");
echo json_encode($data);


