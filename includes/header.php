<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ClimaSV: Portal Web Informativo del Clima en El Salvador con consulta para los 14 departamentos.">
    <title>ClimaSV | El Salvador</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/variables.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="clima-<?= htmlspecialchars($climaActual['estado_slug'], ENT_QUOTES, 'UTF-8') ?>">
    <header class="site-header">
        <div class="container header-inner">
            <div class="brand">
                <a href="index.php" class="brand-link" aria-label="ClimaSV — Inicio">
                    <img
                        src="assets/img/logo-climasv.svg"
                        alt="Logotipo de ClimaSV"
                        class="brand-logo"
                        width="180"
                        height="52"
                    >
                </a>
                <p class="brand-subtitle">Portal Web Informativo del Clima en El Salvador</p>
            </div>

            <form method="GET" action="index.php" class="selector-form" role="search" aria-label="Consultar clima por departamento">
                <label for="departamento" class="selector-label">Seleccionar departamento</label>
                <div class="selector-controls">
                    <select name="departamento" id="departamento" class="selector-select" onchange="this.form.submit()">
                        <?php foreach ($departamentos as $slug => $depto): ?>
                            <option
                                value="<?= htmlspecialchars($slug, ENT_QUOTES, 'UTF-8') ?>"
                                <?= $slug === $departamentoSeleccionado ? 'selected' : '' ?>
                            >
                                <?= htmlspecialchars($depto['nombre'], ENT_QUOTES, 'UTF-8') ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <button type="submit" class="selector-button">Consultar</button>
                </div>
            </form>
        </div>
    </header>
