<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIGBurger</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo.png') ?>" type="image/png">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css') ?>">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- app css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
</head>
<body>
    <!-- nav -->
    <nav class="container-fluid">
        <div class="row align-items-center">
            <div class="col p-3">
                <!-- logomarca -->
                <a href="<?= site_url('/')?>"><img src="<?= base_url('assets/images/logo.png') ?>" alt="CIGBurger Logo" ></a>
            </div>
            <div class="col p-3 pe-5 d-flex flex-row justify-content-end">
                <div><a class="nav-link ms-5" href="<?= site_url('/') ?>">Início</a></div>
                <div><a class="nav-link ms-5" href="<?= site_url('products') ?>">Produtos</a></div>
                <div><a class="nav-link ms-5" href="<?= site_url('where_we_are') ?>">Onde Estamos?</a></div>
            </div>
        </div>
    </nav>
    
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
    <!-- social networks -->
    <footer class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-6 d-flex flex-row justify-content-center">
                <div class="text-center mx-4">
                    <a href="#"><img src="<?= base_url('assets/images/facebook.png') ?>" alt="Facebook"></a>
                </div>
                <div class="text-center mx-4">
                    <a href="#"><img src="<?= base_url('assets/images/instagram.png') ?>" alt="Instagram"></a>
                </div>
                <div class="text-center mx-4">
                    <a href="#"><img src="<?= base_url('assets/images/whatsapp.png') ?>" alt="Whatsapp"></a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col text-center">
                <h6>Todos os direitos reservados &copy; <?= date('Y') ?></h6>
            </div>
        </div>
    </footer>
    <!-- --------------------------------------------------------------------------------------------------------- -->

    <!-- bootstrap javascript -->
    <script src="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>