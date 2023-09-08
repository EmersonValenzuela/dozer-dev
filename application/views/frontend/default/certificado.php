<section class="top-categories text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="category-product mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <h1 class="text-center mt-4 text-section">¡Verifica tus Certificados!</h1>

                        <div class="d-flex flex-row mb-3 align-items-center justify-content-center">
                            <div class="">
                                <p class="text-center mt-4">Buscar por documento de identidad:</p>
                            </div>
                            <div class=" px-5"> <input class="bg-input" id="dni_search" type="text" placeholder="Puedes usar tu DNI - CI"></div>
                            <div class=""> <a id="btn_search" class="btn-verificar"> Verificar</a></div>
                        </div>



                        <input type="hidden" id="url_base" value="<?= base_url() ?>">

                    </div>
                    <div class="col-lg-3"></div><br>
                    <div class="row justify-content-center">
                        <div class="row text-white color-fondo  mb-3 ">
                            <div class="col-1 p-1 text-center">Formato</div>
                            <div class="col-4 p-1 text-center">Institución</div>
                            <div class="col-3 p-1 text-center">Nombre del Estudiante</div>
                            <div class="col-3 p-1 text-center">Nombre de la Capacitación</div>
                            <div class="col-1 p-1 text-center">Enlace</div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <?php
                        if ($certificates) {
                            foreach ($certificates as $key => $certificate) : ?>

                                <div class="col-1 col-xs-0 p-1 text-center"><?= $certificate->name ?></div>
                                <div class="col-4 col-xs-0 p-1 text-center"><?= $certificate->institute ?></div>
                                <div class="col-3 col-xs-0 p-1 text-center">
                                    <?= $certificate->last_name . " " . $certificate->first_name ?></div>
                                <div class="col-3 col-xs-0 p-1 text-center"><?= $certificate->title ?></div>
                                <div class="col-1 col-xs- 0xsp-1 text-center"><a class="text-danger" href="<?= base_url("uploads/certificates/" . $certificate->link) ?>" target="_blank">Enlace</a></div>

                                <div class="col-1 col-xs-0 p-1 text-center"><?= $certificate->name ?></div>
                                <div class="col-3 col-xs-0 p-1 text-center"><?= $certificate->institute ?></div>
                                <div class="col-2 col-xs-0 p-1 text-center">
                                    <?= $certificate->last_name . " " . $certificate->first_name ?></div>
                                <div class="col-5 col-xs-0 p-1 text-center"><?= $certificate->title ?></div>
                                <div class="col-1 col-xs- 0xsp-1 text-center"><a class="text-danger" href="<?= base_url("uploads/certificates/" . $certificate->link) ?>" target="_blank">Enlace</a></div>

                        <?php endforeach;
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var dni = document.getElementById('dni_search');
    var button = document.getElementById('btn_search');
    var url_base = document.getElementById('url_base').value;

    button.addEventListener('click', function() {
        location.href = url_base + "Verifica-tu-cetificado?category=all&&dni=" + dni.value;
    })

    window.addEventListener("load", function() {
        dni.addEventListener("keypress", soloNumeros, false);
    });

    //Solo permite introducir numeros.
    function soloNumeros(e) {
        var key = window.event ? e.which : e.keyCode;
        if (key < 48 || key > 57) {
            e.preventDefault();
        }
    }
</script>