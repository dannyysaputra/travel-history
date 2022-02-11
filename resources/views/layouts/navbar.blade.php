<nav class="navbar navbar-expand-lg main-navbar">
    <!-- navbar nav left -->
    <form class="form-inline mr-auto">
        <!-- navbar toggler -->
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a>
            </li>
        </ul>
        <!-- navbar search -->
        <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- navbar right -->
    <ul class="navbar-nav navbar-right">
        <!-- navbar notification toggle -->
        <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <!-- navbar notification dropdown -->
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Notifications
                    <div class="float-right">
                        <a href="#">View All</a>
                    </div>
                </div>
                <!-- navbar notification dropdown content -->
                <div class="dropdown-list-content">
                    <!-- navbar notification dropdown item -->
                    <a href="#" class="dropdown-item">
                        <img src="{{ asset('dist/img/avatar/avatar-5.png') }}"
                            class="rounded-circle dropdown-item-img">
                        <div class="dropdown-item-desc">
                            <b>Alfa Zulkarnain</b> has moved task <b>Add logo</b> to <b>Done</b>
                            <div class="time">Yesterday</div>
                        </div>
                    </a>
                    ...
                </div>
            </div>
        </li>
        <!-- navbar right item -->
        <li class="nav-item">
            <a href="/login" class="nav-link">Login</a>
        </li>
    </ul>
</nav>
