<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - WL MOTORS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

    @vite('resources/css/loginuser.css')
    @vite('resources/css/navbar.css')
</head>
<body>
    <!-- Navbar Premium -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/home">
                <span class="logo-text">WL <span class="logo-highlight">MOTORS</span></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/frota">Frota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contato">Contato</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="btn btn-reserva" href="/reserva">Reserve Agora</a>
                    </li>
                    <li class="nav-item nav-profile-menu">
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
                                    <span class="profile-dropdown-title">Acesso rápido</span>
                                    <span class="profile-dropdown-subtitle">Gerencie sua conta</span>
                                </li>
                                <li id="profileMenuItem">
                                    <a class="dropdown-item" href="/perfil">
                                        <i class="fas fa-user-circle"></i> Perfil
                                    </a>
                                </li>
                                <li id="loginMenuItem">
                                    <a class="dropdown-item" href="/loginn">
                                        <i class="fas fa-right-to-bracket"></i> Login
                                    </a>
                                </li>
                                <li id="registerMenuItem">
                                    <a class="dropdown-item" href="/cadastro">
                                        <i class="fas fa-user-plus"></i> Cadastro
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login -->
    <div class="login-page-wrapper">
        <div class="login-container">
            <div class="login-header">
                <i class="fas fa-crown logo-icon"></i>
                <h2>Bem-vindo de volta</h2>
                <p>Faça login para acessar sua conta</p>
            </div>
            
            <div class="login-body">
                <!-- Mensagens de erro/sucesso -->
                <div class="error-message" id="errorMessage">
                    <i class="fas fa-exclamation-circle"></i> E-mail ou senha incorretos
                </div>
                
                <div class="success-message" id="successMessage">
                    <i class="fas fa-check-circle"></i> Login realizado com sucesso!
                </div>
                
                <form id="loginForm" onsubmit="return false;">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <div class="input-container">
                            <i class="fas fa-envelope input-icon"></i>
                            <input type="email" id="email" placeholder="seu@email.com" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <div class="input-container">
                            <i class="fas fa-lock input-icon"></i>
                            <input type="password" id="senha" placeholder="Digite sua senha" required>
                            <i class="fas fa-eye toggle-password" id="toggleSenha"></i>
                        </div>
                    </div>
                    
                    <div class="remember-forgot">
                        <label class="remember">
                            <input type="checkbox" id="lembrar"> Lembrar-me
                        </label>
                        <a href="/esqueci-senha" class="forgot-link">Esqueceu a senha?</a>
                    </div>
                    
                    <button type="button" class="btn-login" id="meu">
                        <i class="fas fa-sign-in-alt btn-login-icon"></i> Entrar
                    </button>
                    
                    <div class="register-link">
                        Não tem uma conta?<button> <a href="/cadastrouser">Cadastre-se aqui</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 footer-col">
                    <h4>WL MOTORS</h4>
                    <p>Especialistas em aluguel de veículos de luxo, oferecendo uma experiência premium e personalizada para clientes exigentes.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 footer-col">
                    <h5>Links Rápidos</h5>
                    <ul>
                        <li><a href="/home">Início</a></li>
                        <li><a href="/frota">Frota</a></li>
                        <li><a href="/servicos">Serviços</a></li>
                        <li><a href="/sobre">Sobre</a></li>
                        <li><a href="/contato">Contato</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 footer-col">
                    <h5>Contato</h5>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Av. Faria Lima, 1500 - São Paulo</li>
                        <li><i class="fas fa-phone"></i> (11) 3000-4000</li>
                        <li><i class="fas fa-envelope"></i> contato@wlmotors.com.br</li>
                    </ul>
                </div>
                <div class="col-lg-3 footer-col">
                    <h5>Horário de Funcionamento</h5>
                    <ul>
                        <li>Segunda a Sexta: 8h às 20h</li>
                        <li>Sábado: 9h às 18h</li>
                        <li>Domingo: 10h às 16h</li>
                        <li>Atendimento 24h para emergências</li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="footer-bottom">
                <p>&copy; 2024 WL MOTORS. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Botão do WhatsApp -->
    <a href="https://wa.me/5511999999999?text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20aluguel%20de%20carros%20de%20luxo" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
    @vite('resources/js/navbar.js')
    @vite('resources/js/loginuser.js')
</body>
</html>
