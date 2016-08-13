<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo url("img/SENA.jpg")?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <!-----------Modulo de Administracion-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span>Administracion</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#"><i class="fa fa-user"></i> Persona <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('persona/crear') }}"><i class="fa fa-circle-o"></i> Crear</a></li>
                            <li><a href="{{ url('persona/listar') }}"><i class="fa fa-circle-o"></i> Consultar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cog"></i> Empresa <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('empresa/crear') }}"><i class="fa fa-circle-o"></i> Crear</a></li>
                            <li><a href="{{ url('empresa/crear') }}"><i class="fa fa-circle-o"></i> Consultar</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-----------Modulo de Produccion-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-fw fa-bar-chart-o"></i>
                    <span>Produccion</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#"><i class="fa fa-ticket"></i> Talla <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('talla/crear') }}"><i class="fa fa-circle-o"></i> Crear</a></li>
                            <li><a href="{{ url('talla/listar') }}"><i class="fa fa-circle-o"></i> Consultar</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="treeview-menu">
                    <li>
                        <a href="#"><i class="fa fa-ticket"></i> Producto <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('producto/create') }}"><i class="fa fa-circle-o"></i> Crear</a></li>
                            <li><a href="{{ url('producto/listar') }}"><i class="fa fa-circle-o"></i> Consultar</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="treeview-menu">
                    <li>
                        <a href="#"><i class="fa fa-cog"></i> Color <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('color/create') }}"><i class="fa fa-circle-o"></i> Registrar</a></li>
                            <li><a href="{{ url('color/listar') }}"><i class="fa fa-circle-o"></i> Consultar</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-----------Modulo de Inventario-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-fw fa-barcode"></i>
                    <span>Inventario</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#"><i class="fa fa-ticket"></i> Bodega <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('') }}"><i class="fa fa-circle-o"></i> Crear</a></li>
                            <li><a href="{{ url('') }}"><i class="fa fa-circle-o"></i> Consultar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-ticket"></i> Orden de Compra <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('') }}"><i class="fa fa-circle-o"></i> Crear</a></li>
                            <li><a href="{{ url('') }}"><i class="fa fa-circle-o"></i> Consultar</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-----------Modulo de Usuarios-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Usuarios</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <li><a href="<?php echo url('produccion/create') ?>"><i class="fa fa-circle-o"></i> Crear</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Consultar</a></li>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>