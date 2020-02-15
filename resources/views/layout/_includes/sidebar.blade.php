<aside class="main-sidebar">
    <div class="divLogoC" style="background-color: #2e403d">
        <img id="logoMenu" src="{{ asset("/images/logo.png") }}" alt="AppSchool" style="width: 230px">
    </div>
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" id="divMenuEsquerdo">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="{{ Route::is('turma.*') ? 'active' : '' }} {{ Route::is('turmas') ? 'active' : '' }}"><a href="{{ route('turmas') }}"><i class="fa fa-list"></i> <span>Turmas</span></a></li>
            <li class="{{ Active::check('alunos') }}"><a href="{{ route('alunos') }}"><i class="fa fa-graduation-cap"></i> <span>Alunos</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>