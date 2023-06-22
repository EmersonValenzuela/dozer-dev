<?php
isset($type_doc) ? "" : $type_doc = "all";
isset($area_inv) ? "" : $area_inv = "all";
isset($datedoc) ? "" : $datedoc = "all";

?>

<section class="container-xl">
    <div class="my-5">
        <h2 class="text-principal-repositorio">
            Bienvenidos al Repositorio Institucional de Instituto Dozer
        </h2>
        <p class="text-white">Instituto Dozer pone a disposición de la comunidad académica su Repositorio Institucional,
            creado con el fin
            de preservar y difundir la producción académica e intelectual generada por los miembros de la comunidad
            Dozer, así como los documentos científicos y técnicos de convenios interinstitucionales. En tal sentido, la
            mayor parte del contenido se encuentra en acceso abierto con licencias pertinentes de protección de derechos
            de autor.</p>
    </div>
    <div class="container-xl">
        <div class="row">
            <div class="col-3">
                <div class="d-flex flex-column">


                    <div class="filter_type ">
                        <h5 class="text-white px-3 py-2 fw-700 m-0 dondenomb_category">
                            <?php echo site_phrase('Tipo de Documento'); ?></h5>
                        <ul class="text-white p-3 subcategory_nomb">
                            <li>
                                <div class="">
                                    <input type="radio" id="all" name="type_doc" class="type_doc custom-radio " value="all" onclick="filter(this)" <?php if ($type_doc == 'all') echo 'checked'; ?>>
                                    <label class="text-white my-1 mx-3 fs-15px" for="all"><?php echo site_phrase('Todos los Documentos'); ?></label>
                                </div>
                                <div class="">
                                    <input type="radio" id="docacademy" name="type_doc" class="type_doc custom-radio" value="docacademy" onclick="filter(this)" <?php if ($type_doc == 'docacademy') echo 'checked'; ?>>
                                    <label class="text-white my-1 mx-3 fs-15px" for="docacademy"><?php echo site_phrase('Trabajo Académico'); ?></label>
                                </div>
                                <div class="">
                                    <input type="radio" id="docinvestigation" name="type_doc" class="type_doc custom-radio" value="docinvestigation" onclick="filter(this)" <?php if ($type_doc == 'docinvestigation') echo 'checked'; ?>>
                                    <label class="text-white my-1 mx-3 fs-15px" for="docinvestigation"><?php echo site_phrase('Trabajo de Investigación'); ?></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="filter_type ">
                        <h5 class="text-white px-3 py-2 fw-700 m-0 dondenomb_category">
                            <?php echo site_phrase('Área de Investigación'); ?></h5>
                        <ul class="text-white p-3 subcategory_nomb">
                            <li>
                                <div class="">
                                    <input type="radio" id="all" name="area" class="area custom-radio " value="all" onclick="filter(this)" <?php if ($area_inv == 'all') echo 'checked'; ?>>
                                    <label class="text-white my-1 mx-3 fs-15px" for="all"><?php echo site_phrase('Todas las areas'); ?></label>
                                </div>
                                <div class="">
                                    <input type="radio" id="BIM" name="area" class="area custom-radio" value="BIM" onclick="filter(this)" <?php if ($area_inv == 'BIM') echo 'checked'; ?>>
                                    <label class="text-white my-1 mx-3 fs-15px" for="BIM"><?php echo site_phrase('BIM'); ?></label>
                                </div>
                                <div class="">
                                    <input type="radio" id="Arquitectura" name="area" class="area custom-radio" value="Arquitectura" onclick="filter(this)" <?php if ($area_inv == 'Arquitectura') echo 'checked'; ?>>
                                    <label class="text-white my-1 mx-3 fs-15px" for="Arquitectura"><?php echo site_phrase('Arquitectura'); ?></label>
                                </div>
                                <div class="">
                                    <input type="radio" id="Ingeniería Civil" name="area" class="area custom-radio" value="Ingeniería Civil" onclick="filter(this)" <?php if ($area_inv == 'Ingeniería Civil') echo 'checked'; ?>>
                                    <label class="text-white my-1 mx-3 fs-15px" for="Ingeniería Civil"><?php echo site_phrase('Ingeniería Civil'); ?></label>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="filter_type ">
                        <h5 class="text-white px-3 py-2 fw-700 m-0 dondenomb_category">
                            <?php echo site_phrase('Fecha de Investigación '); ?></h5>
                        <ul class="text-white p-3 subcategory_nomb">
                            <li>
                                <div class="">
                                    <input type="radio" id="all" name="datedoc" class="datedoc custom-radio " value="all" onclick="filter(this)" <?php if ($datedoc == 'all') echo 'checked'; ?>>
                                    <label class="text-white my-1 mx-3 fs-15px" for="all"><?php echo site_phrase('Todas las fechas'); ?></label>
                                </div>
                                <div class="">
                                    <input type="radio" id="one" name="datedoc" class="datedoc custom-radio" value="one" onclick="filter(this)" <?php if ($datedoc == 'one') echo 'checked'; ?>>
                                    <label class="text-white my-1 mx-3 fs-15px" for="one"><?php echo site_phrase('2023-2024'); ?></label>
                                </div>


                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="d-flex flex-column mb-3">
                    <?php
                    foreach ($repositories->result_array() as $key => $repository) : ?>

                        <div class="d-flex flex-row mb-3 ms-5">
                            <div><img src="<?= base_url() ?>uploads/repositories/<?= $repository['cover_image'] ?>" alt=""></div>
                            <div class="d-flex flex-column mb-3 ms-5">
                                <p class="titulo-r">Titulo</p>
                                <p class="curso-r"><?= $repository['title'] ?></p>
                                <p class="autor-r">Autor(es)</p>
                                <p class="nombre-autor-r"><?= $repository['author'] ?></p>
                                <p class="autor-r">tipo de documento </p>
                                <p class="nombre-autor-r"><?= $repository['document_type'] ?></p>
                                <p class="autor-r">Área de Investigación</p>
                                <p class="nombre-autor-r"><?= $repository['investigation'] ?></p>
                                <div class="my-3 "><a target="_blank" class="btn-verdoc" href="<?php echo base_url('uploads/repositories/' . $repository['document']) ?>">Ver documento</a> </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <div class="d-flex flex-row mb-3">Flex item 3</div>
                </div>
            </div>
        </div>
</section>
<script type="text/javascript">
    function get_url() {
        var urlPrefix = '<?php echo site_url('Repositorio?'); ?>'
        var urlSuffix = "";
        var type_doc = "";
        var area_investi = "";
        var datedoc = "";

        // Get selected category
        $('.type_doc:checked').each(function() {
            type_doc = $(this).attr('value');
        });

        // Get selected price
        $('.area:checked').each(function() {
            area_investi = $(this).attr('value');
        });

        // Get selected difficulty Level
        $('.datedoc:checked').each(function() {
            datedoc = $(this).attr('value');
        });

        urlSuffix = "tipo_documento=" + type_doc + "&&area_investigacion=" + area_investi + "&&fecha_investigacion=" + datedoc;
        var url = urlPrefix + urlSuffix;
        return url;
    }

    function filter() {
        var url = get_url();
        window.location.replace(url);
        //
    }
</script>