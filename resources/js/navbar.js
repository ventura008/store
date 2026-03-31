function getCookieValue(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) {
        return parts.pop().split(';').shift();
    }
    return null;
}

document.addEventListener('DOMContentLoaded', function () {
    const token = getCookieValue('token');
    const profileTriggerName = document.getElementById('profileTriggerName');
    const profileTriggerLabel = document.getElementById('profileTriggerLabel');
    const profileMenuTitle = document.getElementById('profileMenuTitle') || document.querySelector('.profile-dropdown-title');
    const profileMenuSubtitle = document.getElementById('profileMenuSubtitle') || document.querySelector('.profile-dropdown-subtitle');
    const loginMenuItem = document.getElementById('loginMenuItem');
    const registerMenuItem = document.getElementById('registerMenuItem');

    if (!profileTriggerName || !profileTriggerLabel) {
        return;
    }

    if (!token) {
        profileTriggerLabel.textContent = 'Minha conta';
        profileTriggerName.textContent = 'Perfil';
        return;
    }

    fetch(`/api/busca_usuario?token=${encodeURIComponent(token)}`, {
        method: 'GET',
        headers: {
            'Accept': 'application/json'
        }
    })
        .then(function (response) {
            return response.json();
        })
        .then(function (res) {
            if (res.erro === 'n' && res.usuario) {
                const nomeCompleto = (res.usuario.nome || 'Perfil').trim();
                const primeiroNome = nomeCompleto.split(' ')[0] || 'Perfil';

                profileTriggerLabel.textContent = 'Conectado';
                profileTriggerName.textContent = primeiroNome;

                if (profileMenuTitle) {
                    profileMenuTitle.textContent = nomeCompleto;
                }

                if (profileMenuSubtitle) {
                    profileMenuSubtitle.textContent = res.usuario.email || 'Conta autenticada';
                }

                if (loginMenuItem) {
                    loginMenuItem.style.display = 'none';
                }

                if (registerMenuItem) {
                    registerMenuItem.style.display = 'none';
                }
            }
        })
        .catch(function () {
            profileTriggerLabel.textContent = 'Minha conta';
            profileTriggerName.textContent = 'Perfil';
        });
});
