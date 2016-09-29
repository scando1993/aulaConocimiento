<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user.png')}}" class="img-circle" alt="User Image" />
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
                            <li><a href="{{url('ev3\motormediano')}}">{{trans('Motor Mediano')}}</a></li>
                            <li><a href="{{url('ev3\motorgrande')}}">{{trans('Motor Grande')}}</a></li>
                            <li><a href="{{url('ev3\moverdireccion')}}">{{trans('Mover la dirección')}}</a></li>
                            <li><a href="{{url('ev3\movertanque')}}">{{trans('Mover Tanque')}}</a></li>
                            <li><a href="{{url('ev3\pantalla')}}">{{trans('Pantalla')}}</a></li>
                            <li><a href="{{url('ev3\sonido')}}">{{trans('Sonido')}}</a></li>
                            <li><a href="{{url('ev3\luzestadobloque')}}">{{trans('Luz de Estado de Bloque EV3')}}</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a><span>{{ trans('Bloques de Sensores') }}</span><i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                           <li><a>{{trans('Inicio')}}</a></li>
                           <li><a>{{trans('Espera')}}</a></li>
                           <li><a>{{trans('Bucle')}}</a></li>
                           <li><a>{{trans('Interruptor')}}</a></li>
                           <li><a>{{trans('Bucle Interruptor')}}</a></li> 
                        </ul>
                    </li>
                    <li class="treeview">
                        <a><span>{{ trans('Bloques de Flujo') }}</span><i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a>{{trans('Ultrasonido')}}</a></li>
                            <li><a>{{trans('Infrarojo')}}</a></li>
                            <li><a>{{trans('Gyro')}}</a></li>
                            <li><a>{{trans('Color')}}</a></li>
                            <li><a>{{trans('Motor Rotación')}}</a></li>
                            <li><a>{{trans('Touch')}}</a></li>
                            <li><a>{{trans('Timer')}}</a></li>
                            <li><a>{{trans('Botones Brick')}}</a></li>
                            <li><a>{{trans('Sonido NXT')}}</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a><span>{{ trans('Bloques de Datos') }}</span><i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a>{{trans('Constante')}}</a></li>
                            <li><a>{{trans('Variable')}}</a></li>
                            <li><a>{{trans('Lista')}}</a></li>
                            <li><a>{{trans('Logico')}}</a></li>
                            <li><a>{{trans('Matematico')}}</a></li>
                            <li><a>{{trans('Redondear')}}</a></li>
                            <li><a>{{trans('Comparar')}}</a></li>
                            <li><a>{{trans('Rango')}}</a></li>
                            <li><a>{{trans('Texto')}}</a></li>
                            <li><a>{{trans('Aleatorio')}}</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a><span>{{ trans('Bloques Avanzados') }}</span><i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a>{{trans('Acceso archivo')}}</a></li>
                            <li><a>{{trans('Mensajeria')}}</a></li>
                            <li><a>{{trans('Conección bluetooth')}}</a></li>
                        </ul>
                        </li>
                </ul>
            </li>
            <li class="active"><a href="{{ URL('listar') }}"><i class='fa fa-angle-left pull-right'></i> 
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
            @if (! Auth::user()->rol == 1)
            <li class="header">Administrativo</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a><span>{{ trans('Mantenimientos') }}</span><i class="fa fa-angle-left pull-right"></i></a>
                <ul class = "treeview-menu">
                    <li><a href="{{ route('taller.index') }}">{{trans('Tutorias')}}</a></li>
                    <li><a>{{trans('Evaluaciones')}}</a></li>
                    <li><a>{{trans('Cursos')}}</a></li>
                    <li><a>{{trans('Introducción')}}</a></li>
                </ul>
            </li>
            @endif
            <!-- <li class="active"><a href="{{ route('taller.index') }}"><i class=''></i>  -->
            <!-- <span>Mantenimiento Tutorias</span></a></li> -->
            <!-- <li class="active"><a><i class=''></i>  -->
            <!-- <span>Mantenimiento Evaluaciones</span></a></li> -->
            <!-- <li class="active"><a><i class=''></i>  -->
            <!-- <span>Mantenimiento Cursos</span></a></li> -->
            <!-- <li class="active"><a><i class=''></i>  -->
            <!-- <span>Mantenimiento de Introducción</span></a></li> -->
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
