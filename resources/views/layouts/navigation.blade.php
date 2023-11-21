<aside id="sidebar" class="sidebar closed">
    <a href="{{ route('home') }}"
        class="sidebar-menu {{ request()->routeIs('home') ? 'active-menu' : '' }}">
        H<span class="menu-text hidden">ome</span>
    </a>
    <a href="{{ route('product.index') }}"
        class="sidebar-menu {{ request()->routeIs('product.index') ? 'active-menu' : '' }}">
        O<span class="menu-text hidden">ur Products</span>
    </a>
    <a href="{{ route('about-us') }}"
        class="sidebar-menu {{ request()->routeIs('about-us') ? 'active-menu' : '' }}">
        A<span class="menu-text hidden">bout Us</span>
    </a>
</aside>