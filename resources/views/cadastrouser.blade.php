<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FightStore | Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
            --fight-line: rgba(255, 255, 255, 0.14);
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

        .profile-trigger:hover,
        .profile-trigger:focus {
            color: #fff;
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

        .register-page {
            min-height: 100vh;
            padding: 112px 0 56px;
            display: flex;
            align-items: center;
        }

        .register-shell {
            border: 1px solid var(--fight-line);
            border-radius: 20px;
            overflow: hidden;
            background: rgba(12, 12, 12, 0.9);
            box-shadow: 0 24px 50px rgba(0, 0, 0, 0.5);
        }

        .register-aside {
            padding: 36px;
            background:
                linear-gradient(150deg, rgba(230, 35, 42, 0.88), rgba(84, 10, 12, 0.9)),
                url("https://images.unsplash.com/photo-1555597673-b21d5c935865?auto=format&fit=crop&w=1200&q=80") center/cover no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 100%;
        }

        .register-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 999px;
            padding: 6px 14px;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1px;
            font-size: 0.8rem;
            width: fit-content;
        }

        .register-aside h1 {
            margin: 18px 0 12px;
            font-family: "Bebas Neue", sans-serif;
            letter-spacing: 1.6px;
            line-height: 1;
            font-size: clamp(2rem, 6vw, 4.2rem);
            text-transform: uppercase;
        }

        .register-aside p {
            font-size: 1.05rem;
            margin-bottom: 26px;
            color: #ffe8e1;
            max-width: 430px;
        }

        .benefits {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            gap: 8px;
        }

        .benefits li {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #fff3ef;
            font-weight: 500;
        }

        .benefits i {
            color: var(--fight-gold);
        }

        .register-form-wrap {
            background: var(--fight-card);
            padding: 36px;
        }

        .register-title {
            margin-bottom: 22px;
        }

        .register-title h2 {
            margin: 0;
            font-family: "Bebas Neue", sans-serif;
            letter-spacing: 1.1px;
            font-size: 2.3rem;
            text-transform: uppercase;
        }

        .register-title p {
            margin: 4px 0 0;
            color: var(--fight-muted);
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-group label {
            margin-bottom: 7px;
            color: var(--fight-gold);
            text-transform: uppercase;
            letter-spacing: 0.8px;
            font-weight: 700;
            font-size: 0.86rem;
        }

        .input-wrap {
            position: relative;
        }

        .input-wrap i {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #9b9285;
        }

        input,
        select {
            width: 100%;
            border: 1px solid #312f2a;
            border-radius: 10px;
            background: #1d1d1d;
            color: #f3efea;
            padding: 12px 42px 12px 13px;
            font-size: 1rem;
            font-family: inherit;
            transition: border-color 0.25s ease, box-shadow 0.25s ease;
        }

        input::placeholder {
            color: #847b6e;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: var(--fight-red);
            box-shadow: 0 0 0 3px rgba(230, 35, 42, 0.2);
        }

        .btn-submit {
            width: 100%;
            margin-top: 18px;
            border: 0;
            border-radius: 12px;
            padding: 12px 18px;
            font-size: 1rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #fff;
            background: linear-gradient(90deg, var(--fight-red-soft), var(--fight-red));
            box-shadow: 0 12px 24px rgba(230, 35, 42, 0.3);
            transition: transform 0.2s ease;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
        }

        .login-link {
            margin-top: 14px;
            text-align: center;
            color: var(--fight-muted);
        }

        .login-link a {
            color: var(--fight-gold);
            text-decoration: none;
            font-weight: 700;
        }

        .login-link a:hover {
            color: #fff;
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

            .register-page {
                padding-top: 96px;
            }

            .register-aside,
            .register-form-wrap {
                padding: 28px;
            }
        }

        @media (max-width: 767px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .register-aside h1 {
                font-size: 2.8rem;
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

    <main class="register-page">
        <div class="container">
            <div class="register-shell">
                <div class="row g-0">
                    <div class="col-lg-5">
                        <section class="register-aside h-100">
                            <div>
                                <span class="register-tag"><i class="fa-solid fa-bolt"></i> Novo atleta</span>
                                <h1>Entre no time FightStore</h1>
                                <p>
                                    Crie sua conta e acompanhe ofertas, lancamentos e equipamentos ideais para o seu nivel de treino.
                                </p>
                            </div>
                            <ul class="benefits">
                                <li><i class="fa-solid fa-check"></i> Compra rapida com perfil salvo</li>
                                <li><i class="fa-solid fa-check"></i> Alertas de reposicao e promocoes</li>
                                <li><i class="fa-solid fa-check"></i> Suporte tecnico especializado</li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-lg-7">
                        <section class="register-form-wrap">
                            <header class="register-title">
                                <h2>Cadastro de usuario</h2>
                                <p>Preencha seus dados para criar sua conta.</p>
                            </header>

                            <div class="form-grid">
                                <div class="form-group full-width">
                                    <label for="nome">Nome completo</label>
                                    <div class="input-wrap">
                                        <input type="text" id="nome" placeholder="Digite seu nome completo">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <div class="input-wrap">
                                        <input type="email" id="email" placeholder="seu@email.com">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="senha">Senha</label>
                                    <div class="input-wrap">
                                        <input type="password" id="senha" placeholder="Minimo 6 caracteres">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="telefone">Telefone</label>
                                    <div class="input-wrap">
                                        <input type="text" id="telefone" placeholder="(11) 99999-9999">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nascimento">Data de nascimento</label>
                                    <div class="input-wrap">
                                        <input type="date" id="nascimento">
                                        <i class="fas fa-calendar"></i>
                                    </div>
                                </div>

                                <div class="form-group full-width">
                                    <label for="genero">Genero</label>
                                    <div class="input-wrap">
                                        <select id="genero">
                                            <option value="">Selecione...</option>
                                            <option value="masculino">Masculino</option>
                                            <option value="feminino">Feminino</option>
                                        </select>
                                        <i class="fas fa-venus-mars"></i>
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="btn-submit" id="meu">
                                <i class="fas fa-user-plus me-2"></i> Criar conta
                            </button>

                            <div class="login-link">
                                Ja possui conta?
                                <a href="/loginn">Fazer login</a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    @vite('resources/js/navbar.js')
    @vite('resources/js/cadastrouser.js')
</body>
</html>
