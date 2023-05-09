<section class="container-xl m-cqp">
    <div class="row ">
        <div class="col-lg-6 text-white text-cqp">
            <div>
                <h1>¿Como quieres pagar?</h1>
                <p>Elige tu forma de pagar, te mostramos las 2 métodos que se adecuarán a tu comodidad. </p>
            </div>
            <div>
                <a href="">
                    <div class="d-flex fondo-metodo justify-content-between">
                        <div class="p-3 d-flex flex-column ">
                            <div class="px-2 fw-bold text-white ">Método Simple </div>
                            <div class="px-2 text-white fw-200">Pago en cuentas nacionales (Perú)</div>
                        </div>
                        <div class="p-3  d-flex align-items-center py-3 px-5"><img class="style-icon-qp d-flex justify-content-end" src="<?= base_url() ?>uploads/system/icon-flecha.png" alt=""></div>

                    </div>
                </a> <br>
                <a href="">
                    <div class="d-flex fondo-metodo justify-content-between">
                        <div class="p-3 d-flex flex-column ">
                            <div class="px-2 fw-bold text-white ">Método Automatizado</div>
                            <div class="px-2 text-white fw-200">Pago mediante tarjeta de Crédito/Débito</div>
                        </div>
                        <div class="p-3  d-flex align-items-center py-3 px-5"><img class="style-icon-qp d-flex justify-content-end" src="<?= base_url() ?>uploads/system/icon-flecha.png" alt=""></div>

                    </div>
                </a>
            </div>
        </div>

        <?php include "shopping_cart_inner_view.php"; ?>


    </div>
</section>
<section class="cart-list-area container-xl">
    <div class="container">
        <div class="row" id="cart_items_details">

        </div>
    </div>
</section>



<script src="https://www.paypalobjects.com/js/external/dg.js"></script>
<script>
    var dgFlow = new PAYPAL.apps.DGFlow({
        trigger: 'submitBtn'
    });
    dgFlow = top.dgFlow || top.opener.top.dgFlow;
    dgFlow.closeFlow();
    // top.close();
</script>

<script type="text/javascript">
    function removeFromCartList(elem) {
        url1 = '<?php echo site_url('home/handleCartItems'); ?>';
        url2 = '<?php echo site_url('home/refreshWishList'); ?>';
        url3 = '<?php echo site_url('home/refreshShoppingCart'); ?>';
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
                    $('.big-cart-button-' + elem.id).text("<?php echo site_phrase('add_to_cart'); ?>");
                } else {
                    $('.big-cart-button-' + elem.id).addClass('addedToCart')
                    $('.big-cart-button-' + elem.id).text("<?php echo site_phrase('added_to_cart'); ?>");
                }

                $.ajax({
                    url: url2,
                    type: 'POST',
                    success: function(response) {
                        $('#wishlist_items').html(response);
                    }
                });

                $.ajax({
                    url: url3,
                    type: 'POST',
                    success: function(response) {
                        $('#cart_items_details').html(response);
                    }
                });
            }
        });
    }

    function handleCheckOut() {
        $.ajax({
            url: '<?php echo site_url('home/isLoggedIn?url_history=' . base64_encode(current_url())); ?>',
            success: function(response) {
                if (!response) {
                    window.location.replace("<?php echo site_url('login'); ?>");
                } else if ("<?php echo $total_price; ?>" > 0) {
                    // $('#paymentModal').modal('show');
                    //$('.total_price_of_checking_out').val($('#total_price_of_checking_out').text());
                    window.location.replace("<?php echo site_url('home/payment'); ?>");
                } else {
                    toastr.error('<?php echo site_phrase('there_are_no_courses_on_your_cart'); ?>');
                }
            }
        });
    }

    function handleCartItems(elem) {
        var couponCode = $("#coupon-code").val();

        url1 = '<?php echo site_url('home/handleCartItems'); ?>';
        url2 = '<?php echo site_url('home/refreshWishList'); ?>';
        url3 = '<?php echo site_url('home/refreshShoppingCart'); ?>';
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
                    $('.big-cart-button-' + elem.id).text("<?php echo site_phrase('add_to_cart'); ?>");
                } else {
                    $('.big-cart-button-' + elem.id).addClass('addedToCart')
                    $('.big-cart-button-' + elem.id).text("<?php echo site_phrase('added_to_cart'); ?>");
                }
                $.ajax({
                    url: url2,
                    type: 'POST',
                    success: function(response) {
                        $('#wishlist_items').html(response);
                    }
                });

                $.ajax({
                    url: url3,
                    type: 'POST',
                    data: {
                        couponCode: couponCode
                    },
                    success: function(response) {
                        $('#cart_items_details').html(response);
                    }
                });
            }
        });
    }

    function applyCoupon() {
        $("#spinner").removeClass('hidden');
        var couponCode = $("#coupon-code").val();
        url3 = '<?php echo site_url('home/refreshShoppingCart'); ?>';
        $.ajax({
            url: url3,
            type: 'POST',
            data: {
                couponCode: couponCode
            },
            success: function(response) {
                $("#spinner").addClass('hidden');
                $('#cart_items_details').html(response);
            }
        });
    }
</script>