<?php
$user_details = $this->user_model->get_user($this->session->userdata('user_id'))->row_array();
?>
<section class="menu-area" style="background-color: #131313;">
    <div class="container-xl">
        <nav class="navbar navbar-expand-lg navbar-light">

            <ul class="mobile-header-buttons">
                <li><a class="mobile-nav-trigger" href="#mobile-primary-nav">Menu<span></span></a></li>

            </ul>

            <a href="<?php echo site_url(''); ?>" class="navbar-brand pt-2 mt-1">
                <img src="<?php echo base_url('uploads/system/' . get_frontend_settings('dark_logo')); ?>" alt=""
                    height="35">
            </a>

            <?php include 'menu.php'; ?>



            <div class="me-auto d-none d-md-none d-lg-block text-white">

                <li class="nav-item dropdown" style="list-style-type: none !important">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <?php
                $categoria = $this->crud_model->get_categoria()->result_array();
                foreach ($categoria as $key => $category):?>
                <a class="text-white fw-500 px-2" href="javascript:;"
                    onclick="redirect_to('<?php echo site_url('home/courses?category='.$category['slug']); ?>')">
                    <span><?php echo $category['name']; ?></span>
                    <span class="has-sub-category ms-auto"></span> </a>

                <?php endforeach; ?>






<<<<<<< HEAD
            </div>

           

            <div class="m-navbar">


                <a class="mx-2" href="<?php echo base_url('Nosotros') ?>">
                    <span class="text-navbar-r-bim main-nav-wrap ">Ruta de Aprendizaje</span>
                </a>
                <a class="mx-2" href="<?php echo base_url('Nosotros') ?>">
                    <span class="text-navbar-r-bim main-nav-wrap ">Mentoria BIM</span>
                </a>


               
=======
                    
                <a href="<?php echo base_url('Nosotros') ?>">
                    <span class="fw-500 text-white main-nav-wrap ">Nosotros</span>
                </a>



                <a href=" <?php echo base_url('Premium') ?>">
                    <span class="fw-500 text-white main-nav-wrap ">Premium</span>
                </a>

>>>>>>> 9c36ec8fbfd44cd4f4affa01436dee477e149958
            </div>

            <?php $custom_page_menus = $this->crud_model->get_custom_pages('', 'header'); ?>
            <?php foreach ($custom_page_menus->result_array() as $custom_page_menu) : ?>
            <a class="navbar-brand btn-hover-gray text-14px ms-2 me-0 <?php if (isset($page_url) && $custom_page_menu['page_url'] == $page_url) echo 'active'; ?>"
                style="border: 1px solid transparent; margin: 0px; padding: 0px 8px; width: max-content; border-radius: 5px; height: 40px; line-height: 40px;"
                href="<?php echo site_url('page/' . $custom_page_menu['page_url']); ?>"><?php echo $custom_page_menu['button_title']; ?></a>
            </li>
            <?php endforeach; ?>
            <a class="mx-2 text-navbar-p main-nav-wrap" href=" <?php echo base_url('Premium') ?>">
                    <img class="icon-corona " src="<?=base_url()?>uploads/system/corona-premium.svg" alt=""> Premium
                </a>

            <?php if (get_settings('allow_instructor') == 1) : ?>
            <div class="instructor-box menu-icon-box ms-md-3">
                <div class="icon">
                    <a class="text-white" href="<?php echo site_url('user'); ?>"
                        style="border: 1px solid transparent; margin: 0px; padding: 0px 10px; font-size: 14px; width: max-content; border-radius: 5px; height: 40px; line-height: 40px;"><?php echo site_phrase('instructor'); ?></a>
                </div>
            </div>
            <?php endif;
            ?>
            
            <div class="instructor-box menu-icon-box">
                <div class="icon">
                    <a class="text-white" href="<?php echo site_url('home/my_courses'); ?>"
                        style="border: 1px solid transparent; margin: 0px; padding: 0px 10px; font-size: 14px; width: max-content; border-radius: 5px; height: 40px; line-height: 40px;"><?php echo site_phrase('my_courses'); ?></a>
                </div>
            </div>

            <div class="wishlist-box menu-icon-box" id="wishlist_items">
                <?php include 'wishlist_items.php'; ?>
            </div>

            <div class="cart-box menu-icon-box" id="cart_items">
                <?php include 'cart_items.php'; ?>
            </div>



            <div class="user-box menu-icon-box">
                <div class="icon">
                    <a href="javascript:;">
                        <img src="<?php echo $this->user_model->get_user_image_url($this->session->userdata('user_id')); ?>"
                            alt="" class="img-fluid">
                    </a>
                </div>
                <div class="dropdown user-dropdown corner-triangle top-right radius-10">
                    <ul class="user-dropdown-menu radius-10">

                        <li class="dropdown-user-info">
                            <a href="javascript:;" class="radius-top-10">
                                <div class="clearfix">
                                    <div class="user-image float-start">
                                        <img src="<?php echo $this->user_model->get_user_image_url($this->session->userdata('user_id')); ?>"
                                            alt="">
                                    </div>
                                    <div class="user-details">
                                        <div class="user-name">
                                            <span class="hi"><?php echo site_phrase('hi'); ?>,</span>
                                            <?php echo $user_details['first_name'] . ' ' . $user_details['last_name']; ?>
                                        </div>
                                        <div class="user-email">
                                            <span class="email"><?php echo $user_details['email']; ?></span>
                                            <span class="welcome"><?php echo site_phrase("welcome_back"); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="user-dropdown-menu-item"><a href="<?php echo site_url('home/my_courses'); ?>"><i
                                    class="far fa-gem"></i><?php echo site_phrase('my_courses'); ?></a></li>
                        <li class="user-dropdown-menu-item"><a href="<?php echo site_url('home/my_wishlist'); ?>"><i
                                    class="far fa-heart"></i><?php echo site_phrase('my_wishlist'); ?></a></li>
                        <li class="user-dropdown-menu-item"><a href="<?php echo site_url('home/my_messages'); ?>"><i
                                    class="far fa-envelope"></i><?php echo site_phrase('my_messages'); ?></a></li>
                        <li class="user-dropdown-menu-item"><a
                                href="<?php echo site_url('home/purchase_history'); ?>"><i
                                    class="fas fa-shopping-cart"></i><?php echo site_phrase('purchase_history'); ?></a>
                        </li>
                        <li class="user-dropdown-menu-item"><a
                                href="<?php echo site_url('home/profile/user_profile'); ?>"><i
                                    class="fas fa-user"></i><?php echo site_phrase('user_profile'); ?></a></li>
                        <?php if (addon_status('affiliate_course')) :
                            $CI    = &get_instance();
                            $CI->load->model('addons/affiliate_course_model');
                            $x = $CI->affiliate_course_model->is_affilator($this->session->userdata('user_id'));
                            $is_affiliator = $CI->affiliate_course_model->is_affilator($this->session->userdata('user_id'));

                            if ($x == 0 && get_settings('affiliate_addon_active_status') == 1) : ?>


                        <li class="user-dropdown-menu-item"><a
                                href="<?php echo site_url('addons/affiliate_course/become_an_affiliator'); ?>"><i
                                    class="fas fa-user-plus"></i><?php echo site_phrase('Become_an_Affiliator'); ?></a>
                        </li>
                        <?php else : ?>
                        <?php if ($is_affiliator == 1) : ?>


                        <li class="user-dropdown-menu-item"><a
                                href="<?php echo site_url('addons/affiliate_course/affiliate_course_history '); ?>"><i
                                    class="fa fa-book"></i><?php echo site_phrase('Affiliation History'); ?></a></li>
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php if (addon_status('customer_support')) : ?>
                        <li class="user-dropdown-menu-item"><a
                                href="<?php echo site_url('addons/customer_support/user_tickets'); ?>"><i
                                    class="fas fa-life-ring"></i><?php echo site_phrase('support'); ?></a></li>
                        <?php endif; ?>

                        <li class="dropdown-user-logout user-dropdown-menu-item radius-bottom-10"><a
                                class="radius-bottom-10 py-3" href="<?php echo site_url('login/logout'); ?>"><i
                                    class="fas fa-sign-out-alt"></i> <?php echo site_phrase('log_out'); ?></a></li>
                    </ul>
                </div>
            </div>

            <?php
            if (site_url('user') != "") {
            ?>

            <span class="signin-box-move-desktop-helper"></span>
            <div class="sign-in-box btn-group d-none">

                <button type="button" class="btn btn-sign-in" data-toggle="modal" data-target="#signInModal">Log
                    In</button>

                <button type="button" class="btn btn-sign-up" data-toggle="modal" data-target="#signUpModal">Sign
                    Up</button>

            </div> <!--  sign-in-box end -->
            <?php } ?>

        </nav>
    </div>
</section>