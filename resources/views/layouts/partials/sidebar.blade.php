<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Aprendizaje</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a><span>{{ trans('Introducción EV3') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="treeview">
                        <a><span>{{ trans('Bloques de Acción') }}</span><i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a>{{trans('Motor Mediano')}}</a></li>
                            <li><a>{{trans('Motor Grande')}}</a></li>
                            <li><a>{{trans('Mover la dirección')}}</a></li>
                            <li><a>{{trans('Mover Tanque')}}</a></li>
                            <li><a>{{trans('Pantalla')}}</a></li>
                            <li><a>{{trans('Sonido')}}</a></li>
                            <li><a>{{trans('Luz de Estado de Bloque EV3')}}</a></li>
                        </ul>
                    </li>
                    <li><a>{{ trans('Bloques de Sensores') }}</a></li>
                    <li><a>{{ trans('Bloques de Flujo') }}</a></li>
                    <li><a>{{ trans('Bloques de Datos') }}</a></li>
                    <li><a>{{ trans('Bloques Avanzados') }}</a></li>
                </ul>
            </li>


            <li class="active"><a href="{{ URL('listar') }}"><i class='fa fa-link'></i> 
            <span>Tutorias</span></a></li>


            <!-- <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>

            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li> -->

            <li class="header">Administrativo</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a><i class='fa fa-link'></i> 
            <span>Mantenimiento Tutorias</span></a></li>
            <li class="active"><a><i class='fa fa-link'></i> 
            <span>Mantenimiento Evaluaciones</span></a></li>
            <li class="active"><a><i class='fa fa-link'></i> 
            <span>Mantenimiento Cursos</span></a></li>
            <li class="active"><a><i class='fa fa-link'></i> 
            <span>Mantenimiento de Introducción</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
