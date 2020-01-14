<?php

header("Access-Control-Allow-Origin: *");
require_once "../Admin/functions/countryFonction.php";

$data = getCountry();
echo json_encode($data);