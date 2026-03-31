import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/alterarformulario.css',
                'resources/css/cadastrouser.css',
                'resources/css/contato.css',
                'resources/css/deleta_carro.css',
                'resources/css/editar.css',
                'resources/css/formulario1.css',
                'resources/css/frota.css',
                'resources/css/home.css',
                'resources/css/loginuser.css',
                'resources/css/navbar.css',
                'resources/css/perfil.css',
                'resources/css/servicos.css',
                'resources/css/splash.css',
                'resources/css/sobre.css',
                'resources/css/verformulario.css',
                'resources/js/alterar.js',
                'resources/js/app.js',
                'resources/js/cadastrouser.js',
                'resources/js/contato.js',
                'resources/js/deleta_carro.js',
                'resources/js/editar.js',
                'resources/js/frota.js',
                'resources/js/home.js',
                'resources/js/inicial.js',
                'resources/js/loginuser.js',
                'resources/js/navbar.js',
                'resources/js/perfil.js',
                'resources/js/servicos.js',
                'resources/js/splash.js',
                'resources/js/sobre.js',
                'resources/js/verformulario.js',
            ],
            refresh: true,
        }),
    ],
});
