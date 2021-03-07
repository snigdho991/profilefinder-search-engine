<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                <span class="brand-logo">
                    <i data-feather="home"></i>
                </span>
                    <h2 class="brand-text">Admin Panel</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            
            
            <li class=" nav-item {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('home') }}"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="Dashboard">Dashboard</span></a>
            </li>
            <li class=" nav-item {{ Route::currentRouteName() == 'settings.index' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('settings.index') }}"><i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Settings">Settings</span></a>
            </li>
            <li class=" nav-item {{ Route::currentRouteName() == 'profiles.list' ? 'active' : '' }}  {{ Route::currentRouteName() == 'profiles.edit' ? 'active' : '' }}  {{ Route::currentRouteName() == 'profiles.show' ? 'active' : '' }} {{ Route::currentRouteName() == 'profiles.create' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('profiles.list') }}"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="Profiles">Profiles</span></a>
            </li>
            <li class=" nav-item {{ Route::currentRouteName() == 'requests.list' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('requests.list') }}"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Requests">Requests</span></a>
            </li>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"><i data-feather="power"></i><span class="menu-title text-truncate" data-i18n="Logout">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            
        </ul>
    </div>
</div>
<!-- END: Main Menu-->