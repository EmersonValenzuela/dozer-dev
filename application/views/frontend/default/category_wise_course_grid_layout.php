<div class="row">
    <?php foreach ($courses as $course) :



        $instructor_details = $this->user_model->get_all_user($course['user_id'])->row_array();
        $course_duration = $this->crud_model->get_total_duration_of_lesson_by_course_id($course['id']);
        $lessons = $this->crud_model->get_lessons('course', $course['id']); ?>
        <div class="col-12 col-sm-6 col-md-6 col-xl-4 px-10 px-sm-0 ">
            <div class="course-box-wrap">
                <a onclick="$(location).attr('href', '<?php echo site_url('home/course/' . rawurlencode(slugify($course['title'])) . '/' . $course['id']); ?>');" href="javascript:;" class="has-popover">
                    <div class="course-box">
                        <div class="course-image">
                            <img src="<?php echo $this->crud_model->get_course_thumbnail_url($course['id']); ?>" alt="" class="img-fluid">
                        </div>
                        <div>
                            <div class="course-curso">
                                <h5 class="title"><?php echo $course['title']; ?></h5>
                                <div class="row ">
                                    <div class="col-12">
                                        <span class="title"><?php echo site_phrase($course['level']); ?></span>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-12">
                                        <span class="fw-200 color-textcerti "><?= $text_certificado ?></span>
                                        
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="mt-1 course-box-tres">
                        <div class="w-100 d-flex text-dark  py-1 course-details ">
                            <div class="">
                                <?php if ($course['is_free_course'] == 1) : ?>
                                    <p class="price text-white text-right d-inline-block float-end">
                                        <?php echo site_phrase('free'); ?></p>
                                <?php else : ?>
                                    <?php if ($course['discount_flag'] == 1) : ?>
                                        <p class="price text-white  text-right d-inline-block float-end"><small>

                                                <span class="precio-desc-curso"> <?php echo currency($course['discounted_price']); ?> Soles</span> <br>
                                                <del><?php echo currency($course['price']); ?> Soles </small></del>
                                        </p> <br>
                                    <?php else : ?>
                                        <br>
                                        <p class="price text-white fw-bold text-15px text-right d-inline-block float-end">
                                            <?php echo currency($course['price']); ?></p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <div class="ms-auto">

                                <span class="text-white fw-bold text-15px d-flex justify-content-end">80% Dto</span> 
                                <span class="btnbadge-prox prox-color  ">PROXIMAMENTE</span>

                            </div>
                        </div>
                </a>
            </div>
        </div>
</div>
<?php endforeach; ?>
</div>