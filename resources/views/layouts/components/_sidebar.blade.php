<ul class="sidebar-menu">
    <li class="menu-header">Beranda</li>
    <li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
        <a href="{{ route('home.index') }}" class="nav-link"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
    </li>

    <li class="menu-header">Data</li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><span>Lembaga</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{ route('kampuses.index') }}">Kampus</a></li>
        </ul>
      </li>
</ul>

