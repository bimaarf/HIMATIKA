<nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="{{ route('fe-berita.index') }}" class="text-gray">HIMATIKA FMIPA UNTAN</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="{{ route('fe-berita.index') }}">Beranda</a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ route('fe-berita.tentang') }}">Tentang</a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ route('fe-berita.profil-kami') }}">Profil Kami</a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ route('dashboard') }}">Admin</a>
                    </li>
                    @if (Auth::user())
                        <li class="nav-link">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                            </form>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="social text-gray">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="https://instagram.com/bimaarf_"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </nav>