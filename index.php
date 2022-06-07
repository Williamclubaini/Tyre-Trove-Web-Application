<?php
declare(strict_types = 1);

$page = $_GET['page'] ?? 'home';
const URL = 'index.php?page=';
const OPERATORS = 'controllers/operators';
require OPERATORS.'/controller.php';

use function Controllers\Operators\Startupfiles;
use Controllers\Operators\PageController;

Startupfiles();

PageController::Page($page);

$Render = new $page();
$Render->webpage();
?>