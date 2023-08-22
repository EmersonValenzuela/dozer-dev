<?php
$course_details = $this->crud_model->get_course_by_id($course_id)->row_array();
$instructor_details = $this->user_model->get_all_user($course_details['user_id'])->row_array();
$row_schedule = $this->crud_model->auth_schedule(array('course_id' => $course_id));
?>


<input type="hidden" value="<?= $_SERVER['REQUEST_URI'] ?>" id="url_return">
<input type="hidden" value="<?= $this->session->userdata('user_id') ?>" id="id_user">



<section class="course-content-area">

    <div class="container-xl">
        <div class="row">

            <div class="col-lg-8 col-xl-8 col-xxl-9 order-last pe-5 order-lg-first radius-10  ">

                <div class="description-box view-more-parent">

                    <div class="rating-row">
                        <div class="course-header-wrap mt-5">
                            <h1 class="title text-white"><?php echo $course_details['title']; ?></h1>
                            <p class="text-white text-subtitutlo">Dirigido a Estudiantes, Técnicos, bachilleres y
                                profesionales de las carreras
                                de Ingeniería Civil
                                y Arquitectura que deseen especializarse en la metodología BIM. </p>
                            <p class="subtitle"><?php echo $course_details['short_description']; ?></p>

                        </div>




                        <div class="text-white">
                            <?php
                            if ($row_schedule) {
                                if ($row_schedule->init_c != '' ||  $row_schedule->schedule != '' || $row_schedule->duration != '') :  ?>

                            <div class="container text-center text-white fw-bold">
                                <div class="row">
                                    <div class="col-3 ">

                                        <div class="d-flex flex-column mb-3">
                                            <div class="p-2 bg-encabezado"> Inicio
                                            </div>
                                            <div class=" p-2 bg-contenido">
                                                <?= $row_schedule->init_c ?>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-3 ">

                                        <div class="d-flex flex-column mb-3">
                                            <div class="p-2 bg-encabezado"> Frecuencia y Horario
                                            </div>
                                            <div class=" p-2 bg-contenido">
                                                <?= $row_schedule->schedule ?>
                                            </div>
                                        </div>


                                    </div>


                                    <div class="col-3">
                                        <div class="d-flex flex-column mb-3">
                                            <div class="p-2 bg-encabezado"> Duracion
                                            </div>
                                            <div class=" p-2 bg-contenido">
                                                <?= $row_schedule->duration ?>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-3">
                                        <div class="d-flex flex-column mb-3">
                                            <div class="p-2 bg-encabezado"> Modalidad

                                            </div>
                                            <div class=" p-2 bg-contenido">
                                                <?= $row_schedule->modality ?>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <?php endif;
                            } ?>
                        </div>

                        <div class="text-white">
                            <p class="titulos-contcursos">OBJETIVOS DE APRENDIZAJE</p>
                            <p class="text-objetivo">El objetivo principal del programa es proporcionarle al
                                participante las herramientas de gestion y <?php echo $course_details['title']; ?>,
                                contemplando la arquitectura, estructura e instalaciones utilizando Autodesk Revit.

                            </p>
                            <p class="titulos-contcursos">REQUISITOS Y RECURSOS A UTILIZAR</p>
                            <p class="text-objetivo">No es necesario tener ningún tipo de conocimiento previo, la
                                capacitación será desde cero, únicamente necesitarás un una laptop o computador con
                                conexión a internet para poder desarrollar todas las habilidades que esta capacitación
                                tiene para ti.

                            </p>
                            <p class="titulos-contcursos">BENEFICIOS DE CAPACITARTE EN INSTITUTO DOZER</p>
                            <p class="text-objetivo">Somos orgullosamente un centro de formación autorizado por
                                Autodesk, conoce los beneficios totalmente gratuitos que tenemos para tí:

                            </p>
                            <div>
                                <ul>
                                    <li class="text-listbeneficios">Certificado Internacional de Autodesk “Certificate
                                        of Completion”.</li>
                                    <li class="text-listbeneficios">Certificado de reconocimiento Internacional por
                                        Instituto Dozer.</li>
                                    <li class="text-listbeneficios">Instructores profesionales certificados y
                                        acreditados por Autodesk.</li>
                                    <li class="text-listbeneficios">Currícula especialmente diseñada para obtener el
                                        máximo beneficio. </li>
                                    <li class="text-listbeneficios">Carta de reconocimiento académico y mención en su
                                        insignia.</li>
                                    <li class="text-listbeneficios">Se brindará el software de Autodesk para uso
                                        educativo.</li>
                                    <li class="text-listbeneficios">Acceso a material electrónico publicado por
                                        Autodesk.</li>
                                    <li class="text-listbeneficios">Aula virtual Institutcional muy estable y amigable.
                                    </li>
                                    <li class="text-listbeneficios">Insignia de acreditación electrónica (comparte el
                                        logro de tu certificación.
                                        Autodesk en redes sociales como: LinkedIn, Facebook, Twitter, etc.).</li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <img class="w-85" src="<?= base_url() ?>uploads\system\convenios.png" alt="">
                        </div>

                        <p class="titulos-contcursos text-white mt-3">PROYECTO QUE APRENDERÁS DESDE CERO</p>

                    </div>


                </div>

                <h4 class=" text-white titulos-contcursos text-uppercase">
                    <?php echo site_phrase('CONTENIDO ACADÉMICO'); ?></h4>
                <div class="what-you-get-box">
                    <ul class="what-you-get__items">
                        <?php foreach (json_decode($course_details['outcomes']) as $outcome) : ?>
                        <?php if ($outcome != "") : ?>
                        <li><?php echo $outcome; ?></li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>



                <?php if ($course_details['course_type'] == 'general') : ?>
                <div class="course-curriculum-box">
                    <div class="course-curriculum-title clearfix mt-5 mb-3">


                    </div>
                    <div class="course-curriculum-accordion">
                        <?php
                            $sections = $this->crud_model->get_section('course', $course_id)->result_array();
                            $counter = 0;
                            foreach ($sections as $key => $section) : ?>
                        <div class="lecture-group-wrapper">

                            <?php
                                    if ($key == 0) {
                                        $style = 'border-radius: 10px 10px 0px 0px;';
                                    } elseif ($key + 1 == count($sections)) {
                                        $style = 'border-radius: 0px 0px 10px 10px;';
                                    } else {
                                        $style = '';
                                    }
                                    ?>

                            <div class="lecture-group-title clearfix my-3 fondo-lecciones fw-bold"
                                style="<?= $style; ?>" data-bs-toggle="collapse"
                                data-bs-target="#collapse<?php echo $section['id']; ?>"
                                aria-expanded="<?php if ($counter == 0) echo 'true'; ?>">
                                <div class="title float-start text-white">
                                    <?php echo $section['title']; ?>
                                </div>
                                <div class="float-end">


                                </div>
                            </div>

                            <div id="collapse<?php echo $section['id']; ?>"
                                class="lecture-list collapse <?php if ($counter == 0) echo 'show'; ?>">
                                <ul>
                                    <?php $lessons = $this->crud_model->get_lessons('section', $section['id'])->result_array();
                                            foreach ($lessons as $lesson) : ?>
                                    <li class="lecture has-preview text-14px ">
                                        <span
                                            class="lecture-title text-white <?php if ($lesson['is_free'] == 1) echo 'text-primary'; ?>"
                                            onclick="go_course_playing_page('<?php echo $course_details['id']; ?>', '<?php echo $lesson['id']; ?>')"><?php echo $lesson['title']; ?></span>

                                        <div class="lecture-info float-lg-end">
                                            <?php if ($lesson['is_free'] == 1) : ?>
                                            <span class="lecture-preview"
                                                onclick="lesson_preview('<?php echo site_url('home/preview_free_lesson/' . $lesson['id']); ?>', '<?php echo site_phrase('lesson') . ': ' . $lesson['title']; ?>')">
                                                <i class="fas fa-eye"></i>
                                                <?php echo site_phrase('preview'); ?>
                                            </span>
                                            <?php endif; ?>

                                            <span class="lecture-time ps-2 text-white">
                                                <?php if ($lesson['duration'] == "") echo '<span class="opacity-0">.</span>'; ?>
                                                <?php echo $lesson['duration']; ?>
                                            </span>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <?php
                                $counter++;
                            endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>



                <div class="about-instructor-box">
                    <div class="py-3 text-white titulos-contcursos text-uppercase">
                        <?php echo site_phrase('DOCENTE ACEDÉMICO'); ?>
                    </div>
                    <?php if ($course_details['multi_instructor']) : ?>
                    <?php $instructors = $this->user_model->get_multi_instructor_details_with_csv($course_details['user_id']); ?>
                    <?php foreach ($instructors as $key => $instructor) : ?>
                    <?php if ($key > 0) echo "<hr>"; ?>

                    <div class="row justify-content-center mb-3">
                        <div class="col-md-4 top-instructor-img w-sm-100">
                            <a href="<?php echo site_url('home/instructor_page/' . $instructor['id']); ?>">
                                <img class="radius-10"
                                    src="<?php echo $this->user_model->get_user_image_url($instructor['id']); ?>"
                                    width="100%">
                            </a>
                        </div>
                        <div class="col-md-8 py-0 px-3 text-center text-md-start">
                            <h4 class="mb-1 fw-600 "><a class="about-directora-nombre"
                                    href="<?php echo site_url('home/instructor_page/' . $instructor['id']); ?>"><?php echo $instructor['first_name'] . ' ' . $instructor['last_name']; ?></a>
                            </h4>
                            <p class="fw-500 text-14px w-100 text-white"><?php echo $instructor['title']; ?></p>
                            <div class="w-100">

                                <div class="biography-content-box view-more-parent">

                                    <div class="biography-content text-white text-justify fw-200">
                                        <?php echo $instructor['biography']; ?>
                                    </div>
                                    <div class="grop-btn">
                                        <button class="btn-style">
                                            Mas informacion
                                        </button>
                                    </div>
                                </div>

                            </div>

                            <?php $skills = explode(',', $instructor['skills']); ?>
                            <?php foreach ($skills as $skill) : ?>
                            <span class="badge badge-sub-warning text-12px my-1 py-2"><?php echo $skill; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php else : ?>
                    <div class="row justify-content-center">
                        <div class="col-md-4 top-instructor-img w-sm-100">
                            <a href="<?php echo site_url('home/instructor_page/' . $instructor_details['id']); ?>">
                                <img class="radius-10"
                                    src="<?php echo $this->user_model->get_user_image_url($instructor_details['id']); ?>"
                                    width="100%">
                            </a>
                        </div>
                        <div class="col-md-8 py-0 px-3 text-center text-md-start">
                            <h4 class="mb-1 fw-600 v"><a class="text-decoration-none"
                                    href="<?php echo site_url('home/instructor_page/' . $instructor_details['id']); ?>"><?php echo $instructor_details['first_name'] . ' ' . $instructor_details['last_name']; ?></a>
                            </h4>
                            <p class="fw-500 text-14px w-100"><?php echo $instructor_details['title']; ?></p>
                            <div class="rating">
                                <div class="d-inline-block mb-2">
                                    <span
                                        class="text-dark fw-800 text-muted ms-1 text-13px"><?php echo $this->crud_model->get_instructor_wise_course_ratings($instructor_details['id'], 'course')->num_rows() . ' ' . site_phrase('reviews'); ?></span>
                                    |
                                    <span class="text-dark fw-800 text-13px text-muted mx-1">
                                        <?php $course_ids = $this->crud_model->get_instructor_wise_courses($instructor_details['id'], 'simple_array');
                                            $this->db->select('user_id');
                                            $this->db->distinct();
                                            $this->db->where_in('course_id', $course_ids);
                                            echo $this->db->get('enrol')->num_rows() . ' ' . site_phrase('students'); ?>
                                    </span>
                                    |
                                    <span class="text-dark fw-800 text-14px text-muted">
                                        <?php echo $this->crud_model->get_instructor_wise_courses($instructor_details['id'])->num_rows() . ' ' . site_phrase('courses'); ?>
                                    </span>
                                </div>
                            </div>
                            <?php $skills = explode(',', $instructor_details['skills']); ?>
                            <?php foreach ($skills as $skill) : ?>
                            <span class="badge badge-sub-warning text-12px my-1 py-2"><?php echo $skill; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>

                <div class=" mt-5 pb-3">
                    <div class="about-directora-title">CERTIFICACIONES </div>


                    <div class="row fondo-certificado-cursos mt-5">
                        <div class="col-6 p-2000">
                            <div class="d-flex flex-row mb-3">
                                <div class=""><img class="w-19px position-absolute"
                                        src="<?= base_url() ?>uploads/system/icon-sheck.png" alt=""></div>
                                <div class="">
                                    <p class="text-titulo-contenido">
                                        Certificado por <br>
                                        Instituto Dozer:
                                    </p>
                                </div>

                            </div>



                            <div class="nombre-curso-cont">
                                <p class="text-nombcertid"> " <?php echo $course_details['title']; ?> <br> Nivel Basico
                                    "
                                </p>
                            </div>
                            <div class="text-white text-center">por 120 horas acreditadas
                            </div>
                            <div class="certi-contenido">
                                <button class="btn-style-certi fw-700">
                                    Certificado gratuito
                                </button>
                            </div>
                        </div>
                        <div class="col-6 ">

                            <img class="img-certficado-curso"
                                src="<?= base_url() ?>uploads/system/certificados/certificado-dozer.png" alt="">
                        </div>
                    </div>

                    <div class="row fondo-certificado-cursos mt-5">
                        <div class="col-6 p-2000">
                            <div class="d-flex flex-row mb-3">
                                <div class=""><img class="w-19px position-absolute"
                                        src="<?= base_url() ?>uploads/system/icon-sheck.png" alt=""></div>
                                <div class="">
                                    <p class="text-titulo-contenido">
                                        Certificado Internacional <br>
                                        por Autodesk USA:
                                    </p>
                                </div>

                            </div>
                            <div class="nombre-curso-cont">
                                <p class="text-nombcertid">" <?php echo $course_details['title']; ?> <br> Nivel
                                    Avanzado"</p>
                            </div>
                            <div class="text-white text-center">por 90 horas acreditadas
                            </div>
                            <div class="certi-contenido">
                                <button class="btn-style-certi fw-700">
                                    Certificado gratuito
                                </button>
                            </div>
                        </div>
                        <div class="col-6 ">

                            <img class="img-certficado-curso"
                                src="<?= base_url() ?>uploads/system/certificados/certificado-tres.svg" alt="">
                        </div>
                    </div>

                    <div class="row fondo-certificado-cursos mt-5">
                        <div class="col-6 p-2000">
                            <span> <img class="w-19px position-absolute"
                                    src="<?= base_url() ?>uploads/system/icon-sheck.png" alt=""></span>
                            <p class="text-titulo-contenido">
                                Certificado Internacional <br>
                                por Autodesk USA:
                            </p>
                            <div class="nombre-curso-cont">
                                <?php echo $course_details['title']; ?>
                            </div>
                            <div class="text-white text-center">por 90 horas acreditadas
                            </div>
                            <div class="certi-contenido">
                                <button class="btn-style-certi fw-700">
                                    Certificado gratuito
                                </button>
                            </div>
                        </div>
                        <div class="col-6 ">

                            <img class="img-certficado-curso"
                                src="<?= base_url() ?>uploads/system/certificados/certificado-tres.svg" alt="">
                        </div>
                    </div>

                    <div class="row fondo-certificado-cursos mt-5">
                        <div class="col-6 p-2000">
                            <span> <img class="w-19px position-absolute"
                                    src="<?= base_url() ?>uploads/system/icon-sheck.png" alt=""></span>
                            <p class="text-titulo-contenido">
                                Certificado Internacional <br>
                                por Autodesk USA:
                            </p>
                            <div class="nombre-curso-cont">
                                <?php echo $course_details['title']; ?>
                            </div>
                            <div class="text-white text-center">por 90 horas acreditadas
                            </div>
                            <div class="certi-contenido">
                                <button class="btn-style-certi fw-700">
                                    Certificado gratuito
                                </button>
                            </div>
                        </div>
                        <div class="col-6 ">

                            <img class="img-certficado-curso"
                                src="<?= base_url() ?>uploads/system/certificados/certificado-tres.svg" alt="">
                        </div>
                    </div>

                    <div class="  mt-5 ">
                        <div class="d-flex cg-1rem fondo-certificado-cursos">

                            <div class="p-2 flex-shrink-1   "><img class="w-70px"
                                    src="<?=base_url()?>uploads/system/capacitacion.png " alt=""></div>
                            <div class="p-2 w-100 text-white p-2 color-text  ">
                                <p class="">Al finalizar la capacitación nuestro equipo de soporte le
                                    ayudará a gestionar desde cero hasta que usted pueda
                                    <a href="#" class="fw-700 color-text"> descargar los certificados desde la
                                        plataforma de autodesk. </a>
                                </p>


                            </div>

                        </div>



                        <div class="about-directora-title">INSIGNIA DE ACREDITACIÓN ELECTRÓNICA</div>
                        <div class="d-flex cg-1rem ">

                            <div class="p-2 flex-shrink-1 px-5 py-3  fondo-insignia"><img class="img-insignia"
                                    src="<?=base_url()?>uploads/system/certificados/insignia.png " alt=""></div>
                            <div class="p-3 w-100 text-white  color-text fondo-certificado-cursos text-center">
                                <p class="fw-bold text-white">¡Nuevo beneficio para nuestros alumnos!</p>
                                <p class="fw-200">Accede gratuitamente a esta insignia el cual tiene validez
                                    y reconocimiento internacional para mejorar tu CV. Podrás
                                    compartir información de tu certificación internacional de
                                    Autodesk en tu LinkedIn, Facebook y firmas digitales.</p>
                                <button class="btn-style-certi fw-700">
                                    Insignia Gratuita
                                </button>

                            </div>

                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="about-directora-title">LOGROS QUE NOS ENORGULLECEN</div>

                        <div class="d-flex flex-row fondo-reconocimiento">

                            <div class="py-2 margin-reconocimiento">
                                <p class=" w-100 text-white py-2 px-4 text-justify fw-200 fw-700 text-reconocimiento">
                                    Reconocidos a nivel nacional
                                    (Perú) <br>
                                    como mejor StartUp de formación BIM
                                </p>

                                <p class=" w-100 text-white py-2 px-4 text-justify fw-200 text-reco">Instituto Dozer en
                                    los
                                    últimos años, <br> gracias al rápido crecimiento y la <br> ampliación de nuestra
                                    presencia en <br>
                                    Latinoamérica, hemos conseguido ser un <br> referente del sector y alcanzar
                                    segmentos <br>
                                    relacionados con la consultoría <br> especializada en ámbitos como BIM y el <br>
                                    desarrollo de
                                    nuevas técnologías. </p>
                                <div class=" mb-3 align-items-center justify-content-center ">
                                    <div class="p-2"> <img class="img-reconocimiento"
                                            src="<?=base_url()?>uploads/system/logo-reconocimiento.png " alt=""></div>


                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="d-flex fondo-certificado-cursos mt-3">
                        <div class="p-2 w-100 color-text px-3 py-2 text-justify">Para acceder a la insignia digital de
                            Acreditación, tendrá que haber aprobado
                            los niveles básico y avanzado. </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-xl-4 col-xxl-3 order-first order-lg-last resumeninfo">
                <div class="course-sidebar box-shadow-5 natural cuadro-contenido">
                    <?php if ($course_details['video_url'] != "") : ?>
                    <div class="preview-video-box">
                        <a data-bs-toggle="modal" data-bs-target="#CoursePreviewModal">
                            <img src="<?php echo $this->crud_model->get_course_thumbnail_url($course_details['id']); ?>"
                                alt="" class="w-100">
                            <span class="preview-text"><?php echo site_phrase('preview_this_course'); ?></span>
                            <span class="play-btn"></span>
                        </a>
                    </div>
                    <?php endif; ?>
                    <div class="course-sidebar-text-box">

                        <div class="price text-start">
                            <?php if ($course_details['is_free_course'] == 1) : ?>
                            <span class="current-price"><span
                                    class="current-price"><?php echo site_phrase('free'); ?></span></span>
                            <?php else : ?>
                            <?php if ($course_details['discount_flag'] == 1) : ?>

                            <div class="d-flex flex-row mb-3 justify-content-between">
                                <div>
                                    <p class="text-white fw-300">Inversion unica:</p>
                                    <span class="current-price"><span
                                            class="current-price text-white"><?php echo currency($course_details['discounted_price']); ?></span></span>
                                </div>
                                <div class="d-flex flex-column mb-3">
                                    <div class="p-2"><span class="original-price ">Antes:
                                            <?php echo currency($course_details['price']) ?></span> </div>
                                    <div class="p-2"><span class="dto"> 70% dto.</span> </div>

                                </div>
                            </div>
                            <input type="hidden" id="total_price_of_checking_out"
                                value="<?php echo currency($course_details['discounted_price']); ?>">
                            <?php else : ?>
                            <span class="current-price"><span
                                    class="current-price"><?php echo currency($course_details['price']); ?></span></span>
                            <input type="hidden" id="total_price_of_checking_out"
                                value="<?php echo currency($course_details['price']); ?>">
                            <?php endif; ?>
                            <?php endif; ?>
                        </div>

                        <?php if (is_purchased($course_details['id'])) : ?>
                        <div class="already_purchased">
                            <a
                                href="<?php echo site_url('home/my_courses'); ?>"><?php echo site_phrase('already_purchased'); ?></a>
                        </div>
                        <?php else : ?>

                        <!-- WISHLIST BUTTON -->
                        <div class="buy-btns">

                        </div>

                        <?php if ($course_details['is_free_course'] == 1) : ?>
                        <div class="buy-btns">
                            <?php if ($this->session->userdata('user_login') != 1) : ?>
                            <a href="javascript:;" class="btn btn-buy-now"
                                onclick="handleEnrolledButton()"><?php echo site_phrase('get_enrolled'); ?></a>
                            <?php else : ?>
                            <a href="<?php echo site_url('home/get_enrolled_to_free_course/' . $course_details['id']); ?>"
                                class="btn btn-buy-now"><?php echo site_phrase('get_enrolled'); ?></a>
                            <?php endif; ?>
                        </div>
                        <?php else : ?>
                        <div class="buy-btns">
                            <?php if (in_array($course_details['id'], $this->session->userdata('cart_items'))) : ?>
                            <button class="btn btn-buy-now active" type="button"
                                id="<?php echo $course_details['id']; ?>"
                                onclick="handleCartItems(this)"><?php echo site_phrase('added_to_cart'); ?></button>
                            <?php else : ?>
                            <button class="btn btn-buy" type="button" id="course_<?php echo $course_details['id']; ?>"
                                onclick="handleBuyNow(this)"><?php echo site_phrase('Cómpralo ahora'); ?></button>


                            <?php endif; ?>

                            <button class="btn btn-buy-now" type="button" id="<?php echo $course_details['id']; ?>"
                                onclick="handleCartItems(this)"> <img class="card-course" src="<?=base_url()?>uploads/system/card-white.png " alt=""> <?php echo site_phrase('Agregar a mi carrito'); ?></button>
                        </div>
                        <?php endif; ?>
                        <?php endif; ?>
                        <hr style="height: 3px;" class="">

                        <a href="" class="brochure text-center">Descargar el Brochure</a>

                        <div class="includes">
                            <div class="title text-white">
                                <b><?php echo site_phrase('Beneficios al Matricularte'); ?>:</b>
                            </div>
                            <ul>
                                <?php if ($course_details['course_type'] == 'general') : ?>
                                <li class="text-white"><img class="me-2"
                                        src="<?= base_url() ?>uploads/system/sheck-type.png" alt="">Docente con amplia
                                    experiencia</li>
                                <li class="text-white"><img class="me-2"
                                        src="<?= base_url() ?>uploads/system/sheck-type.png" alt="">Clases a tu ritmo,inicia cuando
                                  <span class="pl-25px"> quieras</span>  
                                </li>
                                <li class="text-white"><img class="me-2"
                                        src="<?= base_url() ?>uploads/system/sheck-type.png" alt="">Certificado por
                                    Instituto Dozer
                                </li>
                                <?php elseif ($course_details['course_type'] == 'scorm') : ?>
                                <li class="text-white"><i class="far fa-file-video"></i>Certificado por Autodesk
                                </li>
                                <li class="text-white"><i class="fas fa-mobile-alt"></i>Insignia digital de acreditación
                                </li>
                                <?php endif; ?>
                                <li class="text-white"><img class="me-2"
                                        src="<?= base_url() ?>uploads/system/sheck-type.png" alt="">Proyectos reales
                                    desde cero
                                </li>
                                <li class="text-white"><img class="me-2"
                                        src="<?= base_url() ?>uploads/system/sheck-type.png" alt="">Constancia de
                                    matrícula
                                </li>




                                <?php
                            

                
                
                
                
                
                                                if (addon_status('affiliate_course')) : // course_addon start  adding
                                    $CI    = &get_instance();
                                    $CI->load->model('addons/affiliate_course_model');
                                    $is_affiliattor = $CI->affiliate_course_model->is_affilator($this->session->userdata('user_id'));
                                    if($is_affiliattor == 1): ?>
                                <li class="text-center pt-3">

                                    <a class="btn-custom_coursepage text-decoration-none fw-600 hover-shadow-1 d-inline-block"
                                        href="#myModel" data-bs-toggle="modal" data-bs-target="#myModel" id="shareBtn"
                                        data-bs-placement="top"><i class="fas fa-user-plus"></i>
                                        <?php echo site_phrase('Share and Earn'); ?></a>

                                </li>
                                <?php endif; ?>
                                <?php endif; // course_addon end adding  
                                ?>


                            </ul>
                            <a href="" class="brochure text-center text-white">¡Quiero ser <span> <img class="w-20-px"
                                            src="<?=base_url()?>uploads/system/corona-white.png " alt=""> </span> Premium!</a>
                            <div class="title text-white">
                                <b><?php echo site_phrase('Beneficios de ser Premium'); ?>:</b>
                            </div>
                            <ul>
                                <?php if ($course_details['course_type'] == 'general') : ?>
                                <li class="text-white"><img class="me-2"
                                        src="<?= base_url() ?>uploads/system/sheck-type.png" alt="">Acceso total a los
                                    26 cursos</li>
                                <li class="text-white"><img class="me-2"
                                        src="<?= base_url() ?>uploads/system/sheck-type.png" alt="">Acceso a todos los
                                    certificados de los
                                    <span class="pl-25px">26 cursos por Instituto Dozer </span>
                                </li>
                                <li class="text-white"><img class="me-2"
                                        src="<?= base_url() ?>uploads/system/sheck-type.png" alt="">Acceso a todos los
                                    certificados de los
                                   <span class="pl-25px">26 cursos por Autodesk</span> 
                                </li>
                                <?php elseif ($course_details['course_type'] == 'scorm') : ?>
                                <li class="text-white"><i class="far fa-file-video"></i>Acceso a clases de reforzamiento
                                    en
                                    vivo junto al docente
                                </li>
                                <li class="text-white"><i class="fas fa-mobile-alt"></i>Acceso a licencia temporales y
                                    de
                                  <span class="pl-25px">estudiantes por 1 año de Autodesk</span>  
                                </li>
                                <?php endif; ?>
                                <li class="text-white"><img class="me-2"
                                        src="<?= base_url() ?>uploads/system/sheck-type.png" alt="">Asesoría para la
                                    instalación de los
                                   <span class="pl-25px">softwares de autodesk</span> 
                                </li>
                                <li class="text-white"><img class="me-2"
                                        src="<?= base_url() ?>uploads/system/sheck-type.png" alt="">Asesoría académica
                                    exclusiva y más!
                                </li>




                                <?php
                            

                
                
                
                
                
                                                if (addon_status('affiliate_course')) : // course_addon start  adding
                                    $CI    = &get_instance();
                                    $CI->load->model('addons/affiliate_course_model');
                                    $is_affiliattor = $CI->affiliate_course_model->is_affilator($this->session->userdata('user_id'));
                                    if($is_affiliattor == 1): ?>
                                <li class="text-center pt-3">

                                    <a class="btn-custom_coursepage text-decoration-none fw-600 hover-shadow-1 d-inline-block"
                                        href="#myModel" data-bs-toggle="modal" data-bs-target="#myModel" id="shareBtn"
                                        data-bs-placement="top"><i class="fas fa-user-plus"></i>
                                        <?php echo site_phrase('Share and Earn'); ?></a>

                                </li>
                                <?php endif; ?>
                                <?php endif; // course_addon end adding  
                                ?>


                            </ul>

                            <p class="text-cm mt-2">¿Tienes dudas o consultas? </p>
                            <div class="d-flex flex-row mb-3 align-items-center justify-content-center fondo-wts">
                                <div class="p-2"> <a href="#"> <img class="w-20-px"
                                            src="<?=base_url()?>uploads/system/whatsap.svg " alt="">
                                <span class="py-2 text-white fw-bold">Dale click Aquí</span></a></div>

                            </div>
                            <p class="text-wssp mt-2">o escríbenos al número: +51 929 270 912</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php if (addon_status('affiliate_course') && $is_affiliattor == 1) : ?>
<?php include 'affiliate_course_modal.php';  // course_addon  single line /adding 
    ?>
<?php endif; ?>

<!-- // course_addon  adding   -->
<style>
.btn-custom_coursepage {
    color: #fff;
    background-color: #19619c;

    padding: 7.5px 10px;
    border-radius: 10px !important;
    line-height: 1.35135;
    font-weight: 600;
    margin-left: 5px !important;
}

.btn-custom_coursepage:hover {
    background-color: #FFC873;
    color: white;
}
</style>
<!-- // course_addon end    -->
<!-- Modal -->
<?php if ($course_details['video_url'] != "") :
    $provider = "";
    $video_details = array();
    if ($course_details['course_overview_provider'] == "html5") {
        $provider = 'html5';
    } else {
        $video_details = $this->video_model->getVideoDetails($course_details['video_url']);
        $provider = $video_details['provider'];
    }
?>
<div class="modal fade" id="CoursePreviewModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true"
    data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content course-preview-modal">
            <div class="modal-header">
                <h5 class="modal-title">
                    <span><?php echo site_phrase('course_preview') ?>:</span><?php echo $course_details['title']; ?>
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" onclick="pausePreview()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="course-preview-video-wrap">
                    <div class="embed-responsive embed-responsive-16by9">
                        <?php if (strtolower(strtolower($provider)) == 'youtube') : ?>
                        <!------------- PLYR.IO ------------>
                        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/plyr/plyr.css">

                        <div class="plyr__video-embed" id="player">
                            <iframe height="500"
                                src="<?php echo $course_details['video_url']; ?>?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                                allowfullscreen allowtransparency allow="autoplay"></iframe>
                        </div>

                        <script src="<?php echo base_url(); ?>assets/global/plyr/plyr.js"></script>
                        <script>
                        const player = new Plyr('#player');
                        </script>
                        <!------------- PLYR.IO ------------>
                        <?php elseif (strtolower($provider) == 'vimeo') : ?>
                        <!------------- PLYR.IO ------------>
                        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/plyr/plyr.css">
                        <div class="plyr__video-embed" id="player">
                            <iframe height="500"
                                src="https://player.vimeo.com/video/<?php echo $video_details['video_id']; ?>?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media"
                                allowfullscreen allowtransparency allow="autoplay"></iframe>
                        </div>

                        <script src="<?php echo base_url(); ?>assets/global/plyr/plyr.js"></script>
                        <script>
                        const player = new Plyr('#player');
                        </script>
                        <!------------- PLYR.IO ------------>
                        <?php else : ?>
                        <!------------- PLYR.IO ------------>
                        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/global/plyr/plyr.css">
                        <video
                            poster="<?php echo $this->crud_model->get_course_thumbnail_url($course_details['id']); ?>"
                            id="player" playsinline controls>
                            <?php if (get_video_extension($course_details['video_url']) == 'mp4') : ?>
                            <source src="<?php echo $course_details['video_url']; ?>" type="video/mp4">
                            <?php elseif (get_video_extension($course_details['video_url']) == 'webm') : ?>
                            <source src="<?php echo $course_details['video_url']; ?>" type="video/webm">
                            <?php else : ?>
                            <h4><?php site_phrase('video_url_is_not_supported'); ?></h4>
                            <?php endif; ?>
                        </video>

                        <style media="screen">
                        .plyr__video-wrapper {
                            height: 450px;
                        }
                        </style>

                        <script src="<?php echo base_url(); ?>assets/global/plyr/plyr.js"></script>
                        <script>
                        const player = new Plyr('#player');
                        </script>
                        <!------------- PLYR.IO ------------>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!-- Modal -->

<style media="screen">
.embed-responsive-16by9::before {
    padding-top: 0px;
}
</style>
<script type="text/javascript">
function handleCartItems(elem) {
    url1 = '<?php echo site_url('home/handleCartItems'); ?>';
    url2 = '<?php echo site_url('home/refreshWishList'); ?>';
    $.ajax({
        url: url1,
        type: 'POST',
        data: {
            course_id: elem.id
        },
        success: function(response) {
            $('#cart_items').html(response);
            if ($(elem).hasClass('active')) {
                $(elem).removeClass('active')
                $(elem).text("<?php echo site_phrase('add_to_cart'); ?>");
            } else {
                $(elem).addClass('active');
                $(elem).addClass('active');
                $(elem).text("<?php echo site_phrase('added_to_cart'); ?>");
            }
            $.ajax({
                url: url2,
                type: 'POST',
                success: function(response) {
                    $('#wishlist_items').html(response);
                }
            });
        }
    });
}

function handleBuyNow(elem) {

    url1 = '<?php echo site_url('home/handleCartItemForBuyNowButton'); ?>';
    url2 = '<?php echo site_url('home/refreshWishList'); ?>';
    url3 = '<?php echo site_url('home/url_return'); ?>';
    urlToRedirect = '<?php echo site_url('home/shopping_cart'); ?>';
    urlLogin = '<?php echo site_url('login'); ?>';
    var explodedArray = elem.id.split("_");
    var course_id = explodedArray[1];
    let id_user = $("#id_user").val();
    let url_return = $("#url_return").val();
    console.log(url_return);

    if (id_user == "") {

        $.ajax({
            url: url3,
            type: 'POST',
            data: {
                url_return: url_return
            },
            success: function(response) {
                toastr.error('<?php echo site_phrase('Tiene que Iniciar Sesión') . '....'; ?>');
                setTimeout(
                    function() {
                        window.location.replace(urlLogin);
                    }, 1000);
            }
        })


    } else {

        $.ajax({
            url: url1,
            type: 'POST',
            data: {
                course_id: course_id
            },
            success: function(response) {
                $('#cart_items').html(response);
                $.ajax({
                    url: url2,
                    type: 'POST',
                    success: function(response) {
                        $('#wishlist_items').html(response);
                        toastr.success('<?php echo site_phrase('please_wait') . '....'; ?>');
                        setTimeout(
                            function() {
                                window.location.replace(urlToRedirect);
                            }, 1000);
                    }
                });
            }
        });
    }

}

function handleEnrolledButton() {
    $.ajax({
        url: '<?php echo site_url('home/isLoggedIn?url_history=' . base64_encode(current_url())); ?>',
        success: function(response) {
            if (!response) {
                window.location.replace("<?php echo site_url('login'); ?>");
            }
        }
    });
}

function handleAddToWishlist(elem) {
    $.ajax({
        url: '<?php echo site_url('home/isLoggedIn?url_history=' . base64_encode(current_url())); ?>',
        success: function(response) {
            if (!response) {
                window.location.replace("<?php echo site_url('login'); ?>");
            } else {
                $.ajax({
                    url: '<?php echo site_url('home/handleWishList'); ?>',
                    type: 'POST',
                    data: {
                        course_id: elem.id
                    },
                    success: function(response) {
                        if ($(elem).hasClass('active')) {
                            $(elem).removeClass('active');
                            $(elem).text("<?php echo site_phrase('add_to_wishlist'); ?>");
                        } else {
                            $(elem).addClass('active');
                            $(elem).text("<?php echo site_phrase('added_to_wishlist'); ?>");
                        }
                        $('#wishlist_items').html(response);
                    }
                });
            }
        }
    });
}

function pausePreview() {
    player.pause();
}

$('.course-compare').click(function(e) {
    e.preventDefault()
    var redirect_to = $(this).attr('redirect_to');
    window.location.replace(redirect_to);
});

function go_course_playing_page(course_id, lesson_id) {
    var course_playing_url = "<?php echo site_url('home/lesson/' . slugify($course_details['title'])); ?>/" +
        course_id + '/' + lesson_id;

    $.ajax({
        url: '<?php echo site_url('home/go_course_playing_page/'); ?>' + course_id,
        type: 'POST',
        success: function(response) {
            if (response == 1) {
                window.location.replace(course_playing_url);
            }
        }
    });
}
</script>