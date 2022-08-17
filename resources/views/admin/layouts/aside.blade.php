<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="logo"><a class="navbar-brand" href="{{ route('dashboard') }}"><img class="img-fluid" src="{{ asset('admin/images/logo-dark.svg') }}" alt="" /></a></div>
        <div class="navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" aria-current="page" href="{{ route('dashboard') }}"><i class="fas fa-home"></i>Dashboard</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" role="button"><i class="fas fa-home">
                        </i>projects</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('projects.index') }}">show</a></li>
                        <li><a class="dropdown-item" href="{{ route('projects.create') }}">add</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- <div class="logout"><a class="btn hvr-sweep-to-top" href="signin.html">logout</a></div> -->
</header>
