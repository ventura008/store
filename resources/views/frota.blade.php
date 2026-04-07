<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FightStore | Catalogo de Lutas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --fight-bg: #090909;
            --fight-card: #151515;
            --fight-red: #e6232a;
            --fight-red-soft: #b4171d;
            --fight-gold: #e5bc62;
            --fight-text: #f6f3ed;
            --fight-muted: #b8b1a5;
            --fight-line: rgba(255, 255, 255, 0.12);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            color: var(--fight-text);
            font-family: "Rajdhani", sans-serif;
            background:
                radial-gradient(circle at 8% 20%, rgba(230, 35, 42, 0.3), transparent 40%),
                radial-gradient(circle at 88% 0%, rgba(229, 188, 98, 0.12), transparent 45%),
                repeating-linear-gradient(
                    135deg,
                    rgba(255, 255, 255, 0.03) 0,
                    rgba(255, 255, 255, 0.03) 2px,
                    transparent 2px,
                    transparent 14px
                ),
                var(--fight-bg);
            min-height: 100vh;
        }

        .navbar {
            background: rgba(6, 6, 6, 0.86);
            backdrop-filter: blur(8px);
            border-bottom: 1px solid rgba(230, 35, 42, 0.35);
            padding: 12px 0;
        }

        .navbar-brand {
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .logo-badge {
            width: 32px;
            height: 32px;
            border: 1px solid var(--fight-gold);
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: var(--fight-gold);
        }

        .logo-text {
            font-family: "Bebas Neue", sans-serif;
            letter-spacing: 2px;
            font-size: 1.8rem;
            color: #fff;
        }

        .logo-text span {
            color: var(--fight-red);
        }

        .nav-link {
            color: var(--fight-text) !important;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            font-weight: 600;
            margin: 0 6px;
            opacity: 0.85;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--fight-gold) !important;
            opacity: 1;
        }

        .btn-main {
            border: 0;
            border-radius: 999px;
            padding: 8px 20px;
            font-weight: 700;
            color: #fff;
            background: linear-gradient(90deg, var(--fight-red-soft), var(--fight-red));
            box-shadow: 0 10px 24px rgba(230, 35, 42, 0.35);
        }

        .btn-main:hover {
            color: #fff;
        }

        .nav-profile-menu {
            margin-left: 16px;
        }

        .profile-trigger {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 8px 14px;
            border-radius: 999px;
            border: 1px solid var(--fight-line);
            background: rgba(255, 255, 255, 0.05);
            color: #fff;
            text-decoration: none;
        }

        .profile-trigger-avatar {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(140deg, var(--fight-red), #8d0f14);
            color: #fff;
            font-size: 0.9rem;
        }

        .profile-trigger-text {
            display: flex;
            flex-direction: column;
            line-height: 1.1;
        }

        .profile-trigger-text small {
            color: var(--fight-muted);
            font-size: 0.7rem;
        }

        .profile-trigger-text strong {
            font-size: 0.92rem;
            color: #fff;
        }

        .profile-dropdown-menu {
            min-width: 240px;
            border: 1px solid var(--fight-line);
            background: rgba(14, 14, 14, 0.96);
            border-radius: 14px;
            padding: 10px;
        }

        .profile-dropdown-header {
            display: flex;
            flex-direction: column;
            gap: 4px;
            margin-bottom: 8px;
            padding: 6px 8px 10px;
            border-bottom: 1px solid var(--fight-line);
        }

        .profile-dropdown-title {
            color: #fff;
            font-weight: 700;
        }

        .profile-dropdown-subtitle {
            color: var(--fight-muted);
            font-size: 0.82rem;
        }

        .profile-dropdown-menu .dropdown-item {
            color: #f0ede8;
            border-radius: 10px;
            padding: 10px 12px;
        }

        .profile-dropdown-menu .dropdown-item:hover {
            background: rgba(230, 35, 42, 0.2);
            color: #fff;
        }

        .hero {
            min-height: 55vh;
            padding-top: 114px;
            display: flex;
            align-items: center;
            position: relative;
            isolation: isolate;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
            background:
                linear-gradient(96deg, rgba(9, 9, 9, 0.95) 0%, rgba(9, 9, 9, 0.5) 45%, rgba(9, 9, 9, 0.85) 100%),
                url("https://images.unsplash.com/photo-1555597673-b21d5c935865?auto=format&fit=crop&w=1900&q=80") center/cover no-repeat;
        }

        .hero-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(230, 35, 42, 0.2);
            border: 1px solid rgba(230, 35, 42, 0.5);
            border-radius: 999px;
            padding: 6px 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            margin-bottom: 14px;
        }

        .hero h1 {
            margin: 0 0 12px;
            font-family: "Bebas Neue", sans-serif;
            font-size: clamp(2.8rem, 9vw, 5.8rem);
            letter-spacing: 2px;
            text-transform: uppercase;
            line-height: 0.95;
        }

        .hero h1 span {
            color: var(--fight-red);
        }

        .hero p {
            max-width: 660px;
            color: #ede8df;
            font-size: 1.1rem;
        }

        .modalidades {
            padding: 74px 0 84px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 26px;
        }

        .section-title h2 {
            margin: 0 0 8px;
            font-family: "Bebas Neue", sans-serif;
            letter-spacing: 1.5px;
            font-size: clamp(2rem, 5vw, 3.2rem);
            text-transform: uppercase;
        }

        .section-title p {
            color: var(--fight-muted);
            margin: 0 auto;
            max-width: 680px;
        }

        .carrossel-container {
            position: relative;
            padding: 0 52px;
        }

        .carrossel-control {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 46px;
            height: 46px;
            border-radius: 50%;
            border: 1px solid var(--fight-line);
            background: rgba(10, 10, 10, 0.92);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
        }

        .carrossel-control:hover {
            border-color: var(--fight-red);
            background: var(--fight-red);
        }

        .carrossel-control.prev { left: 0; }
        .carrossel-control.next { right: 0; }

        .carrossel-wrapper {
            overflow: hidden;
        }

        .carrossel-slides {
            display: flex;
            transition: transform 0.8s ease;
        }

        .carrossel-slide {
            flex: 0 0 calc(100% / 6);
            padding: 12px;
        }

        .modalidade-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            cursor: pointer;
            border: 1px solid var(--fight-line);
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.06), rgba(10, 10, 10, 0.92));
            border-radius: 18px;
            padding: 18px 14px;
            height: 100%;
            transition: transform 0.25s ease, border-color 0.25s ease;
        }

        .modalidade-card:hover {
            transform: translateY(-4px);
            border-color: rgba(230, 35, 42, 0.6);
        }

        .modalidade-avatar {
            width: 116px;
            height: 116px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid rgba(229, 188, 98, 0.5);
        }

        .modalidade-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .modalidade-card h3 {
            margin: 4px 0 0;
            color: #fff;
            font-size: 1.2rem;
            font-weight: 700;
        }

        .modalidade-card span {
            color: var(--fight-muted);
            font-size: 0.92rem;
        }

        .carrossel-indicators {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 28px;
        }

        .indicator {
            width: 11px;
            height: 11px;
            border-radius: 50%;
            border: 0;
            background: #373737;
        }

        .indicator.active,
        .indicator:hover {
            background: var(--fight-gold);
        }

        .fight-modal {
            display: none;
            position: fixed;
            z-index: 3000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.85);
            overflow-y: auto;
            padding: 24px 0;
        }

        .fight-modal-content {
            width: min(1200px, 94%);
            margin: 0 auto;
            border-radius: 18px;
            overflow: hidden;
            border: 1px solid var(--fight-line);
            background: #141414;
        }

        .fight-modal-header {
            padding: 16px 20px;
            background: linear-gradient(120deg, rgba(230, 35, 42, 0.25), rgba(0, 0, 0, 0.32));
            border-bottom: 1px solid var(--fight-line);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .fight-modal-header h2 {
            margin: 0;
            font-size: 1.4rem;
            color: #fff;
            font-weight: 700;
        }

        .close-modal {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            border: 1px solid var(--fight-line);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            cursor: pointer;
            font-size: 1.2rem;
        }

        .close-modal:hover {
            background: var(--fight-red);
            border-color: var(--fight-red);
        }

        .fight-modal-body {
            padding: 20px;
        }

        .loading-spinner {
            text-align: center;
            padding: 46px 0;
            color: var(--fight-muted);
        }

        .spinner {
            width: 48px;
            height: 48px;
            border: 4px solid #343434;
            border-top: 4px solid var(--fight-red);
            border-radius: 50%;
            margin: 0 auto 12px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .lutas-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 18px;
        }

        .lutas-container-hidden {
            display: none;
        }

        .luta-card {
            border: 1px solid var(--fight-line);
            border-radius: 14px;
            overflow: hidden;
            background: #1e1e1e;
        }

        .luta-imagem {
            height: 190px;
            overflow: hidden;
            position: relative;
        }

        .luta-imagem img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .luta-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: var(--fight-gold);
            color: #171717;
            border-radius: 999px;
            padding: 4px 12px;
            font-weight: 700;
            font-size: 0.8rem;
        }

        .luta-info {
            padding: 14px;
        }

        .luta-nome {
            color: #fff;
            margin-bottom: 10px;
            font-size: 1.2rem;
            font-weight: 700;
        }

        .luta-detalhes {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 8px;
            margin-bottom: 10px;
        }

        .detalhe-item {
            display: flex;
            align-items: center;
            gap: 6px;
            color: var(--fight-muted);
            font-size: 0.88rem;
        }

        .detalhe-item i {
            color: var(--fight-gold);
        }

        .luta-bolsa {
            color: var(--fight-gold);
            font-size: 1.24rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .luta-resumo {
            color: var(--fight-muted);
            font-size: 0.9rem;
            margin-bottom: 12px;
        }

        .luta-acoes {
            display: flex;
            gap: 8px;
        }

        .btn-editar,
        .btn-detalhes,
        .retry-button {
            border: 0;
            border-radius: 9px;
            padding: 9px 10px;
            font-weight: 700;
            font-size: 0.9rem;
            text-decoration: none;
            text-align: center;
        }

        .btn-editar,
        .retry-button {
            background: linear-gradient(90deg, var(--fight-red-soft), var(--fight-red));
            color: #fff;
            flex: 1;
        }

        .btn-detalhes {
            background: transparent;
            border: 1px solid var(--fight-gold);
            color: var(--fight-gold);
            flex: 1;
        }

        .sem-lutas {
            text-align: center;
            color: var(--fight-muted);
            border: 1px solid var(--fight-line);
            border-radius: 14px;
            padding: 32px 14px;
        }

        .sem-lutas i {
            font-size: 2rem;
            margin-bottom: 8px;
            color: var(--fight-gold);
        }

        .whatsapp-float {
            position: fixed;
            bottom: 24px;
            right: 24px;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: #25d366;
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            box-shadow: 0 8px 22px rgba(37, 211, 102, 0.4);
            z-index: 2000;
            text-decoration: none;
        }

        @media (max-width: 1200px) {
            .carrossel-slide {
                flex: 0 0 calc(100% / 5);
            }
        }

        @media (max-width: 991px) {
            .nav-profile-menu {
                margin-left: 0;
                margin-top: 12px;
            }

            .profile-trigger {
                width: 100%;
                justify-content: space-between;
            }

            .hero {
                padding-top: 96px;
                min-height: 48vh;
            }

            .carrossel-slide {
                flex: 0 0 calc(100% / 4);
            }

            .carrossel-container {
                padding: 0 34px;
            }
        }

        @media (max-width: 767px) {
            .carrossel-slide {
                flex: 0 0 calc(100% / 3);
            }

            .modalidade-avatar {
                width: 104px;
                height: 104px;
            }
        }

        @media (max-width: 576px) {
            .carrossel-slide {
                flex: 0 0 calc(100% / 2);
            }

            .carrossel-container {
                padding: 0 22px;
            }

            .carrossel-control {
                width: 40px;
                height: 40px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/home">
                <span class="logo-badge">FS</span>
                <span class="logo-text">Fight<span>Store</span></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarFight" aria-controls="navbarFight" aria-expanded="false" aria-label="Abrir menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarFight">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="/home">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/frota">Catalogo</a></li>
                    <li class="nav-item"><a class="nav-link" href="/servicos">Treinadores</a></li>
                    <li class="nav-item"><a class="nav-link" href="/sobre">A Arena</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contato">Contato</a></li>
                    <li class="nav-item ms-lg-2">
                        <a class="btn btn-main" href="/reserva">Comprar Agora</a>
                    </li>
                    <li class="nav-item nav-profile-menu ms-lg-3">
                        <div class="dropdown">
                            <a class="profile-trigger dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="profile-trigger-avatar">
                                    <i class="fas fa-user"></i>
                                </span>
                                <span class="profile-trigger-text">
                                    <small id="profileTriggerLabel">Minha conta</small>
                                    <strong id="profileTriggerName">Perfil</strong>
                                </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end profile-dropdown-menu">
                                <li class="profile-dropdown-header">
                                    <span class="profile-dropdown-title">Acesso rapido</span>
                                    <span class="profile-dropdown-subtitle">Gerencie sua conta</span>
                                </li>
                                <li id="profileMenuItem">
                                    <a class="dropdown-item" href="/perfil">
                                        <i class="fas fa-user-circle me-2"></i> Perfil
                                    </a>
                                </li>
                                <li id="loginMenuItem">
                                    <a class="dropdown-item" href="/loginn">
                                        <i class="fas fa-right-to-bracket me-2"></i> Login
                                    </a>
                                </li>
                                <li id="registerMenuItem">
                                    <a class="dropdown-item" href="/cadastro">
                                        <i class="fas fa-user-plus me-2"></i> Cadastro
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <span class="hero-tag"><i class="fa-solid fa-bolt"></i> Cards em destaque</span>
            <h1>Catalogo de <span>lutas</span> FightStore</h1>
            <p>Escolha uma modalidade para visualizar os combates cadastrados e abrir os detalhes de cada confronto.</p>
        </div>
    </section>

    <section class="modalidades">
        <div class="container">
            <div class="section-title">
                <h2>Escolha a modalidade</h2>
                <p>Clique em uma modalidade para ver as lutas cadastradas e acessar a edicao.</p>
            </div>

            <div class="carrossel-container">
                <button class="carrossel-control prev" id="prevBtn">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="carrossel-control next" id="nextBtn">
                    <i class="fas fa-chevron-right"></i>
                </button>

                <div class="carrossel-wrapper">
                    <div class="carrossel-slides" id="carrosselSlides">
                        <div class="carrossel-slide">
                            <a onclick="abrirModal('MMA')" class="modalidade-card">
                                <div class="modalidade-avatar"><img src="https://images.unsplash.com/photo-1549719386-74dfcbf7dbed?auto=format&fit=crop&w=800&q=80" alt="MMA"></div>
                                <h3>MMA</h3>
                                <span>Lutas mistas</span>
                            </a>
                        </div>
                        <div class="carrossel-slide">
                            <a onclick="abrirModal('Boxe')" class="modalidade-card">
                                <div class="modalidade-avatar"><img src="https://images.unsplash.com/photo-1542460713-ffb8f7b4f7b4?auto=format&fit=crop&w=800&q=80" alt="Boxe"></div>
                                <h3>Boxe</h3>
                                <span>Punhos precisos</span>
                            </a>
                        </div>
                        <div class="carrossel-slide">
                            <a onclick="abrirModal('Muay Thai')" class="modalidade-card">
                                <div class="modalidade-avatar"><img src="https://images.unsplash.com/photo-1526506118085-60ce8714f8c5?auto=format&fit=crop&w=800&q=80" alt="Muay Thai"></div>
                                <h3>Muay Thai</h3>
                                <span>Golpes de impacto</span>
                            </a>
                        </div>
                        <div class="carrossel-slide">
                            <a onclick="abrirModal('Jiu-Jitsu')" class="modalidade-card">
                                <div class="modalidade-avatar"><img src="https://images.unsplash.com/photo-1613909684774-ec6fdb9fb938?auto=format&fit=crop&w=800&q=80" alt="Jiu-Jitsu"></div>
                                <h3>Jiu-Jitsu</h3>
                                <span>Solo e grappling</span>
                            </a>
                        </div>
                        <div class="carrossel-slide">
                            <a onclick="abrirModal('Kickboxing')" class="modalidade-card">
                                <div class="modalidade-avatar"><img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?auto=format&fit=crop&w=800&q=80" alt="Kickboxing"></div>
                                <h3>Kickboxing</h3>
                                <span>Ritmo intenso</span>
                            </a>
                        </div>
                        <div class="carrossel-slide">
                            <a onclick="abrirModal('todas')" class="modalidade-card">
                                <div class="modalidade-avatar"><img src="https://images.unsplash.com/photo-1517438984742-1262db08379e?auto=format&fit=crop&w=800&q=80" alt="Todas"></div>
                                <h3>Todas</h3>
                                <span>Todos os cards</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carrossel-indicators" id="indicators"></div>
        </div>
    </section>

    <div id="myModal" class="fight-modal">
        <div class="fight-modal-content">
            <div class="fight-modal-header">
                <h2><i class="fas fa-hand-fist me-2"></i><span id="modal-titulo">Lutas cadastradas</span></h2>
                <span class="close-modal" onclick="fecharModal()">&times;</span>
            </div>
            <div class="fight-modal-body">
                <div id="loading-spinner" class="loading-spinner">
                    <div class="spinner"></div>
                    <p>Carregando lutas...</p>
                </div>
                <div id="lutas-container" class="lutas-container lutas-container-hidden"></div>
            </div>
        </div>
    </div>

    <a href="https://wa.me/5511999999999?text=Ola,%20quero%20saber%20mais%20sobre%20os%20cards%20de%20luta" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    @vite('resources/js/navbar.js')
    @vite('resources/js/frota.js')
</body>
</html>
