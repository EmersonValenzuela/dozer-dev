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
                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_profile'); ?>"> <i class="fas fa-user-alt"></i> <?php echo site_phrase('profile'); ?></a></li>


                            <li class="active mb-3"><a href="<?php echo site_url('home/profile/user_mis_cursos'); ?>"> <i class="	fas fa-graduation-cap"></i> <?php echo site_phrase('cursoos'); ?></a></li>

                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_mis_especializaciones'); ?>"> <i class="	fas fa-graduation-cap"></i>
                                    <?php echo site_phrase('especializacioones'); ?></a></li>

                            <li class="  mb-3"><a href="<?php echo site_url('home/profile/user_mis_diplomados'); ?>"> <i class="	fas fa-graduation-cap"></i> <?php echo site_phrase('diploomados'); ?></a>
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
                <?php
                $my_courses = $this->user_model->my_courses_c()->result_array();
                if ($my_courses == null) {
                ?>
                    <div class="col-12 border-bottom mb-3 pb-3 text-white">
                        <h4><?php echo site_phrase('sin_resultados'); ?></h4>
                    </div>

                <?php }

                $categoria = array();
                foreach ($my_courses as $my_course) {
                    $course_details = $this->crud_model->get_course_by_id($my_course['course_id'])->row_array();
                    if (!in_array($course_details['category_id'], $categoria)) {
                        array_push($categoria, $course_details['category_id']);
                    }
                }
                ?>
                <section class="my-courses-area"  style="padding:0px !important;">
                    <div class="container">
                        <?php
                        if ($my_courses != null) {

                        ?>
                            <div class="w-100 px-2">
                                <div class="row align-items-baseline bg-white radius-8 box-shadow-3">
                                    <div class="col-lg-6 py-2">

                                    </div>
                                    <div class="col-lg-6 py-2">
                                        <form action="javascript:;">
                                            <div class="input-group common-search-box">
                                                <input type="text" class="form-control py-2" placeholder="<?php echo site_phrase('search_my_courses'); ?>" onkeyup="getCoursesBySearchString(this.value)">
                                                <dib class="input-group-button">
                                                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                                                </dib>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <div class="row no-gutters" id="my_courses_area">
                            <?php include 'reload_my_courses.php'; ?>
                        </div>
                    </div>
                </section>


                <script type="text/javascript">
                    function getCoursesByCategoryId(category_id) {
                        $('#my_courses_area').html('<div class="animated-loader"><div class="spinner-border text-secondary" role="status"></div></div>');
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo site_url('home/my_courses_by_category'); ?>',
                            data: {
                                category_id: category_id
                            },
                            success: function(response) {
                                $('#my_courses_area').html(response);
                            }
                        });
                    }

                    function getCoursesBySearchString(search_string) {
                        $('#my_courses_area').html('<div class="animated-loader"><div class="spinner-border text-secondary" role="status"></div></div>');
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo site_url('home/my_courses_by_search_string'); ?>',
                            data: {
                                search_string: search_string
                            },
                            success: function(response) {
                                $('#my_courses_area').html(response);
                            }
                        });
                    }
                </script>
            </div>
        </div>
    </div>
</section>