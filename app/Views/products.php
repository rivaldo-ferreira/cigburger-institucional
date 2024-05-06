<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>
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

<?= $this->endSection() ?>