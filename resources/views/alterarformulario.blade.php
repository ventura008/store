<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FightStore | Alterar Luta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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

        input, select, textarea {
            width: 100%;
            border: 1px solid #312f2a;
            border-radius: 10px;
            background: #1d1d1d;
            color: #f3efea;
            padding: 12px 40px 12px 12px;
            font-size: 1rem;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
            padding-right: 12px;
        }

        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: var(--fight-red);
            box-shadow: 0 0 0 3px rgba(230, 35, 42, 0.2);
        }

        .actions {
            margin-top: 16px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn-save {
            border: 0;
            border-radius: 10px;
            padding: 11px 16px;
            font-weight: 700;
            color: #fff;
            background: linear-gradient(90deg, var(--fight-red-soft), var(--fight-red));
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
            <h1>Alterar Luta</h1>
            <p>Atualize os dados do combate cadastrado.</p>
        </div>
        <div class="fight-body">
            <div class="form-grid">
                <div>
                    <label for="nome_lutador">Nome do lutador</label>
                    <div class="input-wrap">
                        <input type="text" id="nome_lutador" value="{{ $luta->nome_lutador }}">
                        <i class="fas fa-user-ninja"></i>
                    </div>
                </div>
                <div>
                    <label for="nome_oponente">Nome do oponente</label>
                    <div class="input-wrap">
                        <input type="text" id="nome_oponente" value="{{ $luta->nome_oponente }}">
                        <i class="fas fa-user-shield"></i>
                    </div>
                </div>
                <div>
                    <label for="modalidade">Modalidade</label>
                    <div class="input-wrap">
                        <select id="modalidade">
                            <option value="">Selecione...</option>
                            <option value="Boxe" @selected($luta->modalidade === 'Boxe')>Boxe</option>
                            <option value="Muay Thai" @selected($luta->modalidade === 'Muay Thai')>Muay Thai</option>
                            <option value="MMA" @selected($luta->modalidade === 'MMA')>MMA</option>
                            <option value="Jiu-Jitsu" @selected($luta->modalidade === 'Jiu-Jitsu')>Jiu-Jitsu</option>
                            <option value="Kickboxing" @selected($luta->modalidade === 'Kickboxing')>Kickboxing</option>
                        </select>
                        <i class="fas fa-hand-fist"></i>
                    </div>
                </div>
                <div>
                    <label for="categoria">Categoria</label>
                    <div class="input-wrap">
                        <input type="text" id="categoria" value="{{ $luta->categoria }}">
                        <i class="fas fa-weight-hanging"></i>
                    </div>
                </div>
                <div>
                    <label for="rounds">Rounds</label>
                    <div class="input-wrap">
                        <input type="number" id="rounds" min="1" value="{{ $luta->rounds }}">
                        <i class="fas fa-stopwatch"></i>
                    </div>
                </div>
                <div>
                    <label for="bolsa">Bolsa (R$)</label>
                    <div class="input-wrap">
                        <input type="number" id="bolsa" step="0.01" min="0" value="{{ $luta->bolsa }}">
                        <i class="fas fa-sack-dollar"></i>
                    </div>
                </div>
                <div>
                    <label for="data_luta">Data da luta</label>
                    <div class="input-wrap">
                        <input type="date" id="data_luta" value="{{ $luta->data_luta }}">
                        <i class="fas fa-calendar-days"></i>
                    </div>
                </div>
                <div>
                    <label for="local_evento">Local do evento</label>
                    <div class="input-wrap">
                        <input type="text" id="local_evento" value="{{ $luta->local_evento }}">
                        <i class="fas fa-location-dot"></i>
                    </div>
                </div>
                <div>
                    <label for="resultado_previsto">Resultado</label>
                    <div class="input-wrap">
                        <select id="resultado_previsto">
                            <option value="">Selecione...</option>
                            <option value="Nocaute" @selected($luta->resultado_previsto === 'Nocaute')>Nocaute</option>
                            <option value="Finalizacao" @selected($luta->resultado_previsto === 'Finalizacao')>Finalizacao</option>
                            <option value="Decisao" @selected($luta->resultado_previsto === 'Decisao')>Decisao</option>
                            <option value="Empate" @selected($luta->resultado_previsto === 'Empate')>Empate</option>
                        </select>
                        <i class="fas fa-medal"></i>
                    </div>
                </div>
                <div>
                    <label for="img">URL da imagem (opcional)</label>
                    <div class="input-wrap">
                        <input type="text" id="img" value="{{ $luta->img }}">
                        <i class="fas fa-image"></i>
                    </div>
                </div>
                <div class="full-width">
                    <label for="sobre_luta">Sobre a luta</label>
                    <textarea id="sobre_luta">{{ $luta->sobre_luta }}</textarea>
                </div>
            </div>

            <div class="actions">
                <button type="button" class="btn-save" id="meu">
                    <i class="fas fa-save me-1"></i> Salvar alteracoes
                </button>
                <a href="/formulario" class="btn-back">
                    <i class="fas fa-arrow-left me-2"></i> Voltar
                </a>
            </div>

            <div class="msg ok" id="msgOk">Luta atualizada com sucesso.</div>
            <div class="msg erro" id="msgErro">Nao foi possivel atualizar a luta.</div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const btnSalvar = document.getElementById('meu');
            const msgOk = document.getElementById('msgOk');
            const msgErro = document.getElementById('msgErro');

            function valor(id) {
                const el = document.getElementById(id);
                return el ? (el.value || '').trim() : '';
            }

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
                    msgOk.textContent = textoOpcional || 'Luta atualizada com sucesso.';
                    msgOk.style.display = 'block';
                    requestAnimationFrame(function () {
                        msgOk.classList.add('show');
                    });
                }

                if (tipo === 'erro' && msgErro) {
                    msgErro.textContent = textoOpcional || 'Nao foi possivel atualizar a luta.';
                    msgErro.style.display = 'block';
                    requestAnimationFrame(function () {
                        msgErro.classList.add('show');
                    });
                }
            }

            if (!btnSalvar) return;

            btnSalvar.addEventListener('click', function () {
                const payload = {
                    id_luta: valor('id_luta'),
                    nome_lutador: valor('nome_lutador'),
                    nome_oponente: valor('nome_oponente'),
                    modalidade: valor('modalidade'),
                    categoria: valor('categoria'),
                    rounds: valor('rounds'),
                    bolsa: valor('bolsa'),
                    data_luta: valor('data_luta'),
                    local_evento: valor('local_evento'),
                    resultado_previsto: valor('resultado_previsto'),
                    sobre_luta: valor('sobre_luta'),
                    img: valor('img')
                };

                const obrigatorios = [
                    'id_luta',
                    'nome_lutador',
                    'nome_oponente',
                    'modalidade',
                    'categoria',
                    'rounds',
                    'bolsa',
                    'data_luta',
                    'local_evento',
                    'resultado_previsto',
                    'sobre_luta'
                ];

                const vazio = obrigatorios.some(function (chave) {
                    return !payload[chave];
                });

                if (vazio) {
                    mostrar('erro', 'Preencha todos os campos obrigatorios antes de salvar.');
                    return;
                }

                btnSalvar.disabled = true;
                btnSalvar.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i> Salvando...';

                const body = new URLSearchParams(payload).toString();

                fetch('/api/alterar_luta', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
                        'Accept': 'application/json'
                    },
                    body: body
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
                        mostrar('ok', 'Alterado com sucesso. Redirecionando...');
                        setTimeout(function () {
                            window.location.href = '/formulario?updated=1';
                        }, 900);
                    })
                    .catch(function (err) {
                        mostrar('erro', 'Nao foi possivel atualizar a luta. ' + (err.message && err.message !== 'erro' ? err.message : ''));
                    })
                    .finally(function () {
                        btnSalvar.disabled = false;
                        btnSalvar.innerHTML = '<i class="fas fa-save me-1"></i> Salvar alteracoes';
                    });
            });
        });
    </script>
</body>
</html>
