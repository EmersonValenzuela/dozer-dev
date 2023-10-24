<section class="menu-area " style="background-color: #131313;">
    <div class="container-xl">
        <nav class="navbar navbar-expand-lg ">

            <ul class="mobile-header-buttons">
                <li><a class="mobile-nav-trigger" href="#mobile-primary-nav"><?php echo site_url('menu'); ?><span></span></a> </li>


            </ul>

            <a href="<?php echo site_url('home'); ?>" class="navbar-brand pt-2 mt-1"><img class="img-widt-logo" src="<?php echo base_url('uploads/system/' . get_frontend_settings('dark_logo')); ?>" alt="" height="35"></a>

            <?php include 'menu.php'; ?>





            <div class="m-navbar">
                <!-- OCULTADO
                <a class="mx-2" href="<?php echo base_url('Ruta-de-Aprendizaje') ?>">
                    <span class="text-navbar-r-bim main-nav-wrap ">Ruta de Aprendizaje</span>
                </a>
                <a class="mx-2" href="<?php echo base_url('Mentoria-bim') ?>">
                    <span class="text-navbar-r-bim main-nav-wrap ">Mentoria BIM</span>
                </a>
                -->
            </div>



            <?php $custom_page_menus = $this->crud_model->get_custom_pages('', 'header'); ?>
            <?php foreach ($custom_page_menus->result_array() as $custom_page_menu) : ?>
                <a class="navbar-brand btn-hover-gray text-14px ms-2 me-0 <?php if (isset($page_url) && $custom_page_menu['page_url'] == $page_url) echo 'active'; ?>" style="border: 1px solid transparent; margin: 0px; padding: 0px 8px; width: max-content; border-radius: 5px; height: 40px; line-height: 40px;" href="<?php echo site_url('page/' . $custom_page_menu['page_url']); ?>"><?php echo $custom_page_menu['button_title']; ?></a>
                </li>
            <?php endforeach; ?>

            <?php if ($this->session->userdata('admin_login')) : ?>
                <div class="instructor-box menu-icon-box">
                    <div class="icon">
                        <a href="<?php echo site_url('admin'); ?>" style="border: 1px solid transparent; margin: 0px; font-size: 14px; width: max-content; border-radius: 5px; max-height: 40px; line-height: 40px; padding: 0px 8px;"><?php echo site_phrase('administrator'); ?></a>
                    </div>
                </div>
            <?php endif; ?>
            <!--
            <a class="mx-2 text-navbar-p main-nav-wrap" href=" <?php echo base_url('Premium') ?>">
                    <img class="icon-corona " src="<?= base_url() ?>uploads/system/corona-premium.svg" alt=""> Premium
                </a>
            -->
            <div class="new-class-margin">&nbsp;</div>

            <?php
            if ($this->session->userdata('admin_login') == "") {
            ?>
            <span class="signin-box-move-desktop-helper"></span>
            <div class="sign-in-box btn-group">

                <a href="<?php echo site_url('login'); ?>"
                    class="btn btn-sign-in-simple text-uppercase"><?php echo site_phrase('INICIAR SESIÓN'); ?></a>

                <a href="<?php echo site_url('sign_up'); ?>"
                    class="btn btn-sign-up text-uppercase"><?php echo site_phrase('CREAR CUENTA'); ?></a>

            </div>
            <?php } ?>
        </nav>
    </div>
</section>