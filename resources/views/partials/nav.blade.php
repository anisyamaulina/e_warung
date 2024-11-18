    <!-- Topbar Start -->
    <!-- <div class="container-fluid"> -->
        <!-- <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="/admin">Admin</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div> -->
        <!-- <div class="row align-items-center bg-light navbar-light py-3 px-xl-5"> -->
            <!-- <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Warung</h1>
                </a>
            </div> -->
            <!-- <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div> -->
            <!-- @auth
                @if ( Auth::user()->kategori == 'Pembeli')
                    <div class="col-lg-3 col-6 text-right">
                        <a href="/keranjang" class="btn border">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="badge">{{ count((array) session('cart')) }}</span>
                        </a>
                    </div>
                @endif
            @endauth -->
        <!-- </div> -->
    <!-- </div> -->
    <!-- Topbar End -->

    <div class="container-fluid">
        <div class="row border-top border-bottom sticky-top d-flex justify-content-end">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 px-2">
                <a class="navbar-brand" href="#">
                    <h1 class="m-0 display-5 font-weight-semi-bold">
                        <span class="text-primary font-weight-bold border px-3 mr-1">E</span>Warung
                    </h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="/" class="nav-item nav-link {{ ($title === 'Beranda') ? 'active' : '' }}">Beranda</a>
                        <a href="/warung" class="nav-item nav-link {{ ($title === 'Warung') ? 'active' : '' }}">Warung</a>
                        <a href="/contact" class="nav-item nav-link {{ ($title === 'Contact') ? 'active' : '' }}">Kontak</a>
                        @guest
                            <a href="/admin" class="nav-item nav-link">Admin</a>
                            <a href="/login" class="nav-item nav-link">Masuk</a>
                            <a href="/register" class="nav-item nav-link">Daftar</a>
                        @endguest
                        @auth
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->nama }} <i class="fa fa-user mx-2" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu w-auto" aria-labelledby="userDropdown">
                                    <li><a class="dropdown-item" href="/profile">Profil</a></li>
                                    @if (Auth::user()->kategori == 'Pembeli')
                                        <li><a class="dropdown-item" href="/order">Pesanan</a></li>
                                    @endif
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @endauth
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
<style scoped>
.dropdown-menu {
    left: -7rem !important;
}
</style>