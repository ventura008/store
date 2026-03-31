<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - WL Motors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="visual.css"> 
     @vite('resources/css/contato.css')
     @vite('resources/css/navbar.css')
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
                        <a class="nav-link active" href="/contato">Contato</a>
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

    <!-- Hero Banner -->
    <section class="contato-hero">
        <div class="container">
            <div class="contato-hero-content">
                <h1>Fale Conosco</h1>
                <p>Estamos prontos para atender você com a excelência que o seu momento merece</p>
            </div>
        </div>
    </section>

    <!-- ===== SEÇÃO DE CONTATO (Cards Rápidos) ===== -->
    <section class="contato-section">
        <div class="container">
            <div class="section-title">
                <h2>Como podemos ajudar?</h2>
                <p>Escolha a melhor forma de contato para você</p>
            </div>

            <div class="row contato-cards">
                <div class="col-md-4">
                    <div class="contato-card">
                        <div class="contato-card-icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h3>WhatsApp</h3>
                        <p>Atendimento rápido e prático. Respondemos em poucos minutos.</p>
                        <a href="https://wa.me/5511999999999" class="btn-contato btn-whatsapp" target="_blank">
                            <i class="fab fa-whatsapp"></i> Iniciar Conversa
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contato-card">
                        <div class="contato-card-icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <h3>E-mail</h3>
                        <p>Para solicitações detalhadas ou propostas comerciais.</p>
                        <a href="mailto:contato@wlmotors.com.br" class="btn-contato btn-email">
                            <i class="far fa-envelope"></i> Enviar E-mail
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contato-card">
                        <div class="contato-card-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3>Telefone</h3>
                        <p>Fale diretamente com um de nossos consultores.</p>
                        <a href="tel:+551130004000" class="btn-contato btn-telefone">
                            <i class="fas fa-phone-alt"></i> (11) 3000-4000
                        </a>
                    </div>
                </div>
            </div>

    <!-- ===== SEÇÃO WHATSAPP ===== -->
    <section class="whatsapp-section">
        <div class="container">
            <div class="whatsapp-box">
                <div class="whatsapp-content">
                    <div class="whatsapp-icon-large">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h2>Atendimento via WhatsApp</h2>
                    <p>Nossa equipe está disponível para tirar dúvidas, fazer cotações e agendar test drives. Escolha o número mais adequado para sua necessidade:</p>
                    
                    <div class="whatsapp-numbers">
                        <div class="whatsapp-number-card">
                            <i class="fab fa-whatsapp"></i>
                            <h4>Vendas e Reservas</h4>
                            <p>(11) 99999-9999</p>
                            <a href="https://wa.me/5511999999999?text=Olá,%20gostaria%20de%20fazer%20uma%20reserva" class="btn-whatsapp-number" target="_blank">
                                <i class="fab fa-whatsapp"></i> Chamar
                            </a>
                        </div>
                        
                        <div class="whatsapp-number-card">
                            <i class="fab fa-whatsapp"></i>
                            <h4>Suporte ao Cliente</h4>
                            <p>(11) 98888-8888</p>
                            <a href="https://wa.me/5511988888888?text=Olá,%20preciso%20de%20suporte" class="btn-whatsapp-number" target="_blank">
                                <i class="fab fa-whatsapp"></i> Chamar
                            </a>
                        </div>
                        
                        <div class="whatsapp-number-card">
                            <i class="fab fa-whatsapp"></i>
                            <h4>Emergência 24h</h4>
                            <p>(11) 97777-7777</p>
                            <a href="https://wa.me/5511977777777?text=Olá,%20preciso%20de%20ajuda%20emergencial" class="btn-whatsapp-number" target="_blank">
                                <i class="fab fa-whatsapp"></i> Chamar
                            </a>
                        </div>
                    </div>
                    
                    <div class="whatsapp-info">
                        <p><i class="fas fa-clock"></i> Atendimento: Segunda a Domingo, 24 horas (Emergência) / Comercial: 8h às 20h</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SEÇÃO EMAIL ===== -->
    <section class="email-section">
        <div class="container">
            <div class="email-box">
                <div class="email-icon-large">
                    <i class="far fa-envelope"></i>
                </div>
                <h2>Contato por E-mail</h2>
                <p>Para propostas comerciais, parcerias ou solicitações que exigem mais detalhes</p>
                
                <div class="email-grid">
                    <div class="email-card">
                        <i class="far fa-envelope"></i>
                        <h4>Atendimento Geral</h4>
                        <p>contato@wlmotors.com.br</p>
                        <a href="mailto:contato@wlmotors.com.br" class="btn-email-card">
                            <i class="far fa-envelope"></i> Enviar E-mail
                        </a>
                    </div>
                    
                    <div class="email-card">
                        <i class="fas fa-star"></i>
                        <h4>Reservas e Vendas</h4>
                        <p>reservas@wlmotors.com.br</p>
                        <a href="mailto:reservas@wlmotors.com.br" class="btn-email-card">
                            <i class="far fa-envelope"></i> Enviar E-mail
                        </a>
                    </div>
                    
                    <div class="email-card">
                        <i class="fas fa-handshake"></i>
                        <h4>Parcerias Comerciais</h4>
                        <p>comercial@wlmotors.com.br</p>
                        <a href="mailto:comercial@wlmotors.com.br" class="btn-email-card">
                            <i class="far fa-envelope"></i> Enviar E-mail
                        </a>
                    </div>
                    
                    <div class="email-card">
                        <i class="fas fa-headset"></i>
                        <h4>Suporte ao Cliente</h4>
                        <p>suporte@wlmotors.com.br</p>
                        <a href="mailto:suporte@wlmotors.com.br" class="btn-email-card">
                            <i class="far fa-envelope"></i> Enviar E-mail
                        </a>
                    </div>
                </div>
                
                <!-- Formulário de Contato por E-mail -->
                <div class="email-form">
                    <h3>Envie uma mensagem direta</h3>
                    <form action="/enviar-contato" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Seu nome completo" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Seu melhor e-mail" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Seu telefone (opcional)">
                        </div>
                        <div class="form-group">
                            <select class="form-control">
                                <option value="" disabled selected>Assunto da mensagem</option>
                                <option>Reserva de veículo</option>
                                <option>Dúvidas sobre aluguel</option>
                                <option>Informações sobre compra (XL Cars)</option>
                                <option>Proposta comercial</option>
                                <option>Outros</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Sua mensagem" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn-enviar">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== MAPA (Localização) ===== -->
    <section class="mapa-section">
        <div class="container">
            <div class="mapa-box">
                <h2>Nossa Localização</h2>
                <p class="mapa-endereco">Av. Faria Lima, 1500 - Jardim Paulistano, São Paulo - SP</p>
                <div class="mapa-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.987654321!2d-46.687654!3d-23.576543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDM0JzM1LjYiUyA0NsKwNDEnMTUuNiJX!5e0!3m2!1spt-BR!2sbr!4v1234567890" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="mapa-horario-wrapper">
                    <p class="mapa-horario"><i class="fas fa-clock mapa-horario-icon"></i> Segunda a Sexta: 8h às 20h | Sábado: 9h às 18h | Domingo: 10h às 16h</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 footer-col">
                    <h4>WL Motors</h4>
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
                <p>&copy; 2026 WL Motors. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Botão do WhatsApp (fixo) -->
    <a href="https://wa.me/5511999999999?text=Olá,%20gostaria%20de%20falar%20com%20a%20WL%20Motors" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
    @vite('resources/js/navbar.js')
    @vite('resources/js/contato.js')
</body>
</html>
