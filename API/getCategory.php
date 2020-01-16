<?php

require_once "/laragon/www/API/API/Functions/adminFunction.php";

$data = getCategory();
echo json_encode($data);
