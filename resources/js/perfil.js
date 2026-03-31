$(document).ready(function(){
    
    var token = $.cookie('token');
    
    if(token) {
        console.log("Token encontrado:", token);
        
        $.ajax({
            url: "/api/busca_usuario",
            method: "GET",
            data: { token: token },
            success: function(res) {
                console.log("Resposta:", res);
                
                if(res.erro == 'n') {
                    // Correto: cada campo no seu devido lugar
                    
                    // Header do perfil
                    $('.profile-name').text(res.usuario.nome);
                    $('.profile-email').html('<i class="fas fa-envelope"></i> ' + res.usuario.email);
                    
                    // Badge de "Desde"
                    $('.badge:contains("Desde")').html(`
                        <i class="fas fa-calendar"></i> 
                        Desde ${new Date(res.usuario.created_at).toLocaleDateString('pt-BR')}
                    `);
                    
                    const infoItems = $('.info-item');
                    
                    // Nome
                    infoItems.eq(0).find('.info-value').html(`
                        <i class="fas fa-user"></i> ${res.usuario.nome}
                    `);
                    
                    // Email
                    infoItems.eq(1).find('.info-value').html(`
                        <i class="fas fa-envelope"></i> ${res.usuario.email}
                    `);
                    
                    // Telefone
                    infoItems.eq(2).find('.info-value').html(`
                        <i class="fas fa-phone"></i> ${res.usuario.telefone || 'Não informado'}
                    `);
                    
                    // Data de nascimento
                    infoItems.eq(3).find('.info-value').html(`
                        <i class="fas fa-calendar"></i> ${new Date(res.usuario.nascimento).toLocaleDateString('pt-BR')}
                    `);
                    
                    // Gênero
                    infoItems.eq(4).find('.info-value').html(`
                        <i class="fas fa-venus-mars"></i> ${res.usuario.genero || 'Não informado'}
                    `);
                    
                    // Tempo ativo
                    const dataCriacao = new Date(res.usuario.created_at);
                    const agora = new Date();
                    const diffMs = agora - dataCriacao;
                    const diffDias = Math.floor(diffMs / (1000 * 60 * 60 * 24));
                    
                    if(diffDias > 0) {
                        $('.stat-card:last .stat-value').text(diffDias + ' dias');
                    } else {
                        const diffHoras = Math.floor(diffMs / (1000 * 60 * 60));
                        $('.stat-card:last .stat-value').text(diffHoras + ' horas');
                    }
                    
                    alert("Perfil carregado com sucesso!");
                } else {
                    alert("Erro: " + res.msg);
                }
            },
            error: function(xhr, status, error) {
                console.error("Erro na requisição:", error);
                alert("Erro ao carregar perfil.");
            }
        });
    } else {
        alert("Você precisa fazer login primeiro!");
        window.location.href = "/loginn";
    }
});

document.addEventListener('DOMContentLoaded', function() {
            // Atualizar ano no footer
            const footerYear = document.querySelector('.footer-bottom p');
            if(footerYear) {
                const currentYear = new Date().getFullYear();
                footerYear.innerHTML = `&copy; ${currentYear} WL MOTORS. Todos os direitos reservados.`;
            }
        });
