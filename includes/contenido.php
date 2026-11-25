    <main class="main-content">
        <div class="container content-stack">
            <section class="weather-hero" aria-labelledby="departamento-titulo">
                <div class="weather-hero-info">
                    <span class="weather-badge">Clima actual</span>
                    <h1 id="departamento-titulo" class="weather-department">
                        <?= htmlspecialchars($climaActual['nombre'], ENT_QUOTES, 'UTF-8') ?>
                    </h1>
                    <p class="weather-location-meta">El Salvador</p>
                </div>

                <div class="weather-hero-reading">
                    <div class="weather-icon-wrap">
                        <img
                            src="assets/icons/svg/<?= htmlspecialchars($climaActual['estado_slug'], ENT_QUOTES, 'UTF-8') ?>.svg"
                            alt="Ícono del clima: <?= htmlspecialchars($climaActual['estado_texto'], ENT_QUOTES, 'UTF-8') ?>"
                            class="weather-icon"
                            width="96"
                            height="96"
                        >
                    </div>
                    <div class="weather-temp-block">
                        <p class="weather-temperature">
                            <?= htmlspecialchars((string) $climaActual['temperatura'], ENT_QUOTES, 'UTF-8') ?><span class="weather-unit">°C</span>
                        </p>
                        <p class="weather-condition">
                            <?= htmlspecialchars($climaActual['estado_texto'], ENT_QUOTES, 'UTF-8') ?>
                        </p>
                    </div>
                </div>
            </section>

            <section class="weather-metrics" aria-label="Métricas meteorológicas del departamento">
                <article class="metric-card">
                    <h2 class="metric-label">Sensación térmica</h2>
                    <p class="metric-value">
                        <?= htmlspecialchars((string) $climaActual['sensacion_termica'], ENT_QUOTES, 'UTF-8') ?>
                        <span class="metric-unit">°C</span>
                    </p>
                </article>

                <article class="metric-card">
                    <h2 class="metric-label">Humedad relativa</h2>
                    <p class="metric-value">
                        <?= htmlspecialchars((string) $climaActual['humedad'], ENT_QUOTES, 'UTF-8') ?>
                        <span class="metric-unit">%</span>
                    </p>
                </article>

                <article class="metric-card">
                    <h2 class="metric-label">Velocidad del viento</h2>
                    <p class="metric-value">
                        <?= htmlspecialchars((string) $climaActual['viento'], ENT_QUOTES, 'UTF-8') ?>
                        <span class="metric-unit">km/h</span>
                    </p>
                </article>

                <article class="metric-card">
                    <h2 class="metric-label">Estado del cielo</h2>
                    <p class="metric-value metric-value-text">
                        <?= htmlspecialchars($climaActual['estado_texto'], ENT_QUOTES, 'UTF-8') ?>
                    </p>
                </article>
            </section>

            <p class="data-note">Datos de referencia locales (Fase 3)</p>
        </div>
    </main>
