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
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }
        
        body {
            background-color: #0a0a0a;
            color: #f0f0f0;
            min-height: 100vh;
            padding-top: 80px;
            display: flex;
            flex-direction: column;
            background-image: linear-gradient(rgba(10, 10, 10, 0.9), rgba(10, 10, 10, 0.9)), 
                              url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><path d="M50,5 L60,35 L90,35 L65,55 L75,85 L50,70 L25,85 L35,55 L10,35 L40,35 Z" fill="%23D4AF37" opacity="0.1"/></svg>');
        }

        /* Garantir que o conteúdo principal ocupe o espaço necessário */
        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 20px;
        }

        /* Navbar */
        .navbar {
            background-color: rgba(0, 0, 0, 0.95);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            border-bottom: 2px solid #D4AF37;
        }

        .logo-text {
            font-size: 24px;
            font-weight: 700;
            color: #fff;
        }

        .logo-highlight {
            color: #D4AF37;
        }

        .navbar-nav .nav-link {
            color: #fff;
            font-weight: 500;
            margin: 0 10px;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #D4AF37;
        }

        .btn-reserva {
            background-color: #D4AF37;
            color: #000;
            font-weight: 600;
            padding: 8px 20px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .btn-reserva:hover {
            background-color: #c19b2e;
            color: #000;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
        }

        /* Container do Perfil */
        .profile-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto 50px;
            background-color: #111111;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.1);
            border: 1px solid #333;
        }
        
        .profile-header {
            display: flex;
            align-items: center;
            padding: 40px;
            background: linear-gradient(135deg, #1a1a1a 0%, #111111 100%);
            border-bottom: 1px solid #333;
            position: relative;
        }
        
        .profile-avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-color: #222;
            border: 4px solid #D4AF37;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 40px;
            overflow: hidden;
            position: relative;
        }
        
        .profile-avatar i {
            font-size: 80px;
            color: #D4AF37;
            opacity: 0.8;
        }
        
        .edit-avatar {
            position: absolute;
            bottom: 0;
            right: 0;
            background-color: #D4AF37;
            color: #000;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border: 2px solid #000;
            transition: all 0.3s ease;
        }
        
        .edit-avatar:hover {
            transform: scale(1.1);
            background-color: #c19b2e;
        }
        
        .profile-info {
            flex: 1;
        }
        
        .profile-name {
            font-size: 32px;
            font-weight: 700;
            color: #D4AF37;
            margin-bottom: 5px;
        }
        
        .profile-email {
            font-size: 16px;
            color: #999;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .profile-email i {
            color: #D4AF37;
        }
        
        .profile-badges {
            display: flex;
            gap: 15px;
        }
        
        .badge {
            background-color: #222;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 14px;
            color: #D4AF37;
            border: 1px solid #333;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .badge i {
            color: #D4AF37;
        }
        
        .edit-profile-btn {
            position: absolute;
            top: 40px;
            right: 40px;
            background-color: #D4AF37;
            color: #000;
            border: none;
            padding: 10px 25px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .edit-profile-btn:hover {
            background-color: #c19b2e;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
        }
        
        .stats-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 30px;
            background-color: #0a0a0a;
            border-bottom: 1px solid #333;
        }
        
        .stat-card {
            background-color: #1a1a1a;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            border: 1px solid #333;
            transition: all 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            border-color: #D4AF37;
            box-shadow: 0 5px 20px rgba(212, 175, 55, 0.2);
        }
        
        .stat-value {
            font-size: 36px;
            font-weight: 700;
            color: #D4AF37;
            margin-bottom: 5px;
        }
        
        .stat-label {
            color: #999;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .stat-icon {
            color: #D4AF37;
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .content-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            padding: 30px;
        }
        
        .section {
            background-color: #1a1a1a;
            border-radius: 10px;
            padding: 25px;
            border: 1px solid #333;
        }
        
        .section-title {
            font-size: 20px;
            color: #D4AF37;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            border-bottom: 1px solid #333;
            padding-bottom: 15px;
        }
        
        .section-title i {
            font-size: 20px;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .info-item {
            margin-bottom: 15px;
        }
        
        .info-label {
            color: #999;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
        }
        
        .info-value {
            color: #f0f0f0;
            font-size: 16px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .info-value i {
            color: #D4AF37;
            width: 20px;
        }
        
        .vehicle-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .vehicle-item {
            background-color: #222;
            padding: 15px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 15px;
            border: 1px solid #333;
            transition: all 0.3s ease;
        }
        
        .vehicle-item:hover {
            border-color: #D4AF37;
        }
        
        .vehicle-icon {
            width: 50px;
            height: 50px;
            background-color: #1a1a1a;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #D4AF37;
            font-size: 24px;
        }
        
        .vehicle-info {
            flex: 1;
        }
        
        .vehicle-name {
            font-weight: 600;
            color: #D4AF37;
            margin-bottom: 5px;
        }
        
        .vehicle-details {
            font-size: 13px;
            color: #999;
        }
        
        .vehicle-actions {
            display: flex;
            gap: 10px;
        }
        
        .vehicle-action {
            color: #999;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .vehicle-action:hover {
            color: #D4AF37;
        }
        
        .activity-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .activity-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 10px 0;
            border-bottom: 1px solid #333;
        }
        
        .activity-icon {
            width: 35px;
            height: 35px;
            background-color: #222;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #D4AF37;
        }
        
        .activity-info {
            flex: 1;
        }
        
        .activity-text {
            color: #f0f0f0;
            margin-bottom: 3px;
        }
        
        .activity-time {
            font-size: 12px;
            color: #999;
        }
        
        .view-all {
            text-align: center;
            margin-top: 20px;
        }
        
        .view-all a {
            color: #D4AF37;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        
        .view-all a:hover {
            color: #c19b2e;
        }

        /* Footer */
        footer {
            background-color: #000;
            color: #fff;
            padding: 60px 0 20px;
            border-top: 2px solid #D4AF37;
            margin-top: 50px;
            width: 100%;
        }

        .footer-col h4 {
            color: #D4AF37;
            margin-bottom: 25px;
            font-size: 20px;
            font-weight: 600;
        }

        .footer-col h5 {
            color: #D4AF37;
            margin-bottom: 20px;
            font-size: 18px;
            font-weight: 500;
        }

        .footer-col p {
            color: #999;
            line-height: 1.6;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            color: #fff;
            background-color: #222;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            background-color: #D4AF37;
            color: #000;
            transform: translateY(-3px);
        }

        .footer-col ul {
            list-style: none;
            padding: 0;
        }

        .footer-col ul li {
            margin-bottom: 12px;
        }

        .footer-col ul li a {
            color: #999;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: #D4AF37;
            padding-left: 5px;
        }

        .footer-col ul li i {
            color: #D4AF37;
            margin-right: 10px;
            width: 20px;
        }

        footer hr {
            background-color: #333;
            margin: 30px 0 20px;
        }

        .footer-bottom p {
            color: #999;
            text-align: center;
            margin: 0;
        }

        /* WhatsApp Float */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #25D366;
            color: #fff;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 100;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            color: #fff;
        }

        @media (max-width: 768px) {
            .profile-header {
                flex-direction: column;
                text-align: center;
                padding: 30px;
            }
            
            .profile-avatar {
                margin-right: 0;
                margin-bottom: 20px;
            }
            
            .edit-profile-btn {
                position: relative;
                top: 0;
                right: 0;
                margin-top: 20px;
            }
            
            .stats-container {
                grid-template-columns: 1fr;
            }
            
            .content-container {
                grid-template-columns: 1fr;
            }
            
            .info-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
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
                </ul>
            </div>
        </div>
    </nav>

    <!-- Perfil -->
    <div style="display: flex; justify-content: center; align-items: center; min-height: calc(100vh - 200px); padding: 20px;">
        <div class="profile-container">
            <div class="profile-header">
                <div class="profile-avatar">
                    <i class="fas fa-user-circle"></i>
                    <div class="edit-avatar">
                        <i class="fas fa-camera"></i>
                    </div>
                </div>
                
                <div class="profile-info">
                    <div class="profile-name">{{$usuario->nome}}</div>
                    <div class="profile-email">
                        <i class="fas fa-envelope"></i>
                        {{$usuario->email}}
                    </div>
                    <div class="profile-badges">
                        <div class="badge">
                            <i class="fas fa-crown"></i>
                            Membro Premium
                        </div>
                        <div class="badge">
                            <i class="fas fa-calendar"></i>
                            Desde {{ $usuario->created_at->format('d/m/Y') }}
                        </div>
                    </div>
                </div>
                
                <button class="edit-profile-btn">
                    <i class="fas fa-edit"></i> Editar Perfil
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
                        @php
                            $diff = $usuario->created_at->diff(now());
                        @endphp
                        
                        @if($diff->d > 0)
                            {{ $diff->d }}d {{ $diff->h }}h
                        @elseif($diff->h > 0)
                            {{ $diff->h }}h {{ $diff->i }}m
                        @elseif($diff->i > 0)
                            {{ $diff->i }}min
                        @else
                            {{ $diff->s }}s
                        @endif
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
                                {{$usuario->nome}}
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-label">E-mail</div>
                            <div class="info-value">
                                <i class="fas fa-envelope"></i>
                                {{$usuario->email}}
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-label">Telefone</div>
                            <div class="info-value">
                                <i class="fas fa-phone"></i>
                                {{$usuario->telefone}}
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-label">Data Nascimento</div>
                            <div class="info-value">
                                <i class="fas fa-calendar"></i>
                                {{$usuario->nascimento}}
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-label">Gênero</div>
                            <div class="info-value">
                                <i class="fas fa-venus-mars"></i>
                                {{$usuario->genero}}
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

    //função ajax que busque o token na tabela do banco e compare com o id do usuario para trazer suas informações//



    <script>
    $(document).ready(function(){

    alert("TO FUNFANDOOOOOO");
    
        var token = $.cookie('token');

    $(document).ready(function(){

        $.ajax({
            url: "../api/busca_usuario" ,
            method: "GET",
            data: { 
                token: token

              //back pega token e devolve inf usuario
             },

            success: function (res) {

               
                 

                alert("salvado cria")
            },

            

        });

    });



});
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Atualizar ano no footer
            const footerYear = document.querySelector('.footer-bottom p');
            if(footerYear) {
                const currentYear = new Date().getFullYear();
                footerYear.innerHTML = `&copy; ${currentYear} WL MOTORS. Todos os direitos reservados.`;
            }
        });
    </script>
</body>
</html>