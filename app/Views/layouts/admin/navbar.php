<?= $this->extend('layout/admin/main') ?>

<?= $this->section('navbar') ?>
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-hide-on-scroll navbar-border navbar-shadow navbar-brand-center">
    <div class="navbar-wrapper">

        <div class="navbar-header">
            <!-- Logo -->
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto">
                    <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                        <i class="ft-menu font-large-1"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="#">
                        <img class="brand-logo" alt="modern admin logo" src="<?= base_url() . 'public/dashboard/images/logo/logo.png' ?>">
                        <h3 class="brand-text">
                            <!-- {{ config('app.name') }} -->
                        </h3>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
                        <i class="ft-more-vertical"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Settings Dropdown -->
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <!-- Hamburger -->
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                            <i class="ft-menu"></i>
                        </a>
                    </li>
                </ul>

                
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="mr-1">Hello,
                                <span class="user-name text-bold-700">
                                    <!-- {{ Auth::user()->name }} -->
                                </span>
                            </span>
                            <span class="avatar avatar-online">
                                <img src="<?= base_url() . 'public/dashboard/images/portrait/small/avatar-s-1.png' ?>" alt="avatar">
                                <i></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">
                                <i class="ft-user"></i> Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="ft-check-square"></i> Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <!-- Authentication -->
                            <!-- <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </x-dropdown-link>
                            </form> -->
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<?= $this->endSection() ?>
