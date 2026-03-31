// Script para atualizar o ano no footer
        document.addEventListener('DOMContentLoaded', function() {
            // Atualizar ano no footer
            const footerYear = document.querySelector('.footer-bottom p');
            if(footerYear) {
                const currentYear = new Date().getFullYear();
                footerYear.innerHTML = `&copy; ${currentYear} XL Motors. Todos os direitos reservados.`;
            }
            
            // Atualizar a data mÃ­nima nos campos de data
            const today = new Date().toISOString().split('T')[0];
            const retiradaInput = document.getElementById('data-retirada');
            const devolucaoInput = document.getElementById('data-devolucao');
            
            if(retiradaInput) {
                retiradaInput.min = today;
                retiradaInput.value = today;
            }
            if(devolucaoInput) {
                const tomorrow = new Date();
                tomorrow.setDate(tomorrow.getDate() + 1);
                devolucaoInput.min = tomorrow.toISOString().split('T')[0];
            }
            
            // Quando a data de retirada muda, atualiza a data mÃ­nima da devoluÃ§Ã£o
            if(retiradaInput && devolucaoInput) {
                retiradaInput.addEventListener('change', function() {
                    const nextDay = new Date(this.value);
                    nextDay.setDate(nextDay.getDate() + 1);
                    devolucaoInput.min = nextDay.toISOString().split('T')[0];
                    
                    if(devolucaoInput.value && devolucaoInput.value < this.value) {
                        devolucaoInput.value = devolucaoInput.min;
                    }
                });
            }
        });
