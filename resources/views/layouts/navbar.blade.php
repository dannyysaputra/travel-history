<nav class="navbar navbar-expand-lg main-navbar">
    <!-- navbar nav left -->
    <form class="form-inline mr-auto" method="GET" action="/search">
        @csrf
        <!-- navbar toggler -->
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
        <!-- navbar search -->
        <div class="col-auto">
            <select onchange="searchCategories(this);" class="form-control form-select" type="search" id="mySelect">
                <option value="tanggal">Tanggal</option>
                <option value="lokasi">Lokasi</option>
                <option value="suhu">Suhu</option>
            </select>
        </div>
        <div class="col">
            <div class="form-group" id="iftanggal">
                <input name="tanggal" class="form-control" placeholder="Cari Tanggal" aria-label="Search" type="search">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </div>
            <div class="form-group" id="iflokasi" style="display: none">
                <input name="lokasi" class="form-control" placeholder="Cari Lokasi" aria-label="Search" type="search">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </div>
            <div class="form-group" id="ifsuhu" style="display: none">
                <input name="suhu" class="form-control" placeholder="Cari Suhu" aria-label="Search" type="search">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <!-- navbar right -->
    <ul class="navbar-nav navbar-right">
        <!-- navbar right item -->
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('dist/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->nama }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Logged in 5 min ago</div>
                <a href="features-profile.html" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <a href="features-activities.html" class="dropdown-item has-icon">
                    <i class="fas fa-bolt"></i> Activities
                </a>
                <a href="features-settings.html" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings
                </a>
                <div class="dropdown-divider"></div>
                <a href="/logout" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>

<script>
    // search by category
function searchCategories(category) {
    if (category.value == 'tanggal') {
        document.getElementById('iftanggal').style.display = 'block';
    } else if (category.value == 'lokasi') {
        document.getElementById('iftanggal').style.display = 'none';
        document.getElementById('iflokasi').style.display = 'block';
    } else {
        document.getElementById('iftanggal').style.display = 'none';
        document.getElementById('iflokasi').style.display = 'none';
        document.getElementById('ifsuhu').style.display = 'block';
    }
}
</script>