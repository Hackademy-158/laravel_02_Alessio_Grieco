<x-layout>
    <x-slot:title>Homepage - Laravel Trials</x-slot>
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="display-1 mb-4 text-shadow" data-aos="fade-down">Benvenuto su Laravel Trials</h1>
            <p class="lead mb-4 text-shadow" data-aos="fade-up" data-aos-delay="200">Innovazione e tecnologia al tuo servizio</p>
            <a href="/servizi" class="btn btn-primary btn-lg" data-aos="zoom-in" data-aos-delay="400">Scopri i nostri servizi</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-laptop display-4 text-primary mb-3"></i>
                            <h3 class="h4 mb-3">Web Development</h3>
                            <p class="text-muted mb-0">Sviluppiamo soluzioni web moderne e responsive per il tuo business</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-phone display-4 text-primary mb-3"></i>
                            <h3 class="h4 mb-3">App Development</h3>
                            <p class="text-muted mb-0">Creiamo applicazioni mobile native e cross-platform</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-graph-up display-4 text-primary mb-3"></i>
                            <h3 class="h4 mb-3">Digital Marketing</h3>
                            <p class="text-muted mb-0">Strategie digitali per far crescere il tuo business</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <h2 class="mb-4">Chi Siamo</h2>
                    <p class="lead mb-4">La nostra azienda è nata dalla passione per l'innovazione e la tecnologia</p>
                    <p class="mb-4">Aiutiamo le aziende a trasformare le loro idee in realtà digitali, fornendo soluzioni tecnologiche all'avanguardia e servizi personalizzati.</p>
                    <a href="/chi-siamo" class="btn btn-outline-primary">Scopri di più</a>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <img src="images/hero-section/code-bg.jpg" class="img-fluid rounded shadow" alt="Chi siamo">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5">
        <div class="container text-center">
            <div data-aos="zoom-in">
                <h2 class="mb-4">Pronto a iniziare?</h2>
                <p class="lead mb-4">Contattaci per una consulenza gratuita</p>
                <a href="/contattaci" class="btn btn-primary btn-lg">Contattaci ora</a>
            </div>
        </div>
    </section>
</x-layout>