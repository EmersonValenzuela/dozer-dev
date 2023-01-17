<?php if(get_frontend_settings('recaptcha_status')): ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php endif; ?>



<section class="category-course-list-area">
    <div class="container px-3">

        <div class="row">
            <div class="col-lg-6 d-none d-lg-block text-center position-relative left-13 ">
                <img class="" width="100%" style="height: 100%;" src="<?php echo base_url('uploads/system/sign_up.png'); ?>">
            </div>
            <div class="col-lg-6 fondologin ">
                <div class="sign-up-form-padding">
                    <?php if(get_settings('fb_social_login')) include "facebook_login.php"; ?>
                    <p class="text-white fw-bolder fs-4">Empieza tu camino de Aprendizaje</p>
                    <form action="<?php echo site_url('login/register'); ?>" method="post" id="sign_up">
                        <div class="form-group py-2">
                            <label class="text-white fw-bold"
                                for="first_name"><?php echo site_phrase('Nombres:'); ?></label>
                            <div class="input-group">

                                <input type="text" name="first_name" class="form-control"
                                    aria-label="<?php echo site_phrase('first_name'); ?>"
                                    aria-describedby="<?php echo site_phrase('first_name'); ?>" id="first_name"
                                    required>
                            </div>
                        </div>

                        <div class="form-group  py-2">
                            <label class="text-white fw-bold"
                                for="last_name"><?php echo site_phrase('Apellidos:'); ?></label>
                            <div class="input-group">

                                <input type="text" name="last_name" class="form-control"
                                    aria-label="<?php echo site_phrase('last_name'); ?>"
                                    aria-describedby="<?php echo site_phrase('last_name'); ?>" id="last_name" required>
                            </div>
                        </div>

                        <div class="form-group py-2">
                            <label class="text-white fw-bold"
                                for="registration-celular"><?php echo site_phrase('Celular:'); ?></label>
                            <div class="input-group">
                                <span class="input-group-text " for="password"><select
                                        class="form-select form-select-sm border-transparente"
                                        aria-label=".form-select-sm example">
                                        <option value="0"> +51</option>
                                        <option value="1">+57</option>
                                        <option value="2">+52</option>
                                        <option value="3">+54</option>
                                    </select></span>
                                <input type="text" name="password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group py-2">
                            <label class="text-white fw-bold"
                                for="registration-email"><?php echo site_phrase('Correo:'); ?></label>
                            <div class="input-group">

                                <input type="email" name="email" class="form-control"
                                    aria-label="<?php echo site_phrase('email'); ?>"
                                    aria-describedby="<?php echo site_phrase('email'); ?>" id="registration-email"
                                    required>
                            </div>
                        </div>


                        <div class="form-group py-2">
                            <label class="text-white fw-bold"
                                for="registration-password"><?php echo site_phrase('Contraseña:'); ?></label>
                            <div class="input-group">
                                <input type="password" name="password" class="form-control"
                                    aria-label="<?php echo site_phrase('password'); ?>"
                                    aria-describedby="<?php echo site_phrase('password'); ?>" id="registration-password"
                                    required>
                            </div>
                        </div>
                        <div class="form-group py-2 px-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input fs-22" type="checkbox" id="inlineCheckbox1"
                                    value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Acepto los términos y condiciones
                                    y políticas de
                                    privacidad de Instituto Dozer</label>
                            </div>
                        </div>
                        <?php if(get_frontend_settings('recaptcha_status')): ?>
                        <div class="form-group mt-4 mb-0">
                            <div class="g-recaptcha"
                                data-sitekey="<?php echo get_frontend_settings('recaptcha_sitekey'); ?>"></div>
                        </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <button type="submit"
                                class="btn colorfondoboton radius-5 mt-4 w-100 text-white colorfondoprincipal"><?php echo site_phrase('Regístrarse'); ?></button>
                        </div>

                        <div class="form-group mt-4 mb-0 text-center text-white">
                            ¿ <?php echo site_phrase('Ya tienes una cuenta'); ?>?
                            <a class="text-15px fw-700 text-white px-3"
                                href="<?php echo site_url('login') ?>"><?php echo site_phrase('Inicia Sesión'); ?></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>