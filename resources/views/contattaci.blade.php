<x-layout>
    <x-slot:title>Contattaci</x-slot>

    <!-- Hero Section -->
    <section class="hero-section py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body p-4">
                            <h2 class="text-center mb-4">Contattaci</h2>
                            <form action="{{ route('contattaci.invio') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nome" class="form-label fw-bold"></label>
                                    <input type="text" class="form-control form-control-lg" id="nome" name="nome" placeholder="Inserisci il tuo nome">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-bold"></label>
                                    <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="La tua email">
                                </div>
                                <div class="mb-4">
                                    <label for="info" class="form-label fw-bold"></label>
                                    <textarea class="form-control form-control-lg" id="info" name="info" rows="4" placeholder="Raccontaci la tua idea..."></textarea>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg">Invia messaggio</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @if (session('emailSent'))
                        <div class="alert alert-success mt-4 shadow-sm border-0 text-center">
                            {{ session('emailSent') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</x-layout>
