    <!--INICIO MENU
dropdown-item d-flex align-items-center justify-content-between-->

<header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex align-items-left">
                <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
                </button>
            </div>
            <div class="d-flex align-items-center">
                <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        USUARIO
                        <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                               Mi Perfil
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                               Cerrar Sesión
                            </a>
                        </div>
                </div>

            </div>

        </div>

    </header>

    <div class="vertical-menu">
        <div data-simplebar class="h-100">

            <div class="navbar-brand-box">
               <a href="" class="logo">
                <!--Imagen o texto--> LOGO
               </a>

            </div>

            <div id="sidebar-menu">
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Menu</li>
                    <li>
                        <a href="" class="waves-effect"><i class="feather-home"></i>Inicio</a>
                    </li>
                    <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fas fa-boxes"></i>Ventas</a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="ventas.php">Mis Ventas</a></li>
                            <li><a href="detalle_venta.php">Detalle de Venta</a></li>
                        </ul>
                    </li>
                    <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fas fa-cart-arrow-down"></i>Productos</a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="producto.php">Mis Productos</a></li>
                            <li><a href="categoria.php">Categorias</a></li>
                        </ul>
                    </li>
                    <li>
                    <a href="formulario.php" class="waves-effect"><i class="fas fa-users"></i>Usuarios</a>
                    </li>
                    <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fas fa-dolly-flatbed"></i>Pedidos</a>
                         <ul class="sub-menu" aria-expanded="false">
                            <li><a href="pedido.php"> Mis Pedidos</a></li>
                            <li><a href="detalle_pedido.php">Detalle del Pedido</a></li>
                        </ul>
                    </li>
                   <!-- <li>
                    <a href="" class="waves-effect"><i class="mdi mdi-atom-variant"></i>Devoluciones</a>
                    </li>-->
                    <li>
                    <a href="cliente.php" class="waves-effect"><i class="fas fa-user-friends"></i>Clientes</a>
                    </li>
                    <li>
                    <a href="reporte.php" class="waves-effect"><i class="dripicons-clipboard"></i>Reportes</a>
                    </li>
                    <li>
                    <a href="proveedor.php" class="waves-effect"><i class="fas fa-shipping-fast"></i>Proveedores</a>
                    </li>
                    <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="fab fa-whmcs"></i>Mantenimiento</a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="sistema.php">Datos / Sistema</a></li>
                            <li><a href="empresa.php">Datos / Empresa</a></li>
                            <li><a href="roles.php">Roles</a></li>
                            
                        </ul>
                 
                    </li>
                </ul>

            </div>

        </div>

    </div>
     <!--FIN MENU-->