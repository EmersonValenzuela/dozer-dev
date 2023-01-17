<?php if(get_frontend_settings('recaptcha_status')): ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php endif; ?>

<section class="category-course-list-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-none d-lg-block text-center position-relative left-80 ">
                <img class="" width="50%" src="<?php echo base_url('uploads/system/sign_up.png'); ?>">
            </div>
            <div class="col-lg-6 fondologin position-relative left-72">
                <div class="p-3">
                    <?php if(get_settings('fb_social_login')) include "facebook_login.php"; ?>

                    <form action="<?php echo site_url('login/validate_login/user'); ?>" method="post" id="sign_up">
                        <div class="form-group">
                            <label for="login-email"><?php echo site_phrase('Correo'); ?></label>
                            <div class="input-group">
                                
                                <input type="email" name="email" class="form-control"
                                    placeholder="<?php echo site_phrase('email'); ?>"
                                    aria-label="<?php echo site_phrase('email'); ?>"
                                    aria-describedby="<?php echo site_phrase('email'); ?>" id="login-email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="login-password"><?php echo site_phrase('Contraseña'); ?></label>
                            <div class="input-group">
                                 <input type="password" name="password" class="form-control"
                                    placeholder="<?php echo site_phrase('password'); ?>"
                                    aria-label="<?php echo site_phrase('password'); ?>"
                                    aria-describedby="<?php echo site_phrase('password'); ?>" id="login-password"
                                    required>
                            </div>
                            <a class="text-muted text-12px fw-500 float-end"
                                href="<?php echo site_url('home/forgot_password'); ?>"><?php echo site_phrase('¿Se te olvidó tu contraseña?'); ?>?</a>
                        </div>

                        <?php if(get_frontend_settings('recaptcha_status')): ?>
                        <div class="form-group mt-4 mb-0">
                            <div class="g-recaptcha"
                                data-sitekey="<?php echo get_frontend_settings('recaptcha_sitekey'); ?>"></div>
                        </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <button type="submit"
                                class="btn colorfondoboton radius-5 mt-4 w-100"><?php echo site_phrase('Iniciar Sesión'); ?></button>
                        </div>

                        <div class="form-group mt-4 mb-0 text-center text-white">
                            <?php echo site_phrase('¿No tiene una cuenta'); ?>?
                            <a class="text-15px fw-700 text-white px-3"
                                href="<?php echo site_url('sign_up') ?>"><?php echo site_phrase('Regístrate'); ?></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>