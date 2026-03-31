<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usu?rio - WLCARS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    @vite('resources/css/cadastrouser.css')
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <i class="fas fa-crown logo-icon"></i>
                <div class="logo-text">WLCARS</div>
            </div>
            <h1>Cadastro de Usu?rio</h1>
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
                    <input type="password" id="senha" placeholder="M?nimo 6 caracteres">
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
                <label for="genero">G?nero</label>
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

    @vite('resources/js/cadastrouser.js')
</body>
</html>
