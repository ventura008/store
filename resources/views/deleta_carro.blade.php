<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FightStore | Deletar Luta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --fight-bg: #090909;
            --fight-card: #151515;
            --fight-red: #e6232a;
            --fight-red-soft: #b4171d;
            --fight-gold: #e5bc62;
            --fight-text: #f6f3ed;
            --fight-muted: #b8b1a5;
            --fight-line: rgba(255, 255, 255, 0.12);
        }

        body {
            margin: 0;
            font-family: "Rajdhani", sans-serif;
            color: var(--fight-text);
            background:
                radial-gradient(circle at 8% 20%, rgba(230, 35, 42, 0.3), transparent 40%),
                radial-gradient(circle at 88% 0%, rgba(229, 188, 98, 0.12), transparent 45%),
                var(--fight-bg);
            min-height: 100vh;
            padding: 40px 0;
        }

        .fight-box {
            max-width: 980px;
            margin: 0 auto;
            background: var(--fight-card);
            border: 1px solid var(--fight-line);
            border-radius: 16px;
            box-shadow: 0 24px 50px rgba(0, 0, 0, 0.45);
            overflow: hidden;
        }

        .fight-header {
            padding: 22px 26px;
            border-bottom: 1px solid var(--fight-line);
            background: linear-gradient(120deg, rgba(230, 35, 42, 0.25), rgba(0, 0, 0, 0.35));
        }

        .fight-header h1 {
            margin: 0;
            font-size: 2rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #fff;
        }

        .fight-header p {
            margin: 6px 0 0;
            color: var(--fight-muted);
        }

        .fight-body {
            padding: 24px;
        }

        .warning-box {
            margin-bottom: 16px;
            border: 1px solid rgba(255, 120, 120, 0.45);
            background: rgba(255, 90, 90, 0.12);
            color: #ffbcbc;
            border-radius: 10px;
            padding: 12px 14px;
            font-weight: 700;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
        }

        .full-width {
            grid-column: 1 / -1;
        }

        label {
            display: block;
            margin-bottom: 6px;
            color: var(--fight-gold);
            font-size: 0.86rem;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            font-weight: 700;
        }

        .input-wrap {
            position: relative;
        }

        .input-wrap i {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #9b9285;
            pointer-events: none;
        }

        input, textarea {
            width: 100%;
            border: 1px solid #312f2a;
            border-radius: 10px;
            background: #1d1d1d;
            color: #f3efea;
            padding: 12px 40px 12px 12px;
            font-size: 1rem;
        }

        textarea {
            min-height: 95px;
            resize: none;
            padding-right: 12px;
        }

        input[readonly], textarea[readonly] {
            opacity: 0.9;
            cursor: not-allowed;
        }

        .actions {
            margin-top: 16px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn-delete {
            border: 0;
            border-radius: 10px;
            padding: 11px 16px;
            font-weight: 700;
            color: #fff;
            background: linear-gradient(90deg, #891015, var(--fight-red));
        }

        .btn-back {
            border: 1px solid var(--fight-line);
            border-radius: 10px;
            padding: 11px 16px;
            color: var(--fight-text);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }

        .msg {
            margin-top: 12px;
            padding: 10px 12px;
            border-radius: 10px;
            display: none;
            opacity: 0;
            transform: translateY(8px) scale(0.98);
        }

        .msg.ok {
            background: rgba(98, 224, 142, 0.12);
            border: 1px solid rgba(98, 224, 142, 0.45);
            color: #b8ffd0;
        }

        .msg.erro {
            background: rgba(255, 90, 90, 0.12);
            border: 1px solid rgba(255, 90, 90, 0.45);
            color: #ffb3b3;
        }

        .msg.show {
            display: block;
            opacity: 1;
            transform: translateY(0) scale(1);
            transition: opacity 0.35s ease, transform 0.35s ease;
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <input type="hidden" id="id_luta" value="{{ $luta->id }}">

    <div class="fight-box">
        <div class="fight-header">
            <h1>Deletar Luta</h1>
            <p>Revise os dados e confirme a exclusao.</p>
        </div>
        <div class="fight-body">
            <div class="warning-box">
                <i class="fas fa-triangle-exclamation me-2"></i>
                Esta acao remove a luta permanentemente.
            </div>

            <div class="form-grid">
                <div>
                    <label>Nome do lutador</label>
                    <div class="input-wrap">
                        <input type="text" readonly value="{{ $luta->nome_lutador }}">
                        <i class="fas fa-user-ninja"></i>
                    </div>
                </div>
                <div>
                    <label>Nome do oponente</label>
                    <div class="input-wrap">
                        <input type="text" readonly value="{{ $luta->nome_oponente }}">
                        <i class="fas fa-user-shield"></i>
                    </div>
                </div>
                <div>
                    <label>Modalidade</label>
                    <div class="input-wrap">
                        <input type="text" readonly value="{{ $luta->modalidade }}">
                        <i class="fas fa-hand-fist"></i>
                    </div>
                </div>
                <div>
                    <label>Categoria</label>
                    <div class="input-wrap">
                        <input type="text" readonly value="{{ $luta->categoria }}">
                        <i class="fas fa-weight-hanging"></i>
                    </div>
                </div>
                <div>
                    <label>Data da luta</label>
                    <div class="input-wrap">
                        <input type="text" readonly value="{{ $luta->data_luta }}">
                        <i class="fas fa-calendar-days"></i>
                    </div>
                </div>
                <div>
                    <label>Local do evento</label>
                    <div class="input-wrap">
                        <input type="text" readonly value="{{ $luta->local_evento }}">
                        <i class="fas fa-location-dot"></i>
                    </div>
                </div>
                <div class="full-width">
                    <label>Sobre a luta</label>
                    <textarea readonly>{{ $luta->sobre_luta }}</textarea>
                </div>
            </div>

            <div class="actions">
                <button type="button" class="btn-delete" id="meu">
                    <i class="fas fa-trash me-1"></i> Confirmar exclusao
                </button>
                <a href="/formulario" class="btn-back">
                    <i class="fas fa-arrow-left me-2"></i> Voltar
                </a>
            </div>

            <div class="msg ok" id="msgOk">Luta deletada com sucesso.</div>
            <div class="msg erro" id="msgErro">Nao foi possivel deletar a luta.</div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const btnExcluir = document.getElementById('meu');
            const msgOk = document.getElementById('msgOk');
            const msgErro = document.getElementById('msgErro');
            const idLuta = document.getElementById('id_luta');

            function mostrar(tipo, textoOpcional) {
                if (msgOk) {
                    msgOk.classList.remove('show');
                    msgOk.style.display = 'none';
                }
                if (msgErro) {
                    msgErro.classList.remove('show');
                    msgErro.style.display = 'none';
                }

                if (tipo === 'ok' && msgOk) {
                    msgOk.textContent = textoOpcional || 'Luta deletada com sucesso.';
                    msgOk.style.display = 'block';
                    requestAnimationFrame(function () {
                        msgOk.classList.add('show');
                    });
                }

                if (tipo === 'erro' && msgErro) {
                    msgErro.textContent = textoOpcional || 'Nao foi possivel deletar a luta.';
                    msgErro.style.display = 'block';
                    requestAnimationFrame(function () {
                        msgErro.classList.add('show');
                    });
                }
            }

            if (!btnExcluir || !idLuta) return;

            btnExcluir.addEventListener('click', function () {
                const confirmar = window.confirm('Tem certeza que deseja deletar esta luta?');
                if (!confirmar) return;

                btnExcluir.disabled = true;
                btnExcluir.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i> Excluindo...';

                const payload = new URLSearchParams({ id_luta: idLuta.value }).toString();

                fetch('/api/deletar_luta', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
                        'Accept': 'application/json'
                    },
                    body: payload
                })
                    .then(function (res) {
                        if (!res.ok) {
                            return res.json().then(function (data) {
                                throw new Error(data && data.message ? data.message : 'erro');
                            }).catch(function () {
                                throw new Error('erro');
                            });
                        }
                        return res.json();
                    })
                    .then(function () {
                        localStorage.setItem('lutasAtualizadas', String(Date.now()));
                        mostrar('ok', 'Luta deletada com sucesso. Redirecionando...');
                        setTimeout(function () {
                            window.location.href = '/formulario?deleted=1';
                        }, 900);
                    })
                    .catch(function (err) {
                        mostrar('erro', 'Nao foi possivel deletar a luta. ' + (err.message && err.message !== 'erro' ? err.message : ''));
                    })
                    .finally(function () {
                        btnExcluir.disabled = false;
                        btnExcluir.innerHTML = '<i class="fas fa-trash me-1"></i> Confirmar exclusao';
                    });
            });
        });
    </script>
</body>
</html>

