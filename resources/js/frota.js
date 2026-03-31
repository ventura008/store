// Função para formatar valor em reais
function formatarValor(valor) {
    return new Intl.NumberFormat('pt-BR', {
        style: 'currency',
        currency: 'BRL'
    }).format(valor);
}

// Função para criar o HTML do card do carro
function criarCardCarro(carro) {
    // Mapeamento de ícones para cada campo
    const icones = {
        ano: 'fa-calendar',
        cor: 'fa-palette',
        placa: 'fa-id-card',
        potencia: 'fa-horse-head',
        gasolina: 'fa-gas-pump',
        fabricante: 'fa-industry'
    };

    return `
        <div class="carro-card">
            <div class="carro-imagem">
                <img src="${carro.imagem || 'N/I'}" 
                     alt="${carro.modelo}"
                     onerror="this.src='https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'">
                <div class="carro-badge">${carro.fabricante || 'Premium'}</div>
            </div>
            <div class="carro-info">
                <h3 class="carro-nome">${carro.modelo || 'Modelo não disponível'}</h3>
                
                <div class="carro-detalhes">
                    <div class="detalhe-item">
                        <i class="fas fa-calendar-alt"></i>
                        <span>${carro.ano || 'N/I'}</span>
                    </div>
                    <div class="detalhe-item">
                        <i class="fas fa-palette"></i>
                        <span>${carro.cor || 'N/I'}</span>
                    </div>
                    <div class="detalhe-item">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>${carro.potencia || 'N/I'} cv</span>
                    </div>
                    <div class="detalhe-item">
                        <i class="fas fa-gas-pump"></i>
                        <span>${carro.tipo_gasolina || 'N/I'}</span>
                    </div>
                </div>
                
                <div class="carro-preco">
                    ${formatarValor(carro.valor || 0)}
                    <small>/dia</small>
                </div>
                
                <div class="carro-descricao">
                    ${carro.sobre || 'Veículo de luxo com acabamento premium e tecnologia de ponta.'}
                </div>
                
                <div class="carro-acoes">
                    <button class="btn-reservar" onclick="reservarCarro(${carro.id})">
                        <i class="fas fa-calendar-check"></i> Reservar
                    </button>
                    <button class="btn-detalhes" onclick="verDetalhes(${carro.id})">
                        <i class="fas fa-info-circle"></i> Detalhes
                    </button>
                </div>
            </div>
        </div>
    `;
}

// Função para abrir a modal e carregar os carros
function abrirModal(fabricante) {
    const modal = document.getElementById("myModal");
    const loadingSpinner = document.getElementById("loading-spinner");
    const carrosContainer = document.getElementById("carros-container");
    const modalTitulo = document.getElementById("modal-titulo");
    
    // Atualiza o título da modal com o fabricante selecionado
    if (fabricante) {
        modalTitulo.textContent = fabricante.charAt(0).toUpperCase() + fabricante.slice(1);
    } else {
        modalTitulo.textContent = "Todos os Veículos";
    }
    
    // Mostra a modal e o loading
    modal.style.display = "block";
    document.body.style.overflow = "hidden";
    
    // Mostra loading e esconde container
    loadingSpinner.style.display = "block";
    carrosContainer.style.display = "none";
    carrosContainer.innerHTML = "";
    
    // Faz a requisição AJAX
    $.ajax({
        url: "../api/vem_carros",
        method: "GET",
        data: { fabricante: fabricante },
        success: function(res) {
            console.log("Dados recebidos:", res.data);
            
            loadingSpinner.style.display = "none";
            
            if (res.data && res.data.length > 0) {
                let carrosHTML = '';
                
                res.data.forEach(carro => {
                    carrosHTML += criarCardCarro(carro);
                });
                
                carrosContainer.innerHTML = carrosHTML;
                carrosContainer.style.display = "grid";
            } else {
                carrosContainer.innerHTML = `
                    <div class="sem-carros">
                        <i class="fas fa-car-side"></i>
                        <h3>Nenhum veículo encontrado</h3>
                        <p>Não há veículos disponíveis para esta marca no momento.</p>
                    </div>
                `;
                carrosContainer.style.display = "block";
            }
        },
        error: function(xhr, status, error) {
            console.error("Erro na requisição:", error);
            
            loadingSpinner.style.display = "none";
            
            carrosContainer.innerHTML = `
                <div class="sem-carros">
                    <i class="fas fa-exclamation-triangle"></i>
                    <h3>Erro ao carregar</h3>
                    <p>Não foi possível carregar os veículos. Tente novamente.</p>
                    <button onclick="abrirModal('${fabricante}')" class="retry-button">
                        <i class="fas fa-sync-alt"></i> Tentar novamente
                    </button>
                </div>
            `;
            carrosContainer.style.display = "block";
        }
    });
}

// Função para fechar a modal
function fecharModal() {
    document.getElementById("myModal").style.display = "none";
    document.body.style.overflow = "auto";
}

// Função para reservar carro
function reservarCarro(id) {
    // Aqui você pode redirecionar para a página de reserva
    window.location.href = `/reserva?carro=${id}`;
}

// Função para ver detalhes do carro
function verDetalhes(id) {
    // Aqui você pode abrir uma modal com mais detalhes ou redirecionar
    alert(`Abrindo detalhes do carro ID: ${id}`);
}

window.abrirModal = abrirModal;
window.fecharModal = fecharModal;
window.reservarCarro = reservarCarro;
window.verDetalhes = verDetalhes;

window.onclick = function(event) {
    const modal = document.getElementById("myModal");
    if (event.target == modal) {
        fecharModal();
    }
}

document.addEventListener('keydown', function(event) {
    if (event.key === "Escape") {
        const modal = document.getElementById("myModal");
        if (modal.style.display === "block") {
            fecharModal();
        }
    }
});

document.addEventListener('DOMContentLoaded', function() {
            // ===== CARROSSEL DE MARCAS COM ROTAÇÃO INFINITA =====
            const slides = document.getElementById('carrosselSlides');
            const slidesCount = document.querySelectorAll('.carrossel-slide').length;
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const indicatorsContainer = document.getElementById('indicators');
            
            let currentIndex = 0;
            let slidesPerView = 6;
            let maxIndex = 0;
            let autoPlayInterval;
            let isPlaying = true;

            // Função para atualizar slides por view baseado no tamanho da tela
            function updateSlidesPerView() {
                if (window.innerWidth <= 576) {
                    slidesPerView = 2;
                } else if (window.innerWidth <= 768) {
                    slidesPerView = 3;
                } else if (window.innerWidth <= 992) {
                    slidesPerView = 4;
                } else if (window.innerWidth <= 1200) {
                    slidesPerView = 5;
                } else {
                    slidesPerView = 6;
                }
                
                maxIndex = Math.max(0, Math.ceil(slidesCount / slidesPerView) - 1);
                if (currentIndex > maxIndex) currentIndex = maxIndex;
                
                createIndicators();
                updateCarousel();
            }

            function createIndicators() {
                if (!indicatorsContainer) return;
                
                const totalIndicators = Math.ceil(slidesCount / slidesPerView);
                let indicatorsHTML = '';
                
                for (let i = 0; i < totalIndicators; i++) {
                    indicatorsHTML += `<button class="indicator ${i === currentIndex ? 'active' : ''}" data-index="${i}"></button>`;
                }
                
                indicatorsContainer.innerHTML = indicatorsHTML;
                
                document.querySelectorAll('.indicator').forEach(indicator => {
                    indicator.addEventListener('click', function() {
                        currentIndex = parseInt(this.dataset.index);
                        updateCarousel();
                        updateIndicators();
                        resetAutoPlay();
                    });
                });
            }

            function updateIndicators() {
                document.querySelectorAll('.indicator').forEach((indicator, index) => {
                    if (index === currentIndex) {
                        indicator.classList.add('active');
                    } else {
                        indicator.classList.remove('active');
                    }
                });
            }

            function updateCarousel() {
                if (slides) {
                    slides.style.transform = `translateX(-${currentIndex * 100}%)`;
                }
            }

            function nextSlide() {
                if (currentIndex < maxIndex) {
                    currentIndex++;
                } else {
                    currentIndex = 0;
                }
                updateCarousel();
                updateIndicators();
            }

            function prevSlide() {
                if (currentIndex > 0) {
                    currentIndex--;
                } else {
                    currentIndex = maxIndex;
                }
                updateCarousel();
                updateIndicators();
            }

            function startAutoPlay() {
                if (autoPlayInterval) clearInterval(autoPlayInterval);
                autoPlayInterval = setInterval(nextSlide, 3000);
                isPlaying = true;
            }

            function stopAutoPlay() {
                if (autoPlayInterval) {
                    clearInterval(autoPlayInterval);
                    autoPlayInterval = null;
                    isPlaying = false;
                }
            }

            function resetAutoPlay() {
                stopAutoPlay();
                startAutoPlay();
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', function() {
                    nextSlide();
                    resetAutoPlay();
                });
            }

            if (prevBtn) {
                prevBtn.addEventListener('click', function() {
                    prevSlide();
                    resetAutoPlay();
                });
            }

            const carrossel = document.querySelector('.carrossel-container');
            if (carrossel) {
                carrossel.addEventListener('mouseenter', stopAutoPlay);
                carrossel.addEventListener('mouseleave', startAutoPlay);
            }

            window.addEventListener('resize', function() {
                updateSlidesPerView();
                resetAutoPlay();
            });

            updateSlidesPerView();
            startAutoPlay();

            const footerYear = document.querySelector('.footer-bottom p');
            if (footerYear) {
                const currentYear = new Date().getFullYear();
                footerYear.innerHTML = `&copy; ${currentYear} WL Motors. Todos os direitos reservados.`;
            }
        });
