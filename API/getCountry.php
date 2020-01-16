<?php

require_once "/laragon/www/API/API/Functions/adminFunction.php";

$data = getCountry();
echo json_encode($data);




