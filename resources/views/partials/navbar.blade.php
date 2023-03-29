<nav class="main-header navbar navbar-expand navbar-primary navbar-light">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i
                    class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        @role('superadmin')
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-white" data-toggle="dropdown" title="Settings">
                    <i class="fas fa-cog"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                </div>
            </li>
        @endrole
        <li class="nav-item">

            <a class="nav-link text-white" href="#" title="Documentation" aria-haspopup="true"
                aria-expanded="false" target="_blank">
                <i class="fa fa-question-circle"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('logout') }}" title="Logout" aria-haspopup="true"
                aria-expanded="false"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                    class="fas fa-power-off"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>
