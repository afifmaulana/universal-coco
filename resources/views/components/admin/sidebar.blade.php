<div class="sidebar">
    <div class="scrollbar-inner sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('uploads/user/'. Auth::user()->image) }}">
            </div>
            <div class="info">
                <a class="___class_+?5___" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <span>
                        {{ Auth::user()->name }}
                        <span class="user-level">Administrator</span>
                    </span>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item {{ request()->routeIs(['dashboard.index']) ? 'active' : '' }}">
                <a href="{{ route('dashboard.index') }}">
                    <i class="la la-dashboard" style="color: #1150a1"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="nav-item {{ request()->routeIs(['title-section.index']) ? 'active' : '' }}">
                <a href="{{ route('title-section.index') }}">
                    <i class="la la-edit" style="color: #1150a1"></i>
                    <p>Title Section</p>
                </a>
            </li>

            <li class="nav-item {{ request()->routeIs(['menu.index']) ? 'active' : '' }}">
                <a href="{{ route('menu.index') }}">
                    <i class="la la-list-alt" style="color: #1150a1"></i>
                    <p>Menu</p>
                </a>
            </li>

            <li class="nav-item {{ request()->routeIs(['about-us.edit']) ? 'active' : '' }}">
                <a href="{{ route('about-us.edit') }}">
                    <i class="la la-quote-left" style="color: #1150a1"></i>
                    <p>About Us</p>
                </a>
            </li>

            <li class="nav-item {{ request()->routeIs(['banner.edit']) ? 'active' : '' }}">
                <a href="{{ route('banner.edit') }}">
                    <i class="la la-picture-o" style="color: #1150a1"></i>
                    <p>Banner</p>
                </a>
            </li>


            <li class="nav-item has-submenu {{ request()->routeIs(['feature.create', 'feature.index']) ? 'active' : '' }}">
                <a class="nav-link" href="#">
                    <i class="la la-pagelines" style="color: #1150a1"></i>
                    <p>Features</p>
                    <span class="la la-angle-down"></span>
                </a>
                <ul class="submenu collapse">
                    <li>
                        <a class="nav-link" href="{{ route('feature.create') }}">
                            Add Feature
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('feature.index') }}">
                            Features List
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-submenu {{ request()->routeIs(['product.create', 'product.index']) ? 'active' : '' }}">
                <a class="nav-link" href="#">
                    <i class="la la-cubes" style="color: #1150a1"></i>
                    <p>Our Products</p>
                    <span class="la la-angle-down"></span>
                </a>
                <ul class="submenu collapse">
                    <li>
                        <a class="nav-link" href="{{ route('product.create') }}">
                            Add Product
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('product.index') }}">
                            Products List
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ request()->routeIs(['team.index']) ? 'active' : '' }}">
                <a href="{{ route('team.index') }}">
                    <i class="la la-sitemap" style="color: #1150a1"></i>
                    <p>Our Teams</p>
                </a>
            </li>

            <li class="nav-item {{ request()->routeIs(['setting.edit']) ? 'active' : '' }}">
                <a href="{{ route('setting.edit') }}">
                    <i class="la la-gear" style="color: #1150a1"></i>
                    <p>Setting</p>
                </a>
            </li>

            <li class="nav-item {{ request()->routeIs(['footer.edit']) ? 'active' : '' }}">
                <a href="{{ route('footer.edit') }}">
                    <i class="la la-commenting" style="color: #1150a1"></i>
                    <p>Footer</p>
                </a>
            </li>

            <li class="nav-item {{ request()->routeIs(['profile.edit']) ? 'active' : '' }}">
                <a href="{{ route('profile.edit') }}">
                    <i class="la la-user" style="color: #1150a1"></i>
                    <p>Profile</p>
                </a>
            </li>
            <div style="margin-bottom: 100px"></div>
        </ul>
    </div>
</div>
