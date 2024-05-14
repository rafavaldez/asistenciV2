@extends('Layout.layout')

@section('contenido')


    
    <div class="layout-page">
      <!-- Navbar -->
      <nav
        class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
        id="layout-navbar"
        >
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
            </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
            <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input
                type="text"
                class="form-control border-0 shadow-none"
                placeholder="Search..."
                aria-label="Search..."
                />
            </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Place this tag where you want the button to render. -->
            <li class="nav-item lh-1 me-3">
                <a
                class="github-button"
                href="https://github.com/themeselection/sneat-html-admin-template-free"
                data-icon="octicon-star"
                data-size="large"
                data-show-count="true"
                aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                >Star</a
                >
            </li>

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                <div class="avatar avatar-online">
                    <img src="{{ asset('EstiloEnir/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="#">
                    <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                        <div class="avatar avatar-online">
                            <img src="{{ asset('EstiloEnir/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                        </div>
                        </div>
                        <div class="flex-grow-1">
                        <span class="fw-semibold d-block">John Doe</span>
                        <small class="text-muted">Admin</small>
                        </div>
                    </div>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a class="dropdown-item" href="#">
                    <i class="bx bx-user me-2"></i>
                    <span class="align-middle">My Profile</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">
                    <i class="bx bx-cog me-2"></i>
                    <span class="align-middle">Settings</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">
                    <span class="d-flex align-items-center align-middle">
                        <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                        <span class="flex-grow-1 align-middle">Billing</span>
                        <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                    </span>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a class="dropdown-item" href="auth-login-basic.html">
                    <i class="bx bx-power-off me-2"></i>
                    <span class="align-middle">Log Out</span>
                    </a>
                </li>
                </ul>
            </li>
            <!--/ User -->
            </ul>
        </div>
      </nav>
      <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
          <!--congratulation-->
          <div class="col-lg-8 mb-4 order-0">
            
            <div class="card card h-100" >
              <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                  <div class="card-body">
                    <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                    <p class="mb-4">
                      You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                      your profile.
                    </p>

                    <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                  </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                  <div class="card-body pb-0 px-0 px-md-4">
                    <img
                      src="../assets/img/illustrations/man-with-laptop-light.png"
                      height="140"
                      alt="View Badge User"
                      data-app-dark-img="illustrations/man-with-laptop-dark.png"
                      data-app-light-img="illustrations/man-with-laptop-light.png"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--congratulationend-->
          <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <img
                          src="../assets/img/icons/unicons/chart-success.png"
                          alt="chart success"
                          class="rounded"
                        />
                      </div>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="cardOpt3"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                          <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                      </div>
                    </div>
                    <span class="fw-semibold d-block mb-1">Profit</span>
                    <h3 class="card-title mb-2">$12,628</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-6 mb-4">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                      <div class="avatar flex-shrink-0">
                        <img
                          src="../assets/img/icons/unicons/wallet-info.png"
                          alt="Credit Card"
                          class="rounded"
                        />
                      </div>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="cardOpt6"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                          <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                      </div>
                    </div>
                    <span>Sales</span>
                    <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 md-4 order-2">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-6 mb-4">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                        <p class="mb-4">
                          You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                          your profile.
                        </p>
    
                        <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                      </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img
                          src="../assets/img/illustrations/man-with-laptop-light.png"
                          height="140"
                          alt="View Badge User"
                          data-app-dark-img="illustrations/man-with-laptop-dark.png"
                          data-app-light-img="illustrations/man-with-laptop-light.png"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-6 mb-4">
                <div class="card">
                  <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                      <div class="card-body">
                        <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                        <p class="mb-4">
                          You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                          your profile.
                        </p>
    
                        <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                      </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4">
                        <img
                          src="../assets/img/illustrations/man-with-laptop-light.png"
                          height="140"
                          alt="View Badge User"
                          data-app-dark-img="illustrations/man-with-laptop-dark.png"
                          data-app-light-img="illustrations/man-with-laptop-light.png"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-12 col-md-4 order-lg-3">
            <div class="card">
                <div class="card-body">
                    <!-- Incluir el cuerpo de la tarjeta para una mejor estructura y estética -->
                    <table id="miTabla" class="table ui celled table" style="width:100%">
                       
                    </table>
                </div>
            </div>
        </div>



          <script>
            $(document).ready(function() {
                var data = [
                    {"Nombre": "John Doe", "Edad": 30, "Correo_electronico": "john@example.com"},
                    {"Nombre": "Jane Smith", "Edad": 25, "Correo_electronico": "jane@example.com"},
                    {"Nombre": "Bob Johnson", "Edad": 40, "Correo_electronico": "bob@example.com"},
                    {"Nombre": "John Doe", "Edad": 30, "Correo_electronico": "john@example.com"}
                    
                ];
          
                var columns = [
                    { data: 'Nombre', title: 'Nombre', className: 'left-align' },
                    { data: 'Edad', title: 'Edad', className: 'left-align' },
                    { data: 'Correo_electronico', title: 'Correo Electrónico', className: 'left-align' },
                    {
                        title: 'Acciones',
                        orderable: false,
                        defaultContent: "",  // Añadir un contenido predeterminado
                        render: function (data, type, row, meta) {
                            return '<i class="fas fa-edit editar-icon" data-id="' + row.Edad + '" style="color: green;"></i>' +
                                   '<i class="fas fa-plus agregar-icon"></i>';
                        },
                        className: 'left-align'
                    }
                ];
          
                $('#miTabla').DataTable({
                    responsive: true,
                    data: data,
                    columns: columns,
                    paging: true,
                    searching: true,
                    ordering: true,
                    info: true,
                    language: {
                        zeroRecords: "No se encontraron resultados",
                        info: "Mostrando _END_ de _TOTAL_ registros",
                        infoFiltered: "(filtrado de un total de _MAX_ registros)",
                        search: "Buscar:",
                        lengthMenu: "Mostrar _MENU_ registros",
                        paginate: {
                            previous: "Anterior",
                            next: "Siguiente"
                        }
                    }
                });
            });
          </script>
            

        </div>
      </div>

<!-- jQuery -->



      
    </div>
    
@endsection
