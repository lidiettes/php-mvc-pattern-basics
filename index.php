<?php

require_once "config/database.php";
require_once "controllers/travelersController.php";

$control = new travelersController();
$control -> index();




?>