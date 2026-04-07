$(document).ready(function () {
    function mostrarMensagem(tipo) {
        const msgOk = $("#msgOk");
        const msgErro = $("#msgErro");

        msgOk.hide();
        msgErro.hide();

        if (tipo === "ok") {
            msgOk.fadeIn(200);
        } else {
            msgErro.fadeIn(200);
        }
    }

    $("#meu").click(function () {
        const payload = {
            id_luta: $("#id_luta").val(),
            nome_lutador: $("#nome_lutador").val(),
            nome_oponente: $("#nome_oponente").val(),
            modalidade: $("#modalidade").val(),
            categoria: $("#categoria").val(),
            rounds: $("#rounds").val(),
            bolsa: $("#bolsa").val(),
            data_luta: $("#data_luta").val(),
            local_evento: $("#local_evento").val(),
            resultado_previsto: $("#resultado_previsto").val(),
            sobre_luta: $("#sobre_luta").val(),
            img: $("#img").val()
        };

        const vazio = Object.values(payload).some(function (valor, index) {
            // img e opcional
            if (Object.keys(payload)[index] === "img") {
                return false;
            }
            return !valor;
        });

        if (vazio) {
            mostrarMensagem("erro");
            return;
        }

        $.ajax({
            url: "../api/alterar_luta",
            method: "PUT",
            data: payload,
            success: function () {
                // Sinaliza para a tela de formulario recarregar a lista ao voltar para ela.
                localStorage.setItem("lutasAtualizadas", String(Date.now()));
                mostrarMensagem("ok");
                setTimeout(function () {
                    window.location.href = "/formulario?updated=1";
                }, 500);
            },
            error: function () {
                mostrarMensagem("erro");
            }
        });
    });
});
