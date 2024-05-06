<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

<!-- main -->
<section class="container-fluid bg-color-02">
    <div class="row">
        <div class="col text-center p-5">
            <div class="mb-5">
                <img src="<?= base_url('assets/images/main_burger_01.png') ?>" alt="Promoção" class="img-fluid">
            </div>
            <div class="text-center">
                <h3 class="mb-5">Deliciosos e com grandes descontos!</h3>
                <a href="<?= site_url('products') ?>" class="btn-products">Produtos</a>
            </div>               
        </div>
        <div class="col text-center p-5">
                <img class="img-fluid" src="<?= base_url('assets/images/main_burger_02.png') ?>" alt="Hamburguer Delicioso">
        </div> 
    </div>
</section>

<?= $this->endSection() ?>