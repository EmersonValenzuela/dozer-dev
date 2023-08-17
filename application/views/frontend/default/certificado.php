<section class="top-categories text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="category-product mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <h1 class="text-center mt-4 text-section">¡Verifica tus Certificados!</h1>
                        <p class="text-center mt-4">Buscar por documento de identidad</p>
                    </div>
                    <div class="col-lg-3"></div><br>
                    <div class="row justify-content-center">
                        <div class="row text-white color-fondo  mb-3 ">
                            <div class="col-1 p-1 text-center">Formato</div>
                            <div class="col-2 p-1 text-center">Institución</div>
                            <div class="col-3 p-1 text-center">Nombre del Estudiante</div>
                            <div class="col-5 p-1 text-center">Nombre de la Capacitación</div>
                            <div class="col-1 p-1 text-center">Enlace</div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <?php
                        foreach ($certificates as $key => $certificate) : ?>
                            <div class="col-1 p-1 text-center"><?= $certificate->name ?></div>
                            <div class="col-3 p-1 text-center"><?= $certificate->institute ?></div>
                            <div class="col-2 p-1 text-center"><?= $certificate->last_name . " " . $certificate->first_name ?></div>
                            <div class="col-5 p-1 text-center"><?= $certificate->title ?></div>
                            <div class="col-1 p-1 text-center"><a class="text-danger" href="<?= base_url("uploads/certificates/" . $certificate->link) ?>" target="_blank">Enlace</a></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>