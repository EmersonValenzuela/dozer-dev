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
                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_profile'); ?>"> <i
                                        class="fas fa-user-alt"></i> <?php echo site_phrase('profile'); ?></a></li>

                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_credentials'); ?>"> <i
                                        class="fas fa-user-edit"></i> <?php echo site_phrase('editar_perfil'); ?></a></li>

                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_photo'); ?>"> <i
                                        class="fas fa-camera-retro"></i> <?php echo site_phrase('photo'); ?></a></li>

                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_mis_cursos'); ?>"> <i
                                        class="	fas fa-graduation-cap"></i> <?php echo site_phrase('cursoos'); ?></a></li>

                            <li class=" mb-3"><a
                                    href="<?php echo site_url('home/profile/user_mis_especializaciones'); ?>"> <i
                                        class="	fas fa-graduation-cap"></i>
                                    <?php echo site_phrase('especializacioones'); ?></a></li>

                            <li class="  mb-3"><a href="<?php echo site_url('home/profile/user_mis_diplomados'); ?>"> <i
                                        class="	fas fa-graduation-cap"></i> <?php echo site_phrase('diploomados'); ?></a>
                            </li>

                            <li class="  mb-3"><a href="<?php echo site_url('home/profile/user_mis_certificados'); ?>">
                                    <i class="fas fa-award"></i> <?php echo site_phrase('certificado'); ?></a>
                            </li>

                            <li class="active  mb-3"><a href="<?php echo site_url('home/profile/user_membresia'); ?>">
                                    <i class="fas fa-chess-queen"></i> <?php echo site_phrase('membresia'); ?></a></li>

                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_sotfware'); ?>"> <i
                                        class="fas fa-laptop-code"></i> <?php echo site_phrase('software'); ?></a></li>

                            <li class="  mb-3"><a href="<?php echo site_url('home/profile/user_soporte'); ?>"><i
                                        class="fas fa-cogs"></i> <?php echo site_phrase('soporte'); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9 mt-4 mt-md-0">
                <div class=" box-shadow-5">
                    <div class="d-flex flex-row">
                        <div class="user-box">
                            <img src="<?=base_url()?>uploads/system/membresia.png" alt="">
                        </div>
                        <div class="d-flex flex-column position-absolute conf">
                            <div class="name p-2 fw-bolder">
                                <div class="name fw-bolder ti-m text-center">
                                    Migra a Premium <br>
                                    Hoy mismo!

                                </div>
                            </div>
                            <div class=" p-2 fw-lighter text-center">
                                <p>Con un solo pago podrás acceder <br>
                                    a los 38 cursos con certificaciones <br>
                                    oficiales de Autodesk y de Instituto <br>
                                    Dozer, tambien accederás a sesiones <br>
                                    de reforzamiento en vivo junto al <br>
                                    docente y muchos beneficios más. </p>
                                    <a class="bg-white py-1 px-5 btn-m" href="#"> Quiero ser Premiun</a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</section>



<script type="text/javascript">
$(function() {
    $(".bootstrap-tag-input").tagsinput('items');
});
</script>