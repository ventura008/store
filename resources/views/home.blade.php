<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FightStore | Equipamentos de Luta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --fight-bg: #090909;
            --fight-card: #151515;
            --fight-surface: #202020;
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
                radial-gradient(circle at 88% 0%, rgba(229, 188, 98, 0.15), transparent 45%),
                repeating-linear-gradient(
                    135deg,
                    rgba(255, 255, 255, 0.03) 0,
                    rgba(255, 255, 255, 0.03) 2px,
                    transparent 2px,
                    transparent 14px
                ),
                var(--fight-bg);
            overflow-x: hidden;
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

        .nav-link:hover {
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
            transform: translateY(-1px);
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
            min-height: 100vh;
            padding-top: 110px;
            display: flex;
            align-items: center;
            position: relative;
            isolation: isolate;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(96deg, rgba(9, 9, 9, 0.95) 0%, rgba(9, 9, 9, 0.5) 45%, rgba(9, 9, 9, 0.85) 100%),
                url("https://images.unsplash.com/photo-1555597673-b21d5c935865?auto=format&fit=crop&w=1900&q=80") center/cover no-repeat;
            z-index: -1;
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
            font-family: "Bebas Neue", sans-serif;
            font-size: clamp(3rem, 10vw, 6.8rem);
            letter-spacing: 2.8px;
            line-height: 0.95;
            margin: 0 0 14px;
            text-transform: uppercase;
        }

        .hero h1 span {
            color: var(--fight-red);
        }

        .hero p {
            max-width: 560px;
            font-size: 1.15rem;
            color: #ede8df;
            margin-bottom: 26px;
        }

        .hero-actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn-outline-fight {
            border: 1px solid var(--fight-gold);
            color: var(--fight-gold);
            border-radius: 999px;
            padding: 9px 20px;
            font-weight: 700;
        }

        .btn-outline-fight:hover {
            color: #111;
            background: var(--fight-gold);
        }

        .hero-panel {
            background: linear-gradient(160deg, rgba(255, 255, 255, 0.08), rgba(0, 0, 0, 0.3));
            border: 1px solid var(--fight-line);
            border-radius: 18px;
            padding: 24px;
            backdrop-filter: blur(3px);
            animation: rise 0.7s ease-out both;
        }

        .stat-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
        }

        .stat-item {
            padding: 14px;
            border-radius: 14px;
            background: rgba(0, 0, 0, 0.35);
            border: 1px solid rgba(255, 255, 255, 0.09);
        }

        .stat-item strong {
            display: block;
            font-size: 1.35rem;
            color: var(--fight-gold);
            font-weight: 700;
        }

        .section-wrap {
            padding: 88px 0;
        }

        .section-title {
            margin-bottom: 28px;
        }

        .section-title h2 {
            font-family: "Bebas Neue", sans-serif;
            letter-spacing: 1.6px;
            font-size: clamp(2rem, 5vw, 3.6rem);
            margin: 0 0 8px;
        }

        .section-title p {
            color: var(--fight-muted);
            max-width: 700px;
            margin: 0;
        }

        .product-card {
            border-radius: 16px;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.06), rgba(11, 11, 11, 0.92));
            border: 1px solid var(--fight-line);
            overflow: hidden;
            height: 100%;
            transition: transform 0.28s ease, border-color 0.28s ease;
        }

        .product-card:hover {
            transform: translateY(-6px);
            border-color: rgba(230, 35, 42, 0.6);
        }

        .product-thumb {
            height: 240px;
            background-size: cover;
            background-position: center;
        }

        .product-body {
            padding: 20px;
        }

        .product-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 0 8px;
        }

        .product-copy {
            color: var(--fight-muted);
            margin-bottom: 18px;
        }

        .product-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 8px;
        }

        .product-price {
            color: var(--fight-gold);
            font-size: 1.4rem;
            font-weight: 700;
        }

        .feature-box {
            border: 1px solid var(--fight-line);
            border-radius: 16px;
            background: rgba(15, 15, 15, 0.8);
            padding: 24px;
            height: 100%;
        }

        .feature-box i {
            font-size: 1.4rem;
            width: 44px;
            height: 44px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(230, 35, 42, 0.2);
            color: var(--fight-red);
            margin-bottom: 12px;
        }

        .feature-box h4 {
            margin-bottom: 8px;
            font-size: 1.35rem;
            font-weight: 700;
        }

        .feature-box p {
            margin: 0;
            color: var(--fight-muted);
        }

        .cta-band {
            padding: 74px 0;
            background:
                linear-gradient(120deg, rgba(230, 35, 42, 0.92), rgba(96, 9, 14, 0.92)),
                url("https://images.unsplash.com/photo-1517438322307-e67111335449?auto=format&fit=crop&w=1600&q=80") center/cover no-repeat;
            text-align: center;
        }

        .cta-band h3 {
            font-family: "Bebas Neue", sans-serif;
            font-size: clamp(2rem, 6vw, 4rem);
            letter-spacing: 1.6px;
            margin-bottom: 10px;
        }

        .cta-band p {
            max-width: 720px;
            margin: 0 auto 18px;
            color: #ffe7dd;
        }

        footer {
            background: #080808;
            border-top: 1px solid rgba(230, 35, 42, 0.25);
            padding: 52px 0 24px;
        }

        .footer-brand {
            font-family: "Bebas Neue", sans-serif;
            font-size: 2rem;
            letter-spacing: 1.2px;
            margin-bottom: 8px;
        }

        .footer-brand span {
            color: var(--fight-red);
        }

        .footer-copy {
            color: var(--fight-muted);
            margin-bottom: 12px;
        }

        .social-icons {
            display: flex;
            gap: 10px;
        }

        .social-icons a {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            border: 1px solid var(--fight-line);
            color: #f2eee9;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }

        .social-icons a:hover {
            background: var(--fight-red);
            border-color: var(--fight-red);
        }

        .footer-menu {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .footer-menu li {
            margin-bottom: 8px;
            color: var(--fight-muted);
        }

        .footer-menu a {
            color: var(--fight-muted);
            text-decoration: none;
        }

        .footer-menu a:hover {
            color: #fff;
        }

        .footer-bottom {
            border-top: 1px solid var(--fight-line);
            margin-top: 18px;
            padding-top: 18px;
            color: #a59c90;
            text-align: center;
        }

        @keyframes rise {
            from {
                opacity: 0;
                transform: translateY(18px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .reveal {
            animation: rise 0.72s ease-out both;
        }

        .delay-1 {
            animation-delay: 0.12s;
        }

        .delay-2 {
            animation-delay: 0.24s;
        }

        @media (max-width: 991px) {
            .nav-profile-menu {
                margin-top: 12px;
            }

            .profile-trigger {
                width: 100%;
                justify-content: space-between;
            }

            .hero {
                padding-top: 96px;
            }
        }

        @media (max-width: 767px) {
            .hero {
                text-align: center;
            }

            .hero p {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-actions {
                justify-content: center;
            }

            .hero-panel {
                margin-top: 24px;
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
                    <li class="nav-item"><a class="nav-link" href="/frota">Catalogo</a></li>
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
            <div class="row align-items-center g-4">
                <div class="col-lg-7 reveal">
                    <div class="hero-tag"><i class="fa-solid fa-bolt"></i> Performance de campeao</div>
                    <h1>Equipe seu treino com a <span>FightStore</span></h1>
                    <p>
                        Luvas, kimonos, protetores e equipamentos profissionais para boxe, muay thai e jiu-jitsu.
                        Design agressivo, materiais premium e entrega rapida para voce subir de nivel.
                    </p>
                    <div class="hero-actions">
                        <a href="/frota" class="btn btn-main">Ver Catalogo</a>
                        <a href="/contato" class="btn btn-outline-fight">Falar com Especialista</a>
                    </div>
                </div>
                <div class="col-lg-5 reveal delay-1">
                    <div class="hero-panel">
                        <h3 class="mb-3" style="font-family: 'Bebas Neue', sans-serif; letter-spacing: 1px;">Nossos Numeros</h3>
                        <div class="stat-grid">
                            <div class="stat-item">
                                <strong>+1.200</strong>
                                Clientes ativos
                            </div>
                            <div class="stat-item">
                                <strong>48h</strong>
                                Entrega expressa
                            </div>
                            <div class="stat-item">
                                <strong>97%</strong>
                                Aprovacao em reviews
                            </div>
                            <div class="stat-item">
                                <strong>24/7</strong>
                                Suporte da equipe
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-wrap">
        <div class="container">
            <div class="section-title reveal">
                <h2>Selecao principal de combate</h2>
                <p>Equipamentos escolhidos para treino forte, sparring tecnico e competicoes oficiais.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-xl-4 reveal delay-1">
                    <article class="product-card">
                        <div class="product-thumb" style="background-image: url('https://images.unsplash.com/photo-1549719386-74dfcbf7dbed?auto=format&fit=crop&w=1000&q=80');"></div>
                        <div class="product-body">
                            <h4 class="product-title">Luva Titan Pro 14oz</h4>
                            <p class="product-copy">Couro reforcado, espuma de alta absorcao e ajuste firme para rounds intensos.</p>
                            <div class="product-meta">
                                <span class="product-price">R$ 389</span>
                                <a href="/reserva" class="btn btn-main">Comprar</a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4 reveal delay-1">
                    <article class="product-card">
                        <div class="product-thumb" style="background-image: url('https://images.unsplash.com/photo-1562771379-eafdca7a02f8?auto=format&fit=crop&w=1000&q=80');"></div>
                        <div class="product-body">
                            <h4 class="product-title">Kimono Iron Grip</h4>
                            <p class="product-copy">Tecido trancado premium, leve no aquecimento e resistente no rola.</p>
                            <div class="product-meta">
                                <span class="product-price">R$ 549</span>
                                <a href="/reserva" class="btn btn-main">Comprar</a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-4 reveal delay-2">
                    <article class="product-card">
                        <div class="product-thumb" style="background-image: url('https://images.unsplash.com/photo-1583473848882-f9a5bc7fd2ee?auto=format&fit=crop&w=1000&q=80');"></div>
                        <div class="product-body">
                            <h4 class="product-title">Protetor Shield Elite</h4>
                            <p class="product-copy">Kit com caneleira e protetor bucal para treinar com seguranca e confianca.</p>
                            <div class="product-meta">
                                <span class="product-price">R$ 279</span>
                                <a href="/reserva" class="btn btn-main">Comprar</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="section-wrap pt-0">
        <div class="container">
            <div class="section-title reveal">
                <h2>Por que treinar com a FightStore</h2>
                <p>Do iniciante ao atleta profissional, nossa curadoria foi feita para quem vive o ritmo da luta.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 reveal delay-1">
                    <div class="feature-box">
                        <i class="fa-solid fa-hand-fist"></i>
                        <h4>Qualidade real</h4>
                        <p>Produtos testados em treino tecnico e impacto forte para maxima durabilidade.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 reveal delay-1">
                    <div class="feature-box">
                        <i class="fa-solid fa-shield-heart"></i>
                        <h4>Protecao ativa</h4>
                        <p>Materiais desenvolvidos para reduzir impacto e manter mobilidade natural.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 reveal delay-2">
                    <div class="feature-box">
                        <i class="fa-solid fa-truck-fast"></i>
                        <h4>Envio rapido</h4>
                        <p>Despacho em ate 24h com opcoes de entrega expressa para todo o Brasil.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 reveal delay-2">
                    <div class="feature-box">
                        <i class="fa-solid fa-medal"></i>
                        <h4>Suporte tecnico</h4>
                        <p>Equipe especializada para indicar tamanho, modalidade e nivel ideal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-band">
        <div class="container reveal">
            <h3>Pronto para elevar seu jogo?</h3>
            <p>Monte seu kit de luta com condicoes especiais e entre em combate com confianca desde o primeiro round.</p>
            <a href="/reserva" class="btn btn-outline-fight">Montar meu kit</a>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="footer-brand">Fight<span>Store</span></div>
                    <p class="footer-copy">A loja de combate para atletas que treinam serio, competem forte e buscam evolucao constante.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <h5>Links</h5>
                    <ul class="footer-menu">
                        <li><a href="/home">Inicio</a></li>
                        <li><a href="/frota">Catalogo</a></li>
                        <li><a href="/servicos">Treinadores</a></li>
                        <li><a href="/sobre">A Arena</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-4">
                    <h5>Contato</h5>
                    <ul class="footer-menu">
                        <li><i class="fas fa-location-dot me-2"></i> Rua do Ringue, 77 - Sao Paulo</li>
                        <li><i class="fas fa-phone me-2"></i> (11) 4002-8922</li>
                        <li><i class="fas fa-envelope me-2"></i> contato@fightstore.com.br</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="m-0" id="footerYear"></p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    @vite('resources/js/navbar.js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const footer = document.getElementById('footerYear');
            if (footer) {
                footer.textContent = '© ' + new Date().getFullYear() + ' FightStore. Todos os direitos reservados.';
            }
        });
    </script>

</body>
</html>
