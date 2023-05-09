<?php
require 'vendor/autoload.php';
MercadoPago\SDK::setAccessToken('TEST-4981021336739503-050900-5a2ab318a77e987791288afbdcc8c656-323048680');
$preference = new MercadoPago\Preference();

$products_map = array();

?>

<div class="col-lg-6 text-cqp-cursos">
    <div class="in-cart-box">
        <div class="fondo-gqp">
            <div class="title text-carrito  py-3">Tu carrito de compra esta vacío</div>
            <div class="hidden"><?php echo sizeof($this->session->userdata('cart_items')) . '  ' ?></div>
            <div><img class="d-block m-auto" src="<?= base_url() ?>uploads/system/carrito.png" alt=""></div>
            <div class="d-flex flex-column mb-3 p-2">
                <div class="py-2  px-4"><a class=" fondo-comprar-ced d-flex justify-content-center" href="#">Seguir
                        comprando cursos</a></div>
                <div class="py-2 px-4 "><a class="fondo-comprar-ced d-flex justify-content-center" href="#">Seguir
                        comprando especializaciones</a></div>
                <div class="py-2  px-4"><a class=" fondo-comprar-ced d-flex justify-content-center" href="#">Seguir
                        comprando diplomados</a></div>
            </div>
        </div>
        <div class="">
            <ul class="cart-course-list">
                <p>Resulem de Pedido:</p>
                <?php
                $actual_price = 0;
                $total_price  = 0;
                foreach ($this->session->userdata('cart_items') as $cart_item) :
                    $course_details = $this->crud_model->get_course_by_id($cart_item)->row_array();
                    $instructor_details = $this->user_model->get_all_user($course_details['user_id'])->row_array();
                    $item = new MercadoPago\Item();

                    $item->id = $course_details['id'];
                    $item->title = $course_details['short_description'];
                    $item->quantity = 1;
                    $item->unit_price = $course_details['discounted_price'];
                    $item->currency_id = 'PEN';

                    array_push($products_map, $item);
                    unset($item);
                ?>
                    <li>
                        <div class="cart-course-wrapper box-shadow-5 d-flex justify-content-between">

                            <div class="d-flex flex-column ">
                                <div class="d-flex flex-row justify-content-between ">
                                    <div class="details">
                                        <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($course_details['title'])) . '/' . $course_details['id']); ?>">
                                            <div class="name text-title-cqp text-white">
                                                <?php echo $course_details['title']; ?>
                                            </div>
                                        </a>

                                        <div class="course-subtitle text-13px mt-2">
                                            <?php echo ellipsis($course_details['short_description'], 80); ?>
                                        </div>


                                    </div>


                                    <div class="move-remove text-center ">
                                        <div id="<?php echo $course_details['id']; ?>" onclick="removeFromCartList(this)"><i style="font-size: 30px;" class="fas fa-times-circle text-white"></i></div>
                                        <!-- <div>Move to Wishlist</div> -->
                                    </div>
                                </div>
                                <hr class="stylehr">
                                <div class="price mt-1 mx-3">
                                    <?php if ($course_details['discount_flag'] == 1) : ?>
                                        <div class="current-price text-white d-flex flex-row  justify-content-between">
                                            <div>Costo:
                                            </div>
                                            <div class="">
                                                <?php
                                                $total_price += $course_details['discounted_price'];
                                                echo currency($course_details['discounted_price']);
                                                ?>
                                            </div>
                                        </div>


                                    <?php else : ?>


                                        <div class="current-price">
                                            <?php
                                            $actual_price += $course_details['price'];
                                            $total_price  += $course_details['price'];
                                            echo currency($course_details['price']);
                                            ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <hr class="stylehr">
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <h5 class="fw-700"><?php echo site_phrase('total'); ?>:</h5>
    <div class="cart-sidebar bg-white radius-10 py-4 px-3 box-shadow-5">
        <?php if (isset($coupon_code) && !empty($coupon_code) && $this->crud_model->check_coupon_validity($coupon_code)) : ?>
            <span id="total_price_of_checking_out" hidden>
                <?php
                $coupon_details = $this->crud_model->get_coupon_details_by_code($coupon_code)->row_array();
                $actual_price = round($total_price, 2);

                //including Tax or vat
                if (get_settings('course_selling_tax') > 0) :
                    $total_price = $this->crud_model->get_discounted_price_after_applying_coupon($coupon_code);

                    $total_tax = round(($total_price / 100) * get_settings('course_selling_tax'), 2);
                    $total_price = round($total_price + ($total_price / 100) * get_settings('course_selling_tax'), 2);
                else :
                    $total_price = round($this->crud_model->get_discounted_price_after_applying_coupon($coupon_code), 2);
                endif;


                echo $total_price;
                $this->session->set_userdata('total_price_of_checking_out', $total_price);
                $this->session->set_userdata('applied_coupon', $coupon_code);
                ?>
            </span>
            <div class="total-price"><?php echo currency($total_price); ?></div>
            <div class="total-original-price">
                <span class="original-price">
                    <span class="original-price"><?php echo currency($actual_price); ?></span>
                </span>
                <span class="discount-rate"><?php echo $coupon_details['discount_percentage']; ?>%
                    <?php echo site_phrase('coupon_code_applied'); ?></span>
            </div>
        <?php else : ?>
            <!-- including Tax or vat -->
            <?php
            if (get_settings('course_selling_tax') > 0) :
                $total_tax = round(($total_price / 100) * get_settings('course_selling_tax'), 2);
                $total_price = round($total_price + ($total_price / 100) * get_settings('course_selling_tax'), 2);
            else :
                $total_price = round($total_price, 2);
            endif;
            ?>

            <span id="total_price_of_checking_out" hidden><?php echo $total_price;
                                                            $this->session->set_userdata('total_price_of_checking_out', $total_price); ?>
            </span>
            <div class="total-price"><?php echo currency($total_price); ?></div>
            <div class="total-original-price">

                <!-- <span class="discount-rate">95% off</span> -->
            </div>
        <?php endif; ?>


        <!-- including Tax or vat -->
        <?php if (get_settings('course_selling_tax') > 0) : ?>
            <small class="d-block mb-3 w-100 text-12px text-uppercase"><b><?php echo currency($total_tax) . '</b> (' . get_settings('course_selling_tax') . '%) ' . get_phrase('TAX_INCLUDED'); ?></small>
        <?php endif; ?>


        <!-- including Tax or vat -->
        <?php if (get_settings('course_selling_tax') > 0) :
            $total_price = $total_price + ($total_price / 100) * get_settings('course_selling_tax');
        endif; ?>

        <div class="input-group marge-input-box mb-3">
            <input type="text" class="form-control" placeholder="<?php echo site_phrase('apply_coupon_code'); ?>" id="coupon-code">
            <div class="input-group-append">
                <button class="btn" type="button" onclick="applyCoupon()">
                    <i class="fas fa-spinner fa-pulse hidden" id="spinner"></i>
                    <?php echo site_phrase('apply'); ?>
                </button>
            </div>

        </div>
        <button type="button" class="btn red w-100 radius-10 mb-3" onclick="handleCheckOut()"><?php echo site_phrase('checkout'); ?></button>
        <div class="checkout-btn"></div>

    </div>
</div>
<?php
$preference->items = $products_map;

$preference->back_urls = array(
    "success" => "http://localhost/pay/captura.php",
    "failure" => "http://localhost/pay/error.php"
);

$preference->auto_return = "approved";
$preference->binary_mode = true;


$preference->save();
?>
<script src="https://sdk.mercadopago.com/js/v2"></script>

<script>
    const mp = new MercadoPago('TEST-afbb3c96-f8ed-4846-9deb-ca492ac37428');
    mp.checkout({
        preference: {
            id: '<?= $preference->id ?>'
        },
        render: {
            container: '.checkout-btn',
            label: 'Pagar con MP'
        }
    });
</script>