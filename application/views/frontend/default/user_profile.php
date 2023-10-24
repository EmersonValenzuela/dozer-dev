<?php $social_links = json_decode($user_details['social_links'], true);


if (addon_status('affiliate_course')) {

    $CI    = &get_instance();
    $CI->load->model('addons/affiliate_course_model');
    $x = $CI->affiliate_course_model->is_affilator($this->session->userdata('user_id'));
    if ($x == 1) {

        $payment_keys = json_decode($user_details['payment_keys'], true);
        $paypal_keys = $payment_keys['paypal'];
        $stripe_keys = $payment_keys['stripe'];
        $razorpay_keys = $payment_keys['razorpay'];
    }
}

?>


<?php include "profile_menus.php"; ?>

<section class="user-dashboard-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <div class="user-dashboard-sidebar box-shadow-5">

                    <div class="user-dashboard-menu">
                        <ul>
                            <li class="active mb-3"><a href="<?php echo site_url('home/profile/user_profile'); ?>"> <i class="fas fa-user-alt"></i> <?php echo site_phrase('profile'); ?></a></li>

                          
                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_mis_cursos'); ?>"> <i class="	fas fa-graduation-cap"></i> <?php echo site_phrase('cursos'); ?></a>
                            </li>

                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_mis_especializaciones'); ?>"> <i class="	fas fa-graduation-cap"></i>
                                    <?php echo site_phrase('especializaciones'); ?></a></li>

                            <li class="  mb-3"><a href="<?php echo site_url('home/profile/user_mis_diplomados'); ?>"> <i class="	fas fa-graduation-cap"></i>
                                    <?php echo site_phrase('diplomados'); ?></a>
                            </li>

                            <li class="  mb-3"><a href="<?php echo site_url('home/profile/user_mis_certificados'); ?>">
                                    <i class="fas fa-award"></i> <?php echo site_phrase('certificado'); ?></a>
                            </li>

                            <li class="  mb-3"><a href="<?php echo site_url('home/profile/user_membresia'); ?>">
                                    <i class="fas fa-chess-queen"></i> <?php echo site_phrase('membresia'); ?></a></li>

                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_sotfware'); ?>"> <i class="fas fa-laptop-code"></i> <?php echo site_phrase('software'); ?></a></li>

                            <li class="  mb-3"><a href="<?php echo site_url('home/profile/user_soporte'); ?>"><i class="fas fa-cogs"></i> <?php echo site_phrase('soporte'); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9 mt-4 mt-md-0">
                <div class="user-dashboard-sidebar box-shadow-5" style="background-color: #373737;">
                    <div class="d-flex flex-row align-items-center">
                        <div class="user-box">
                            <img src="<?php echo $this->user_model->get_user_image_url($this->session->userdata('user_id')); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="d-flex flex-column text-white">
                            <div class="name p-2 fw-bolder">
                                <div class="name">
                                    Hola! <?php echo $user_details['first_name'] . ' ' . $user_details['last_name']; ?>
                                </div>
                            </div>
                            <div class=" p-2 fw-lighter">
                                <p>Te damos la bienvenida!</p>
                                <p>Seremos tu impulso para que puedas lograr 
                                    todas tus metas profesionales! </p>
                            </div>
                        </div>
                        <div class="img-perfil">
                            <div class="p-2"> <img class="img-perfilw" src="<?= base_url() ?>uploads\system\logo-perfil.png" alt=""></div>

                        </div>

                    </div>



                </div>
                <form class="w-99  " action="<?php echo site_url('home/update_profile/update_basics'); ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 mt-3 mb-3 pb-3 text-white">
                            <h4><?php echo site_phrase('Mi datos de Cuenta'); ?></h4>

                        </div>
                        <div class="col-md-6  p-2">

                            <div class="d-flex flex-row justify-content-between">
                                <div class=""><label class="text-white fw-600" for="FristName"><?php echo site_phrase('Correo:'); ?></label></div>

                                <div class=""><a data-bs-toggle="modal" class="style-cc" href="#mcc"> <label class="text-cc" for=" ">Cambiar
                                            correo </label> </a></div>
                            </div>
                            <div class="input-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo site_phrase('email'); ?>" value="<?php echo $user_details['email']; ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 text-white p-2">
                            <div class="d-flex flex-row justify-content-between">
                                <div class=""> <label class="text-white fw-600" for="FristName"><?php echo site_phrase('Contraseña:'); ?></label></div>

                                <div class=""><a data-bs-toggle="modal" class="style-cc" href="#mcco"> <label class="text-cc" for=" ">Cambiar
                                            Contraseña </label> </a></div>
                            </div>
                            <div class="input-group">

                                <input type="text" class="form-control" name="password" id="FristName" placeholder="<?php echo site_phrase('password'); ?>" value="<?php echo $user_details['password']; ?>" readonly>
                            </div>
                        </div>



                        <div class="col-md-6 text-white p-2">
                            <label class="text-white fw-600" for="FristName"><?php echo site_phrase('Mi Nombre:'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="first_name" id="FristName" placeholder="<?php echo site_phrase('first_name'); ?>" value="<?php echo $user_details['first_name']; ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <label class="text-white fw-600" for="FristName"><?php echo site_phrase('Mi Apellido:'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="last_name" placeholder="<?php echo site_phrase('last_name'); ?>" value="<?php echo $user_details['last_name']; ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <label class="text-white fw-600" for="FristName"><?php echo site_phrase('Número de DNI - Cédula de Identidad:'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="dni" placeholder="<?php echo site_phrase('dni'); ?>" value="<?php echo $user_details['dni']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <label class="text-white fw-600" for="FristName"><?php echo site_phrase('fecha_de_nacimiento:'); ?></label>
                            <div class="input-group">

                                <input type="date" class="form-control" name="birthday" placeholder="<?php echo site_phrase('fecha_de_nacimiento'); ?>" value="<?php echo $user_details['birthday']; ?>">
                            </div>
                        </div>

                        <div class="col-md-6 p-2">
                            <label for="validationCustom04" class="text-white fw-600"><?php echo site_phrase('pais_procedencia:'); ?></label>


                            <select class="form-select style-ce" name="country" id="country" requerid>
                                <option selected disabled value="">Seleccionar Pais de procedencia </option>
                                <option value="1">Argentina</option>
                                <option value="2">Bolivia</option>
                                <option value="3">Brasil</option>
                                <option value="4">Chile</option>
                                <option value="5">Colombia</option>
                                <option value="6">Costa Rica</option>
                                <option value="7">Cuba</option>
                                <option value="8">República Dominicana</option>
                                <option value="9">Ecuador</option>
                                <option value="10">El Salvador</option>
                                <option value="11">España</option>
                                <option value="12">Estados Unidos</option>
                                <option value="13">Guatemala</option>
                                <option value="14">Honduras</option>
                                <option value="15">México</option>
                                <option value="16">Nicaragua</option>
                                <option value="17">Panamá</option>
                                <option value="18">Paraguay</option>
                                <option value="19">Perú</option>
                                <option value="20">Portugal</option>
                                <option value="21">Puerto Rico</option>
                                <option value="22">Uruguay</option>
                                <option value="23">Venezuela</option>
                            </select>

                            <div id="invalid-feedback" class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-6  p-2">
                            <label class="text-white fw-600" for="FristName"><?php echo site_phrase('Ciudad:'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="city" placeholder="<?php echo site_phrase('distrito'); ?>" value="<?php echo $user_details['city']; ?>">
                            </div>
                        </div>


                        <div class="col-md-6 p-2">
                            <label class="text-white fw-600" for="FristName"><?php echo site_phrase('Cel/WhatsApp'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="phone" placeholder="<?php echo site_phrase('celular'); ?>" value="<?php echo $user_details['phone']; ?>" style="background-color:white important!">
                            </div>
                        </div>
                        <div class="col-md-6  p-2">

                            <div class="row pt-3">
                                <div class="col-12   text-white">
                                    <h4 class="text-photo">
                                        <?php echo site_phrase('Cambiar foto de perfil (peso máximo 5 mb)'); ?></h4>
                                </div>

                                <div class="col-12 mb-3">

                                    <div class="input-group">
                                        <input type="file" class="form-control" name="user_image" id="user_image">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 border-bottom mb-3 pb-3 text-white">
                            <h4><?php echo site_phrase('mis_datos_academicos'); ?></h4>

                        </div>

                        <div class="col-md-6 p-2">
                            <label class="text-white fw-600" for="FristName"><?php echo site_phrase('campo_de_estudio'); ?></label>
                            <div class="input-group">

                                <select class="form-select style-ce" aria-label="Default select example" name="field_study" id="field_study">
                                    <option selected>Seleccionar Campo de Estudio </option>
                                    <option value="1">Arquitectura</option>
                                    <option value="2">Ingeniería Civil</option>
                                    <option value="3">Técnico en construcción</option>
                                    <option value="4">Otro</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6  p-2">
                            <label class="text-white fw-600" for="FristName"><?php echo site_phrase('nivel_de_formacion'); ?></label>
                            <div class="input-group">
                                <div class="input-group">

                                    <select class="form-select style-ce" aria-label="Default select example" name="level_education" id="level_education">
                                        <option selected>Seleccionar Nivel de Formación </option>
                                        <option value="1">Estudiante </option>
                                        <option value="2">Egresado</option>
                                        <option value="3">Magister</option>
                                        <option value="4">Doctorado</option>
                                        <option value="5">Técnico</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12  p-2">
                            <label class="text-white fw-600" for="FristName"><?php echo site_phrase('universidad_o_Centro_de_estudios'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="study_center" id="FristName" placeholder="<?php echo site_phrase('universidad_o_Centro_de_estudios'); ?>" value="<?php echo $user_details['study_center']; ?>">
                            </div>
                        </div>
                        <div class="col-12 mt-3 pb-3 text-white">
                            <h4><?php echo site_phrase('Mis datos personales'); ?></h4>
                        </div>
                        <div class="col-12 pt-4 d-flex flex-row-reverse">
                            <button class="btn bg-gc px-5 py-2 radius-8"><?php echo site_phrase('Guardar Cambios'); ?></button>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="mcco" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-correo">
            <div class="modal-header">
                <h1 class="modal-title fs-5 " id="staticBackdropLabel">Cambiar
                    contraseña</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo site_url('home/update_profile/update_credentials'); ?>" method="post">
                <div class="modal-body ">
                    <div class=" p-correoxy">
                        <p class="text-mcorreo ">Utilice el siguiente formulario para cambiar la contraseña actual
                            <br>
                            registrada en su cuenta de usuario. Utilice la nueva contraseña <br>
                            la próxima vez que inicie sesión.
                        </p>
                    </div>
                    <label class=" fw-600" for="current_password "><?php echo site_phrase('Contraseña actual'); ?></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                        <input type="password" class="form-control" id="current_password" name="current_password" placeholder="<?php echo site_phrase('Introducir Contraseña actual'); ?>">
                    </div>

                    <label class=" fw-600" for="new_password"><?php echo site_phrase('Nueva contraseña'); ?></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="<?php echo site_phrase('Ingrese la nueva contraseña'); ?>">
                    </div>

                    <label class=" fw-600" for="confirm_password"><?php echo site_phrase('Confirma contraseña'); ?></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="<?php echo site_phrase('Repita la nueva contraseña'); ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><?php echo site_phrase('cambiar_contraseña'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="mcc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-correo">
            <div class="modal-header">
                <h1 class="modal-title  title-mcorreo" id="staticBackdropLabel">Cambiar
                    correo
                </h1>

                <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="d-flex flex-column  p-correoxy">
                <p class="text-mcorreo">Utilice el siguiente formulario para cambiar la
                    dirección de correo
                    <br>
                    electrónico actual registrada en su cuenta de usuario. Utilice el
                    <br>
                    nuevo correo la próxima vez que inicie sesión.
                </p>
                <div class="d-flex flex-row  align-items-center">
                    <p style="width: 70%;" class="text-mcorreo d-flex ">Dirección de
                        correo actual: </p>
                    <input type="email" class="form-control form-correo" name="email" id="email" value="<?php echo $user_details['email']; ?>" disabled>
                </div>
            </div>
            <form action="<?php echo site_url('home/update_profile/update_email'); ?>" method="post">
            <div class="modal-body modal-boddy">

                <div class=""><label class="text-white fw-600" for="FristName"><?php echo site_phrase('Nueva direccion de correo'); ?></label>
                </div>
                <div class="input-group">
                    <input type="email" class="form-control" name="new_email" id="new_email" placeholder="Ingrese Nueva Direccion de Correo" required>
                </div>
                <div class=""><label class="text-white fw-600" for="FristName"><?php echo site_phrase('Repita la nueva dirección de correo'); ?></label>
                </div>
                <div class="input-group">
                    <input type="email" class="form-control" name="confirm_email" id="confirm_email" placeholder="Ingrese Nueva Direccion de Correo" required>
                </div>

                <div><label class="text-white fw-600" for="current_password"><?php echo site_phrase('Confirmar contraseña'); ?></label>
                </div>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-key text-white"></i></span>
                    <input type="password" class="form-control" id="get_password" name="get_password" placeholder="Ingrese contraseña" required>
                </div>
            </div>
            <div class="modal-footer">

                <button type="submit" class="btn btn-primary">Understood</button>
            </div>
            </form>
        </div>
    </div>
</div>