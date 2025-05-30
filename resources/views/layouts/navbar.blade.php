<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{ route('welcome') }}" class="navbar-brand p-0">
            <h2 class="text-primary"><i class="fas fa-shuttlecock"></i><img src="/img/shuttelcock2.png" alt="Shuttlecock" width="30">Ramos Badminton Center</h2>
            <!-- <img src="img/logo.png" alt="Restoran Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="{{ route('welcome') }}" class="nav-item nav-link">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('About') }}" class="dropdown-item">Informasi Lapangan</a>
                        <a href="{{ route('Menu') }}" class="dropdown-item">Daftar Peralatan</a>
                    </div>
                </div>
                <a href="{{ route('Galeri') }}" class="nav-item nav-link">Galeri</a>
                <a href="{{ route('reservasi.index') }}" class="nav-item nav-link">Pemesanan Lapangan</a>
                <a href="{{ route('testimonials.indexPublic') }}" class="nav-item nav-link">Testimonial</a>
                <a href="{{ route('Contact') }}" class="nav-item nav-link">Contact</a>
            </div>
        </div>

            <!-- Authentication Links -->
            @guest
                <a href="{{ route('showLoginForm') }}" class="nav-item nav-link">Login</a>
                @if (Route::has('register'))
                    <a class="nav-item nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else
                <div class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            @endguest
        </div>
    </nav>
</div>

