<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="#" class="app-brand-link">
            <span class="app-brand-logo">
                <img src="{{asset('assets/img/favicon/NSB.png')}}" alt="Brand Logo" style="width: 50px; height: auto;">
            </span>
            <span class="app-text demo menu-text fw-bolder ms-2">FURNITURE</span>
        </a>

        <!-- <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a> -->
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="{{route('dashboard')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('users')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-user-circle"></i>
            <div data-i18n="Analytics">Users</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('furnitures')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-cart"></i>
            <div data-i18n="Analytics">Furniture</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('product')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-store-alt"></i>
            <div data-i18n="Analytics">Product</div>
            </a>
        </li>
       <!--  <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
            <div data-i18n="Authentications">Authentications</div>
            </a>
            <ul class="menu-sub">
            <li class="menu-item">
                <a href="auth-login-basic.html" class="menu-link" target="_blank">
                <div data-i18n="Basic">Login</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="auth-register-basic.html" class="menu-link" target="_blank">
                <div data-i18n="Basic">Register</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                <div data-i18n="Basic">Forgot Password</div>
                </a>
            </li>
            </ul>
        </li> -->
    </ul>
</aside>
<!-- / Menu -->
