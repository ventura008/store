<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário - WLCARS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #0a0a0a;
            color: #f0f0f0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-image: linear-gradient(rgba(10, 10, 10, 0.9), rgba(10, 10, 10, 0.9)), 
                              url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><path d="M50,5 L60,35 L90,35 L65,55 L75,85 L50,70 L25,85 L35,55 L10,35 L40,35 Z" fill="%23D4AF37" opacity="0.1"/></svg>');
        }
        
        .container {
            width: 100%;
            max-width: 900px;
            background-color: #111111;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.1);
            border: 1px solid #333;
        }
        
        .header {
            background-color: #000000;
            padding: 25px 30px;
            text-align: center;
            border-bottom: 3px solid #D4AF37;
        }
        
        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }
        
        .logo-icon {
            color: #D4AF37;
            font-size: 32px;
            margin-right: 15px;
        }
        
        .logo-text {
            font-size: 32px;
            font-weight: 700;
            color: #D4AF37;
            letter-spacing: 2px;
        }
        
        .header h1 {
            font-size: 24px;
            font-weight: 300;
            color: #f0f0f0;
        }
        
        .form-container {
            padding: 30px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
            position: relative;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group.full-width {
            grid-column: 1 / 3;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #D4AF37;
            font-weight: 600;
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .input-container {
            position: relative;
        }
        
        input, select {
            width: 100%;
            padding: 14px 15px;
            background-color: #1a1a1a;
            border: 1px solid #333;
            border-radius: 8px;
            color: #f0f0f0;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        input:focus, select:focus {
            outline: none;
            border-color: #D4AF37;
            box-shadow: 0 0 0 2px rgba(212, 175, 55, 0.2);
            background-color: #222;
        }
        
        input:hover, select:hover {
            border-color: #D4AF37;
        }
        
        .input-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #D4AF37;
            font-size: 18px;
        }
        
        .buttons {
            grid-column: 1 / 3;
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        
        button {
            padding: 15px 40px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .btn-submit {
            background-color: #D4AF37;
            color: #000;
        }
        
        .btn-submit:hover {
            background-color: #c19b2e;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
        }
        
        .btn-reset {
            background-color: #222;
            color: #D4AF37;
            border: 1px solid #333;
        }
        
        .btn-reset:hover {
            background-color: #2a2a2a;
            transform: translateY(-2px);
            border-color: #D4AF37;
        }
        
        .btn-icon {
            margin-right: 10px;
            font-size: 18px;
        }
        
        .user-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #D4AF37;
            font-size: 40px;
            opacity: 0.3;
            z-index: 1;
        }
        
        @media (max-width: 768px) {
            .form-container {
                grid-template-columns: 1fr;
            }
            
            .form-group.full-width {
                grid-column: 1;
            }
            
            .buttons {
                grid-column: 1;
                flex-direction: column;
            }
            
            .user-icon {
                display: none;
            }
        }
        
        .required::after {
            content: " *";
            color: #ff4444;
            font-size: 14px;
        }
        
        /* Estilo para o placeholder */
        ::placeholder {
            color: #666;
            opacity: 1;
        }
        
        /* Estilo para as opções do select */
        select option {
            background-color: #1a1a1a;
            color: #f0f0f0;
        }
        
        /* Efeito de brilho no foco */
        @keyframes glow {
            0% { box-shadow: 0 0 5px rgba(212, 175, 55, 0.2); }
            50% { box-shadow: 0 0 20px rgba(212, 175, 55, 0.4); }
            100% { box-shadow: 0 0 5px rgba(212, 175, 55, 0.2); }
        }
        
        input:focus, select:focus {
            animation: glow 1.5s infinite;
        }
        
        /* Scrollbar personalizada */
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: #1a1a1a;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #D4AF37;
            border-radius: 5px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #c19b2e;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <i class="fas fa-crown logo-icon"></i>
                <div class="logo-text">WLCARS</div>
            </div>
            <h1>Cadastro de Usuário</h1>
        </div>
        
        <div class="form-container">
            <i class="fas fa-user-circle user-icon"></i>
            
            <div class="form-group full-width">
                <label for="nome" class="required">Nome Completo</label>
                <div class="input-container">
                    <input type="text" id="nome" placeholder="Digite seu nome completo">
                    <i class="fas fa-user input-icon"></i>
                </div>
            </div>

            
            
            <div class="form-group">
                <label for="email" class="required">E-mail</label>
                <div class="input-container">
                    <input type="email" id="email" placeholder="seu@email.com">
                    <i class="fas fa-envelope input-icon"></i>
                </div>
            </div>
            
            <div class="form-group">
                <label for="senha" class="required">Senha</label>
                <div class="input-container">
                    <input type="password" id="senha" placeholder="Mínimo 6 caracteres">
                    <i class="fas fa-lock input-icon"></i>
                </div>
            </div>
            
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <div class="input-container">
                    <input type="text" id="telefone" placeholder="(11) 99999-9999">
                    <i class="fas fa-phone input-icon"></i>
                </div>
            </div>
            
            <div class="form-group">
                <label for="nascimento">Data de Nascimento</label>
                <div class="input-container">
                    <input type="date" id="nascimento">
                    <i class="fas fa-calendar input-icon"></i>
                </div>
            </div>
            
            <div class="form-group">
                <label for="genero">Gênero</label>
                <div class="input-container">
                    <select id="genero">
                        <option value="">Selecione...</option>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                    </select>
                    <i class="fas fa-venus-mars input-icon"></i>
                </div>
            </div>
            
            <div class="buttons">
                  <button type="button" class="btn-submit" id="meu">
                    <i class="fas fa-save btn-icon"></i> Cadastrar 
                </button>
              
            </div>
        </div>
    </div>

   
    <script>
        $(document).ready(function(){

    alert("TO FUNFANDO");


    $("#meu").click(function(){

        $.ajax({
            url: "../api/cadastro_de_usuario" ,
            method: "POST",
            data: { 

                genero : $("#genero").val() ,
                nascimento: $("#nascimento").val(),
                telefone: $("#telefone").val(),
                senha: $("#senha").val(),
                email : $("#email").val() ,
                nome: $("#nome").val(),
                

             },

            success: function (res) {

                alert("salvado cria")
            },

        });

    });

});
    </script>

</body>
</html>