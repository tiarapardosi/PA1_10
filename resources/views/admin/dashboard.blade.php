<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow border-0 rounded-4 overflow-hidden">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h3 class="mb-0">Admin Dashboard</h3>
                </div>

                <div class="card-body p-4">
                    @if (session('status'))
                        <div class="alert alert-success text-center" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="text-center fs-5 mb-4">Selamat datang, <strong>{{ Auth::user()->name }}</strong> 👋</p>

                    <div class="d-flex flex-wrap justify-content-center gap-3 mb-4">
                        <a href="{{ route('admin.manageUsers') }}" class="btn btn-outline-primary btn-lg rounded-pill px-4">
                            <i class="fas fa-users me-2"></i> Kelola Pengguna
                        </a>
                        <a href="{{ route('admin.manageBookings') }}" class="btn btn-outline-success btn-lg rounded-pill px-4">
                            <i class="fas fa-calendar-check me-2"></i> Kelola Pemesanan
                        </a>
                    </div>

                    <div class="d-grid mt-3">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-lg rounded-pill">
                                <i class="fas fa-sign-out-alt me-2"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
