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
    <section class="container">
        <div class="col">
            <!-- burger 01 -->
            <div class="row mb-5 product-box">
                <div class="col-5 text-center">
                    <img class="img=fluid" src="<?= base_url('assets/images/burger_01.png') ?>" alt="Burger 1">
                </div>
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">Burger Triplo</h1>
                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae optio aspernatur, nobis facere id exercitationem. Consequatur, molestiae. Nostrum maiores incidunt deserunt debitis quos distinctio, sint cupiditate officia dignissimos ut autem.
                    A, quae quisquam dolorem itaque debitis nesciunt quibusdam, voluptate officiis id fuga natus et corrupti, ipsam quam laudantium facilis voluptates. Nobis consectetur soluta eum corrupti consequuntur et, ipsum illum dicta?</p>
                    <h2 class="mt-3 product-text-color">R$ 29,90</h2>
                </div>
            </div>

            <!-- burger 02 -->
            <div class="row mb-5 product-box">
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">Burger 2 Carnes</h1>
                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae optio aspernatur, nobis facere id exercitationem. Consequatur, molestiae. Nostrum maiores incidunt deserunt debitis quos distinctio, sint cupiditate officia dignissimos ut autem.
                    A, quae quisquam dolorem itaque debitis nesciunt quibusdam, voluptate officiis id fuga natus et corrupti, ipsam quam laudantium facilis voluptates. Nobis consectetur soluta eum corrupti consequuntur et, ipsum illum dicta?</p>
                    <h2 class="mt-3 product-text-color">R$ 38,90</h2>
                </div>
                <div class="col-5 text-center">
                    <img class="img=fluid" src="<?= base_url('assets/images/burger_02.png') ?>" alt="Burger 2">
                </div>
            </div>

            <!-- burger 03 -->
            <div class="row mb-5 product-box">
                <div class="col-5 text-center">
                    <img class="img=fluid" src="<?= base_url('assets/images/burger_03.png') ?>" alt="Burger 3">
                </div>
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">Burger Simples</h1>
                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae optio aspernatur, nobis facere id exercitationem. Consequatur, molestiae. Nostrum maiores incidunt deserunt debitis quos distinctio, sint cupiditate officia dignissimos ut autem.
                    A, quae quisquam dolorem itaque debitis nesciunt quibusdam, voluptate officiis id fuga natus et corrupti, ipsam quam laudantium facilis voluptates. Nobis consectetur soluta eum corrupti consequuntur et, ipsum illum dicta?</p>
                    <h2 class="mt-3 product-text-color">R$ 22,90</h2>
                </div>
            </div>
            
            <!-- burger 04 -->
            <div class="row mb-5 product-box">
                <div class="col-7 p-5">
                    <h1 class="mb-3 product-text-color">Burger Salada</h1>
                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae optio aspernatur, nobis facere id exercitationem. Consequatur, molestiae. Nostrum maiores incidunt deserunt debitis quos distinctio, sint cupiditate officia dignissimos ut autem.
                    A, quae quisquam dolorem itaque debitis nesciunt quibusdam, voluptate officiis id fuga natus et corrupti, ipsam quam laudantium facilis voluptates. Nobis consectetur soluta eum corrupti consequuntur et, ipsum illum dicta?</p>
                    <h2 class="mt-3 product-text-color">R$ 26,90</h2>
                </div>
                <div class="col-5 text-center">
                    <img class="img=fluid" src="<?= base_url('assets/images/burger_04.png') ?>" alt="Burger 4">
                </div>
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
    

    <!-- bootstrap javascript -->
    <script src="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>