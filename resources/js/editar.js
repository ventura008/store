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
                            <div class="alert alert-success alert-dismissible fade show alert-message alert-message-floating alert-message-success-custom" role="alert">
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
                        <div class="alert alert-danger alert-dismissible fade show alert-message alert-message-floating alert-message-danger-custom" role="alert">
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
