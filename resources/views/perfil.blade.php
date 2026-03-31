<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil - WL MOTORS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/perfil.css')
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

    <!-- Perfil -->
    <div class="profile-page-wrapper">
        <div class="profile-container">
            <div class="profile-header">
                <div class="profile-avatar">
                    <i class="fas fa-user-circle"></i>
                    <div class="edit-avatar">
                        <i class="fas fa-camera"></i>
                    </div>
                </div>
                
                <div class="profile-info">
                    <div class="profile-name"></div>
                    <div class="profile-email">
                        <i class="fas fa-envelope"></i>
                        
                    </div>
                    <div class="profile-badges">
                        <div class="badge">
                            <i class="fas fa-crown"></i>
                            Membro Premium
                        </div>
                        <div class="badge">
                            <i class="fas fa-calendar"></i>
                            Desde 
                        </div>
                    </div>
                </div>
                
                <button class="edit-profile-btn">
                    <i class="fas fa-edit"> <a class="btn btn-reserva" href="/editar ">Editar Perfil</a> </i> 
                </button>
            </div>
            
            <div class="stats-container">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <div class="stat-value">3</div>
                    <div class="stat-label">Veículos</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="stat-value">12</div>
                    <div class="stat-label">Favoritos</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-value">
                      
                    </div>
                    <div class="stat-label">Tempo Ativo</div>
                </div>
            </div>
            
            <div class="content-container">
                <div class="section">
                    <div class="section-title">
                        <i class="fas fa-user"></i>
                        Informações Pessoais
                    </div>
                    
                    <div class="info-grid">
                        <div class="info-item">
                            <div class="info-label">Nome Completo</div>
                            <div class="info-value">
                                <i class="fas fa-user"></i>
                                
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-label">E-mail</div>
                            <div class="info-value">
                                <i class="fas fa-envelope"></i>
                              
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-label">Telefone</div>
                            <div class="info-value">
                                <i class="fas fa-phone"></i>
                              
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-label">Data Nascimento</div>
                            <div class="info-value">
                                <i class="fas fa-calendar"></i>
                                
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-label">Gênero</div>
                            <div class="info-value">
                                <i class="fas fa-venus-mars"></i>
                                
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-label">Localização</div>
                            <div class="info-value">
                                <i class="fas fa-map-marker-alt"></i>
                                São Paulo, SP
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="section">
                    <div class="section-title">
                        <i class="fas fa-car"></i>
                        Meus Veículos
                    </div>
                    
                    <div class="vehicle-list">
                        <div class="vehicle-item">
                            <div class="vehicle-icon">
                                <i class="fas fa-car"></i>
                            </div>
                           
                            <div class="vehicle-actions">
                                <i class="fas fa-edit vehicle-action"></i>
                                <i class="fas fa-trash vehicle-action"></i>
                            </div>
                        </div>
                        
                        <div class="vehicle-item">
                            <div class="vehicle-icon">
                                <i class="fas fa-car"></i>
                            </div>
                           
                            <div class="vehicle-actions">
                                <i class="fas fa-edit vehicle-action"></i>
                                <i class="fas fa-trash vehicle-action"></i>
                            </div>
                        </div>
                        
                        <div class="vehicle-item">
                            <div class="vehicle-icon">
                                <i class="fas fa-car"></i>
                            </div>
                           
                            <div class="vehicle-actions">
                                <i class="fas fa-edit vehicle-action"></i>
                                <i class="fas fa-trash vehicle-action"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="view-all">
                        <a href="#">Ver todos os veículos <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="section">
                    <div class="section-title">
                        <i class="fas fa-history"></i>
                        Atividades Recentes
                    </div>
                    
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="activity-info">
                                <div class="activity-text">Você adicionou um novo veículo</div>
                                <div class="activity-time">Há 2 horas</div>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="activity-info">
                                <div class="activity-text">Você favoritou um veículo</div>
                                <div class="activity-time">Há 5 horas</div>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-edit"></i>
                            </div>
                            <div class="activity-info">
                                <div class="activity-text">Você atualizou seu perfil</div>
                                <div class="activity-time">Há 1 dia</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="view-all">
                        <a href="#">Ver todas as atividades <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="section">
                    <div class="section-title">
                        <i class="fas fa-cog"></i>
                        Configurações Rápidas
                    </div>
                    
                    <div class="info-grid">
                        <div class="info-item">
                            <div class="info-label">Idioma</div>
                            <div class="info-value">
                                <i class="fas fa-language"></i>
                                Português (Brasil)
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-label">Notificações</div>
                            <div class="info-value">
                                <i class="fas fa-bell"></i>
                                Ativadas
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-label">Modo Escuro</div>
                            <div class="info-value">
                                <i class="fas fa-moon"></i>
                                Ativado
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-label">Privacidade</div>
                            <div class="info-value">
                                <i class="fas fa-lock"></i>
                                Perfil Público
                            </div>
                        </div>
                    </div>
                    
                    <div class="view-all">
                        <a href="#">Configurações avançadas <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
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

    //função ajax que busca o token na tabela do banco e compara com o id do usuário para trazer suas informações//



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    @vite('resources/js/navbar.js')
    @vite('resources/js/perfil.js')
</body>
</html>
