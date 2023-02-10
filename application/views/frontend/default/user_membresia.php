<?php $social_links = json_decode($user_details['social_links'], true);


if (addon_status('affiliate_course')) {

    $CI    = &get_instance();
    $CI->load->model('addons/affiliate_course_model');
    $x = $CI->affiliate_course_model->is_affilator($this->session->userdata('user_id'));
    if ($x == 1)
    {

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
                            <li class="active mb-3"><a href="<?php echo site_url('home/profile/user_profile'); ?>"> <i
                                        class="fas fa-user-circle"></i> <?php echo site_phrase('profile'); ?></a></li>
                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_credentials'); ?>"> <i
                                        class="fas fa-lock"></i> <?php echo site_phrase('account'); ?></a></li>
                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_photo'); ?>"> <i
                                        class="fas fa-camera-retro"></i> <?php echo site_phrase('photo'); ?></a></li>

                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_membresia'); ?>"> <i
                                        class="fas fa-camera-retro"></i> <?php echo site_phrase('membresia'); ?></a></li>

                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_photo'); ?>"> <i
                                        class="fas fa-camera-retro"></i> <?php echo site_phrase('software'); ?></a></li>

                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_photo'); ?>"> <i
                                        class="fas fa-camera-retro"></i> <?php echo site_phrase('soporte'); ?></a></li>
                                        
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9 mt-4 mt-md-0">
                <div class="user-dashboard-sidebar box-shadow-5">
                    <div class="d-flex flex-row">
                        <div class="user-box">
                            <img src="<?php echo $this->user_model->get_user_image_url($this->session->userdata('user_id')); ?>"
                                alt="" class="img-fluid">
                        </div>
                        <div class="d-flex flex-column">
                            <div class="name p-2 fw-bolder">
                                <div class="name">
                                    Hola! <?php echo $user_details['first_name'] . ' ' . $user_details['last_name']; ?>
                                </div>
                            </div>
                            <div class=" p-2 fw-lighter">
                                <p>Te damos la bienvenida!</p>
                                <p>Seremos tu impulso para que puedas lograr <br>
                                    todas tus metas profesionales! </p>
                            </div>
                        </div>
                    </div>


                </div>
                <form class="w-100  radius-10 p-4 box-shadow-5"
                    action="<?php echo site_url('home/update_profile/update_basics'); ?>" method="post">
                    <div class="row">
                        <div class="col-12 border-bottom mb-3 pb-3 text-white">
                            <h4><?php echo site_phrase('mis_datos_personales'); ?></h4>

                        </div>

                        <div class="col-md-6 text-white p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('first_name'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="first_name" id="FristName"
                                    placeholder="<?php echo site_phrase('first_name'); ?>"
                                    value="<?php echo $user_details['first_name']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('last_name'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="last_name"
                                    placeholder="<?php echo site_phrase('last_name'); ?>"
                                    value="<?php echo $user_details['last_name']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <label class="text-white fw-600" for="FristName"><?php echo site_phrase('dni'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="dni" id="FristName"
                                    placeholder="<?php echo site_phrase('dni'); ?>"
                                    value="<?php echo $user_details['dni']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6  p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('fecha_de_nacimiento'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="fecha_de_nacimiento" id="FristName"
                                    placeholder="<?php echo site_phrase('fecha_de_nacimiento'); ?>"
                                    value="<?php echo $user_details['fecha_de_nacimiento']; ?>">
                            </div>
                        </div>

                        <div class="col-md-6 p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('pais_procedencia'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="pais_procedencia" id="FristName"
                                    placeholder="<?php echo site_phrase('pais_procedencia'); ?>"
                                    value="<?php echo $user_details['pais_procedencia']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6  p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('departamento'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="departamento" id="FristName"
                                    placeholder="<?php echo site_phrase('departamento'); ?>"
                                    value="<?php echo $user_details['departamento']; ?>">
                            </div>
                        </div>


                        <div class="col-md-6 p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('provincia'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="provincia" id="FristName"
                                    placeholder="<?php echo site_phrase('provincia'); ?>"
                                    value="<?php echo $user_details['provincia']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6  p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('distrito'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="distrito" id="FristName"
                                    placeholder="<?php echo site_phrase('distrito'); ?>"
                                    value="<?php echo $user_details['distrito']; ?>">
                            </div>
                        </div>


                        <div class="col-md-6 p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('celular'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="celular" id="FristName"
                                    placeholder="<?php echo site_phrase('celular'); ?>"
                                    value="<?php echo $user_details['celular']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6  p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('correo'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="correo" id="FristName"
                                    placeholder="<?php echo site_phrase('correo'); ?>"
                                    value="<?php echo $user_details['correo']; ?>">
                            </div>
                        </div>

                        <div class="col-12 border-bottom mb-3 pb-3 text-white">
                            <h4><?php echo site_phrase('mis_datos_academicos'); ?></h4>

                        </div>

                       
                       
                       



                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



<script type="text/javascript">
$(function() {
    $(".bootstrap-tag-input").tagsinput('items');
});
</script>