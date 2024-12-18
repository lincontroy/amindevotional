<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('admin')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Banner
    </div>

    
     <!-- Users -->
     <li class="nav-item">
        <a class="nav-link" href="{{route('users.index')}}">
            <i class="fas fa-users"></i>
            <span>Users</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('verses.index')}}">
            <i class="fas fa-users"></i>
            <span>Verses</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('psalm.index')}}">
            <i class="fas fa-users"></i>
            <span>Psalms</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('proverbs.index')}}">
            <i class="fas fa-users"></i>
            <span>Proverbs</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('promises.index')}}">
            <i class="fas fa-users"></i>
            <span>Promises</span></a>
    </li>
     

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>