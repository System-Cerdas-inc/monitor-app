<ul class="navbar-nav iq-main-menu" id="sidebar">
    <div class="logo-app m-auto">
        <img src="{{ asset('images/siaap.png') }}" alt="" srcset="">
    </div>
    <li class="nav-item static-item">
        <a class="nav-link static-item disabled" tabindex="-1">
            <span class="default-icon">Home</span>
            <span class="mini-icon">H</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ activeRoute(route('dashboard')) }}" aria-current="page" href="{{ route('dashboard') }}">
            <i class="icon">
                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4"
                        d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z"
                        fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z"
                        fill="currentColor"></path>
                </svg>
            </i>
            <span class="item-name">Dashboard</span>
        </a>
    </li>
    <li>
        <hr class="hr-horizontal">
    </li>
    <li class="nav-item static-item">
        <a class="nav-link static-item disabled" tabindex="-1">
            <span class="default-icon">Pages</span>
            <span class="mini-icon">P</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-table" role="button" aria-expanded="false"
            aria-controls="sidebar-table">
            <div class="icon">
                <i class="fa-solid fa-database"></i>
            </div>
            <span class="item-name">Data Master</span>
            <i class="right-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </i>
        </a>
        <ul class="sub-nav collapse" id="sidebar-table" data-bs-parent="#sidebar">
            <li class="nav-item">
                <a class="nav-link {{ activeRoute(route('listopd')) }}"
                    href="{{ route('listopd') }}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon">O</i>
                    <span class="item-name">OPD</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ activeRoute(route('listuptd')) }} "href="{{ route('listuptd') }}">
                    <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                            <g>
                                <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                            </g>
                        </svg>
                    </i>
                    <i class="sidenav-mini-icon">U</i>
                    <span class="item-name">UPTD</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ activeRoute(route('listsites')) }}" href="{{ route('listsites') }}">
            <div class="icon">
                <i class="fa-solid fa-globe"></i>
            </div>
            <span class="item-name">Data Sites</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ activeRoute(route('listvalidasi')) }}" href="{{ route('listvalidasi') }}">
            <i class="icon">
                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4"
                        d="M12.0865 22C11.9627 22 11.8388 21.9716 11.7271 21.9137L8.12599 20.0496C7.10415 19.5201 6.30481 18.9259 5.68063 18.2336C4.31449 16.7195 3.5544 14.776 3.54232 12.7599L3.50004 6.12426C3.495 5.35842 3.98931 4.67103 4.72826 4.41215L11.3405 2.10679C11.7331 1.96656 12.1711 1.9646 12.5707 2.09992L19.2081 4.32684C19.9511 4.57493 20.4535 5.25742 20.4575 6.02228L20.4998 12.6628C20.5129 14.676 19.779 16.6274 18.434 18.1581C17.8168 18.8602 17.0245 19.4632 16.0128 20.0025L12.4439 21.9088C12.3331 21.9686 12.2103 21.999 12.0865 22Z"
                        fill="currentColor"></path>
                    <path
                        d="M11.3194 14.3209C11.1261 14.3219 10.9328 14.2523 10.7838 14.1091L8.86695 12.2656C8.57097 11.9793 8.56795 11.5145 8.86091 11.2262C9.15387 10.9369 9.63207 10.934 9.92906 11.2193L11.3083 12.5451L14.6758 9.22479C14.9698 8.93552 15.448 8.93258 15.744 9.21793C16.041 9.50426 16.044 9.97004 15.751 10.2574L11.8519 14.1022C11.7049 14.2474 11.5127 14.3199 11.3194 14.3209Z"
                        fill="currentColor"></path>
                </svg>
            </i>
            <span class="item-name">Validasi</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ activeRoute(route('listmonitoring')) }}" href="{{ route('listmonitoring') }}">
            <div class="icon">
                <i class="fa-solid fa-desktop"></i>
            </div>
            <span class="item-name">Monitoring</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ activeRoute(route('listlaporan')) }}" href="{{ route('listlaporan') }}">
            <div class="icon">
                <i class="fa-solid fa-flag fa-lg"></i>
            </div>
            <span class="item-name">Laporan</span>
        </a>
    </li>
    @if(auth()->user()->user_type == 'admin')
    <li class="nav-item">
        <a class="nav-link {{ activeRoute(route('users.index')) }}" href="{{ route('users.index') }}">
            <div class="icon">
                <i class="fa-solid fa-users-gear"></i>
            </div>
            <span class="item-name">Manage Users</span>
        </a>
    </li>
    @endif
    <li>
        <hr class="hr-horizontal">
    </li>
</ul>
