<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WL Motors | Bem-vindo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/splash.css')
</head>
<body>
    <main class="splash-shell">
        <div class="splash-backdrop">
            <div class="backdrop-orb orb-one"></div>
            <div class="backdrop-orb orb-two"></div>
            <div class="backdrop-grid"></div>
        </div>

        <section class="splash-card">
            <p class="eyebrow">Performance, exclusividade e presenca</p>
            <h1>WL <span>MOTORS</span></h1>
            <p class="lead">
                Uma entrada a altura da experiencia premium que voce vai encontrar no restante do site.
            </p>

            <div class="splash-actions">
                <a href="/home" class="enter-button" id="enterSite">Entrar no site</a>
               
            </div>

            <div class="status-row">
                <span class="status-pill">Frota de luxo</span>
                <span class="status-pill">Atendimento exclusivo</span>
                <span class="countdown-text">Redirecionando em <strong id="countdown">5</strong>s</span>
            </div>
        </section>
    </main>

    @vite('resources/js/splash.js')
</body>
</html>
