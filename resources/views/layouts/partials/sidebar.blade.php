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
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> 
            <span>Introducción EV3</span></a></li>

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
            <li class="active"><a href="{{ route('taller.index') }}"><i class='fa fa-link'></i> 
            <span>Mantenimiento Tutorias</span></a></li>
            <li class="active"><a href="#"><i class='fa fa-link'></i> 
            <span>Mantenimiento Evaluaciones</span></a></li>
            <li class="active"><a href="#"><i class='fa fa-link'></i> 
            <span>Mantenimiento Cursos</span></a></li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
