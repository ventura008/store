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

        /* Container de Login */
        .login-container {
            width: 100%;
            max-width: 450px;
            margin: 50px auto;
            background-color: #111111;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.1);
            border: 1px solid #333;
        }
        
        .login-header {
            background-color: #000000;
            padding: 30px;
            text-align: center;
            border-bottom: 3px solid #D4AF37;
        }
        
        .login-header .logo-icon {
            color: #D4AF37;
            font-size: 48px;
            margin-bottom: 15px;
        }
        
        .login-header h2 {
            color: #D4AF37;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .login-header p {
            color: #999;
            font-size: 14px;
        }
        
        .login-body {
            padding: 40px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #D4AF37;
            font-weight: 500;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .input-container {
            position: relative;
        }
        
        .input-container input {
            width: 100%;
            padding: 15px 15px 15px 45px;
            background-color: #1a1a1a;
            border: 1px solid #333;
            border-radius: 8px;
            color: #f0f0f0;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        .input-container input:focus {
            outline: none;
            border-color: #D4AF37;
            box-shadow: 0 0 0 2px rgba(212, 175, 55, 0.2);
            background-color: #222;
        }
        
        .input-container input:hover {
            border-color: #D4AF37;
        }
        
        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #D4AF37;
            font-size: 18px;
        }
        
        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .toggle-password:hover {
            color: #D4AF37;
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }
        
        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #999;
            cursor: pointer;
        }
        
        .remember input[type="checkbox"] {
            width: 16px;
            height: 16px;
            accent-color: #D4AF37;
            cursor: pointer;
        }
        
        .forgot-link {
            color: #D4AF37;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        
        .forgot-link:hover {
            color: #c19b2e;
            text-decoration: underline;
        }
        
        .btn-login {
            width: 100%;
            background-color: #D4AF37;
            color: #000;
            border: none;
            padding: 15px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }
        
        .btn-login:hover {
            background-color: #c19b2e;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
        }
        
        .register-link {
            text-align: center;
            color: #999;
            font-size: 14px;
        }
        
        .register-link a {
            color: #D4AF37;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .register-link a:hover {
            color: #c19b2e;
            text-decoration: underline;
        }
        
        .error-message {
            background-color: rgba(255, 0, 0, 0.1);
            border: 1px solid #ff4444;
            color: #ff4444;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 14px;
            display: none;
        }
        
        .success-message {
            background-color: rgba(0, 255, 0, 0.1);
            border: 1px solid #4CAF50;
            color: #4CAF50;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 14px;
            display: none;
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
            .login-container {
                margin: 20px;
            }
            
            .login-body {
                padding: 30px 20px;
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

    <!-- Login -->
    <div style="display: flex; justify-content: center; align-items: center; min-height: calc(100vh - 200px); padding: 20px;">
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
                        <i class="fas fa-sign-in-alt" style="margin-right: 8px;"></i> Entrar
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

     <script>
        $(document).ready(function(){

    alert("TO FUNFANDO");


    $("#meu").click(function(){

        $.ajax({
            url: "../api/login_novo" ,
            method: "GET",
            data: { 

            
                senha: $("#senha").val(),
                email : $("#email").val() ,
                
                

             },

            success: function (response) {

                
                console.log(response)
                
                if(response['erro'] == 'n'){
                  
                    alert("logado com sucesso!");



                      $.cookie('token',response['token'],{expire:7});

                        setTimeout(function(){
                            window.location.href="/home";
                        }, 2000);




                }else{

                    alert("email ou senha incorretos!");
                }

            
            },

        });

    });

});
    </script>
</body>
</html>