function formatarValor(valor) {
    return new Intl.NumberFormat("pt-BR", {
        style: "currency",
        currency: "BRL"
    }).format(Number(valor || 0));
}

function formatarData(dataISO) {
    if (!dataISO || !dataISO.includes("-")) return "Data nao informada";
    const partes = dataISO.split("-");
    if (partes.length !== 3) return dataISO;
    return partes[2] + "/" + partes[1] + "/" + partes[0];
}

function criarCardLuta(luta) {
    const imagem =
        luta.img ||
        "https://images.unsplash.com/photo-1549719386-74dfcbf7dbed?auto=format&fit=crop&w=900&q=80";

    const lutador = luta.nome_lutador || "Lutador";
    const oponente = luta.nome_oponente || "Oponente";
    const modalidade = luta.modalidade || "Modalidade";
    const categoria = luta.categoria || "Categoria nao informada";
    const rounds = luta.rounds || "-";
    const dataLuta = formatarData(luta.data_luta);
    const local = luta.local_evento || "Local nao informado";
    const resultado = luta.resultado_previsto || "Resultado em aberto";
    const resumo = luta.sobre_luta || "Combate cadastrado no sistema FightStore.";

    return `
        <div class="luta-card">
            <div class="luta-imagem">
                <img src="${imagem}" alt="${lutador} x ${oponente}" onerror="this.src='https://images.unsplash.com/photo-1517438984742-1262db08379e?auto=format&fit=crop&w=900&q=80'">
                <div class="luta-badge">${modalidade}</div>
            </div>
            <div class="luta-info">
                <h3 class="luta-nome">${lutador} vs ${oponente}</h3>
                <div class="luta-detalhes">
                    <div class="detalhe-item">
                        <i class="fas fa-weight-hanging"></i>
                        <span>${categoria}</span>
                    </div>
                    <div class="detalhe-item">
                        <i class="fas fa-stopwatch"></i>
                        <span>${rounds} rounds</span>
                    </div>
                    <div class="detalhe-item">
                        <i class="fas fa-calendar-days"></i>
                        <span>${dataLuta}</span>
                    </div>
                    <div class="detalhe-item">
                        <i class="fas fa-location-dot"></i>
                        <span>${local}</span>
                    </div>
                </div>
                <div class="luta-bolsa">${formatarValor(luta.bolsa)}</div>
                <div class="luta-resumo">${resumo}</div>
                <div class="luta-acoes">
                    <a class="btn-editar" href="/alterarformulario/${luta.id}">
                        <i class="fas fa-pen-to-square"></i> Alterar
                    </a>
                    <button class="btn-detalhes" onclick="verDetalhesLuta('${resultado}')">
                        <i class="fas fa-circle-info"></i> Resultado
                    </button>
                </div>
            </div>
        </div>
    `;
}

async function abrirModal(modalidadeSelecionada) {
    const modal = document.getElementById("myModal");
    const loadingSpinner = document.getElementById("loading-spinner");
    const lutasContainer = document.getElementById("lutas-container");
    const modalTitulo = document.getElementById("modal-titulo");

    if (!modal || !loadingSpinner || !lutasContainer || !modalTitulo) return;

    const modalidadeTitulo =
        modalidadeSelecionada && modalidadeSelecionada !== "todas"
            ? modalidadeSelecionada
            : "Todas as modalidades";

    modalTitulo.textContent = "Cards de " + modalidadeTitulo;
    modal.style.display = "block";
    document.body.style.overflow = "hidden";

    loadingSpinner.style.display = "block";
    lutasContainer.style.display = "none";
    lutasContainer.innerHTML = "";

    try {
        const resposta = await fetch("/api/todas_lutas?_ts=" + Date.now(), {
            method: "GET",
            headers: { Accept: "application/json" }
        });

        if (!resposta.ok) {
            throw new Error("Falha ao carregar lutas");
        }

        const json = await resposta.json();
        const lutas = Array.isArray(json.lutas) ? json.lutas : [];

        const lutasFiltradas =
            !modalidadeSelecionada || modalidadeSelecionada === "todas"
                ? lutas
                : lutas.filter(function (luta) {
                      return String(luta.modalidade || "").toLowerCase() === String(modalidadeSelecionada).toLowerCase();
                  });

        loadingSpinner.style.display = "none";

        if (lutasFiltradas.length === 0) {
            lutasContainer.innerHTML = `
                <div class="sem-lutas">
                    <i class="fas fa-hand-fist"></i>
                    <h3>Nenhuma luta encontrada</h3>
                    <p>Ainda nao existem lutas cadastradas para esta modalidade.</p>
                </div>
            `;
            lutasContainer.style.display = "block";
            return;
        }

        lutasContainer.innerHTML = lutasFiltradas.map(criarCardLuta).join("");
        lutasContainer.style.display = "grid";
    } catch (error) {
        loadingSpinner.style.display = "none";
        lutasContainer.innerHTML = `
            <div class="sem-lutas">
                <i class="fas fa-triangle-exclamation"></i>
                <h3>Erro ao carregar</h3>
                <p>Nao foi possivel buscar as lutas agora. Tente novamente.</p>
                <button class="retry-button" onclick="abrirModal('${modalidadeSelecionada || "todas"}')">
                    <i class="fas fa-rotate-right"></i> Tentar novamente
                </button>
            </div>
        `;
        lutasContainer.style.display = "block";
    }
}

function fecharModal() {
    const modal = document.getElementById("myModal");
    if (!modal) return;
    modal.style.display = "none";
    document.body.style.overflow = "auto";
}

function verDetalhesLuta(resultado) {
    const texto = resultado || "Sem previsao registrada.";
    alert("Resultado previsto: " + texto);
}

window.abrirModal = abrirModal;
window.fecharModal = fecharModal;
window.verDetalhesLuta = verDetalhesLuta;

window.onclick = function (event) {
    const modal = document.getElementById("myModal");
    if (event.target === modal) {
        fecharModal();
    }
};

document.addEventListener("keydown", function (event) {
    if (event.key === "Escape") {
        const modal = document.getElementById("myModal");
        if (modal && modal.style.display === "block") {
            fecharModal();
        }
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const slides = document.getElementById("carrosselSlides");
    const slidesCount = document.querySelectorAll(".carrossel-slide").length;
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    const indicatorsContainer = document.getElementById("indicators");

    let currentIndex = 0;
    let slidesPerView = 6;
    let maxIndex = 0;
    let autoPlayInterval = null;

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
        let indicatorsHTML = "";

        for (let i = 0; i < totalIndicators; i++) {
            const activeClass = i === currentIndex ? "active" : "";
            indicatorsHTML += `<button class="indicator ${activeClass}" data-index="${i}"></button>`;
        }

        indicatorsContainer.innerHTML = indicatorsHTML;

        document.querySelectorAll(".indicator").forEach(function (indicator) {
            indicator.addEventListener("click", function () {
                currentIndex = Number(this.dataset.index);
                updateCarousel();
                updateIndicators();
                resetAutoPlay();
            });
        });
    }

    function updateIndicators() {
        document.querySelectorAll(".indicator").forEach(function (indicator, index) {
            if (index === currentIndex) {
                indicator.classList.add("active");
            } else {
                indicator.classList.remove("active");
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
        autoPlayInterval = setInterval(nextSlide, 3200);
    }

    function stopAutoPlay() {
        if (autoPlayInterval) {
            clearInterval(autoPlayInterval);
            autoPlayInterval = null;
        }
    }

    function resetAutoPlay() {
        stopAutoPlay();
        startAutoPlay();
    }

    if (nextBtn) {
        nextBtn.addEventListener("click", function () {
            nextSlide();
            resetAutoPlay();
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener("click", function () {
            prevSlide();
            resetAutoPlay();
        });
    }

    const carrossel = document.querySelector(".carrossel-container");
    if (carrossel) {
        carrossel.addEventListener("mouseenter", stopAutoPlay);
        carrossel.addEventListener("mouseleave", startAutoPlay);
    }

    window.addEventListener("resize", function () {
        updateSlidesPerView();
        resetAutoPlay();
    });

    updateSlidesPerView();
    startAutoPlay();
});
