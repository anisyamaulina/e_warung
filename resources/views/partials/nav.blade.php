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

    <div class="row border-top border-bottom sticky-top">
        <div class="col-lg-12">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-xl-5">
                
                
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <!-- <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Warung</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                
                    <!-- <div class="navbar-nav mr-auto py-0">
                        <a href="/" class="nav-item nav-link {{ ($title === "Beranda") ? 'active' : 'collapsed' }}">Beranda</a>
                        <a href="/warung" class="nav-item nav-link {{ ($title === "Warung") ? 'active' : 'collapsed' }}">Warung</a>
                        @auth
                            @if ( Auth::user()->kategori == 'Pembeli')
                                <a href="/keranjang" class="nav-item nav-link {{ ($title === "Keranjang") ? 'active' : 'collapsed' }}">Keranjang</a>
                            @endif
                        @endauth
                        <a href="/contact" class="nav-item nav-link {{ ($title === "Contact") ? 'active' : 'collapsed' }}">Contact</a>
                    </div> -->
                    <div class="navbar-nav ml-auto py-0">
                        
                            <a href="" class="text-decoration-none">
                            <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Warung</h1>
                            </a>
                       
                      
        
                        
                        {{-- Jangan lupa dibalik, Login guest, nama auth --}}
                        @guest
                        <div class="custom-area" style="display: flex; justify-content: space-between;">
                            
                        <a href="/" class="nav-item nav-link {{ ($title === "Beranda") ? 'active' : 'collapsed' }}">Beranda</a>
                        <a href="/warung" class="nav-item nav-link {{ ($title === "Warung") ? 'active' : 'collapsed' }}">Warung</a>
                        @auth
                            @if ( Auth::user()->kategori == 'Pembeli')
                                <a href="/keranjang" class="nav-item nav-link {{ ($title === "Keranjang") ? 'active' : 'collapsed' }}">Keranjang</a>
                            @endif
                        @endauth
                        <a href="/contact" class="nav-item nav-link {{ ($title === "Contact") ? 'active' : 'collapsed' }}">Kontak</a>
                            <a href="/admin" class="nav-item nav-link">Admin</a>
                            <a href="/login" class="nav-item nav-link">Masuk</a>
                            <a href="/register" class="nav-item nav-link">Daftar</a>
                        </div>
                        @endguest
                        @auth
                            <div class="nav-item dropdown">
                                <
                                    {{ Auth::user()->nama }}<i class="fa fa-user mx-2" aria-hidden="true"></i>
                                </a>
                                <!-- <div class=""> -->
                                    <a href="/profile" class="dropdown-item">Profil</a>
                                    @auth
                                        @if ( Auth::user()->kategori == 'Pembeli')
                                            <a href="/order" class="dropdown-item">Pesanan</a>
                                        @endif
                                    @endauth
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                <!-- </div> -->
                            </div>
                        @endauth
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
