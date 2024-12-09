<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">Laravel Trials</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('chi-siamo') ? 'active' : '' }}" href="/chi-siamo">Chi Siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('servizi') ? 'active' : '' }}" href="/servizi">Servizi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contattaci') ? 'active' : '' }}" href="/contattaci">Contattaci</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
