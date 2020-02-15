<div class="wrapper">
    <header class="main-header">
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i>
                            <span class="hidden-xs">
                                    {{ Auth::user()->name }}
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a style="padding: 10px 20px;" href="{{ route('login.sair') }}" class=""><i class="fa fa-sign-out"></i>Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>