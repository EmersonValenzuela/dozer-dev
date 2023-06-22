<div class="main-nav-wrap">
    <div class="mobile-overlay"></div>
    <style type="text/css">
        @media only screen and (max-width: 767px) {
            .category.corner-triangle.top-left.pb-0.is-hidden {
                display: none !important;
            }

            .sub-category.is-hidden {
                display: none !important;
            }
        }
    </style>

    <ul class="mobile-main-nav 	d-block  ">
        <div class="mobile-menu-helper-top"></div>
        <li class="has-children text-nowrap fw-bold">
            <a href="javascript:;" class="py-2 text-wrap d-flex" onclick="redirect_to('')">
                <span>

                    <span class="text-navbar-c text-white"><?php echo site_phrase('Institución'); ?></span>
                    <img style="width: 10px;" src="<?= base_url() ?>uploads/system/flecha-abajo.png" alt="">
            </a>

            <ul class="category corner-triangle bg-triangle top-left is-hidden pb-0 bg-window">
                <li class="go-back"><a href=""><i class="fas fa-angle-left"></i><?php echo site_phrase('menu'); ?></a>
                </li>


                <li class="has-children">
                    <a href="javascript:;" class="py-2 text-wrap d-flex text-white bg-colorc" onclick="redirect_to('<?php echo base_url('Nosotros') ?>')">


                        <span>Nosotros</span>

                    </a>
                    <a href="" class="py-2 text-wrap d-flex text-white bg-colorc" onclick="redirect_to('<?php echo base_url('Autoridades') ?>')">
                        <span>Autoridades</span>

                    </a>
                    <a href="javascript:;" class="py-2 text-wrap d-flex text-white bg-colorc" onclick="redirect_to('<?php echo base_url('Docente') ?>')">


                        <span>Docente</span>

                    </a>
                    <a href="javascript:;" class="py-2 text-wrap d-flex text-white bg-colorc" onclick="redirect_to('<?php echo base_url('Repositorio?tipo_documento=all&&area_investigacion=all&&fecha_investigacion=all') ?>')">


                        <span>Repositorio</span>

                    </a>

                    <ul class="sub-category is-hidden">
                        <li class="go-back-menu"><a href=""><i class="fas fa-angle-left"></i><?php echo site_phrase('menu'); ?></a></li>
                        <li class="go-back"><a href="">
                                <i class="fas fa-angle-left"></i>
                                <span class="icon"><i class="<?php echo $category['font_awesome_class']; ?>"></i></span>
                                <?php echo $category['name']; ?>
                            </a></li>

                    </ul>
                </li>
            </ul>
        </li>
        <div class="mobile-menu-helper-bottom"></div>
    </ul>
</div>

<div class="main-nav-wrap">
    <div class="mobile-overlay"></div>
    <style type="text/css">
        @media only screen and (max-width: 767px) {
            .category.corner-triangle.top-left.pb-0.is-hidden {
                display: none !important;
            }

            .sub-category.is-hidden {
                display: none !important;
            }
        }
    </style>

    <ul class="mobile-main-nav 	d-block  ">
        <div class="mobile-menu-helper-top"></div>
        <li class="has-children text-nowrap fw-bold">
            <a href="javascript:;" class="py-2 text-wrap d-flex" onclick="redirect_to('')">
                <span>

                    <span class="text-navbar-c text-white"><?php echo site_phrase('Formación'); ?></span>
                    <img style="width: 10px;" src="<?= base_url() ?>uploads/system/flecha-abajo.png" alt="">
            </a>

            <ul class="category corner-triangle top-left is-hidden pb-0 bg-triangle
bg-window">
                <li class="go-back"><a href=""><i class="fas fa-angle-left"></i><?php echo site_phrase('menu'); ?></a>
                </li>

                <?php
                $categories = $this->crud_model->get_categoria()->result_array();
                foreach ($categories as $key => $category) : ?>
                    <li class="has-children">
                        <a href="javascript:;" class="py-2 text-wrap d-flex bg-colorc text-white" onclick="redirect_to('<?php echo site_url('home/courses?category=' . $category['slug']); ?>')">


                            <span><?php echo $category['name']; ?></span>

                        </a>
                        <ul class="sub-category is-hidden">
                            <li class="go-back-menu"><a href=""><i class="fas fa-angle-left"></i><?php echo site_phrase('menu'); ?></a></li>
                            <li class="go-back"><a href="">
                                    <i class="fas fa-angle-left"></i>
                                    <span class="icon"><i class="<?php echo $category['font_awesome_class']; ?>"></i></span>
                                    <?php echo $category['name']; ?>
                                </a></li>
                            <?php
                            $sub_categories = $this->crud_model->get_sub_categoria($category['id']);
                            foreach ($sub_categories as $sub_category) : ?>

                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endforeach; ?>


                <?php if (addon_status('tutor_booking')) : ?>
                    <li class="all-category-devided mb-0 p-0">
                        <a href="<?php echo site_url('tutors'); ?>" class="py-3">
                            <span class="icon"><i class="fas fa-chalkboard-teacher"></i></span>
                            <span><?php echo site_phrase('all_tutions'); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if (addon_status('ebook')) : ?>
                    <li class="all-category-devided m-0 p-0">
                        <a href="<?php echo site_url('ebook'); ?>" class="py-3">
                            <span class="icon"><i class="fas fa-book"></i></span>
                            <span><?php echo site_phrase('ebooks'); ?></span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if (addon_status('course_bundle')) : ?>
                    <li class="all-category-devided m-0 p-0">
                        <a href="<?php echo site_url('course_bundles'); ?>" class="py-3">
                            <span class="icon"><i class="fas fa-cubes"></i></span>
                            <span><?php echo site_phrase('course_bundles'); ?></span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </li>

        <div class="mobile-menu-helper-bottom"></div>
    </ul>


</div>