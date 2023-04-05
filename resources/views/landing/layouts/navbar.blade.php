<nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
        <li><a class="nav-link scrollto {{ request()->is('/') ? 'active' : ''}}" href="{{url('/')}}">Beranda</a></li>
        <li><a class="nav-link scrollto {{ request()->is('tentang_kami') ? 'active' : ''}}"
                href="{{route('tentang_kami')}}">Tentang Kami</a></li>
        <li><a class="nav-link scrollto {{ request()->is('jurnal') ? 'active' : ''}}"
                href="{{route('jurnal')}}">Jurnal</a></li>
        {{-- <li><a class="nav-link scrollto" href="{{route('register')}}">Join Resellr</a></li> --}}
        <li><a class="nav-link scrollto" href="https://metapropolis.resellr.id/register-reseller">Join Resellr</a></li>
        {{-- <li><a class="nav-link scrollto" href="{{route('register_dropshipper')}}">Join Dropshipper</a></li> --}}
        <li><a class="nav-link scrollto" href="https://metapropolis.resellr.id/register-dropshipper?id=26480">Join
                Dropshipper</a></li>
        <li><a class="nav-link scrollto {{ request()->is('faq') ? 'active' : ''}}" href="{{route('faq')}}">Faq</a></li>
        {{-- <li><a class="nav-link scrollto" href="#">Kontak</a></li> --}}
        <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="https://metapropolis.resellr.id/login-reseller">Login Reseller</a></li>
                <li><a href="https://metapropolis.resellr.id/login-dropshipper">Login Dropshipper</a></li>
            </ul>
        </li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->
