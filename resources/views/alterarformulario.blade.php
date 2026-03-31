<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Carro - XLCars</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @vite('resources/css/alterarformulario.css')
</head>
<body>
    <input type="hidden" id="id_carro" value="{{$carro->id}}">
    <div class="container">
        <div class="header">
            <div class="logo">
                <i class="fas fa-crown logo-icon"></i>
                <div class="logo-text">XLCARS</div>
            </div>
            <h1>Cadastro de VeÃ­culo</h1>
        </div>
        
        <div class="form-container">
            <i class="fas fa-car car-icon"></i>
            
            <div class="form-group">
                <label for="modelo" class="required">Modelo</label>
                <div class="input-container">
                    <input type="text" id="modelo" value="{{$carro->modelo}}" placeholder="Ex: Ferrari F8 Tributo">
                    <i class="fas fa-car input-icon"></i>
                </div>
            </div>
            
            <div class="form-group">
                <label for="dono" class="required">ProprietÃ¡rio</label>
                <div class="input-container">
                    <input type="text" id="dono" value="{{$carro->dono}}" placeholder="Nome do proprietÃ¡rio">
                    <i class="fas fa-user input-icon"></i>
                </div>
            </div>
            
            
            <div class="form-group">
                <label for="placa" class="required">Placa</label>
                <div class="input-container">
                    <input type="text" id="placa" value="{{$carro->placa}}" placeholder="AAA-0000">
                    <i class="fas fa-id-card input-icon"></i>
                </div>
            </div>
            
            <div class="form-group">
                <label for="cor" class="required">Cor</label>
                <div class="input-container">
                    <input type="text" id="cor" value="{{$carro->cor}}" placeholder="Ex: Vermelho">
                    <i class="fas fa-palette input-icon"></i>
                </div>
            </div>
            
            <div class="form-group">
                <label for="valor" class="required">Valor (R$)</label>
                <div class="input-container">
                    <input type="number" id="valor" value="{{$carro->valor}}" placeholder="0,00" min="0" step="0.01">
                    <i class="fas fa-dollar-sign input-icon"></i>
                </div>
            </div>
            
            <div class="form-group">
                <label for="potencia" class="required">PotÃªncia (cavalos)</label>
                <div class="input-container">
                    <input type="number" id="potencia" value="{{$carro->potencia}}" placeholder="Ex: 300">
                    <i class="fas fa-bolt input-icon"></i>
                </div>
            </div>
            
            <div class="form-group">
                <label for="tipo_gasolina" class="required">Tipo de CombustÃ­vel</label>
                <div class="input-container">
                    <select value="{{$carro->tipo_gasolina}}"  id="tipo_gasolina">
                        <option value="">Selecione...</option>
                        <option value="gasolina">Gasolina</option>
                        <option value="etanol">Etanol</option>
                        <option value="flex">Flex (Gasolina/Etanol)</option>
                        <option value="diesel">Diesel</option>
                        <option value="eletrico">ElÃ©trico</option>
                        <option value="hibrido">HÃ­brido</option>
                    </select>
                    <i class="fas fa-gas-pump input-icon"></i>
                </div>
            </div>
            
            <div class="form-group">
                <label for="potencia" class="required">Fabricante</label>
                <div class="input-container">
                    <input type="text" value="{{$carro->fabricante}}" id="fabricante" placeholder="Ford">
                    <i class="fas fa-bolt input-icon"></i>
                </div>
            </div>

             <div class="form-group">
                <label for="sobre" class="required">sobre</label>
                <div class="input-container">
                    <input type="text" id="sobre" value="{{$carro->sobre}}" placeholder="Ex: Ferrari F8 Tributo">
                    <i class="fas fa-car input-icon"></i>
                </div>
            </div>

            <div class="form-group">
                <label for="ano" class="required">Ano</label>
                <div class="input-container">
                    <input type="number" value="{{$carro->ano}}" id="ano" placeholder="Ex: 2023" min="1900" max="2026">
                    <i class="fas fa-calendar input-icon"></i>
                </div>
            </div>
            
             <div class="form-group">
                <label for="img" class="required">img</label>
                <div class="input-container">
                    <input type="text" id="img" value="{{$carro->img}}" placeholder="Ex: Ferrari F8 Tributo">
                    <i class="fas fa-car input-icon"></i>
                </div>
            </div>
            
            <div class="buttons">
                <button type="button" class="btn-submit" id="meu">
                    <i class="fas fa-save btn-icon"></i> alterar VeÃ­culo
                </button>
            </div>
        </div>
    </div>
    @vite('resources/js/alterar.js')


</body>
</html>
