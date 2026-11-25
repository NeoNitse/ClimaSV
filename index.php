<?php
declare(strict_types=1);

require_once __DIR__ . '/data/clima_mock.php';

$departamentoPorDefecto = 'santa-ana';
$parametroDepartamento = (isset($_GET['departamento']) && is_string($_GET['departamento']))
    ? strtolower(trim($_GET['departamento']))
    : '';

$departamentoSeleccionado = array_key_exists($parametroDepartamento, $departamentos)
    ? $parametroDepartamento
    : $departamentoPorDefecto;

$climaActual = $departamentos[$departamentoSeleccionado];

include 'includes/header.php';
include 'includes/contenido.php';
include 'includes/footer.php';
