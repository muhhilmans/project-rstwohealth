<!--start sidebar-->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        {{-- <div class="logo-icon">
            <img src="{{ asset('dashboard/assets/images/logo-icon.png') }}" class="logo-img" alt="">
        </div> --}}
        <div class="logo-name flex-grow-1">
            <h5 class="mb-0 text-center">{{ env('APP_NAME') }}</h5>
        </div>
        <div class="sidebar-close">
            <span class="material-icons-outlined">close</span>
        </div>
    </div>
    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">
            <li class="{{ Route::is('cms.dashboard') ? 'mm-active' : '' }}">
                <a href="{{ route('cms.dashboard') }}">
                    <div class="parent-icon"><i class="material-icons-outlined">home</i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li class="menu-label">Pages</li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="material-icons-outlined">lock</i>
                    </div>
                    <div class="menu-title">Authentication</div>
                </a>
                <ul>
                    <li><a href="ecommerce-add-product.html"><i class="material-icons-outlined">arrow_right</i>Add
                            Product</a>
                    </li>
                    <li><a class="has-arrow" href="javascript:;"><i
                                class="material-icons-outlined">arrow_right</i>Basic</a>
                        <ul>
                            <li><a href="auth-basic-login.html" target="_blank"><i
                                        class="material-icons-outlined">arrow_right</i>Login</a></li>
                            <li><a href="auth-basic-register.html" target="_blank"><i
                                        class="material-icons-outlined">arrow_right</i>Register</a></li>
                            <li><a href="auth-basic-forgot-password.html" target="_blank"><i
                                        class="material-icons-outlined">arrow_right</i>Forgot Password</a></li>
                            <li><a href="auth-basic-reset-password.html" target="_blank"><i
                                        class="material-icons-outlined">arrow_right</i>Reset Password</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="user-profile.html">
                    <div class="parent-icon"><i class="material-icons-outlined">person</i>
                    </div>
                    <div class="menu-title">User Profile</div>
                </a>
            </li>
        </ul>
        <!--end navigation-->
    </div>
</aside>
<!--end sidebar-->
