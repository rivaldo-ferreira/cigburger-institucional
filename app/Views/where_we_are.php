<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>
<!-- main -->
<section class="container product-box py-5">
    <div class="row">
        <div class="col-5 text-center">
            <img src="<?= base_url('assets/images/room.jpg') ?>" alt="CIGBurger" class="img-fluid">
        </div>
        <div class="col-6">
            <p class="where-we-are-title mb-0">CIGBurger Paris</p>
            <p class="where-we-are-subtitle">Rua das Hortências, 1500, Paris</p>
            <p class="mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero beatae voluptates ut perferendis laborum in hic alias, dolorum nobis qui doloremque, expedita placeat deleniti! Mollitia sapiente exercitationem molestias est nostrum.</p>

            <div class="d-flex align-items-center mb-3">
                <img src="<?= base_url('assets/images/icon_phone.png') ?>" alt="Phone">
                <p class="where-we-are-subtitle ms-3">
                    <a class="nav-link" href="tel:+05533654124">+055 3365 4124</a>
                </p>
            </div>
            
            <div class="d-flex align-items-center mb-3">
                <img src="<?= base_url('assets/images/icon_email.png') ?>" alt="Email">
                <p class="where-we-are-subtitle ms-3">
                    <a class="nav-link" href="mailto:+05533654124">cigburger@cigburger.com</a>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- mapa -->
<section class="container product-box py-5">
    <div class="row">
        <div class="col text-center">
            <img class="img-fluid" src="<?= base_url('assets/images/map.jpg') ?>" alt="Mapa">
        </div>
    </div>
</section>

<?= $this->endSection() ?>
