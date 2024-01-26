<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Menu</span>
                </li>
                <li class="{{ (request()->is('apps/dashboard*')) ? 'active' : ''}}">
                    <a href="holiday.html"><i class="fas fa-home"></i> <span>Beranda</span></a>
                </li>
                <li class="menu-title">
                    <span>Data Keuangan</span>
                </li>
                <li class="menu-title">
                    <span>Pengaturan</span>
                </li>
                <li class="{{ (request()->is('apps/users*')) ? 'active' : ''}}">
                    <a href="{{ route('apps.users')}}"><i class="fas fa-users"></i> <span>Pengguna</span></a>
                </li>
                <li class="{{ (request()->is('apps/roles*')) ? 'active' : ''}}">
                    <a href="holiday.html"><i class="fas fa-cogs"></i> <span>Hak Akses</span></a>
                </li>

                {{-- <li class="submenu active">
                    <a href="#"><i class="feather-grid"></i> <span> Master Data</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="index.html" class="active">Data 1</a></li>
                        <li><a href="teacher-dashboard.html">Data 2</a></li>
                        <li><a href="student-dashboard.html">Data 3</a></li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
</div>
