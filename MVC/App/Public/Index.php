<?php
require '../MVC/App/Controllers/HomeControllers.php';
require '../MVC/App/Models/User.php';

$controller = new HomeControllers();
$controller->index();
?>