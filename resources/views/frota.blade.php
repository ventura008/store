<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frota - WL Motors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="visual.css">
    @vite('resources/css/frota.css')
    @vite('resources/css/navbar.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
   
</head>

<body>
    <!-- Navbar Premium -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/home">
                <span class="logo-text">WL <span class="logo-highlight">MOTORS</span></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">In?cio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/frota">Frota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/servicos">Servi?os</a>
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

    <!-- Hero Banner da Frota -->
    <section class="frota-hero">
        <div class="container">
            <div class="frota-hero-content">
                <h1>Nossa Frota</h1>
                <p>As marcas mais exclusivas do mundo em um s? lugar</p>
            </div>
        </div>
    </section>

    <!-- ===== SE?ÃƒÆ’O DE MARCAS EM CARROSSEL COM LOGOS ONLINE ===== -->
    <section class="marcas-section">
        <div class="container">
            <div class="section-title">
                <h2>Escolha sua marca</h2>
                <p>Clique em uma das marcas abaixo para ver todos os modelos dispon?veis</p>
            </div>

            <div class="marcas-carousel">
                <div class="carrossel-container">
                    <!-- Setas de Navega??o -->
                    <button class="carrossel-control prev" id="prevBtn">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="carrossel-control next" id="nextBtn">
                        <i class="fas fa-chevron-right"></i>
                    </button>

                    <!-- Wrapper do Carrossel -->
                    <div class="carrossel-wrapper">
                        <div class="carrossel-slides" id="carrosselSlides">
                            <!-- Lamborghini -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('lamborghini')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse1.mm.bing.net/th/id/OIP.JwVz7LgRBeLNfCI3vVi-hgHaE8?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Lamborghini">
                                    </div>
                                    <h3>Lamborghini</h3>
                                    <span>8 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Ferrari -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('ferrari')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse4.mm.bing.net/th/id/OIP.rtcNqcprfCXgtbJ1bFb7IAHaFS?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Ferrari">
                                    </div>
                                    <h3>Ferrari</h3>
                                    <span>6 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Porsche -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('porsche')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://s1.cdn.autoevolution.com/images/news/porsche-macan-hd-wallpapers-81724_6.jpg" alt="Porsche">
                                    </div>
                                    <h3>Porsche</h3>
                                    <span>10 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Mercedes-Benz -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('mercedes')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse4.mm.bing.net/th/id/OIP.iHY0auMnKdqR90ZhZmrSfgHaEX?w=312&h=183&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3" alt="Mercedes-Benz">
                                    </div>
                                    <h3>Mercedes-Benz</h3>
                                    <span>12 modelos</span>
                                </a>
                            </div>
                            
                            <!-- BMW -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('bmw')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse2.mm.bing.net/th/id/OIP.DkUOwy5OvcWTJ3WuyAGUQQHaFb?rs=1&pid=ImgDetMain&o=7&rm=3" alt="BMW">
                                    </div>
                                    <h3>BMW</h3>
                                    <span>9 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Audi -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('audi')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://images.unsplash.com/photo-1638073732451-530d995ddd0e?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8czV8ZW58MHwwfDB8fHwwg" alt="Audi">
                                    </div>
                                    <h3>Audi</h3>
                                    <span>7 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Rolls Royce -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('royce')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse3.mm.bing.net/th/id/OIP.deCWpueudGuv_iR5iwtYVgHaE-?pid=ImgDet&w=60&h=60&c=7&dpr=1,3&rs=1&o=7&rm=3" alt="Rolls Royce">
                                    </div>
                                    <h3>Rolls Royce</h3>
                                    <span>4 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Bentley -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('bentley')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse1.mm.bing.net/th/id/OIP.aFKct7YUqyTn1VYevlUSyQHaEK?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Bentley">
                                    </div>
                                    <h3>Bentley</h3>
                                    <span>5 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Maserati -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('maserati')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse1.mm.bing.net/th/id/OIP.-T4TDHVJLaMNHvvSzf6_-wHaEK?pid=ImgDet&w=60&h=60&c=7&dpr=1,3&rs=1&o=7&rm=3" alt="Maserati">
                                    </div>
                                    <h3>Maserati</h3>
                                    <span>6 modelos</span>
                                </a>
                            </div>
                            
                            <!-- McLaren -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('mclaren')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse4.mm.bing.net/th/id/OIP.CYbgvjq4BBKkcjXulr0mzQHaEK?pid=ImgDet&w=60&h=60&c=7&dpr=1,3&rs=1&o=7&rm=3" alt="McLaren">
                                    </div>
                                    <h3>McLaren</h3>
                                    <span>4 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Aston Martin -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('martin')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse2.mm.bing.net/th/id/OIP.L06MJ0x5AT4nUC_9LaRXCwHaFj?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Aston Martin">
                                    </div>
                                    <h3>Aston Martin</h3>
                                    <span>5 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Jaguar -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('Jaguar')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://wallpapercave.com/wp/wp1854093.jpg" alt="Jaguar">
                                    </div>
                                    <h3>Jaguar</h3>
                                    <span>6 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Land Rover -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('Rover')"  class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse4.mm.bing.net/th/id/OIP.YjQk2IVCs0T6RLgLimcE2wHaE7?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Land Rover">
                                    </div>
                                    <h3>Land Rover</h3>
                                    <span>7 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Bugatti -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('buggati')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse4.mm.bing.net/th/id/OIP.9HiyUxiARpqGvEh3f3xYdwHaE8?w=1024&h=683&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Bugatti">
                                    </div>
                                    <h3>Bugatti</h3>
                                    <span>3 modelos</span>
                                </a>
                            </div>
                            
                           
                        </div>
                    </div>
                </div>

                <!-- Indicadores (bolinhas) -->
                <div class="carrossel-indicators" id="indicators"></div>
            </div>
        </div>
    </section>


<!-- CSS da Modal com Cards -->


<!-- HTML da Modal Atualizada -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2><i class="fas fa-car"></i> <span id="modal-titulo">Ve?culos Dispon?veis</span></h2>
            <span class="close" onclick="fecharModal()">&times;</span>
        </div>
        <div class="modal-body" id="modal-body-content">
            <!-- Loading spinner (aparece enquanto carrega) -->
            <div id="loading-spinner" class="loading-spinner">
                <div class="spinner"></div>
                <p>Carregando ve?culos...</p>
            </div>
            
            <!-- Container dos cards (inicialmente vazio) -->
            <div id="carros-container" class="carros-container carros-container-hidden"></div>
        </div>
    </div>
</div>

<!-- JavaScript da Modal Atualizado -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 footer-col">
                    <h4>WL Motors</h4>
                    <p>Especialistas em aluguel de ve?culos de luxo, oferecendo uma experi?ncia premium e personalizada para clientes exigentes.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 footer-col">
                    <h5>Links R?pidos</h5>
                    <ul>
                        <li><a href="/home">In?cio</a></li>
                        <li><a href="/frota">Frota</a></li>
                        <li><a href="/servicos">Servi?os</a></li>
                        <li><a href="/sobre">Sobre</a></li>
                        <li><a href="/contato">Contato</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 footer-col">
                    <h5>Contato</h5>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Av. Faria Lima, 1500 - S?o Paulo</li>
                        <li><i class="fas fa-phone"></i> (11) 3000-4000</li>
                        <li><i class="fas fa-envelope"></i> contato@wlmotors.com.br</li>
                    </ul>
                </div>
                <div class="col-lg-3 footer-col">
                    <h5>Hor?rio de Funcionamento</h5>
                    <ul>
                        <li>Segunda a Sexta: 8h ?s 20h</li>
                        <li>S?bado: 9h ?s 18h</li>
                        <li>Domingo: 10h ?s 16h</li>
                        <li>Atendimento 24h para emerg?ncias</li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="footer-bottom">
                <p>&copy; 2026 WL Motors. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Bot?o do WhatsApp -->
    <a href="https://wa.me/5511999999999?text=Ol?,%20gostaria%20de%20saber%20mais%20sobre%20a%20frota%20da%20WL%20Motors" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
    @vite('resources/js/navbar.js')
    @vite('resources/js/frota.js')
</body>
</html>
