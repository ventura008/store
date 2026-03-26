<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil - WL MOTORS</title>
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

        /* Container de Edição */
        .edit-container {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto 50px;
            background-color: #111111;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.1);
            border: 1px solid #333;
        }
        
        .edit-header {
            padding: 30px 40px;
            background: linear-gradient(135deg, #1a1a1a 0%, #111111 100%);
            border-bottom: 1px solid #333;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .edit-header h2 {
            color: #D4AF37;
            font-size: 28px;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .edit-header h2 i {
            font-size: 28px;
        }
        
        .back-link {
            color: #999;
            text-decoration: none;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .back-link:hover {
            color: #D4AF37;
        }
        
        .edit-body {
            padding: 40px;
        }
        
        /* Avatar Section */
        .avatar-section {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 30px;
            border-bottom: 1px solid #333;
        }
        
        .avatar-preview {
            position: relative;
            display: inline-block;
        }
        
        .avatar-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: linear-gradient(135deg, #222, #1a1a1a);
            border: 4px solid #D4AF37;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        
        .avatar-image i {
            font-size: 80px;
            color: #D4AF37;
        }
        
        .avatar-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .avatar-upload-btn {
            position: absolute;
            bottom: 5px;
            right: 5px;
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
        
        .avatar-upload-btn:hover {
            transform: scale(1.1);
            background-color: #c19b2e;
        }
        
        .avatar-upload-btn input {
            position: absolute;
            opacity: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }
        
        /* Formulário */
        .form-section {
            margin-bottom: 35px;
        }
        
        .form-section-title {
            font-size: 20px;
            color: #D4AF37;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #333;
        }
        
        .form-section-title i {
            font-size: 20px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group label {
            display: block;
            color: #999;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .form-group label i {
            color: #D4AF37;
            margin-right: 8px;
            width: 20px;
        }
        
        .form-control {
            background-color: #1a1a1a;
            border: 1px solid #333;
            color: #f0f0f0;
            padding: 12px 15px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            background-color: #222;
            border-color: #D4AF37;
            box-shadow: 0 0 0 0.2rem rgba(212, 175, 55, 0.25);
            color: #f0f0f0;
        }
        
        .form-control::placeholder {
            color: #666;
        }
        
        select.form-control {
            cursor: pointer;
        }
        
        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }
        
        .row {
            margin: 0 -15px;
        }
        
        .col-half {
            padding: 0 15px;
            flex: 1;
        }
        
        .form-actions {
            display: flex;
            gap: 20px;
            justify-content: flex-end;
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid #333;
        }
        
        .btn-cancel {
            background-color: transparent;
            border: 2px solid #333;
            color: #999;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-cancel:hover {
            border-color: #D4AF37;
            color: #D4AF37;
        }
        
        .btn-save {
            background-color: #D4AF37;
            border: none;
            color: #000;
            padding: 12px 35px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-save:hover {
            background-color: #c19b2e;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
        }
        
        .alert-message {
            position: fixed;
            top: 100px;
            right: 20px;
            z-index: 9999;
            min-width: 300px;
            animation: slideIn 0.3s ease;
        }
        
        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
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

        /* Botão salvar estilizado */
        .btn-submit {
            background-color: #D4AF37;
            border: none;
            color: #000;
            padding: 12px 35px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }
        
        .btn-submit:hover {
            background-color: #c19b2e;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
        }
        
        .btn-submit i {
            font-size: 16px;
        }
        
        .buttons {
            display: inline-block;
        }
        
        /* Loading spinner */
        .loading-spinner {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 2px solid rgba(0,0,0,0.3);
            border-radius: 50%;
            border-top-color: #000;
            animation: spin 0.6s linear infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        @media (max-width: 768px) {
            .edit-header {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            .edit-body {
                padding: 25px;
            }
            
            .row {
                flex-direction: column;
            }
            
            .col-half {
                margin-bottom: 0;
            }
            
            .form-actions {
                flex-direction: column-reverse;
            }
            
            .form-actions button {
                width: 100%;
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

    <!-- Container de Edição -->
    <main>
        <div class="edit-container">
            <div class="edit-header">
                <h2>
                    <i class="fas fa-user-edit"></i>
                    Editar Perfil
                </h2>
                <a href="/perfil" class="back-link">
                    <i class="fas fa-arrow-left"></i>
                    Voltar ao Perfil
                </a>
            </div>
            
            <div class="edit-body">
                <!-- Avatar Section -->
                <div class="avatar-section">
                    <div class="avatar-preview">
                        <div class="avatar-image" id="avatarImage">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="avatar-upload-btn">
                            <i class="fas fa-camera"></i>
                            <input type="file" id="avatarUpload" accept="image/*">
                        </div>
                    </div>
                    <p class="text-muted mt-3 small">Clique na câmera para alterar sua foto de perfil</p>
                </div>
                
                <form id="editProfileForm">
                    <!-- Informações Pessoais -->
                    <div class="form-section">
                        <div class="form-section-title">
                            <i class="fas fa-user"></i>
                            Informações Pessoais
                        </div>
                        
                        <div class="form-group">
                            <label><i class="fas fa-user"></i> Nome Completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo">
                        </div>
                        
                        <div class="form-group">
                            <label><i class="fas fa-envelope"></i> E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="seu@email.com">
                        </div>
                        
                        <div class="row" style="display: flex; gap: 20px;">
                            <div class="col-half" style="flex: 1;">
                                <div class="form-group">
                                    <label><i class="fas fa-phone"></i> Telefone</label>
                                    <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(11) 99999-9999">
                                </div>
                            </div>
                            <div class="col-half" style="flex: 1;">
                                <div class="form-group">
                                    <label><i class="fas fa-calendar"></i> Data de Nascimento</label>
                                    <input type="date" class="form-control" id="nascimento" name="nascimento">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row" style="display: flex; gap: 20px;">
                            <div class="col-half" style="flex: 1;">
                                <div class="form-group">
                                    <label><i class="fas fa-venus-mars"></i> Gênero</label>
                                    <select class="form-control" id="genero" name="genero">
                                        <option value="">Selecione</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Feminino">Feminino</option>
                                        <option value="Prefiro não informar">Prefiro não informar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-half" style="flex: 1;">
                                <div class="form-group">
                                    <label><i class="fas fa-map-marker-alt"></i> Localização</label>
                                    <input type="text" class="form-control" id="localizacao" name="localizacao" placeholder="Cidade, Estado">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Informações de Contato -->
                    <div class="form-section">
                        <div class="form-section-title">
                            <i class="fas fa-address-card"></i>
                            Informações Adicionais
                        </div>
                        
                        <div class="form-group">
                            <label><i class="fas fa-id-card"></i> CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00">
                        </div>
                        
                        <div class="form-group">
                            <label><i class="fas fa-address-book"></i> Endereço Completo</label>
                            <textarea class="form-control" id="endereco" name="endereco" placeholder="Rua, número, complemento, bairro, CEP"></textarea>
                        </div>
                        
                        <div class="row" style="display: flex; gap: 20px;">
                            <div class="col-half" style="flex: 1;">
                                <div class="form-group">
                                    <label><i class="fas fa-id-card"></i> CNH</label>
                                    <input type="text" class="form-control" id="cnh" name="cnh" placeholder="Número da CNH">
                                </div>
                            </div>
                            <div class="col-half" style="flex: 1;">
                                <div class="form-group">
                                    <label><i class="fas fa-tag"></i> Categoria CNH</label>
                                    <select class="form-control" id="categoria_cnh" name="categoria_cnh">
                                        <option value="">Selecione</option>
                                        <option value="A">A (Moto)</option>
                                        <option value="B">B (Carro)</option>
                                        <option value="C">C (Caminhão)</option>
                                        <option value="D">D (Ônibus)</option>
                                        <option value="E">E (Comboio)</option>
                                        <option value="AB">AB (Moto e Carro)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Preferências -->
                    <div class="form-section">
                        <div class="form-section-title">
                            <i class="fas fa-cog"></i>
                            Preferências
                        </div>
                        
                        <div class="row" style="display: flex; gap: 20px;">
                            <div class="col-half" style="flex: 1;">
                                <div class="form-group">
                                    <label><i class="fas fa-language"></i> Idioma</label>
                                    <select class="form-control" id="idioma" name="idioma">
                                        <option value="Português (Brasil)">Português (Brasil)</option>
                                        <option value="English">English</option>
                                        <option value="Español">Español</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-half" style="flex: 1;">
                                <div class="form-group">
                                    <label><i class="fas fa-bell"></i> Notificações</label>
                                    <select class="form-control" id="notificacoes" name="notificacoes">
                                        <option value="Ativadas">Ativadas</option>
                                        <option value="Desativadas">Desativadas</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row" style="display: flex; gap: 20px;">
                            <div class="col-half" style="flex: 1;">
                                <div class="form-group">
                                    <label><i class="fas fa-moon"></i> Tema</label>
                                    <select class="form-control" id="tema" name="tema">
                                        <option value="Escuro">Escuro (Ativo)</option>
                                        <option value="Claro">Claro</option>
                                        <option value="Sistema">Sistema</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-half" style="flex: 1;">
                                <div class="form-group">
                                    <label><i class="fas fa-lock"></i> Privacidade</label>
                                    <select class="form-control" id="privacidade" name="privacidade">
                                        <option value="Perfil Público">Perfil Público</option>
                                        <option value="Perfil Privado">Perfil Privado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Botões de Ação -->
                    <div class="form-actions">
                        <button type="button" class="btn-cancel" onclick="window.location.href='/perfil'">
                            <i class="fas fa-times"></i> Cancelar
                        </button>
                        <div class="buttons">
                            <button type="button" class="btn-submit" id="btnSalvarPerfil">
                                <i class="fas fa-save"></i> Salvar Alterações
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

    <script>
    $(document).ready(function() {
        var token = $.cookie('token');
        
        // Verifica se o usuário está logado
        if (!token) {
            alert("Faça login primeiro!");
            window.location.href = "/loginn";
            return;
        }
        
        console.log("Token encontrado:", token);
        
        // Primeiro, carrega os dados atuais do usuário para preencher o formulário
        function carregarDadosUsuario() {
            $.ajax({
                url: "/api/busca_usuario",
                method: "GET",
                data: { token: token },
                success: function(res) {
                    console.log("Dados do usuário carregados:", res);
                    
                    if (res.erro === 'n' && res.usuario) {
                        // Preenche todos os campos do formulário com os dados atuais
                        $('#nome').val(res.usuario.nome || '');
                        $('#email').val(res.usuario.email || '');
                        $('#telefone').val(res.usuario.telefone || '');
                        $('#nascimento').val(res.usuario.nascimento || '');
                        $('#genero').val(res.usuario.genero || '');
                        $('#localizacao').val(res.usuario.localizacao || '');
                        $('#cpf').val(res.usuario.cpf || '');
                        $('#endereco').val(res.usuario.endereco || '');
                        $('#cnh').val(res.usuario.cnh || '');
                        $('#categoria_cnh').val(res.usuario.categoria_cnh || '');
                        $('#idioma').val(res.usuario.idioma || 'Português (Brasil)');
                        $('#notificacoes').val(res.usuario.notificacoes || 'Ativadas');
                        $('#tema').val(res.usuario.tema || 'Escuro');
                        $('#privacidade').val(res.usuario.privacidade || 'Perfil Público');
                        
                        // Se tiver foto de perfil, atualiza o avatar
                        if (res.usuario.foto_perfil) {
                            $('#avatarImage').html(`<img src="${res.usuario.foto_perfil}" alt="Avatar">`);
                        }
                    } else {
                        console.error("Erro ao carregar dados:", res.msg);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Erro na requisição:", error);
                }
            });
        }
        
        // Carrega os dados ao iniciar a página
        carregarDadosUsuario();
        
        // Configura o botão de salvar alterações
        $('#btnSalvarPerfil').click(function() {
            var botao = $(this);
            var textoOriginal = botao.html();
            
            // Desabilita o botão e mostra loading
            botao.prop('disabled', true);
            botao.html('<span class="loading-spinner"></span> Salvando...');
            
            // Coleta todos os dados do formulário
            var dadosParaEnviar = {
                token: token,
                nome: $('#nome').val(),
                email: $('#email').val(),
                telefone: $('#telefone').val(),
                nascimento: $('#nascimento').val(),
                genero: $('#genero').val(),
                localizacao: $('#localizacao').val(),
                cpf: $('#cpf').val(),
                endereco: $('#endereco').val(),
                cnh: $('#cnh').val(),
                categoria_cnh: $('#categoria_cnh').val(),
                idioma: $('#idioma').val(),
                notificacoes: $('#notificacoes').val(),
                tema: $('#tema').val(),
                privacidade: $('#privacidade').val()
            };
            
            console.log("Enviando dados:", dadosParaEnviar);
            
            $.ajax({
                url: "/api/editar_usuario",
                method: "PUT",
                data: dadosParaEnviar,
                success: function(res) {
                    console.log("Resposta do servidor:", res);
                    
                    // Restaura o botão
                    botao.prop('disabled', false);
                    botao.html(textoOriginal);
                    
                    if (res.erro === 'n' || res.success === true) {
                        // Cria um alerta de sucesso
                        var alertHtml = `
                            <div class="alert alert-success alert-dismissible fade show alert-message" role="alert" style="position: fixed; top: 100px; right: 20px; z-index: 9999; background-color: #28a745; color: #fff; border: none;">
                                <i class="fas fa-check-circle"></i> Perfil atualizado com sucesso!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        `;
                        $('body').append(alertHtml);
                        
                        // Remove o alerta após 3 segundos
                        setTimeout(function() {
                            $('.alert-message').fadeOut(500, function() {
                                $(this).remove();
                            });
                        }, 3000);
                        
                        // Recarrega os dados para garantir que tudo está atualizado
                        carregarDadosUsuario();
                    } else {
                        // Erro retornado pela API
                        var msgErro = res.msg || "Erro ao atualizar perfil";
                        alert("Erro: " + msgErro);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Erro na requisição:", error);
                    console.log("Status:", status);
                    console.log("Resposta do servidor:", xhr.responseText);
                    
                    // Restaura o botão
                    botao.prop('disabled', false);
                    botao.html(textoOriginal);
                    
                    // Exibe mensagem de erro
                    var errorMsg = "Erro ao conectar com o servidor. Tente novamente.";
                    if (xhr.responseJSON && xhr.responseJSON.msg) {
                        errorMsg = xhr.responseJSON.msg;
                    }
                    
                    var alertHtml = `
                        <div class="alert alert-danger alert-dismissible fade show alert-message" role="alert" style="position: fixed; top: 100px; right: 20px; z-index: 9999; background-color: #dc3545; color: #fff; border: none;">
                            <i class="fas fa-exclamation-triangle"></i> ${errorMsg}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    `;
                    $('body').append(alertHtml);
                    
                    setTimeout(function() {
                        $('.alert-message').fadeOut(500, function() {
                            $(this).remove();
                        });
                    }, 4000);
                }
            });
        });
        
        // Função para upload de avatar (opcional)
        $('#avatarUpload').change(function() {
            var file = this.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#avatarImage').html(`<img src="${e.target.result}" alt="Avatar">`);
                    
                    // Se quiser enviar para o servidor, descomente o código abaixo
                    /*
                    var formData = new FormData();
                    formData.append('avatar', file);
                    formData.append('token', token);
                    
                    $.ajax({
                        url: "/api/upload_avatar",
                        method: "POST",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(res) {
                            console.log("Avatar enviado:", res);
                        },
                        error: function(err) {
                            console.error("Erro ao enviar avatar:", err);
                        }
                    });
                    */
                };
                reader.readAsDataURL(file);
            }
        });
    });
    </script>
</body>
</html>