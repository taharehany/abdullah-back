<header>
   <nav class="navbar navbar-expand-lg navbar-light">
      <div class="logo"><a class="navbar-brand" href="{{ route('dashboard') }}"><img class="img-fluid" src="{{ asset('admin/images/logo-dark.svg') }}" alt="" /></a></div>
      <div class="navbar-collapse">
         <ul class="navbar-nav">
            <li class="nav-item active"><a class="nav-link" aria-current="page" href="{{ route('dashboard') }}"><i class="fas fa-home"></i>Dashboard</a></li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" role="button">
                  <i class="fas fa-home"></i>projects
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('projects.index') }}">Show</a></li>
                  <li><a class="dropdown-item" href="{{ route('projects.create') }}">Add</a></li>
               </ul>

               <!-- <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('projects.create') }}">Add New Project</a></li>
                  <li><a class="dropdown-item" href="{{ route('projects.index') }}">Show Branding</a></li>
                  <li><a class="dropdown-item" href="{{ route('projects.index') }}">Show Social Media</a></li>
                  <li><a class="dropdown-item" href="{{ route('projects.index') }}">Show UI UX Design</a></li>
               </ul> -->
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" role="button">
                  <i class="fas fa-home"></i>what can do
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('can.index') }}">Show</a></li>
                  <li><a class="dropdown-item" href="{{ route('can.create') }}">Add</a></li>
               </ul>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" role="button">
                  <i class="fas fa-home"></i>about me boxes
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('about.index') }}">Show</a></li>
                  <li><a class="dropdown-item" href="{{ route('about.create') }}">Add</a></li>
               </ul>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" role="button">
                  <i class="fas fa-home"></i>about me page
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('aboutme.edit') }}">Edit</a></li>
               </ul>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" role="button">
                  <i class="fas fa-home"></i>the reason behind
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('reason.edit') }}">Edit</a></li>
               </ul>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" role="button">
                  <i class="fas fa-home"></i>website settings
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('settings.edit') }}">Edit</a></li>
               </ul>
            </li>
         </ul>
      </div>
   </nav>
   <!-- <div class="logout"><a class="btn hvr-sweep-to-top" href="signin.html">logout</a></div> -->
</header>
