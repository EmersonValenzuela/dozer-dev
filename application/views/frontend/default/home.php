<section class="home-banner-area" id="home-banner-area">
    <div class="container-xl">
        <div class="row">
            <div class="col position-relative">
                <div class="home-banner-wrap">
                    <h2 class="fw-bold text-white"><?php echo site_phrase(get_frontend_settings('banner_title')); ?>
                    </h2>
                    <p class="text-white"><?php echo site_phrase(get_frontend_settings('banner_sub_title')); ?></p>
                    <img class="img-convenios" src="uploads\system\convenios.png" alt="">
                    <form class="" action="<?php echo site_url('home/search'); ?>" method="get">
                        <div class="input-group search-box">
                            <div class="p-5px ">
                                <button class="btn"
                                    type="submit"><?php echo site_phrase('Conoce más de Instituto Dozer'); ?> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container-lg course-carousel-title titulo text-white">
        <p class="fw-light titulo-uno m-0">NUESTRO OBJETIVO</p>
        <p class="fw-bold mb-5">ES HACERLO SIMPLE</p>

    </div>
    <div class="container-lg">
        <div class="row">

            <div class="col-md-3 d-flex text-center ">
                <div class=" cont-cuadro mr-md-auto mr-auto">
                    <img class="icon-style" src="uploads\system\icon-user.png" alt="">
                    <p class="cont-cuadro-text">Crea tu cuenta de Perfil en Dozer</p>
                    <a href="<?php echo site_url('sign_up'); ?>"
                        class="btnpa btn-sign-up "><?php echo site_phrase('Pulsa aquí'); ?></a>
                </div>
                <span class="numberobje ">1</span>
            </div>

            <div class="col-md-3 d-flex text-center justify-content-center ">
                <div class=" cont-cuadro mr-md-auto mr-auto">
                    <img class="icon-style" src="uploads\system\icon-elegir.png" alt="">
                    <p class="cont-cuadro-text">Elige el Curso,
                        Especialización o
                        Diplomado que
                        necesites </p>

                </div>
                <span class="numberobje r-44">2</span>
            </div>

            <div class="col-md-3 d-flex text-center justify-content-center ">
                <div class=" cont-cuadro mr-md-auto mr-auto">
                    <img class="icon-style" src="uploads\system\icon-pago.png" alt="">
                    <p class="cont-cuadro-text">Realiza el <br>
                        Pago o <br>
                        el depósito </p>

                </div>
                <span class="numberobje r-26">3</span>
            </div>
            <div class="col-md-3 d-flex text-center justify-content-end ">
                <div class=" cont-cuadro mr-md-auto mr-auto">
                    <img class="icon-style" src="uploads\system\icon-certi.png" alt="">
                    <p class="cont-cuadro-text">Estudia y
                        transforma tu
                        futuro con nosotros
                    </p>

                </div>
                <span class="numberobje r-7">4</span>
            </div>
        </div>
    </div>

</section>



<section class="course-carousel-area  pb-5">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h3 class="course-carousel-title text-center mb-4 mt-5 text-cursos">
                    <p class="text-white fs-2"><?php echo site_phrase('CURSOS'); ?></p>
                    <p class="text-white fs-6 fw-light">Accede a los cursos con certificaciones oficiales de Autodesk,
                        <br>
                        en cualquiera de las 7 categorias
                    </p>
                </h3>

                <!-- page loader -->
                <div class="animated-loader">
                    <div class="spinner-border text-secondary" role="status"></div>
                </div>

                <div class="course-carousel shown-after-loading" style="display: none;">
                    <?php $top_courses = $this->crud_model->get_top_courses()->result_array();
                    $cart_items = $this->session->userdata('cart_items');
                    foreach ($top_courses as $top_course) : ?>
                    <?php
                            $lessons = $this->crud_model->get_lessons('course', $top_course['id']);
                            $course_duration = $this->crud_model->get_total_duration_of_lesson_by_course_id($top_course['id']);
                        ?>
                    <div class="course-box-wrap">
                        <a onclick="return check_action(this);"
                            href="<?php echo site_url('home/course/' . rawurlencode(slugify($top_course['title'])) . '/' . $top_course['id']); ?>"
                            class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <!-- course price -->
                                    <?php if ($top_course['is_free_course'] == 1) : ?>
                                    <p class="price text-right d-inline-block float-end">
                                        <?php echo site_phrase('free'); ?></p>
                                    <?php else : ?>
                                    <?php if ($top_course['discount_flag'] == 1) : ?>
                                    <p class="price text-right d-inline-block float-end">
                                        <small><del><?php echo currency($top_course['price']); ?></del></small><?php echo currency($top_course['discounted_price']); ?>
                                    </p>
                                    <?php else : ?>
                                    <p class="price text-right d-inline-block float-end">
                                        <?php echo currency($top_course['price']); ?></p>
                                    <?php endif; ?>
                                    <?php endif; ?>

                                    <img src="<?php echo $this->crud_model->get_course_thumbnail_url($top_course['id']); ?>"
                                        alt="" class="img-fluid">
                                </div>
                                <div class="course-details">
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <span
                                                class="badge badge-primary text-11px"><?php echo site_phrase($top_course['level']); ?></span>
                                        </div>
                                    </div>

                                    <h5 class="title"><?php echo $top_course['title']; ?></h5>
                                    <div class="rating">
                                        <?php
                                            $total_rating =  $this->crud_model->get_ratings('course', $top_course['id'], true)->row()->rating;
                                            $number_of_ratings = $this->crud_model->get_ratings('course', $top_course['id'])->num_rows();
                                            if ($number_of_ratings > 0) {
                                                $average_ceil_rating = ceil($total_rating / $number_of_ratings);
                                            } else {
                                                $average_ceil_rating = 0;
                                            }

                                            for ($i = 1; $i < 6; $i++) : ?>
                                        <?php if ($i <= $average_ceil_rating) : ?>
                                        <i class="fas fa-star filled"></i>
                                        <?php else : ?>
                                        <i class="fas fa-star"></i>
                                        <?php endif; ?>
                                        <?php endfor; ?>
                                        <div class="d-inline-block">
                                            <span
                                                class="text-dark ms-1 text-12px">(<?php echo $average_ceil_rating; ?>)</span>
                                            <span
                                                class="text-dark text-12px text-muted ms-2">(<?php echo $number_of_ratings.' '.site_phrase('reviews'); ?>)</span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="floating-user d-inline-block">
                                                <?php if ($top_course['multi_instructor']):
                                                        $instructor_details = $this->user_model->get_multi_instructor_details_with_csv($top_course['user_id']);
                                                        $margin = 0;
                                                        foreach ($instructor_details as $key => $instructor_detail) { ?>
                                                <img style="margin-left: <?php echo $margin; ?>px;"
                                                    class="position-absolute"
                                                    src="<?php echo $this->user_model->get_user_image_url($instructor_detail['id']); ?>"
                                                    width="30px" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="<?php echo $instructor_detail['first_name'].' '.$instructor_detail['last_name']; ?>"
                                                    onclick="return check_action(this,'<?php echo site_url('home/instructor_page/'.$instructor_detail['id']); ?>');">
                                                <?php $margin = $margin+17; ?>
                                                <?php } ?>
                                                <?php else: ?>
                                                <?php $user_details = $this->user_model->get_all_user($top_course['user_id'])->row_array(); ?>
                                                <img src="<?php echo $this->user_model->get_user_image_url($user_details['id']); ?>"
                                                    width="30px" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="<?php echo $user_details['first_name'].' '.$user_details['last_name']; ?>"
                                                    onclick="return check_action(this,'<?php echo site_url('home/instructor_page/'.$user_details['id']); ?>');">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <button class="btn-compare-sm float-end"
                                                onclick="return check_action(this, '<?php echo site_url('home/compare?course-1=' . rawurlencode(slugify($top_course['title'])) . '&&course-id-1=' . $top_course['id']); ?>');"><i
                                                    class="fas fa-retweet"></i><?php echo site_phrase('compare'); ?></button>
                                        </div>
                                    </div>

                                    <div class="w-100 d-flex text-dark border-top py-1">
                                        <div class="">
                                            <i class="text-danger far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px"><?php echo $course_duration; ?></span>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="text-primary far fa-list-alt text-14px"></i>
                                            <span
                                                class="text-muted text-12px"><?php echo $lessons->num_rows().' '.site_phrase('lectures'); ?></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <?php if ($top_course['last_modified'] == "") : ?>
                                <div class="last-updated fw-500">
                                    <?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $top_course['date_added']); ?>
                                </div>
                                <?php else : ?>
                                <div class="last-updated">
                                    <?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $top_course['last_modified']); ?>
                                </div>
                                <?php endif; ?>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px"
                                        href="<?php echo site_url('home/course/' . rawurlencode(slugify($top_course['title'])) . '/' . $top_course['id']); ?>"><?php echo $top_course['title']; ?></a>
                                </div>
                                <div class="course-meta">
                                    <?php if ($top_course['course_type'] == 'general') : ?>
                                    <span class=""><i class="fas fa-play-circle"></i>
                                        <?php echo $this->crud_model->get_lessons('course', $top_course['id'])->num_rows() . ' ' . site_phrase('lessons'); ?>
                                    </span>
                                    <span class=""><i class="far fa-clock"></i>
                                        <?php echo $course_duration; ?>
                                    </span>
                                    <?php elseif ($top_course['course_type'] == 'scorm') : ?>
                                    <span class="badge bg-light"><?= site_phrase('scorm_course'); ?></span>
                                    <?php endif; ?>
                                    <span class=""><i
                                            class="fas fa-closed-captioning"></i><?php echo ucfirst($top_course['language']); ?></span>
                                </div>
                                <div class="course-subtitle"><?php echo $top_course['short_description']; ?></div>
                                <div class="what-will-learn">
                                    <ul>
                                        <?php
                                            $outcomes = json_decode($top_course['outcomes']);
                                            foreach ($outcomes as $outcome) : ?>
                                        <li><?php echo $outcome; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <?php if (is_purchased($top_course['id'])) : ?>
                                    <div class="purchased">
                                        <a
                                            href="<?php echo site_url('home/my_courses'); ?>"><?php echo site_phrase('already_purchased'); ?></a>
                                    </div>
                                    <?php else : ?>
                                    <?php if ($top_course['is_free_course'] == 1) :
                                                if ($this->session->userdata('user_login') != 1) {
                                                    $url = "#";
                                                } else {
                                                    $url = site_url('home/get_enrolled_to_free_course/' . $top_course['id']);
                                                } ?>
                                    <a href="<?php echo $url; ?>" class="btn green radius-10"
                                        onclick="handleEnrolledButton()"><?php echo site_phrase('get_enrolled'); ?></a>
                                    <?php else : ?>
                                    <button type="button"
                                        class="btn red add-to-cart-btn <?php if (in_array($top_course['id'], $cart_items)) echo 'addedToCart'; ?> big-cart-button-<?php echo $top_course['id']; ?>"
                                        id="<?php echo $top_course['id']; ?>" onclick="handleCartItems(this)">
                                        <?php
                                                    if (in_array($top_course['id'], $cart_items))
                                                        echo site_phrase('added_to_cart');
                                                    else
                                                        echo site_phrase('add_to_cart');
                                                    ?>
                                    </button>
                                    <?php endif; ?>
                                    <button type="button"
                                        class="wishlist-btn <?php if ($this->crud_model->is_added_to_wishlist($top_course['id'])) echo 'active'; ?>"
                                        title="Add to wishlist" onclick="handleWishList(this)"
                                        id="<?php echo $top_course['id']; ?>"><i class="fas fa-heart"></i></button>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-5 pb-4">
    <div class="container-lg">
        <h3 class="course-carousel-title text-center my-5">
            <span class="header-underline-2"><?php echo site_phrase('top_categoria'); ?></span>
        </h3>

        <div class="row justify-content-center">

            <?php $top_10_categoria = $this->crud_model->get_top_categoria(12, 'sub_category_id'); ?>
            <?php foreach($top_10_categoria as $top_10_category): ?>
            <?php $category_details = $this->crud_model->get_category_details_by_id($top_10_category['sub_category_id'])->row_array(); ?>
            <div class="col-md-4 col-lg-3 col-xl-3 mb-3 m-md-0 p-0">
                <a href="<?php echo site_url('home/courses?category='.$category_details['slug']); ?>"
                    class="top-categoria">
                    <div class="category-icon">
                        <i class="<?php echo $category_details['font_awesome_class']; ?>"></i>
                    </div>
                    <div class="category-title">
                        <?php echo $category_details['name']; ?>
                        <p><?php echo $top_10_category['course_number'].' '.site_phrase('courses'); ?></p>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>



<section class="course-carousel-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h3 class="course-carousel-title mt-5 mb-4 text-center">
                    <span
                        class="header-underline-2"><?php echo site_phrase('top') . ' 10 ' . site_phrase('latest_courses'); ?>
                </h3></span>

                <!-- page loader -->
                <div class="animated-loader">
                    <div class="spinner-border text-secondary" role="status"></div>
                </div>

                <div class="course-carousel shown-after-loading" style="display: none;">
                    <?php
                    $latest_courses = $this->crud_model->get_4_course_category("4",array("sub_category_id" => "6"));
                    foreach ($latest_courses as $latest_course) : ?>
                    <?php
                            $lessons = $this->crud_model->get_lessons('course', $latest_course['id']);
                            $course_duration = $this->crud_model->get_total_duration_of_lesson_by_course_id($latest_course['id']);
                        ?>
                    <div class="course-box-wrap">
                        <a onclick="return check_action(this);"
                            href="<?php echo site_url('home/course/' . rawurlencode(slugify($latest_course['title'])) . '/' . $latest_course['id']); ?>"
                            class="has-popover">
                            <div class="course-box">
                                <div class="course-image">
                                    <?php if ($latest_course['is_free_course'] == 1) : ?>
                                    <p class="price text-right d-inline-block float-end">
                                        <?php echo site_phrase('free'); ?></p>
                                    <?php else : ?>
                                    <?php if ($latest_course['discount_flag'] == 1) : ?>
                                    <p class="price text-right d-inline-block float-end">
                                        <small><del><?php echo currency($latest_course['price']); ?></del></small><?php echo currency($latest_course['discounted_price']); ?>
                                    </p>
                                    <?php else : ?>
                                    <p class="price text-right d-inline-block float-end">
                                        <?php echo currency($latest_course['price']); ?></p>
                                    <?php endif; ?>
                                    <?php endif; ?>

                                    <img src="<?php echo $this->crud_model->get_course_thumbnail_url($latest_course['id']); ?>"
                                        alt="" class="img-fluid">
                                </div>
                                <div class="course-details">
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <span
                                                class="badge badge-primary text-11px"><?php echo site_phrase($latest_course['level']); ?></span>
                                        </div>
                                    </div>

                                    <h5 class="title"><?php echo $latest_course['title']; ?></h5>
                                    <div class="rating">
                                        <?php
                                            $total_rating =  $this->crud_model->get_ratings('course', $latest_course['id'], true)->row()->rating;
                                            $number_of_ratings = $this->crud_model->get_ratings('course', $latest_course['id'])->num_rows();
                                            if ($number_of_ratings > 0) {
                                                $average_ceil_rating = ceil($total_rating / $number_of_ratings);
                                            } else {
                                                $average_ceil_rating = 0;
                                            }

                                            for ($i = 1; $i < 6; $i++) : ?>
                                        <?php if ($i <= $average_ceil_rating) : ?>
                                        <i class="fas fa-star filled"></i>
                                        <?php else : ?>
                                        <i class="fas fa-star"></i>
                                        <?php endif; ?>
                                        <?php endfor; ?>
                                        <div class="d-inline-block">
                                            <span
                                                class="text-dark ms-1 text-12px">(<?php echo $average_ceil_rating; ?>)</span>
                                            <span
                                                class="text-dark text-12px text-muted ms-2">(<?php echo $number_of_ratings.' '.site_phrase('reviews'); ?>)</span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col pe-0">
                                            <div class="floating-user d-inline-block">
                                                <?php if ($latest_course['multi_instructor']):
                                                        $instructor_details = $this->user_model->get_multi_instructor_details_with_csv($latest_course['user_id']);
                                                        $margin = 0;
                                                        foreach ($instructor_details as $key => $instructor_detail) { ?>
                                                <img style="margin-left: <?php echo $margin; ?>px;"
                                                    class="position-absolute"
                                                    src="<?php echo $this->user_model->get_user_image_url($instructor_detail['id']); ?>"
                                                    width="30px" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="<?php echo $instructor_detail['first_name'].' '.$instructor_detail['last_name']; ?>"
                                                    onclick="return check_action(this,'<?php echo site_url('home/instructor_page/'.$instructor_detail['id']); ?>');">
                                                <?php $margin = $margin+17; ?>
                                                <?php } ?>
                                                <?php else: ?>
                                                <?php $user_details = $this->user_model->get_all_user($latest_course['user_id'])->row_array(); ?>
                                                <img src="<?php echo $this->user_model->get_user_image_url($user_details['id']); ?>"
                                                    width="30px" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="<?php echo $user_details['first_name'].' '.$user_details['last_name']; ?>"
                                                    onclick="return check_action(this,'<?php echo site_url('home/instructor_page/'.$user_details['id']); ?>');">
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col ps-0">
                                            <button class="btn-compare-sm float-end"
                                                onclick="return check_action(this, '<?php echo site_url('home/compare?course-1=' . rawurlencode(slugify($latest_course['title'])) . '&&course-id-1=' . $latest_course['id']); ?>');"><i
                                                    class="fas fa-retweet"></i><?php echo site_phrase('compare'); ?></button>
                                        </div>
                                    </div>

                                    <div class="w-100 d-flex text-dark border-top py-1">
                                        <div class="">
                                            <i class="text-danger far fa-clock text-14px"></i>
                                            <span class="text-muted text-12px"><?php echo $course_duration; ?></span>
                                        </div>
                                        <div class="ms-auto">
                                            <i class="text-primary far fa-list-alt text-14px"></i>
                                            <span
                                                class="text-muted text-12px"><?php echo $lessons->num_rows().' '.site_phrase('lectures'); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <div class="webui-popover-content">
                            <div class="course-popover-content">
                                <?php if ($latest_course['last_modified'] == "") : ?>
                                <div class="last-updated fw-500">
                                    <?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $latest_course['date_added']); ?>
                                </div>
                                <?php else : ?>
                                <div class="last-updated">
                                    <?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $latest_course['last_modified']); ?>
                                </div>
                                <?php endif; ?>

                                <div class="course-title">
                                    <a class="text-decoration-none text-15px"
                                        href="<?php echo site_url('home/course/' . rawurlencode(slugify($latest_course['title'])) . '/' . $latest_course['id']); ?>"><?php echo $latest_course['title']; ?></a>
                                </div>
                                <div class="course-meta">
                                    <?php if ($latest_course['course_type'] == 'general') : ?>
                                    <span class=""><i class="fas fa-play-circle"></i>
                                        <?php echo $this->crud_model->get_lessons('course', $latest_course['id'])->num_rows() . ' ' . site_phrase('lessons'); ?>
                                    </span>
                                    <span class=""><i class="far fa-clock"></i>
                                        <?php echo $course_duration; ?>
                                    </span>
                                    <?php elseif ($latest_course['course_type'] == 'scorm') : ?>
                                    <span class="badge bg-light"><?= site_phrase('scorm_course'); ?></span>
                                    <?php endif; ?>
                                    <span class=""><i
                                            class="fas fa-closed-captioning"></i><?php echo ucfirst($latest_course['language']); ?></span>
                                </div>
                                <div class="course-subtitle"><?php echo $latest_course['short_description']; ?></div>
                                <div class="what-will-learn">
                                    <ul>
                                        <?php
                                            $outcomes = json_decode($latest_course['outcomes']);
                                            foreach ($outcomes as $outcome) : ?>
                                        <li><?php echo $outcome; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="popover-btns">
                                    <?php if (is_purchased($latest_course['id'])) : ?>
                                    <div class="purchased">
                                        <a
                                            href="<?php echo site_url('home/my_courses'); ?>"><?php echo site_phrase('already_purchased'); ?></a>
                                    </div>
                                    <?php else : ?>
                                    <?php if ($latest_course['is_free_course'] == 1) :
                                                if ($this->session->userdata('user_login') != 1) {
                                                    $url = "#";
                                                } else {
                                                    $url = site_url('home/get_enrolled_to_free_course/' . $latest_course['id']);
                                                } ?>
                                    <a href="<?php echo $url; ?>" class="btn green radius-10"
                                        onclick="handleEnrolledButton()"><?php echo site_phrase('get_enrolled'); ?></a>
                                    <?php else : ?>
                                    <button type="button"
                                        class="btn red add-to-cart-btn <?php if (in_array($latest_course['id'], $cart_items)) echo 'addedToCart'; ?> big-cart-button-<?php echo $latest_course['id']; ?>"
                                        id="<?php echo $latest_course['id']; ?>" onclick="handleCartItems(this)">
                                        <?php
                                                    if (in_array($latest_course['id'], $cart_items))
                                                        echo site_phrase('added_to_cart');
                                                    else
                                                        echo site_phrase('add_to_cart');
                                                    ?>
                                    </button>
                                    <?php endif; ?>
                                    <button type="button"
                                        class="wishlist-btn <?php if ($this->crud_model->is_added_to_wishlist($latest_course['id'])) echo 'active'; ?>"
                                        title="Add to wishlist" onclick="handleWishList(this)"
                                        id="<?php echo $latest_course['id']; ?>"><i class="fas fa-heart"></i></button>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $top_instructor_ids = $this->crud_model->get_top_instructor(10); ?>
<?php if(count($top_instructor_ids) > 0): ?>
<section class="featured-instructor">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h3 class="text-center mb-5">
                    <span class="header-underline-2"><?php echo site_phrase('featured_instructor'); ?></span>
                </h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-7 ">
                <div class="animated-loader">
                    <div class="spinner-border text-secondary" role="status"></div>
                </div>
                <div class="top-istructor-slick shown-after-loading" style="display: none;">
                    <?php foreach($top_instructor_ids as $top_instructor_id): ?>
                    <?php $top_instructor = $this->user_model->get_all_user($top_instructor_id['creator'])->row_array(); ?>
                    <div
                        class="d-xl-flex text-center text-md-start radius-10 p-0 bg-sub-primary pt-4 pt-xl-0 position-relative mx-2">
                        <div class="top-instructor-img me-auto ms-auto ms-xl-0">
                            <a href="<?php echo site_url('home/instructor_page/'.$top_instructor['id']); ?>">
                                <img src="<?php echo $this->user_model->get_user_image_url($top_instructor['id']); ?>"
                                    width="100%">
                            </a>
                        </div>
                        <div class="top-instructor-details ps-3 pe-3 pe-xl-5 py-3 py-xl-0 text-center text-xl-start">
                            <a class="text-decoration-none"
                                href="<?php echo site_url('home/instructor_page/'.$top_instructor['id']); ?>">
                                <h4 class="mb-1 fw-700">
                                    <?php echo $top_instructor['first_name'].' '.$top_instructor['last_name']; ?></h4>
                                <span
                                    class="fw-500 text-muted text-14px ellipsis-line-5 mb-3"><?php echo $top_instructor['title']; ?></span>

                                <div class="rating">
                                    <div class="d-inline-block mb-2">
                                        <span
                                            class="text-dark fw-800 text-muted ms-1 text-13px"><?php echo $this->crud_model->get_instructor_wise_course_ratings($top_instructor['id'], 'course')->num_rows() . ' ' . site_phrase('reviews'); ?></span>
                                        |
                                        <span class="text-dark fw-800 text-13px text-muted mx-1">
                                            <?php $course_ids = $this->crud_model->get_instructor_wise_courses($top_instructor['id'], 'simple_array');
                                              $this->db->select('user_id');
                                              $this->db->distinct();
                                              $this->db->where_in('course_id', $course_ids);
                                              echo $this->db->get('enrol')->num_rows() . ' ' . site_phrase('students'); ?>
                                        </span>
                                        |
                                        <span class="text-dark fw-800 text-14px text-muted">
                                            <?php echo $this->crud_model->get_instructor_wise_courses($top_instructor['id'])->num_rows() . ' ' . site_phrase('courses'); ?>
                                        </span>
                                    </div>
                                </div>

                                <?php $skills = explode(',', $top_instructor['skills']); ?>
                                <?php foreach($skills as $skill): ?>
                                <span class="badge bg-primary text-12px my-1 py-2"><?php echo $skill; ?></span>
                                <?php endforeach; ?>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<?php $latest_blogs = $this->crud_model->get_latest_blogs(3); ?>
<?php if(get_frontend_settings('blog_visibility_on_the_home_page') && $latest_blogs->num_rows() > 0): ?>
<section class="section-blog pt-5">
    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-12">
                <h4 class="fw-700 w-100 text-center">
                    <span class="header-underline-2"><?php echo site_phrase('latest_blogs'); ?></span>
                </h4>
            </div>
            <?php foreach($latest_blogs->result_array() as $latest_blog): ?>
            <?php $user_details = $this->user_model->get_all_user($latest_blog['user_id'])->row_array(); ?>

            <div class="col-md-6 col-lg-4">
                <a
                    href="<?php echo site_url('blog/details/'.slugify($latest_blog['title']).'/'.$latest_blog['blog_id']); ?>">
                    <div class="card-blog">
                        <?php
                                    $blog_thumbnail = 'uploads/blog/thumbnail/'.$latest_blog['thumbnail'];
                                    if(!file_exists($blog_thumbnail) || !is_file($blog_thumbnail)):
                                        $blog_thumbnail = base_url('uploads/blog/thumbnail/placeholder.png');
                                    endif;
                                ?>
                        <div class="card-blog-body">
                            <div class="blog-thumbnail"
                                style="background-image: url('<?php echo $blog_thumbnail; ?>');"></div>
                            <div class="blog-placeholder">
                                <h5 class="cart-blog-title"><?php echo $latest_blog['title']; ?></h5>

                                <div class="d-flex">
                                    <div class="blog-info border-end">
                                        <?php echo get_past_time($latest_blog['added_date']); ?>
                                    </div>
                                    <div class="blog-info">
                                        <?php echo site_phrase('by'); ?>
                                        <!-- <?php echo site_url('home/instructor_page/'.$latest_blog['user_id']); ?> --><?php echo $user_details['first_name'].' '.$user_details['last_name']; ?>
                                    </div>
                                    <div class="blog-info border-start">
                                        <?php echo $this->crud_model->get_blog_categoria($latest_blog['blog_category_id'])->row('title'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>

            <div class="col-12">
                <a class="float-end btn btn-outline-secondary px-3 fw-600"
                    href="<?php echo site_url('blogs'); ?>"><?php echo site_phrase('view_all'); ?></a>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Programa Dozer -->
<section>
    <div class="container-xl">
        <h3 class="course-carousel-title text-center mb-4 mt-5 ">
            <p class="text-white fs-2 fw-bolder">Estamos contigo en todo momento <br>
                con nuestro software gratuito DevBIM v23.1 </p>

        </h3>
    </div>
    <div class="container-xl ">
        <div class="row justify-content-evenly py-3 mb-4 spacio">
            <div class="col-md-6  mt-md-0">
                <div class=" fondopro">
                    <img class="imgpro" src="uploads\system\programa.png" alt="">
                </div>
            </div>
            <div class="col-md-6  mt-3 mt-md-0">
                <div class=" programa ">
                    <h3 class="fw-700 w-50 text-white">DevBIM RT2023.1</h3>
                    <span class="text-white fw-lighter fs-6">Caracteristicas claves:
                    </span>
                    <ul class="text-white fw-normal vineta fs-6">
                        <li>Plan BIM Documentado</li>
                        <li>Normativa BIM Perú</li>
                        <li>Reglamento Nacional de Edificaciones (RNE)</li>
                        <li>Normas de Transportes y Saneamiento </li>
                        <li>Familias, Proyectos y Plantillas en Revit </li>
                    </ul>

                </div>
            </div>



        </div>
    </div>
</section>
<!-- Programa Dozer -->

<!-- Docente Dozer -->
<section>
    <div class="container-xl">
        <h3 class="course-carousel-title text-center mb-4 mt-5 ">
            <p class="text-white fs-2 fw-bolder">Aprende con expertos
                líderes BIM en el sector construcción</p>
            <p class="text-white fw-lighter fs-6 lh-sm"> Conformado por profesionales del <br>
                sector construcción</p>

        </h3>
    </div>
    <div class="container-xl">
        <div class="d-flex flex-row justify-content-between pt-8">
            <div class=" ">
                <div class="d-flex flex-column  ">
                    <div class="  position-relative">
                        <img class="fondoo  " src="uploads\system\fondo-docente.png" alt="">
                        <img class="position-absolute  start-50 translate-middle top-15"
                            src="uploads\system\docente\prof-uno.png" alt="">
                        <div class="d-flex flex-column  ">
                            <div class="py-2 ">
                                <div class="d-flex justify-content-center">
                                    <div class="px-2 d-flex align-items-center">
                                        <img src="uploads\system\docente\pe.png" alt="">
                                    </div>

                                    <div class="d-flex flex-column text-white ">
                                        <div class="fw-bold">Walter Gomez</div>
                                        <div class="fw-normal">Perú</div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class=" ">
                <div class="d-flex flex-column  ">
                    <div class="  position-relative">
                        <img class="fondoo  " src="uploads\system\fondo-docente.png" alt="">
                        <img class="position-absolute  start-50 translate-middle top-15"
                            src="uploads\system\docente\prof-dos.png" alt="">
                        <div class="d-flex flex-column  ">
                            <div class="py-2 ">
                                <div class="d-flex justify-content-center">
                                    <div class="px-2 d-flex align-items-center">
                                        <img src="uploads\system\docente\pe.png" alt="">
                                    </div>

                                    <div class="d-flex flex-column text-white ">
                                        <div class="fw-bold">Giuliana Nicho</div>
                                        <div class="fw-normal">Perú</div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class=" ">
                <div class="d-flex flex-column  ">
                    <div class="  position-relative">
                        <img class="fondoo  " src="uploads\system\fondo-docente.png" alt="">
                        <img class="position-absolute  start-50 translate-middle top-15"
                            src="uploads\system\docente\prof-tres.png" alt="">
                        <div class="d-flex flex-column  ">
                            <div class="py-2 ">
                                <div class="d-flex justify-content-center">
                                    <div class="px-2 d-flex align-items-center">
                                        <img src="uploads\system\docente\pe.png" alt="">
                                    </div>

                                    <div class="d-flex flex-column text-white ">
                                        <div class="fw-bold">Samuel Ruiz</div>
                                        <div class="fw-normal">Perú</div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Docente Dozer -->

<!-- Certificate Dozer -->
<section>
    <div class="container-xl">
        <h3 class="course-carousel-title text-center mb-4 mt-5 ">
            <p class="text-white fs-2 fw-bolder">¡Certificate y avala internacionalmente <br>
                tus conocimientos!</p>
            <p class="text-white fw-lighter fs-6 lh-sm"> Obten un certificado con respaldo
                internacional que <br>
                resaltará tus nuevas competencias</p>

        </h3>
    </div>
    <div class="container-lg">
        <div class="row gx-5">

            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto mr-auto">
                    <div class="text-center text-white">
                        <h4 class="text-decoration-underline">INSTITUTO DOZER</h4>
                        <p class="fw-light">Instituto Peruano de Estudios
                            e Implementación BIM y
                            Nuevas Tecnologías</p>
                        <img src="uploads\system\certificaciones\instituto-dozer.svg" alt="">
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto mr-auto">

                    <div class="text-center text-white">
                        <h4 class="text-decoration-underline">AUTODESK </h4>
                        <p class="fw-light">Certificación Oficial de Autodesk
                            Certificate of Completion</p> <br>
                        <img src="uploads\system\certificaciones\autodesk.svg" alt="">
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto mr-auto">
                    <div class="text-center text-white">
                        <h4 class="text-decoration-underline">CIP</h4>
                        <p class="fw-light">Colegio de Ingenieros del Perú <br>
                            Consejo Departamental </p>
                        <img class="img-cip" src="uploads\system\certificaciones\cip.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Certificate Dozer -->

<!-- Verificador de Certificado Dozer -->
<section>
    <div class="container-xl">
        <h3 class="course-carousel-title text-center mb-4 mt-5 ">
            <p class="text-white fs-2 fw-bolder">Verifica tus Certificados</p>
            <p class="text-white fw-lighter fs-6 lh-sm"> Ingresa a nuestra plataforma de
                verificador de certificados gratuitamente, <br>
                podrás revisar o descargar todos tus certificados</p>
            <a style=" font-weight: 700 !important;" class="btn bg-white devbIM fw-semibold text-center m-5"
                href="">Deseo verificar mi certificado</a>

        </h3>
    </div>
</section>
<!-- Verificador de Certificado Dozer -->

<!-- Conoce mas de Dozer-->
<section>
    <div class="container-xl">
        <h3 class="course-carousel-title text-center mb-4 mt-5 text-cursos">
            <p class="text-white fs-4 fw-bolder">¿Por qué elegir a Instituto Dozer? </p>
            <p class="text-white fs-6 fw-light lh-sm">Cada día nos eforzamos en ser tu mejor tu mejor opción para
                formarte <br>
                en el desarrollo y uso de la metodología BIM y en el sector construcción
            </p>
        </h3>


        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="pb-5 align-self-end">
                            <div class=" content  ">
                                <p class="text-white fs-5 fw-bolder">Metodología Virtual, en <br>
                                    directo junto al docente
                                </p>
                                <div class="text-white fs-6 fw-light lh-sm py-2">Resolverás todas tus dudas y preguntas
                                    con
                                    nuestras <br> clases en vivo asi como las clases de reforzamiento, <br>
                                    interactuando
                                    directamente con <br>
                                    nuestros docentes expertos.</div>

                                <div class="d-flex flex-column justify-content-start py-2">
                                    <div class="d-flex flex-row">
                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">Clases en vivo, 100% online</div>
                                    </div>
                                    <div class="d-flex flex-row">

                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">Desde la comodidad de tu hogar</div>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">Acceso en multiples plataformas por Zoom </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <div class="pb-5">
                            <img class="position-absolute mb-5 bottom-0 fondoo" src="uploads\system\fondo.png" alt="">
                            <img src="uploads\system\dozer-uno.png" class="d-block w-100 menu-area " alt="...">
                        </div>

                    </div>

                </div>
                <div class="carousel-item">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="pb-5 align-self-end">
                            <div class=" content  ">
                                <p class="text-white fs-5 fw-bolder">Proyectos reales que te <br>
                                    darán un aprendizaje real
                                </p>
                                <div class="text-white fs-6 fw-light lh-sm py-2">Enseñamos en base a proyectos reales
                                    donde nuestros <br> docentes comparten todas sus <br>
                                    experiencias a nuestros estudiantes.</div>

                                <div class="d-flex flex-column justify-content-start py-2">
                                    <div class="d-flex flex-row">
                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">Casos reales en base a nuestros proyectos
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row">

                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">Clases desde cero hasta sus etapas finales
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">De la orientación a la acción</div>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <div class="pb-5">
                            <img class="position-absolute mb-5 bottom-0 fondoo r-1em" src="uploads\system\fondo.png"
                                alt="">
                            <img src="uploads\system\dozer-dos.png" class="d-block w-100 menu-area r-1em " alt="...">
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="pb-5 align-self-end">
                            <div class=" content  ">
                                <p class="text-white fs-5 fw-bolder">Certifica tus conocimientos con <br>
                                    la garantia de Instituto Dozer
                                </p>
                                <div class="text-white fs-6 fw-light lh-sm py-2">Instituto Dozer reconocida tanto por
                                    las instituciones <br> líderes del sector construcción.
                                </div>

                                <div class="d-flex flex-column justify-content-start py-2">
                                    <div class="d-flex flex-row">
                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">válido para postulaciones en el sector público
                                            y privado</div>
                                    </div>
                                    <div class=" namecont text-white pt-5 pb-2">Tenemos convenios nacionales: </div>
                                    <img src="uploads\system\icon-certi-tres.svg" alt="">

                                </div>


                            </div>
                        </div>
                        <div class="pb-5 d-flex justify-content-end">
                            <img class="position-absolute mb-5 bottom-0 fondoo" src="uploads\system\fondo.png" alt="">
                            <img src="uploads\system\dozer-tres.svg" class="d-block  menu-area "
                                style="width: 70%!important;" alt="...">
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="pb-5 align-self-end">
                            <div class=" content  ">
                                <p class="text-white fs-5 fw-bolder">Obtén el certificado con <br>
                                    respaldo internacional
                                </p>
                                <div class="text-white fs-6 fw-light lh-sm py-2">Accede al certificado y acredita tus
                                    <br>
                                    conocimientos con el certificado <br>
                                    internacional en cualquier momento.
                                </div>

                                <div class="d-flex flex-column justify-content-start py-2">
                                    <div class="d-flex flex-row py-3">
                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">Certificado oficial de Autodesk USA</div>
                                    </div>

                                    <img src="uploads\system\icon-autodesk.svg" alt="">

                                </div>


                            </div>
                        </div>
                        <div class="pb-5 d-flex justify-content-end">
                            <img class="position-absolute mb-5 bottom-0 fondoo" src="uploads\system\fondo.png" alt="">
                            <img src="uploads\system\dozer-cuatro.svg" class="d-block  menu-area "
                                style="width: 70%!important;" alt="...">
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="pb-5 align-self-end">
                            <div class=" content  ">
                                <p class="text-white fs-5 fw-bolder">Docentes expertos en el <br>
                                    rubro de construcción
                                </p>
                                <div class="text-white fs-6 fw-light lh-sm py-2">Contamos con el conocimiento y la
                                    experiencia en el <br> sector construcción, permitiéndonos tener un gran <br> equipo
                                    de
                                    expertos a disposición de nuestros alumnos y <br> empresas clientes.</div>

                                <div class="d-flex flex-column justify-content-start py-2">
                                    <div class="d-flex flex-row">
                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">Docentes certificados por Autodesk - ACP
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row">

                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">Especialistas en el rubro de la Ingeniería y
                                            Arquitectura
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">Con vocación de enseñanza</div>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <div class="pb-5">
                            <img class="position-absolute mb-5 bottom-0 fondoo r-1em" src="uploads\system\fondo.png"
                                alt="">
                            <img src="uploads\system\dozer-cinco.png" class="d-block w-100 menu-area r-1em " alt="...">
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="pb-5 align-self-end">
                            <div class=" content  ">
                                <p class="text-white fs-5 fw-bolder">Somos la Institución de mayor <br>
                                    crecimiento en el Perú
                                </p>
                                <div class="text-white fs-6 fw-light lh-sm py-2">Somos la Institución preferidad por
                                    estudiantes y <br> profesionales del sector construcción por nuestra <br>
                                    metodología de
                                    enseñanza en base a proyectos reales. </div>

                                <div class="d-flex flex-column justify-content-start py-2">
                                    <div class="d-flex flex-row">
                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">Más de 15 mil estudiantes formados en Instituto
                                            Dozer
                                        </div>
                                    </div>


                                </div>


                            </div>
                        </div>
                        <div class="pb-5">
                            <img class="position-absolute mb-5 bottom-0 fondoo r-1em" src="uploads\system\fondo.png"
                                alt="">
                            <img src="uploads\system\dozer-seis.png" class="d-block w-100 menu-area r-1em " alt="...">
                        </div>

                    </div>
                </div>
            </div>
</section>
<!-- Conoce mas de Dozer-->

<!-- Testimonios -->
<section>
    <div class="container-xl">

        <p class="text-white fs-3 fw-bolder text-center">Desde nuestros inicios hemos ayudado a más de <br>
            15 mil alumnos a lograr sus metas</p>

        </h3>
    </div>
    <div class="container">
        <input type="radio" name="dot" id="onee">
        <input type="radio" name="dot" id="twoo">
        <div class="main-cardd">
            <div class="cardss">
                <div class="card">
                    <div class="fondo"></div>
                    <img src="uploads\system\testimonios\testimonio-uno.png" alt="">
                    <div class=" content">
                        <div class="text-white fs-6 fw-light lh-sm py-2">“Teoría y constante practica, los <br>
                            cursos
                            estan bien organizados y <br> desarrollados”</div>

                        <div class="d-flex justify-content-start">
                            <div class="pe-2"> <img src="uploads\system\docente\pe.png" alt=""> </div>

                            <div class="d-flex flex-column   align-items-start">
                                <div class="nametest">Miriam Corrales</div>
                                <div class="jobtest">Perú</div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="card ">
                    <div class="fondo"></div>
                    <img src="uploads\system\testimonios\testimonio-dos.png" alt="">
                    <div class=" content">
                        <div class="text-white fs-6 fw-light lh-sm py-2">“Las clases son desde cero, <br> hasta el
                            nivel
                            avanzado, aprendi <br> mucho con Dozer”</div>

                        <div class="d-flex justify-content-start">
                            <div class="pe-2"> <img src="uploads\system\docente\co.png" alt=""> </div>

                            <div class="d-flex flex-column ">
                                <div class="nametest">María Angeles</div>
                                <div class="jobtest">Colombia</div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="card ">
                    <img src="uploads\system\testimonios\testimonio-tres.png" alt="">
                    <div class=" content">
                        <div class="text-white fs-6 fw-light lh-sm py-2">“Los docentes son muy <br> preparados, las
                            clases
                            fueron <br> muy sencillos de entender”</div>

                        <div class="d-flex justify-content-start">
                            <div class="pe-2"> <img src="uploads\system\docente\pe.png" alt=""> </div>

                            <div class="d-flex flex-column ">
                                <div class="nametest">Carla Díaz</div>
                                <div class="jobtest">Perú</div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="card ">
                    <img src="uploads\system\testimonios\testimonio-cuatro.png" alt="">
                    <div class=" content">
                        <div class="text-white fs-6 fw-light lh-sm py-2">“La metodología de enseñanza <br> es muy
                            buena,
                            siempre estan <br> asesorandote”</div>

                        <div class="d-flex justify-content-start">
                            <div class="pe-2" style="width: 4rem;"> <img style="width: 90%;border-radius: 5px;"
                                    src="uploads\system\docente\ec.jpg" alt=""> </div>

                            <div class="d-flex flex-column ">
                                <div class="nametest">Juvitza Salas</div>
                                <div class="jobtest">Ecuador</div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
            <div class="cardss">
                <div class="card">
                    <div class="fondo"></div>
                    <img src="uploads\system\testimonios\testimonio-cinco.png" alt="">
                    <div class=" content">
                        <div class="text-white fs-6 fw-light lh-sm py-2">“Las certificaciones me <br> aperturaron
                            muchas
                            puertas en <br> mi entorno laboral”</div>

                        <div class="d-flex justify-content-start">
                            <div class="pe-2" style="width: 4rem;"> <img style="width: 90%;border-radius: 5px;"
                                    src="uploads\system\docente\ar.jpg" alt=""> </div>

                            <div class="d-flex flex-column   align-items-start">
                                <div class="nametest">Grecia Pacoti</div>
                                <div class="jobtest">Argentina</div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="card ">
                    <div class="fondo"></div>
                    <img src="uploads\system\testimonios\testimonio-seis.png" alt="">
                    <div class=" content">
                        <div class="text-white fs-6 fw-light lh-sm py-2">“Todos los cursos que eh <br> seguido son
                            de calidad y desde <br> cero, gracias por ello”</div>

                        <div class="d-flex justify-content-start">
                            <div class="pe-2"> <img src="uploads\system\docente\bo.png" alt=""> </div>

                            <div class="d-flex flex-column ">
                                <div class="nametest">Johana Flores</div>
                                <div class="jobtest">Bolivia</div>
                            </div>
                        </div>


                    </div>

                </div>

                <div class="card ">
                    <img src="uploads\system\testimonios\testimonio-siete.png" alt="">
                    <div class=" content">
                        <div class="text-white fs-6 fw-light lh-sm py-2">“Desde sus docentes hasta sus <br>
                            personales de trabajo todos muy <br> amables”</div>

                        <div class="d-flex justify-content-start">
                            <div class="pe-2"> <img src="uploads\system\docente\mx.png" alt=""> </div>

                            <div class="d-flex flex-column ">
                                <div class="nametest">Marco Bazan</div>
                                <div class="jobtest">Mexico</div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
        <div class="button">
            <label for="onee" class=" active onee"></label>
            <label for="twoo" class="twoo"></label>
        </div>
    </div>

</section>
<!-- Testimonios -->
<!-- Nunca Pares de Aprender-->
<section>
    <div class="container-xl">
        <div class="d-flex flex-row justify-content-between">
            <div class="p-2">
                <p class="text-white fs-4 fw-bolder "> Nunca pares de aprender</p>
                <p class="text-white fw-lighter fs-6 lh-sm">llevamos a todas partes la pación por <br>
                    compartir conocimiento, crear comunidad <br>
                    y construir el futuro de latinoamérica en <br>
                    el área de arquitectura, ingeniería y nuevas <br>
                    técnologias</p>
            </div>
            <div class="p-2 ">
                <div class="d-flex flex-row mb-3">
                    <div class="p-2">
                        <div class="d-flex flex-column mb-3">
                            <div class="border-social m-2">
                                <div class="d-flex flex-row ">
                                    <div class="p-2 bg-white"><img src="uploads\system\social\fb.svg" alt=""></div>
                                    <div class="text-white fw-lighter fs-6 p-2">facebook.com/Instituto Dozer</div>
                                </div>
                            </div>
                            <div class="border-social m-2">
                                <div class="d-flex flex-row ">
                                    <div class="p-2 bg-white"><img src="uploads\system\social\ig.svg" alt=""></div>
                                    <div class="text-white fw-lighter fs-6 p-2">instagram.com/Instituto_Dozer</div>
                                </div>
                            </div>
                            <div class="border-social m-2">
                                <div class="d-flex flex-row ">
                                    <div class="p-2 bg-white"><img src="uploads\system\social\tk.svg" alt=""></div>
                                    <div class="text-white fw-lighter fs-6 p-2">tiktok.com/@instituto.dozer</div>
                                </div>
                            </div>
                            <div class="border-social m-2">
                                <div class="d-flex flex-row ">
                                    <div class="p-2 bg-white"><img src="uploads\system\social\in.svg" alt=""></div>
                                    <div class="text-white fw-lighter fs-6 p-2">linkedin.com/Instituto Dozer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="d-flex flex-column mb-3">
                            <div class="border-social m-2">
                                <div class="d-flex flex-row ">
                                    <div class="p-2 bg-white"><img src="uploads\system\social\yt.svg" alt=""></div>
                                    <div class="text-white fw-lighter fs-6 p-2">youtube.com/Instituto Dozer</div>
                                </div>
                            </div>

                            <div class="border-social m-2">
                                <div class="d-flex flex-row ">
                                    <div class="p-2 bg-white"><img src="uploads\system\social\wssp.svg" alt=""></div>
                                    <div class="text-white fw-lighter fs-6 p-2">whatsapp.com/+51 929 270 912</div>
                                </div>
                            </div>
                            <div class="border-social m-2">
                                <div class="d-flex flex-row ">
                                    <div class="p-2 bg-white"><img src="uploads\system\social\tl.svg" alt=""></div>
                                    <div class="text-white fw-lighter fs-6 p-2">telegram.com/Instituto Dozer</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Nunca Pares de Aprender
 <div class="container-xl mt-5">
    <div class="row justify-content-evenly py-3 mb-4">
        <div class="col-md-6 <?php if (get_settings('allow_instructor') != 1) echo 'w-100'; ?> mt-3 mt-md-0">
            <div class="become-user-label bg-sub-primary mt-3"
                style="background-image: url('<?php echo site_url('assets/frontend/default/img/join-as-student.png'); ?>')">
                <h3 class="pb-4 fw-700 w-50">
                    <?php echo site_phrase('join_now_to_start_learning'); ?>
                </h3>
                <a class="btn btn-primary px-4 py-2"
                    href="<?php echo site_url('sign_up'); ?>"><?php echo site_phrase('get_started'); ?></a>
            </div>
        </div>
        <?php if (get_settings('allow_instructor') == 1) : ?>
        <div class="col-md-6">
            <div class="become-user-label bg-sub-danger mt-3"
                style="background-image: url('<?php echo site_url('assets/frontend/default/img/join-as-instructor.png'); ?>')">
                <h3 class="pb-4 fw-700 w-50">
                    <?php echo site_phrase('become_a_new_instructor'); ?></h3>
                <?php if($this->session->userdata('user_id')): ?>
                <a class="btn btn-danger px-4 py-2"
                    href="<?php echo site_url('user/become_an_instructor'); ?>"><?php echo site_phrase('join_now'); ?></a>
                <?php else: ?>
                <a class="btn btn-danger px-4 py-2"
                    href="<?php echo site_url('sign_up'); ?>"><?php echo site_phrase('join_now'); ?></a>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
-->

<script type="text/javascript">
function handleWishList(elem) {

    $.ajax({
        url: '<?php echo site_url('home/handleWishList'); ?>',
        type: 'POST',
        data: {
            course_id: elem.id
        },
        success: function(response) {
            if (!response) {
                window.location.replace("<?php echo site_url('login'); ?>");
            } else {
                if ($(elem).hasClass('active')) {
                    $(elem).removeClass('active')
                } else {
                    $(elem).addClass('active')
                }
                $('#wishlist_items').html(response);
            }
        }
    });
}

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
            if ($(elem).hasClass('addedToCart')) {
                $('.big-cart-button-' + elem.id).removeClass('addedToCart')
                $('.big-cart-button-' + elem.id).text(
                    "<?php echo site_phrase('add_to_cart'); ?>");
            } else {
                $('.big-cart-button-' + elem.id).addClass('addedToCart')
                $('.big-cart-button-' + elem.id).text(
                    "<?php echo site_phrase('added_to_cart'); ?>");
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

function handleEnrolledButton() {
    $.ajax({
        url: '<?php echo site_url('home/isLoggedIn'); ?>',
        success: function(response) {
            if (!response) {
                window.location.replace("<?php echo site_url('login'); ?>");
            }
        }
    });
}

$(document).ready(function() {
    if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
            navigator
            .userAgent)) {
        if ($(window).width() >= 840) {
            $('a.has-popover').webuiPopover({
                trigger: 'hover',
                animation: 'pop',
                placement: 'horizontal',
                delay: {
                    show: 500,
                    hide: null
                },
                width: 330
            });
        } else {
            $('a.has-popover').webuiPopover({
                trigger: 'hover',
                animation: 'pop',
                placement: 'vertical',
                delay: {
                    show: 100,
                    hide: null
                },
                width: 335
            });
        }
    }

    if ($(".course-carousel")[0]) {
        $(".course-carousel").slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            swipe: false,
            touchMove: false,
            responsive: [{
                    breakpoint: 840,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    },
                },
                {
                    breakpoint: 620,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    }

    if ($(".top-istructor-slick")[0]) {
        $(".top-istructor-slick").slick({
            dots: false
        });
    }
});
</script>