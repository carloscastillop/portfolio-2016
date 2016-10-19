<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::to('backend')}}">{{ Config::get('settings.sitename') }} admin</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            
            <!-- /.dropdown -->
            
            <li>
                <a href="{{ URL::to('/') }}" target="_blank" title="Ver sitio web">
                    <i class="fa fa-external-link"></i>
                </a>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#" title="Perfil {{ Auth::user()->name }}"><i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }}</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{ URL::to('exit') }}" title="Logout"><i class="fa fa-sign-out fa-fw"></i> Exit</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="{{ URL::to('/backend') }}"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('/backend/skills') }}"><i class="fa fa-trophy"></i> Skills</a>
                    </li>
                    <?php /* 
                    <li>
                        <a href="#"><i class="fa fa-trophy"></i> Skills<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ URL::to('/backend/compras') }}" title="Compras realizadas">Compras realizadas</a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/backend/compras?op=en-proceso') }}" title="En proceso de pago">En proceso de pago</a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/backend/compras?op=pendientes') }}" title="Pendientes de pago">Pendientes</a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/backend/compras?op=rechazadas') }}">Rechazadas</a>
                            </li>  
                            <li>
                                <a href="{{ URL::to('/backend/compras?op=canceladas') }}">Canceladas</a>
                            </li> 
                                                     
                        </ul>
                        <!-- /.nav-second-level -->
                        -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users"></i> Usuarios<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ URL::to('/backend/usuarios') }}">Usuarios</a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/backend/listas') }}">Listas de deseos</a>
                            </li> 
                                                      
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-heart"></i> Deseos<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ URL::to('/backend/deseos') }}">Deseos</a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/backend/categorias-deseos') }}">Categorías</a>
                            </li>  
                            <li>
                                <a href="{{ URL::to('/backend/deseos-propios') }}">Deseos propios</a>
                            </li>                          
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-align-left"></i> Recomendaciones<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ URL::to('/backend/recomienda') }}">Recomendaciones</a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/backend/categorias-recomienda') }}">Categorías</a>
                            </li>                         
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-gears"></i> Otras opciones<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ URL::to('/backend/contenidos') }}">Contenidos</a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/backend/foto-perfil') }}">Foto fondo perfil</a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/backend/media') }}">Kit diseño</a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/backend/foto-home') }}">Foto slider home</a>
                            </li>                        
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    
                     */ ?>
                    

                    <li>
                        <a href="{{ URL::to('/exit') }}"><i class="fa fa-sign-out fa-fw"></i> Exit</a>
                    </li>
                
                
                
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
<div id="page-wrapper">