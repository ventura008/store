<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard - WL Motors</title>
    <link rel="stylesheet" href="{{ asset('stellar-admin/assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('stellar-admin/assets/vendors/flag-icon-css/css/flag-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stellar-admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('stellar-admin/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stellar-admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stellar-admin/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('stellar-admin/assets/vendors/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('stellar-admin/assets/vendors/chartist/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stellar-admin/assets/css/vertical-light-layout/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('stellar-admin/assets/images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="/home">
            <img src="{{ asset('stellar-admin/assets/images/logo-dark.svg') }}" alt="logo" class="logo-dark" />
            <img src="{{ asset('stellar-admin/assets/images/logo-light.svg') }}" alt="logo-light" class="logo-light">
          </a>
          <a class="navbar-brand brand-logo-mini" href="/home">
            <img src="{{ asset('stellar-admin/assets/images/logo-mini.svg') }}" alt="logo" />
          </a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Painel administrativo da WL Motors</h5>
          <ul class="navbar-nav navbar-nav-right">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Buscar no painel" title="Buscar no painel">
            </form>
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ms-2" src="{{ asset('stellar-admin/assets/images/faces/face8.jpg') }}" alt="Profile image">
                <span class="font-weight-normal"> Admin WL Motors </span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="{{ asset('stellar-admin/assets/images/faces/face8.jpg') }}" alt="Profile image">
                  <p class="mb-1 mt-3">Admin WL Motors</p>
                  <p class="font-weight-light text-muted mb-0">Painel do sistema</p>
                </div>
                <a class="dropdown-item" href="/perfil"><i class="dropdown-item-icon icon-user text-primary"></i> Meu perfil</a>
                <a class="dropdown-item" href="/home"><i class="dropdown-item-icon icon-home text-primary"></i> Ir para o site</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>

      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item navbar-brand-mini-wrapper">
              <a class="nav-link navbar-brand brand-logo-mini" href="/home">
                <img src="{{ asset('stellar-admin/assets/images/logo-mini.svg') }}" alt="logo" />
              </a>
            </li>
            <li class="nav-item nav-profile">
              <a href="/perfil" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="{{ asset('stellar-admin/assets/images/faces/face8.jpg') }}" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Admin WL</p>
                  <p class="designation">Administrador</p>
                </div>
                <div class="icon-container">
                  <i class="icon-bubbles"></i>
                  <div class="dot-indicator bg-danger"></div>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/dashboard">
                <span class="menu-title">Painel</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item nav-category"><span class="nav-link">Gestão</span></li>
            <li class="nav-item">
              <a class="nav-link" href="/home">
                <span class="menu-title">Home</span>
                <i class="icon-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/frota">
                <span class="menu-title">Frota</span>
                <i class="icon-speedometer menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/formulario">
                <span class="menu-title">Cadastrar carro</span>
                <i class="icon-plus menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/perfil">
                <span class="menu-title">Perfil</span>
                <i class="icon-user menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contato">
                <span class="menu-title">Contato</span>
                <i class="icon-phone menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body performane-indicator-card">
                    <div class="d-sm-flex">
                      <h4 class="card-title flex-shrink-1">Visão geral do sistema</h4>
                      <p class="m-sm-0 ms-sm-auto flex-shrink-0">
                        <span class="data-time-range ms-0">Hoje</span>
                        <span class="data-time-range active">Semana</span>
                        <span class="data-time-range">Mês</span>
                      </p>
                    </div>
                    <div class="d-sm-flex flex-wrap mt-3">
                      <div class="d-flex align-items-center">
                        <span class="dot-indicator bg-primary ms-2"></span>
                        <p class="mb-0 ms-2 text-muted font-weight-semibold">Usuários cadastrados</p>
                      </div>
                      <div class="d-flex align-items-center">
                        <span class="dot-indicator bg-info ms-2"></span>
                        <p class="mb-0 ms-2 text-muted font-weight-semibold">Carros cadastrados</p>
                      </div>
                      <div class="d-flex align-items-center">
                        <span class="dot-indicator bg-danger ms-2"></span>
                        <p class="mb-0 ms-2 text-muted font-weight-semibold">Modelos disponíveis</p>
                      </div>
                    </div>
                    <div class="dotted-chart-height">
                      <canvas id="performance-indicator-chart" class="mt-5"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Resumo rápido</h4>
                    <div class="aligner-wrapper py-3">
                      <div class="doughnut-chart-height">
                        <canvas id="sessionsDoughnutChart" height="210"></canvas>
                      </div>
                      <div class="wrapper d-flex flex-column justify-content-center absolute absolute-center">
                        <h2 class="text-center mb-0 font-weight-bold">WL</h2>
                        <small class="d-block text-center text-muted font-weight-semibold mb-0">Motors Admin</small>
                      </div>
                    </div>
                    <div class="wrapper mt-4 d-flex flex-wrap align-items-cente">
                      <div class="d-flex">
                        <span class="square-indicator bg-danger ms-2"></span>
                        <p class="mb-0 ms-2">Usuários</p>
                      </div>
                      <div class="d-flex">
                        <span class="square-indicator bg-success ms-2"></span>
                        <p class="mb-0 ms-2">Carros</p>
                      </div>
                      <div class="d-flex">
                        <span class="square-indicator bg-warning ms-2"></span>
                        <p class="mb-0 ms-2">Modelos</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row quick-action-toolbar">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-header d-block d-md-flex">
                    <h5 class="mb-0">Ações rápidas</h5>
                    <p class="ms-auto mb-0">Atalhos para as telas principais do projeto <i class="icon-bulb"></i></p>
                  </div>
                  <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <button type="button" class="btn px-0" onclick="window.location.href='/formulario'">
                        <i class="icon-plus me-2"></i> Adicionar carro
                      </button>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <button type="button" class="btn px-0" onclick="window.location.href='/frota'">
                        <i class="icon-speedometer me-2"></i> Ver frota
                      </button>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <button type="button" class="btn px-0" onclick="window.location.href='/perfil'">
                        <i class="icon-user me-2"></i> Meu perfil
                      </button>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <button type="button" class="btn px-0" onclick="window.location.href='/home'">
                        <i class="icon-home me-2"></i> Ir para home
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">Resumo operacional</h5>
                          <span class="ms-auto">Layout Stellar integrado ao Laravel</span>
                          <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">HOME</span>
                          <h4>Principal</h4>
                          <span class="report-count">Página inicial do site</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-home"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">FROTA</span>
                          <h4>Catálogo</h4>
                          <span class="report-count">Visualização de carros</span>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-speedometer"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">CADASTRO</span>
                          <h4>Veículos</h4>
                          <span class="report-count">Inserção de novos carros</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-plus"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">PERFIL</span>
                          <h4>Conta</h4>
                          <span class="report-count">Dados do usuário</span>
                        </div>
                        <div class="inner-card-icon bg-primary">
                          <i class="icon-user"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">Links internos do projeto</h4>
                      <a href="/home" class="text-dark ms-auto mb-3 mb-sm-0">Voltar ao site</a>
                    </div>
                    <div class="table-responsive border rounded p-1">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="font-weight-bold">Tela</th>
                            <th class="font-weight-bold">Rota</th>
                            <th class="font-weight-bold">Uso</th>
                            <th class="font-weight-bold">Ação</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Home</td>
                            <td>/home</td>
                            <td>Página principal</td>
                            <td><a href="/home" class="badge badge-success p-2">Abrir</a></td>
                          </tr>
                          <tr>
                            <td>Frota</td>
                            <td>/frota</td>
                            <td>Catálogo e modal de carros</td>
                            <td><a href="/frota" class="badge badge-info p-2">Abrir</a></td>
                          </tr>
                          <tr>
                            <td>Cadastro de carro</td>
                            <td>/formulario</td>
                            <td>Inserir novo veículo</td>
                            <td><a href="/formulario" class="badge badge-warning p-2">Abrir</a></td>
                          </tr>
                          <tr>
                            <td>Perfil</td>
                            <td>/perfil</td>
                            <td>Área do usuário</td>
                            <td><a href="/perfil" class="badge badge-primary p-2">Abrir</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">
                Dashboard Stellar integrado ao projeto WL Motors.
              </span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                Painel adaptado para Laravel Blade
              </span>
            </div>
          </footer>
        </div>
      </div>
    </div>

    <script src="{{ asset('stellar-admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('stellar-admin/assets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('stellar-admin/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('stellar-admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('stellar-admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('stellar-admin/assets/vendors/moment/moment.min.js') }}"></script>
    <script src="{{ asset('stellar-admin/assets/vendors/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('stellar-admin/assets/vendors/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('stellar-admin/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('stellar-admin/assets/js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('stellar-admin/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('stellar-admin/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('stellar-admin/assets/js/misc.js') }}"></script>
    <script src="{{ asset('stellar-admin/assets/js/settings.js') }}"></script>
    <script src="{{ asset('stellar-admin/assets/js/todolist.js') }}"></script>
    <script src="{{ asset('stellar-admin/assets/js/dashboard.js') }}"></script>
  </body>
</html>
