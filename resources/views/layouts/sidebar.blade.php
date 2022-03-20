<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="{{ (request()->is('dashboard') || request()->is('input-dashboard') || request()->is('table-user')) ? 'active' : '' }}">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            <ul class="dropdown-menu">
                <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}"><a class="nav-link" href="/">General Dashboard</a></li>
                <li class="{{ (request()->is('input-dashboard')) ? 'active' : '' }}"><a class="nav-link" href="/input-dashboard">Input Dashboard</a></li>
                <li class="{{ (request()->is('table-user') ? 'active' : '') }}"><a class="nav-link" href="/table-user">User Table</a></li>
            </ul>
        </li>
</aside>
