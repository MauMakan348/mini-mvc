<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">

<!-- indikator -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    
<!-- itemnya -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('hero-1.jpg') ?>" class="d-block w-100" style="height: 600px;">
            <div class="carousel-caption d-none d-md-block">
                <h5>Kuda Pantai</h5>
                <p>Kuda yang sedang di pantai dan tampak dari depan</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('hero-2.jpg') ?>" class="d-block w-100" style="height: 600px;">
            <div class="carousel-caption d-none d-md-block">
                <h5>Kuda Pantai</h5>
                <p>Kuda yang sedang di pantai dan tampak dari samping dengan bertuliskan "man"</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('hero-3.png') ?>" class="d-block w-100" style="height: 600px;">
            <div class="carousel-caption d-none d-md-block">
                <h5>Kuda Kacamata</h5>
                <p>Menunjukkan kuda yang sedang memakai kacamata hitam, keren bet guwa.</p>
            </div>
        </div>
    </div>

<!-- kanan kiri -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

</div>