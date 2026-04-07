$(document).ready(function () {
    let toastTimer = null;
    const listaLutas = $("#listaLutas");
    const toastCadastro = $("#toastCadastro");
    const toastCadastroTexto = $("#toastCadastroTexto");

    function formatarData(dataISO) {
        if (!dataISO) {
            return "-";
        }

        const partes = dataISO.split("-");
        if (partes.length !== 3) {
            return dataISO;
        }

        return partes[2] + "/" + partes[1] + "/" + partes[0];
    }

    function renderizarLista(lutas) {
        if (!listaLutas.length) {
            return;
        }

        if (!lutas || !lutas.length) {
            listaLutas.html('<div class="fight-empty">Nenhuma luta cadastrada ainda.</div>');
            return;
        }

        const html = lutas.slice(0, 8).map(function (luta) {
            return (
                '<div class="fight-item">' +
                    '<strong>' + luta.nome_lutador + ' vs ' + luta.nome_oponente + '</strong>' +
                    '<small>' + luta.modalidade + ' | ' + formatarData(luta.data_luta) + ' | ' + luta.local_evento + '</small>' +
                '</div>'
            );
        }).join("");

        listaLutas.html(html);
    }

    function carregarLutas() {
        $.ajax({
            url: "../api/todas_lutas",
            method: "GET",
            success: function (res) {
                renderizarLista((res && res.lutas) ? res.lutas : []);
            }
        });
    }

    function mostrarSucesso(nomeLutador) {
        if (!toastCadastro.length) {
            return;
        }

        const nome = nomeLutador || "Luta";
        toastCadastroTexto.text("Cadastrado com sucesso: " + nome + ".");
        toastCadastro.addClass("show");

        if (toastTimer) {
            clearTimeout(toastTimer);
        }

        toastTimer = setTimeout(function () {
            toastCadastro.removeClass("show");
        }, 2600);
    }

    function limparFormulario() {
        $("#nome_lutador").val("");
        $("#nome_oponente").val("");
        $("#modalidade").val("");
        $("#categoria").val("");
        $("#rounds").val("");
        $("#bolsa").val("");
        $("#data_luta").val("");
        $("#local_evento").val("");
        $("#resultado_previsto").val("");
        $("#sobre_luta").val("");
    }

    carregarLutas();

    $("#meu").click(function () {
        const camposObrigatorios = [
            "#nome_lutador",
            "#nome_oponente",
            "#modalidade",
            "#categoria",
            "#rounds",
            "#bolsa",
            "#data_luta",
            "#local_evento",
            "#resultado_previsto",
            "#sobre_luta"
        ];

        const campoVazio = camposObrigatorios.some(function (selector) {
            return !$(selector).val();
        });

        if (campoVazio) {
            alert("Preencha todos os campos da luta antes de cadastrar.");
            return;
        }

        const payload = {
            nome_lutador: $("#nome_lutador").val(),
            nome_oponente: $("#nome_oponente").val(),
            modalidade: $("#modalidade").val(),
            categoria: $("#categoria").val(),
            rounds: $("#rounds").val(),
            bolsa: $("#bolsa").val(),
            data_luta: $("#data_luta").val(),
            local_evento: $("#local_evento").val(),
            resultado_previsto: $("#resultado_previsto").val(),
            sobre_luta: $("#sobre_luta").val()
        };

        $.ajax({
            url: "../api/salva_luta",
            method: "POST",
            data: payload,
            success: function (res) {
                const nomeLutador = res && res.luta ? res.luta.nome_lutador : payload.nome_lutador;
                mostrarSucesso(nomeLutador);
                limparFormulario();
                carregarLutas();
            },
            error: function () {
                alert("Nao foi possivel cadastrar a luta. Verifique os dados.");
            }
        });
    });
});
