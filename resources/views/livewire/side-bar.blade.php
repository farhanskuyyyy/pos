<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header">
        <!-- Logo -->
        <a class="fw-semibold text-dual" href="index.html">
            <span class="smini-visible">
                <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider">Point<span class="fw-normal"> Of </span> Sales</span>
        </a>
        <!-- END Logo -->

        <!-- Extra -->
        <div>
            <!-- Dark Mode -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout"
                data-action="dark_mode_toggle">
                <i class="far fa-moon"></i>
            </button>
            <!-- END Dark Mode -->

            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout"
                data-action="sidebar_close" href="javascript:void(0)">
                <i class="fa fa-fw fa-times"></i>
            </a>
            <!-- END Close Sidebar -->
        </div>
        <!-- END Extra -->
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side">
            <ul class="nav-main">
                @foreach ($menus as $menu)
                    @if (count($menu->has_child) == 0)
                        <li class="nav-main-item">
                            <a class="nav-main-link {{ (request()->route()->getName() == $menu->code) ? 'active' : '' }}" href="{{ url('').'/'.$menu->url }}">
                                <i class="nav-main-link-icon si {{ $menu->icon }}"></i>
                                <span class="nav-main-link-name">{{ $menu->title }}</span>
                            </a>
                        </li>
                    @else
                        @php
                            $parent = false;
                            foreach ($menu->has_child as $child) {
                                if (request()->route()->getName() == $child->code) {
                                    $parent = true;
                                    break;
                                }
                            }
                        @endphp
                        <li class="nav-main-item {{ ($parent) ? 'open' : '' }}">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si {{ $menu->icon }}"></i>
                                <span class="nav-main-link-name">{{ $menu->title }}</span>
                            </a>
                            <ul class="nav-main-submenu">
                                @foreach ($menu->has_child as $child)
                                    <li class="nav-main-item">
                                        <a class="nav-main-link {{ (request()->route()->getName() == $child->code) ? 'active' : '' }}" href="{{ url('').'/'.$child->url }}">
                                            <span class="nav-main-link-name">{{ $child->title }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>
