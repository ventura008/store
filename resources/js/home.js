$(document).ready(function () {
    const token = $.cookie('token');
    const profileTriggerName = $('#profileTriggerName');
    const profileTriggerLabel = $('#profileTriggerLabel');
    const loginMenuItem = $('#loginMenuItem');
    const registerMenuItem = $('#registerMenuItem');

    if (token) {
        $.ajax({
            url: '/api/busca_usuario',
            method: 'GET',
            data: { token: token },
            success: function (res) {
                if (res.erro === 'n' && res.usuario) {
                    const primeiroNome = (res.usuario.nome || 'Perfil').trim().split(' ')[0];

                    profileTriggerLabel.text('Conectado');
                    profileTriggerName.text(primeiroNome);
                    $('.profile-dropdown-title').first().text(res.usuario.nome || 'Meu perfil');
                    $('.profile-dropdown-subtitle').first().text(res.usuario.email || 'Conta autenticada');

                    loginMenuItem.hide();
                    registerMenuItem.hide();
                } else {
                    profileTriggerLabel.text('Minha conta');
                    profileTriggerName.text('Perfil');
                    loginMenuItem.show();
                    registerMenuItem.show();
                }
            },
            error: function () {
                profileTriggerLabel.text('Minha conta');
                profileTriggerName.text('Perfil');
                loginMenuItem.show();
                registerMenuItem.show();
            }
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const footerYear = document.querySelector('.footer-bottom p');
    if (footerYear) {
        const currentYear = new Date().getFullYear();
        footerYear.innerHTML = `&copy; ${currentYear} XL Motors. Todos os direitos reservados.`;
    }

    const today = new Date().toISOString().split('T')[0];
    const retiradaInput = document.getElementById('data-retirada');
    const devolucaoInput = document.getElementById('data-devolucao');

    if (retiradaInput) {
        retiradaInput.min = today;
        retiradaInput.value = today;
    }

    if (devolucaoInput) {
        const tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        devolucaoInput.min = tomorrow.toISOString().split('T')[0];
    }

    if (retiradaInput && devolucaoInput) {
        retiradaInput.addEventListener('change', function() {
            const nextDay = new Date(this.value);
            nextDay.setDate(nextDay.getDate() + 1);
            devolucaoInput.min = nextDay.toISOString().split('T')[0];

            if (devolucaoInput.value && devolucaoInput.value < this.value) {
                devolucaoInput.value = devolucaoInput.min;
            }
        });
    }
});
