<?php
isset($layout) ? "" : $layout = "list";
isset($selected_category_id) ? "" : $selected_category_id = "all";
isset($selected_level) ? "" : $selected_level = "all";
isset($selected_language) ? "" : $selected_language = "all";
isset($selected_rating) ? "" : $selected_rating = "all";
isset($selected_price) ? "" : $selected_price = "all";
// echo $selected_category_id.'-'.$selected_level.'-'.$selected_language.'-'.$selected_rating.'-'.$selected_price;
$number_of_visible_categoria = 10;
if (isset($sub_category_id)) {
    $sub_category_details = $this->crud_model->get_category_details_by_id($sub_category_id)->row_array();
    $category_details     = $this->crud_model->get_categoria($sub_category_details['parent'])->row_array();
    $category_name        = $category_details['name'];
    $sub_category_name    = $sub_category_details['name'];
}
?>




<section class="category-course-list-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 filter-area">
                <div class="d-flex position-relative flex-column border-0 radius-10 box-shadow-5">
                    <div id="collapseFilter" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordion">
                        <div class="card-body p-0">
                            <div class="   filter_type px-4 pt-4">
                                <h5 class="text-white px-3 py-2 fw-700 m-0 dondenomb_category"
                                    style="background: #373737;"><?php echo site_phrase('Categoría'); ?></h5>
                                <ul class="text-white p-3 subcategory_nomb" style="background: #272727;">

                                    <?php
                                    $counter = 1;
                                    $total_number_of_categoria = $this->db->get('category')->num_rows();
                                    if ($id_category == '3' || $id_category == '4' || $id_category == '5') {
                                        $categoria = $this->crud_model->get_categoria($id_category)->result_array();
                                    } else {
                                        $categoria = $this->crud_model->get_categoria($parent)->result_array();
                                    }

                                    foreach ($categoria as $category) : ?>
                                    <li class="">
                                        <div
                                            class="text-15px fw-700 <?php if ($counter > $number_of_visible_categoria) : ?> hidden-categoria hidden <?php else : ?> d-flex<?php endif; ?>">
                                            <input type="radio" id="category-<?php echo $category['id']; ?>"
                                                name="sub_category" class="categoria custom-radio"
                                                value="<?php echo $category['slug']; ?>" onclick="filter(this)"
                                                <?php if ($selected_category_id == $category['id']) echo 'checked'; ?>>
                                            <label class="text-white"
                                                for="category-<?php echo $category['id']; ?>"><?php echo $category['name']; ?></label>

                                        </div>
                                    </li>
                                    <?php foreach ($this->crud_model->get_sub_categoria($category['id']) as $sub_category) : ?>
                                    <li class="ms-3 ">
                                        <div
                                            class="<?php if ($counter > $number_of_visible_categoria) : ?> hidden-categoria hidden <?php else : ?> d-flex<?php endif; ?>">
                                            <input type="radio" id="sub_category-<?php echo $sub_category['id']; ?>"
                                                name="sub_category" class="categoria custom-radio"
                                                value="<?php echo $sub_category['slug']; ?>" onclick="filter(this)"
                                                <?php if ($selected_category_id == $sub_category['id']) echo 'checked'; ?>>
                                            <label class=" text-white"
                                                for="sub_category-<?php echo $sub_category['id']; ?>"><?php echo $sub_category['name']; ?></label>

                                        </div>
                                    </li>
                                    <?php $counter++;  ?>
                                    <?php endforeach; ?>
                                    <?php $counter++;  ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="filter_type px-4">
                                <h5 class="text-white px-3 py-2 fw-700 m-0 dondenomb_category"><?php echo site_phrase('level'); ?></h5>
                                <ul class="text-white p-3 subcategory_nomb">
                                    <li>
                                        <div class="">
                                            <input type="radio" id="all" name="level" class="level custom-radio "
                                                value="all" onclick="filter(this)"
                                                <?php if ($selected_level == 'all') echo 'checked'; ?>>
                                            <label class="text-white" for="all"><?php echo site_phrase('all'); ?></label>
                                        </div>
                                        <div class="">
                                            <input type="radio" id="beginner" name="level" class="level custom-radio"
                                                value="beginner" onclick="filter(this)"
                                                <?php if ($selected_level == 'beginner') echo 'checked'; ?>>
                                            <label class="text-white" for="beginner"><?php echo site_phrase('beginner'); ?></label>
                                        </div>
                                        <div class="">
                                            <input type="radio" id="advanced" name="level" class="level custom-radio"
                                                value="advanced" onclick="filter(this)"
                                                <?php if ($selected_level == 'advanced') echo 'checked'; ?>>
                                            <label class="text-white" for="advanced"><?php echo site_phrase('advanced'); ?></label>
                                        </div>
                                        <div class="">
                                            <input type="radio" id="intermediate" name="level"
                                                class="level custom-radio" value="intermediate" onclick="filter(this)"
                                                <?php if ($selected_level == 'intermediate') echo 'checked'; ?>>
                                            <label class="text-white" for="intermediate"><?php echo site_phrase('intermediate'); ?></label>
                                        </div>
                                        <div class="">
                                            <input type="radio" id="empresa" name="level"
                                                class="level custom-radio" value="empresa" onclick="filter(this)"
                                                <?php if ($selected_level == 'empresa') echo 'checked'; ?>>
                                            <label class="text-white" for="empresa"><?php echo site_phrase('empresa'); ?></label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                           <br>
                            <div class="filter_type px-4">
                                <div class="form-group">
                                    <h5 class="fw-700 mb-3"><?php echo site_phrase('price'); ?></h5>
                                    <ul>
                                        <li>
                                            <div class="">
                                                <input type="radio" id="price_all" name="price"
                                                    class="prices custom-radio" value="all" onclick="filter(this)"
                                                    <?php if ($selected_price == 'all') echo 'checked'; ?>>
                                                <label for="price_all"><?php echo site_phrase('all'); ?></label>
                                            </div>
                                            <div class="">
                                                <input type="radio" id="price_free" name="price"
                                                    class="prices custom-radio" value="free" onclick="filter(this)"
                                                    <?php if ($selected_price == 'free') echo 'checked'; ?>>
                                                <label for="price_free"><?php echo site_phrase('free'); ?></label>
                                            </div>
                                            <div class="">
                                                <input type="radio" id="price_paid" name="price"
                                                    class="prices custom-radio" value="paid" onclick="filter(this)"
                                                    <?php if ($selected_price == 'paid') echo 'checked'; ?>>
                                                <label for="price_paid"><?php echo site_phrase('paid'); ?></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <br>
                            
                            
                            
                            <hr>
                            <div class="filter_type px-4">
                                <h5 class="fw-700 mb-3"><?php echo site_phrase('ratings'); ?></h5>
                                <ul>
                                    <li>
                                        <div class="">
                                            <input type="radio" id="all_rating" name="rating"
                                                class="ratings custom-radio" value="<?php echo 'all'; ?>"
                                                onclick="filter(this)"
                                                <?php if ($selected_rating == "all") echo 'checked'; ?>>
                                            <label for="all_rating"><?php echo site_phrase('all'); ?></label>
                                        </div>
                                    </li>
                                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                                    <li>
                                        <div class="">
                                            <input type="radio" id="rating_<?php echo $i; ?>" name="rating"
                                                class="ratings custom-radio" value="<?php echo $i; ?>"
                                                onclick="filter(this)"
                                                <?php if ($selected_rating == $i) echo 'checked'; ?>>
                                            <label for="rating_<?php echo $i; ?>">
                                                <?php for ($j = 1; $j <= $i; $j++) : ?>
                                                <i class="fas fa-star" style="color: #f4c150;"></i>
                                                <?php endfor; ?>
                                                <?php for ($j = $i; $j < 5; $j++) : ?>
                                                <i class="far fa-star" style="color: #dedfe0;"></i>
                                                <?php endfor; ?>
                                            </label>
                                        </div>
                                    </li>
                                    <?php endfor; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row category-filter-box mx-0 box-shadow-4" style="
                    background-image: url(<?= $variable ?>);
                    background-position: right;
                    background-repeat: no-repeat;
                    background-size: 59rem;
                    border-radius: 10px;
                ">
                    <div class="col-md-6 position-relative">
                        <p class="fw-bold text-white px-5"><?= $text_banner ?></p>
                        <p class="px-5 text-white"><?= $sub_text_banner ?></p>
                        <div class="px-5">
                            <a class="btn-premiun p-1 border-09" href="#"><?= $btn_banner ?>
                                <img style="background-image: url(<?= $variable_dos?>);
                            background-position: right;
                            background-repeat: no-repeat;
                            background-size: 9rem;
                            z-index:-999">
                                <?= $btn_dos_banner ?>
                            </a>

                        </div>
                        <div style="background-image: url(<?= $variable_logo?>)"></div>
                    </div>
                    <div class="col-md-6 text-end filter-sort-by">

                    </div>
                </div>
                <div class="category-course-list">
                    <?php include 'category_wise_course_' . $layout . '_layout.php'; ?>
                    <?php if (count($courses) == 0) : ?>
                    <?php echo site_phrase('no_result_found'); ?>
                    <?php endif; ?>
                </div>
                <nav>
                    <?php
                    // if ($selected_category_id == "all" && $selected_price == 0 && $selected_level == 'all' && $selected_language == 'all' && $selected_rating == 'all') {
                    echo $this->pagination->create_links();
                    //} 
                    ?>
                </nav>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
function get_url() {
    var urlPrefix = '<?php echo site_url('home/courses?'); ?>'
    var urlSuffix = "";
    var slectedCategory = "";
    var selectedPrice = "";
    var selectedLevel = "";
    var selectedLanguage = "";
    var selectedRating = "";

    // Get selected category
    $('.categoria:checked').each(function() {
        slectedCategory = $(this).attr('value');
    });

    // Get selected price
    $('.prices:checked').each(function() {
        selectedPrice = $(this).attr('value');
    });

    // Get selected difficulty Level
    $('.level:checked').each(function() {
        selectedLevel = $(this).attr('value');
    });

    // Get selected difficulty Level
    $('.languages:checked').each(function() {
        selectedLanguage = $(this).attr('value');
    });

    // Get selected rating
    $('.ratings:checked').each(function() {
        selectedRating = $(this).attr('value');
    });

    urlSuffix = "category=" + slectedCategory + "&&price=" + selectedPrice + "&&level=" + selectedLevel +
        "&&language=" + selectedLanguage + "&&rating=" + selectedRating;
    var url = urlPrefix + urlSuffix;
    return url;
}

function filter() {
    var url = get_url();
    window.location.replace(url);
    //console.log(url);
}

function toggleLayout(layout) {
    $.ajax({
        type: 'POST',
        url: '<?php echo site_url('home/set_layout_to_session'); ?>',
        data: {
            layout: "grid"
        },
        success: function(response) {
            location.reload();
        }
    });
}

function showToggle(elem, selector) {
    $('.' + selector).slideToggle(50);
    $('.' + selector).toggleClass("d-flex");
    if ($(elem).text() === "<?php echo site_phrase('show_more'); ?>") {
        $(elem).text('<?php echo site_phrase('show_less'); ?>');
    } else {
        $(elem).text('<?php echo site_phrase('show_more'); ?>');
    }
}

$('.course-compare').click(function(e) {
    e.preventDefault()
    var redirect_to = $(this).attr('redirect_to');
    window.location.replace(redirect_to);
});
</script>