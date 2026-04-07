<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FightStore | Cadastro de Luta</title>
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

        .fight-page {
            min-height: 100vh;
            padding: 112px 0 56px;
            display: flex;
            align-items: center;
        }

        .fight-shell {
            border: 1px solid var(--fight-line);
            border-radius: 20px;
            overflow: hidden;
            background: rgba(12, 12, 12, 0.9);
            box-shadow: 0 24px 50px rgba(0, 0, 0, 0.5);
        }

        .fight-aside {
            padding: 36px;
            background:
                linear-gradient(150deg, rgba(230, 35, 42, 0.88), rgba(84, 10, 12, 0.9)),
                url("https://images.unsplash.com/photo-1549719386-74dfcbf7dbed?auto=format&fit=crop&w=1200&q=80") center/cover no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 100%;
        }

        .fight-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 1px solid rgba(255, 255, 255, 0.45);
            border-radius: 999px;
            padding: 6px 14px;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1px;
            font-size: 0.8rem;
            width: fit-content;
        }

        .fight-aside h1 {
            margin: 18px 0 12px;
            font-family: "Bebas Neue", sans-serif;
            letter-spacing: 1.6px;
            line-height: 1;
            font-size: clamp(2rem, 6vw, 4rem);
            text-transform: uppercase;
        }

        .fight-aside p {
            font-size: 1.05rem;
            margin-bottom: 24px;
            color: #ffe8e1;
            max-width: 430px;
        }

        .fight-points {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            gap: 8px;
        }

        .fight-points li {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #fff3ef;
            font-weight: 500;
        }

        .fight-points i {
            color: var(--fight-gold);
        }

        .fight-form-wrap {
            background: var(--fight-card);
            padding: 36px;
        }

        .fight-title {
            margin-bottom: 22px;
        }

        .fight-title h2 {
            margin: 0;
            font-family: "Bebas Neue", sans-serif;
            letter-spacing: 1.1px;
            font-size: 2.3rem;
            text-transform: uppercase;
        }

        .fight-title p {
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
            pointer-events: none;
        }

        input,
        select,
        textarea {
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

        textarea {
            min-height: 110px;
            resize: vertical;
            padding-right: 13px;
        }

        input::placeholder,
        textarea::placeholder {
            color: #847b6e;
        }

        input:focus,
        select:focus,
        textarea:focus {
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

        .success-toast {
            margin-top: 14px;
            border: 1px solid rgba(98, 224, 142, 0.45);
            background: rgba(98, 224, 142, 0.13);
            color: #b8ffd0;
            border-radius: 10px;
            padding: 10px 12px;
            display: flex;
            align-items: center;
            gap: 8px;
            opacity: 0;
            transform: translateY(8px);
            pointer-events: none;
            transition: opacity 0.35s ease, transform 0.35s ease;
        }

        .success-toast.show {
            opacity: 1;
            transform: translateY(0);
            animation: pulseOk 0.55s ease;
        }

        .fight-list {
            margin-top: 18px;
            border: 1px solid var(--fight-line);
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.02);
            overflow: hidden;
        }

        .fight-list-header {
            padding: 11px 13px;
            border-bottom: 1px solid var(--fight-line);
            font-weight: 700;
            letter-spacing: 0.4px;
            color: var(--fight-gold);
        }

        .fight-list-items {
            max-height: 230px;
            overflow-y: auto;
        }

        .fight-item {
            padding: 10px 13px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.07);
        }

        .fight-item:last-child {
            border-bottom: 0;
        }

        .fight-item strong {
            display: block;
            color: #fff;
            font-size: 1rem;
        }

        .fight-item small {
            color: var(--fight-muted);
            font-size: 0.9rem;
        }

        .fight-item a {
            margin-top: 6px;
            display: inline-flex;
            color: var(--fight-gold);
            text-decoration: none;
            font-weight: 700;
            font-size: 0.9rem;
        }

        .fight-item a:hover {
            color: #fff;
        }

        .fight-item .delete-link {
            color: #ff8f8f;
            margin-left: 12px;
        }

        .fight-item .delete-link:hover {
            color: #ffd0d0;
        }

        .fight-empty {
            padding: 14px 13px;
            color: var(--fight-muted);
        }

        @keyframes pulseOk {
            0% {
                transform: translateY(8px) scale(0.98);
            }
            60% {
                transform: translateY(-2px) scale(1.01);
            }
            100% {
                transform: translateY(0) scale(1);
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

            .fight-page {
                padding-top: 96px;
            }

            .fight-aside,
            .fight-form-wrap {
                padding: 28px;
            }
        }

        @media (max-width: 767px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .fight-aside h1 {
                font-size: 2.7rem;
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

    <main class="fight-page">
        <div class="container">
            <div class="fight-shell">
                <div class="row g-0">
                    <div class="col-lg-5">
                        <section class="fight-aside h-100">
                            <div>
                                <span class="fight-tag"><i class="fa-solid fa-trophy"></i> Card oficial</span>
                                <h1>Cadastro da luta</h1>
                                <p>
                                    Registre o combate com nome dos atletas, modalidade e informacoes do evento.
                                </p>
                            </div>
                            <ul class="fight-points">
                                <li><i class="fa-solid fa-check"></i> Cadastro rapido do card</li>
                                <li><i class="fa-solid fa-check"></i> Informacoes completas da luta</li>
                                <li><i class="fa-solid fa-check"></i> Organizacao no padrao FightStore</li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-lg-7">
                        <section class="fight-form-wrap">
                            <header class="fight-title">
                                <h2>Novo combate</h2>
                                <p>Preencha os dados abaixo para cadastrar a luta.</p>
                            </header>

                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="nome_lutador">Nome do lutador</label>
                                    <div class="input-wrap">
                                        <input type="text" id="nome_lutador" placeholder="Ex: Anderson Silva" required>
                                        <i class="fas fa-user-ninja"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nome_oponente">Nome do oponente</label>
                                    <div class="input-wrap">
                                        <input type="text" id="nome_oponente" placeholder="Ex: Georges St-Pierre" required>
                                        <i class="fas fa-user-shield"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="modalidade">Modalidade</label>
                                    <div class="input-wrap">
                                        <select id="modalidade" required>
                                            <option value="">Selecione...</option>
                                            <option value="Boxe">Boxe</option>
                                            <option value="Muay Thai">Muay Thai</option>
                                            <option value="MMA">MMA</option>
                                            <option value="Jiu-Jitsu">Jiu-Jitsu</option>
                                            <option value="Kickboxing">Kickboxing</option>
                                        </select>
                                        <i class="fas fa-hand-fist"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="categoria">Categoria de peso</label>
                                    <div class="input-wrap">
                                        <input type="text" id="categoria" placeholder="Ex: Peso Medio" required>
                                        <i class="fas fa-weight-hanging"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="rounds">Rounds</label>
                                    <div class="input-wrap">
                                        <input type="number" id="rounds" placeholder="Ex: 3" min="1" required>
                                        <i class="fas fa-stopwatch"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="bolsa">Bolsa (R$)</label>
                                    <div class="input-wrap">
                                        <input type="number" id="bolsa" placeholder="0,00" min="0" step="0.01" required>
                                        <i class="fas fa-sack-dollar"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="data_luta">Data da luta</label>
                                    <div class="input-wrap">
                                        <input type="date" id="data_luta" required>
                                        <i class="fas fa-calendar-days"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="local_evento">Local do evento</label>
                                    <div class="input-wrap">
                                        <input type="text" id="local_evento" placeholder="Ex: Arena Sao Paulo" required>
                                        <i class="fas fa-location-dot"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="resultado_previsto">Resultado</label>
                                    <div class="input-wrap">
                                        <select id="resultado_previsto" required>
                                            <option value="">Selecione...</option>
                                            <option value="Nocaute">Nocaute</option>
                                            <option value="Finalizacao">Finalizacao</option>
                                            <option value="Decisao">Decisao</option>
                                            <option value="Empate">Empate</option>
                                        </select>
                                        <i class="fas fa-medal"></i>
                                    </div>
                                </div>

                                <div class="form-group full-width">
                                    <label for="sobre_luta">Sobre a luta</label>
                                    <textarea id="sobre_luta" placeholder="Descreva rapidamente o contexto da luta" required></textarea>
                                </div>

                            </div>

                            <button type="button" class="btn-submit" id="meu">
                                <i class="fas fa-file-circle-plus me-2"></i> Cadastrar luta
                            </button>

                            <div class="success-toast" id="toastCadastro">
                                <i class="fas fa-circle-check"></i>
                                <span id="toastCadastroTexto">Cadastrado com sucesso.</span>
                            </div>

                            <div class="fight-list">
                                <div class="fight-list-header">Ultimas lutas cadastradas</div>
                                <div class="fight-list-items" id="listaLutas">
                                    <div class="fight-empty">Nenhuma luta cadastrada ainda.</div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    @vite('resources/js/navbar.js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const botaoCadastro = document.getElementById('meu');
            const listaLutas = document.getElementById('listaLutas');
            const toastCadastro = document.getElementById('toastCadastro');
            const toastCadastroTexto = document.getElementById('toastCadastroTexto');
            let toastTimer = null;

            function valor(id) {
                const el = document.getElementById(id);
                return el ? (el.value || '').trim() : '';
            }

            function formatarData(dataISO) {
                if (!dataISO || !dataISO.includes('-')) return dataISO || '-';
                const partes = dataISO.split('-');
                return partes.length === 3 ? (partes[2] + '/' + partes[1] + '/' + partes[0]) : dataISO;
            }

            function mostrarSucesso(nomeLutador) {
                if (!toastCadastro) return;
                toastCadastroTexto.textContent = 'Cadastrado com sucesso: ' + (nomeLutador || 'Luta') + '.';
                toastCadastro.classList.add('show');
                if (toastTimer) clearTimeout(toastTimer);
                toastTimer = setTimeout(function () {
                    toastCadastro.classList.remove('show');
                }, 2600);
            }

            function renderizarLista(lutas) {
                if (!listaLutas) return;

                if (!Array.isArray(lutas) || lutas.length === 0) {
                    listaLutas.innerHTML = '<div class="fight-empty">Nenhuma luta cadastrada ainda.</div>';
                    return;
                }

                listaLutas.innerHTML = lutas.slice(0, 8).map(function (luta) {
                    return (
                        '<div class="fight-item">' +
                            '<strong>' + luta.nome_lutador + ' vs ' + luta.nome_oponente + '</strong>' +
                            '<small>' + luta.modalidade + ' | ' + formatarData(luta.data_luta) + ' | ' + luta.local_evento + '</small>' +
                            '<div>' +
                                '<a href="/alterarformulario/' + luta.id + '"><i class="fas fa-pen-to-square me-1"></i>Alterar luta</a>' +
                                '<a class="delete-link" href="/deletarformulario/' + luta.id + '"><i class="fas fa-trash me-1"></i>Deletar luta</a>' +
                            '</div>' +
                        '</div>'
                    );
                }).join('');
            }

            function carregarLutas() {
                fetch('/api/todas_lutas?_ts=' + Date.now(), {
                    method: 'GET',
                    headers: { 'Accept': 'application/json' }
                })
                    .then(function (res) { return res.json(); })
                    .then(function (data) { renderizarLista(data && data.lutas ? data.lutas : []); })
                    .catch(function () {
                        if (listaLutas) {
                            listaLutas.innerHTML = '<div class="fight-empty">Nao foi possivel carregar as lutas.</div>';
                        }
                    });
            }

            function verificarAtualizacaoPendente() {
                const sinal = localStorage.getItem('lutasAtualizadas');
                if (!sinal) return;
                carregarLutas();
                localStorage.removeItem('lutasAtualizadas');
            }

            function verificarQueryDeAtualizacao() {
                const params = new URLSearchParams(window.location.search);
                const updated = params.get('updated') === '1';
                const deleted = params.get('deleted') === '1';
                if (!updated && !deleted) return;

                toastCadastroTexto.textContent = updated
                    ? 'Luta alterada com sucesso.'
                    : 'Luta deletada com sucesso.';
                toastCadastro.classList.add('show');
                if (toastTimer) clearTimeout(toastTimer);
                toastTimer = setTimeout(function () {
                    toastCadastro.classList.remove('show');
                }, 2600);

                carregarLutas();
                window.history.replaceState({}, '', '/formulario');
            }

            function limparFormulario() {
                [
                    'nome_lutador',
                    'nome_oponente',
                    'modalidade',
                    'categoria',
                    'rounds',
                    'bolsa',
                    'data_luta',
                    'local_evento',
                    'resultado_previsto',
                    'sobre_luta'
                ].forEach(function (id) {
                    const el = document.getElementById(id);
                    if (el) el.value = '';
                });
            }

            if (!botaoCadastro) return;

            carregarLutas();
            verificarAtualizacaoPendente();
            verificarQueryDeAtualizacao();

            window.addEventListener('focus', verificarAtualizacaoPendente);
            window.addEventListener('pageshow', function () {
                verificarAtualizacaoPendente();
                carregarLutas();
            });

            document.addEventListener('visibilitychange', function () {
                if (!document.hidden) {
                    verificarAtualizacaoPendente();
                }
            });

            botaoCadastro.addEventListener('click', function () {
                const payload = {
                    nome_lutador: valor('nome_lutador'),
                    nome_oponente: valor('nome_oponente'),
                    modalidade: valor('modalidade'),
                    categoria: valor('categoria'),
                    rounds: valor('rounds'),
                    bolsa: valor('bolsa'),
                    data_luta: valor('data_luta'),
                    local_evento: valor('local_evento'),
                    resultado_previsto: valor('resultado_previsto'),
                    sobre_luta: valor('sobre_luta')
                };

                const campoVazio = Object.values(payload).some(function (v) { return !v; });
                if (campoVazio) {
                    alert('Preencha todos os campos da luta antes de cadastrar.');
                    return;
                }

                const body = new URLSearchParams(payload).toString();

                fetch('/api/salva_luta', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
                        'Accept': 'application/json'
                    },
                    body: body
                })
                    .then(function (res) {
                        if (!res.ok) throw new Error('erro');
                        return res.json();
                    })
                    .then(function (data) {
                        const nome = data && data.luta ? data.luta.nome_lutador : payload.nome_lutador;
                        mostrarSucesso(nome);
                        limparFormulario();
                        carregarLutas();
                    })
                    .catch(function () {
                        alert('Nao foi possivel cadastrar a luta. Verifique os dados.');
                    });
            });
        });
    </script>
</body>
</html>
