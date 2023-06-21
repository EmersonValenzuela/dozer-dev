<?php if(get_frontend_settings('recaptcha_status')): ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php endif; ?>
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
                                    <input type="radio" id="alldoc" name="type-doc" class="type-doc custom-radio "
                                        value="alldoc" onclick="filter(this)"
                                        <?php if ($selected_availability == 'alldoc') echo 'checked'; ?>>
                                    <label class="text-white my-1 mx-3 fs-15px"
                                        for="alldoc"><?php echo site_phrase('Todos los Documentos'); ?></label>
                                </div>
                                <div class="">
                                    <input type="radio" id="docacademy" name="type-doc" class="type-doc custom-radio"
                                        value="docacademy" onclick="filter(this)"
                                        <?php if ($selected_availability == 'docacademy') echo 'checked'; ?>>
                                    <label class="text-white my-1 mx-3 fs-15px"
                                        for="docacademy"><?php echo site_phrase('Trabajo Académico'); ?></label>
                                </div>
                                <div class="">
                                    <input type="radio" id="docinvestigation" name="type-doc"
                                        class="type-doc custom-radio" value="docinvestigation" onclick="filter(this)"
                                        <?php if ($selected_availability == 'docinvestigation') echo 'checked'; ?>>
                                    <label class="text-white my-1 mx-3 fs-15px"
                                        for="docinvestigation"><?php echo site_phrase('Trabajo de Investigación'); ?></label>
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
                                    <input type="radio" id="allareas" name="investigationarea"
                                        class="investigationarea custom-radio " value="allareas" onclick="filter(this)"
                                        <?php if ($selected_availability == 'allareas') echo 'checked'; ?>>
                                    <label class="text-white my-1 mx-3 fs-15px"
                                        for="allareas"><?php echo site_phrase('Todas las areas'); ?></label>
                                </div>
                                <div class="">
                                    <input type="radio" id="bim" name="investigationarea"
                                        class="investigationarea custom-radio" value="bim" onclick="filter(this)"
                                        <?php if ($selected_availability == 'bim') echo 'checked'; ?>>
                                    <label class="text-white my-1 mx-3 fs-15px"
                                        for="bim"><?php echo site_phrase('BIM'); ?></label>
                                </div>
                                <div class="">
                                    <input type="radio" id="arqui" name="investigationarea"
                                        class="investigationarea custom-radio" value="arqui" onclick="filter(this)"
                                        <?php if ($selected_availability == 'arqui') echo 'checked'; ?>>
                                    <label class="text-white my-1 mx-3 fs-15px"
                                        for="arqui"><?php echo site_phrase('Arquitectura'); ?></label>
                                </div>
                                <div class="">
                                    <input type="radio" id="civilengineering" name="investigationarea"
                                        class="investigationarea custom-radio" value="civilengineering"
                                        onclick="filter(this)"
                                        <?php if ($selected_availability == 'civilengineering') echo 'checked'; ?>>
                                    <label class="text-white my-1 mx-3 fs-15px"
                                        for="civilengineering"><?php echo site_phrase('Ingeniería Civil'); ?></label>
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
                                    <input type="radio" id="alldate" name="datedoc" class="datedoc custom-radio "
                                        value="alldate" onclick="filter(this)"
                                        <?php if ($selected_availability == 'alldate') echo 'checked'; ?>>
                                    <label class="text-white my-1 mx-3 fs-15px"
                                        for="alldate"><?php echo site_phrase('Todas las fechas'); ?></label>
                                </div>
                                <div class="">
                                    <input type="radio" id="one" name="datedoc" class="datedoc custom-radio" value="one"
                                        onclick="filter(this)"
                                        <?php if ($selected_availability == 'one') echo 'checked'; ?>>
                                    <label class="text-white my-1 mx-3 fs-15px"
                                        for="one"><?php echo site_phrase('2023-2024'); ?></label>
                                </div>


                            </li>
                        </ul>
                    </div>






                </div>
            </div>
            <div class="col-8">
                <div class="d-flex flex-column mb-3">
                    <div class="d-flex flex-row mb-3 ms-5">
                        <div><img src="<?= base_url() ?>uploads/system/img-repositorio.png" alt=""></div>
                        <div class="d-flex flex-column mb-3 ms-5">
                            <p  class="titulo-r"> Título</p>
                            <p class="curso-r">Revit Arquitectura Primeros Pasos</p>
                            <p class="autor-r">Autor(es)</p>
                            <p class="nombre-autor-r">Walter Stwen Gomez Cacha</p>
                            <p class="autor-r">tipo de documento </p>
                            <p class="nombre-autor-r">Trabajo Academico</p>
                          <div class="my-3 "><a class="btn-verdoc" href="<?php echo base_url('Revit-arquitectura') ?>">Ver documento</a> </div>  
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-5 mb-3 ms-5">
                        <div><img src="<?= base_url() ?>uploads/system/img-repositorio.png" alt=""></div>
                        <div class="d-flex flex-column mb-3 ms-5">
                            <p  class="titulo-r"> Título</p>
                            <p class="curso-r">Modelado de una Vivienda</p>
                            <p class="autor-r">Autor(es)</p>
                            <p class="nombre-autor-r">Mario Alberto Casero Perez</p>
                            <p class="autor-r">tipo de documento </p>
                            <p class="nombre-autor-r">Proyecto</p>
                          <div class="my-3 "><a class="btn-verdoc" href="#">Ver documento</a> </div>  
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-3">Flex item 3</div>
                </div>
            </div>
        </div>
</section>