@extends('Layout.layout')

@section('contenido')


    
<script>
    $(document).ready(function() {
        fetchEstudiantes();
    });
</script>

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
          
          
            <div class="col-lg-12 col-md-4 order-lg-0">
                <div class="card">
                    <div class="card-header">
                        <!-- Botón para crear nueva asistencia a la izquierda -->
                        <div class="head-label flex-grow-1 text-center" bis_skin_checked="1">
                            <h5 class="card-title mb-0">ASISTENCIA ELENCO</h5>
                        </div>
                        <button class="btn btn-primary mb-3" onclick="fetchEstudiantes()">Crear Nueva Asistencia</button>

                    </div>
                    
                    <div class="card-body">

                        <!-- Incluir el cuerpo de la tarjeta para una mejor estructura y estética -->
                        <table id="miTabla" class="table ui celled table" style="width:100%">
                           
                        </table>
                    </div>
                </div>
            </div>



            <script>
                function fetchEstudiantes() {
                    $.ajax({
                        url: '/asistencia/showall',  // Asegúrate de que esta URL es correcta y el servidor está configurado para responder a ella
                        type: 'GET',
                        success: function(response) {
                            if (response.success) {
                                console.log(response);
                                initDataTable(response.data); // Inicializa DataTable con los datos recibidos
                            } else {
                                console.error('Failed to retrieve data');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error: ' + error);
                        }
                    });
                }
        
                function initDataTable(data) {
                    var columns = [
                        { data: 'id', title: 'ID', className: 'left-align' },
                        { data: 'fecha', title: 'Fecha', className: 'left-align' },
                        { data: 'hora', title: 'Hora', className: 'left-align' },
                        {
                            title: 'Acciones',
                            orderable: false,
                            defaultContent: "",  // Añadir un contenido predeterminado
                            render: function (data, type, row, meta) {
                                return '<i class="fas fa-edit editar-icon" data-id="' + row.id + '" style="color: green;"></i>' +
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
                        },
                        destroy: true  // Añade 'destroy: true' para reinicializar el DataTable cada vez que se llama a esta función
                    });
                }
        
        
            </script>
            

        </div>
      </div>








      
    </div>
    
@endsection
