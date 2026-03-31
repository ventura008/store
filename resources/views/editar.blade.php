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
    @vite('resources/css/editar.css')
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
                        
                        <div class="row form-row-custom">
                            <div class="col-half form-col-half">
                                <div class="form-group">
                                    <label><i class="fas fa-phone"></i> Telefone</label>
                                    <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(11) 99999-9999">
                                </div>
                            </div>
                            <div class="col-half form-col-half">
                                <div class="form-group">
                                    <label><i class="fas fa-calendar"></i> Data de Nascimento</label>
                                    <input type="date" class="form-control" id="nascimento" name="nascimento">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row form-row-custom">
                            <div class="col-half form-col-half">
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
                            <div class="col-half form-col-half">
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
                        
                        <div class="row form-row-custom">
                            <div class="col-half form-col-half">
                                <div class="form-group">
                                    <label><i class="fas fa-id-card"></i> CNH</label>
                                    <input type="text" class="form-control" id="cnh" name="cnh" placeholder="Número da CNH">
                                </div>
                            </div>
                            <div class="col-half form-col-half">
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
                        
                        <div class="row form-row-custom">
                            <div class="col-half form-col-half">
                                <div class="form-group">
                                    <label><i class="fas fa-language"></i> Idioma</label>
                                    <select class="form-control" id="idioma" name="idioma">
                                        <option value="Português (Brasil)">Português (Brasil)</option>
                                        <option value="English">English</option>
                                        <option value="Español">Español</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-half form-col-half">
                                <div class="form-group">
                                    <label><i class="fas fa-bell"></i> Notificações</label>
                                    <select class="form-control" id="notificacoes" name="notificacoes">
                                        <option value="Ativadas">Ativadas</option>
                                        <option value="Desativadas">Desativadas</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row form-row-custom">
                            <div class="col-half form-col-half">
                                <div class="form-group">
                                    <label><i class="fas fa-moon"></i> Tema</label>
                                    <select class="form-control" id="tema" name="tema">
                                        <option value="Escuro">Escuro (Ativo)</option>
                                        <option value="Claro">Claro</option>
                                        <option value="Sistema">Sistema</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-half form-col-half">
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
    @vite('resources/js/navbar.js')
    @vite('resources/js/editar.js')
</body>
</html>
