<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Carro - XLCars</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @vite('resources/css/deleta_carro.css')
</head>
<body>
    <input type="hidden" id="id_carro" value="{{$carro->id}}">
    <div class="container">
        <div class="header">
            <div class="logo">
                <i class="fas fa-crown logo-icon"></i>
                <div class="logo-text">XLCARS</div>
            </div>
            <h1>Cadastro de Ve?culo</h1>
        </div>
        
        <div class="form-container">
            <i class="fas fa-car car-icon"></i>
            
            <div class="form-group">
                <label for="modelo" class="required">Modelo</label>
                <div class="input-container">
                    <input type="text"   disabled id="modelo" value="{{$carro->modelo}}" placeholder="Ex: Ferrari F8 Tributo">
                    <i class="fas fa-car input-icon"></i>
                </div>
            </div>
            
              <div class="form-group">
                <label for="dono" class="required">sobre o carro</label>
                <div class="input-container">
                    <input type="text"   disabled id="dono" value="{{$carro->sobre}}" placeholder="Nome do propriet?rio">
                    <i class="fas fa-user input-icon"></i>
                </div>
            </div>

            <div class="form-group">
                <label for="dono" class="required">Propriet?rio</label>
                <div class="input-container">
                    <input type="text"   disabled id="dono" value="{{$carro->dono}}" placeholder="Nome do propriet?rio">
                    <i class="fas fa-user input-icon"></i>
                </div>
            </div>
            
            
            <div class="form-group">
                <label for="placa" class="required">Placa</label>
                <div class="input-container">
                    <input type="text"   disabled id="placa" value="{{$carro->placa}}" placeholder="AAA-0000">
                    <i class="fas fa-id-card input-icon"></i>
                </div>
            </div>
            
            <div class="form-group">
                <label for="cor" class="required">Cor</label>
                <div class="input-container">
                    <input type="text"   disabled id="cor" value="{{$carro->cor}}" placeholder="Ex: Vermelho">
                    <i class="fas fa-palette input-icon"></i>
                </div>
            </div>
            
            <div class="form-group">
                <label for="valor" class="required">Valor (R$)</label>
                <div class="input-container">
                    <input type="number"   disabled id="valor" value="{{$carro->valor}}" placeholder="0,00" min="0" step="0.01">
                    <i class="fas fa-dollar-sign input-icon"></i>
                </div>
            </div>
            
            <div class="form-group">
                <label for="potencia" class="required">Pot?ncia (cavalos)</label>
                <div class="input-container">
                    <input type="number"   disabled id="potencia" value="{{$carro->potencia}}" placeholder="Ex: 300">
                    <i class="fas fa-bolt input-icon"></i>
                </div>
            </div>
            
            <div class="form-group">
                <label for="tipo_gasolina" class="required">Tipo de Combust?vel</label>
                <div class="input-container">
                    <select     disabled value="{{$carro->tipo_gasolina}}"  id="tipo_gasolina">
                        
                        <option value="gasolina">Gasolina</option>
                        <option value="etanol">Etanol</option>
                        <option value="flex">Flex (Gasolina/Etanol)</option>
                        <option value="diesel">Diesel</option>
                        <option value="eletrico">El?trico</option>
                        <option value="hibrido">H?brido</option>
                    </select>
                    <i class="fas fa-gas-pump input-icon"></i>
                </div>
            </div>
            
            <div class="form-group">
                <label for="potencia" class="required">Fabricante</label>
                <div class="input-container">
                    <input type="text"   disabled value="{{$carro->fabricante}}" id="fabricante" placeholder="Ford">
                    <i class="fas fa-bolt input-icon"></i>
                </div>
            </div>

            <div class="form-group">
                <label for="ano" class="required">Ano</label>
                <div class="input-container">
                    <input 
                    type="number" 
                    value="{{$carro->ano}}" 
                    id="ano"
                    disabled
                    placeholder="Ex: 2023" 
                    min="1900" max="2026">
                    
                    <i class="fas fa-calendar input-icon"></i>
                </div>
            </div>
                            
            
            <div class="buttons">
                <button type="button" class="btn-submit" id="meu">
                    <i class="fas fa-save btn-icon"></i> Deletar Ve?culo
                </button>
            </div>
        </div>
    </div>

    @vite('resources/js/deleta_carro.js')
</body>
</html>
