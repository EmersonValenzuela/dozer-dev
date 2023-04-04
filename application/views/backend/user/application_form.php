<h4 class="header-title mb-3 text-white text-uppercase px-2">Datos Personales</h4>

<form class="required-form" action="<?php echo site_url('user/become_an_instructor'); ?>" method="post"
    enctype="multipart/form-data">
    <!-- DNI -->
    <div class="d-flex flex-row  justify-content-between">
        <div class="w-50"><select class="form-select w-100 style-cb d-flex align-items-center"
                aria-label="Default select example">
                <option selected>Tipo de Documento de Identidad</option>
                <option value="1">DNI</option>
                <option value="2">Cedula de identidad</option>

            </select>
        </div>
        <div class="w-50 px-2 ">
            <div class="form-group d-flex align-items-center">
                <label for="dni"></label>
                <input type="text" class="form-control form-tc " name="dni" id="dni" aria-describedby="dni-help"
                    placeholder="<?php echo get_phrase('Numero de Dni'); ?>" required>

            </div>
        </div>
    </div>
    <!-- DNI -->
    <!--Nombre, apellidos-->
    <div class="d-flex flex-row mb-3 justify-content-between">
        <div class="py-2  w-50"><input type="hidden" name="id"
                value="<?php echo $this->session->userdata('user_id'); ?>">
            <div class="form-group">

                <input type="text" class="form-control form-tc" name="name" id="name" aria-describedby="name-help"
                    placeholder="<?php echo get_phrase('your_name_will_go_here'); ?>"
                    value="<?php echo $user_details['first_name'] ?>" readonly required>

            </div>
        </div>
        <div class="py-2 px-4 w-50"><input type="hidden" name="id"
                value="<?php echo $this->session->userdata('user_id'); ?>">
            <div class="form-group">

                <input type="text" class="form-control form-tc" name="name" id="name" aria-describedby="name-help"
                    placeholder="<?php echo get_phrase('your_name_will_go_here'); ?>"
                    value="<?php echo $user_details['last_name']; ?>" readonly required>

            </div>
        </div>
        <div class="py-2 px-4 w-50"><input type="hidden" name="id"
                value="<?php echo $this->session->userdata('user_id'); ?>">
            <div class="form-group">

                <input type="text" class="form-control form-tc" name="name" id="name" aria-describedby="name-help"
                    placeholder="<?php echo get_phrase('your_name_will_go_here'); ?>"
                    value="<?php echo $user_details['last_name']; ?>" readonly required>

            </div>
        </div>
    </div>
    <!-- Nombre, apellidos -->
    <h4 class="header-title text-white text-uppercase">Datos de Contacto</h4>
    <div class="d-flex flex-row mb-3 justify-content-between">
        <div class="py-2 w-50">
            <div class="form-group">

                <input type="email" class="form-control form-tc" name="email" id="email" aria-describedby="email-help"
                    placeholder="<?php echo get_phrase('Correo electronico'); ?>"
                    value="<?php echo $user_details['email']; ?>" readonly required>

            </div>
        </div>
        <div class="p-2 w-50">
            <div class="form-group">

                <input type="text" class="form-control form-tc" name="phone" id="phone" aria-describedby="phone-help"
                    placeholder="<?php echo get_phrase('Celular'); ?>" required>

            </div>
        </div>
        <div class="p-2 w-50">
            <div class="form-group">

                <input type="text" class="form-control form-tc" name="phone" id="phone" aria-describedby="phone-help"
                    placeholder="<?php echo get_phrase('Pais de Procedencia'); ?>" required>

            </div>
        </div>
    </div>

    <!-- Nombre, apellidos -->

    <h4 class="header-title text-white text-uppercase">Datos Academicos</h4>
    <div class="d-flex flex-row mb-3">
        <div class=" w-100">
            <div class="form-group">

                <input type="text" class="form-control form-tc" name="phone" id="phone" aria-describedby="phone-help"
                    placeholder="<?php echo get_phrase('Universidad o Institución de procedencia'); ?>" required>

            </div>
        </div>

    </div>
    <div class="d-flex flex-row mb-3 ">
        <div class=" w-50 gx-3">
            <div class="form-group">

                <input type="text" class="form-control form-tc" name="phone" id="phone" aria-describedby="phone-help"
                    placeholder="<?php echo get_phrase('Profesión, ejemp. Técnico, Ing. Civil, Arquitecto '); ?>"
                    required>

            </div>
        </div>
        <div class=" w-50">
            <div class="form-group">

                <input type="text" class="form-control form-tc" name="phone" id="phone" aria-describedby="phone-help"
                    placeholder="<?php echo get_phrase('Grado de instrucción, ejemp. Técnico, Bach, Titulado, Mag.'); ?>"
                    required>

            </div>
        </div>
    </div>
    <div class="d-flex flex-row mb-3">
        <div class=" w-100">
            <div class="form-group">

                <input type="text" class="form-control form-tc" name="phone" id="phone" aria-describedby="phone-help"
                    placeholder="<?php echo get_phrase('Especialista en: ejmp. Estructuras, Carreteras, Hidráulica, Presupuestos, Gestión de proyectos, BIM, Arquitectura'); ?>"
                    required>

            </div>
        </div>

    </div>

    <h4 class="header-title text-white text-uppercase px-2">Experencia Laboral</h4>
    <div class="form-group">

        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input form-tc" id="document" name="document"
                    onchange="changeTitleOfImageUploader(this)">
                <label class="custom-file-label" for="document"><?php echo get_phrase('document'); ?></label>
            </div>
        </div>
        <small id="attachment-help"
            class="form-text text-muted"><?php echo get_phrase('if_any_document_you_want_to_share'); ?> (
            .pdf) <?php echo get_phrase('are_accepted'); ?></small>

    </div>
    <h4 class="header-title text-white">PRETENCIÓN SALARIAL</h4>
    <div class="d-flex flex-row">
        <div class=" text-white">
            <p>Que modalidad desea trabajar:</p>
        </div>
        <div class="px-2">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Asincrónico</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">Sincrónico</label>
            </div>

        </div>

    </div>
    <div>
        <p class=" text-white">1. Asincrónico: Clases virtuales en vivo o en directo. </p>
        <p class=" text-white">2. Sincrónico: Clases virtuales grabadas. Posteriormente aprobada su solicitud,
            coordinará con el personal encargado. </p>
    </div>
    <div class="d-flex flex-row mb-3">
        <div class="w-100">
            <div class="form-group">

                <input type="text" class="form-control form-tc" name="phone" id="phone" aria-describedby="phone-help"
                    placeholder="<?php echo get_phrase('Mi remuneración mínima para el dictado por hora natural (60 min.) es: ...'); ?>"
                    required>

            </div>
        </div>

    </div>
    <div>
        <h4 class="header-title text-white">DESTINATARIO (DIRECCIÓN ACADÉMICA)

            </h4>
        <p class=" text-white sub-desti">La dirección académica deberá dar respuestas al reclamo en un plazo no mayor de siete (07) días calendario,
            pudiendo ampliar el <br>
            plazo hasta por treinta (30) días más, previa comunicación al postulante.</p>
    </div>







    <div class="row">
        <div class="col-12">
            <div class="text-center">
                <div class="mb-3 mt-3">
                    <button type="button" class="btn btn-tn text-center"
                        onclick="checkRequiredFields()"><?php echo get_phrase('ENVIAR'); ?></button>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
</form>