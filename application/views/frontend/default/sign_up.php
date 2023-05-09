<?php if (get_frontend_settings('recaptcha_status')) : ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php endif; ?>



<section class="category-course-list-area">
    <div class="container-xl">

        <div class="row">
            <div class="col-lg-6 d-none d-lg-block text-center position-relative left-13 ">
                <img class="" style="     height: 100%; width: 90%;" src="<?php echo base_url('uploads/system/sign_up.png'); ?>">
            </div>
            <div class="col-lg-6 fondologin ">
                <div class="sign-up-form-padding">
                    <?php if (get_settings('fb_social_login')) include "facebook_login.php"; ?>
                    <p class="text-white fw-bolder fs-4">Empieza tu camino de Aprendizaje</p>
                    <form id="sign_up">
                        <div class="form-group py-2">
                            <label class="text-white fw-bold" for="first_name"><?php echo site_phrase('Nombres:'); ?></label>
                            <div class="input-group">
                                <input type="text" name="first_name" class="form-control" aria-label="<?php echo site_phrase('first_name'); ?>" aria-describedby="<?php echo site_phrase('first_name'); ?>" id="first_name">
                            </div>
                            <p class="text-danger" style="display: none;">Hola</p>
                        </div>

                        <div class="form-group  py-2">
                            <label class="text-white fw-bold" for="last_name"><?php echo site_phrase('Apellidos:'); ?></label>
                            <div class="input-group">

                                <input type="text" name="last_name" class="form-control" aria-label="<?php echo site_phrase('last_name'); ?>" aria-describedby="<?php echo site_phrase('last_name'); ?>" id="last_name">
                            </div>
                        </div>

                        <div class="form-group py-2">
                            <label class="text-white fw-bold" for="registration-celular"><?php echo site_phrase('Celular:'); ?></label>
                            <div class="input-group">
                                <span class="input-group-text " for="number"><select class="form-select form-select-sm border-transparente" aria-label=".form-select-sm example" id="cod">
                                        <option value="0"> +51</option>
                                        <option value="1">+57</option>
                                        <option value="2">+52</option>
                                        <option value="3">+54</option>
                                    </select></span>
                                <input type="text" id="number" name="number" class="form-control" maxlength="12">
                            </div>
                        </div>

                        <div class="form-group py-2">
                            <label class="text-white fw-bold" for="registration-email"><?php echo site_phrase('Correo:'); ?></label>
                            <div class="input-group">

                                <input type="email" name="email" id="email" class="form-control" aria-label="<?php echo site_phrase('email'); ?>" aria-describedby="<?php echo site_phrase('email'); ?>">
                            </div>
                        </div>


                        <div class="form-group py-2">
                            <label class="text-white fw-bold" for="registration-password"><?php echo site_phrase('Contraseña:'); ?></label>
                            <div class="input-group">
                                <input type="password" name="password" id="password" class="form-control" aria-label="<?php echo site_phrase('password'); ?>" aria-describedby="<?php echo site_phrase('password'); ?>">
                            </div>
                        </div>
                        <div class="form-group py-2 px-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input fs-22" type="checkbox" value="option1" id="terminos">
                                <label id="lbl_trm" class="form-check-label" for="inlineCheckbox1">Acepto los términos y condiciones
                                    y políticas de
                                    privacidad de Instituto Dozer</label>
                            </div>
                        </div>
                        <?php if (get_frontend_settings('recaptcha_status')) : ?>
                            <div class="form-group mt-4 mb-0">
                                <div class="g-recaptcha" data-sitekey="<?php echo get_frontend_settings('recaptcha_sitekey'); ?>"></div>
                            </div>
                        <?php endif; ?>

                        <div class="form-group">
                            <button type="submit" class="btn colorfondoboton radius-5 mt-4 w-100 text-white colorfondoprincipal"><?php echo site_phrase('Regístrarse'); ?></button>
                        </div>

                        <div class="form-group mt-4 mb-0 text-center text-white">
                            ¿ <?php echo site_phrase('Ya tienes una cuenta'); ?>?
                            <a class="text-15px fw-700 text-white px-3" href="<?php echo site_url('login') ?>"><?php echo site_phrase('Inicia Sesión'); ?></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xl ">
        <p class="text-white m-5">
            <strong> Nota:</strong> Los datos como el nombre y apellido, serán utilizados para la emisión de las certificaciones, por ello se le pide que digite correctamente en el recuadro del formulario. Una vez completado el formulario, ya no es posible modificar su nombre y correo, los demás datos complementarios si es posible su modificación.

        </p>
    </div>
</section>

<script>
    const formulario = document.getElementById('sign_up');
    const number = document.getElementById('number');
    const inputs = document.querySelectorAll("#sign_up input");
    const expresiones = {
        usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
        nombre: /^[a-zA-ZÀ-ÿ{4,40}]$/, // Letras y espacios, pueden llevar acentos.
        password: /^.{4,12}$/, // 4 a 12 digitos.
        correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
        telefono: /^\d{7,14}$/ // 7 a 14 numeros.
    }
    const campos = {
        first_name: false,
        last_name: false,
        number: false,
        email: false,
        password: false
    }
    const validarFormulario = (e) => {
        switch (e.target.id) {
            case "first_name":
                validarCampo(expresiones.nombre, e.target, e.target.id);
                break;
            case "last_name":
                validarCampo(expresiones.nombre, e.target, e.target.id);
                break;
            case "number":
                validarCampo(expresiones.nombre, e.target, e.target.id);
                break;
            case "email":
                validarCampo(expresiones.nombre, e.target, e.target.id);
                break;
            case "password":
                validarCampo(expresiones.nombre, e.target, e.target.id);
                break;
        }

    }

    const validarCampo = (expresion, input, campo) => {
        if (expresion.test(input.value)) {
            document.getElementById(campo).style.borderColor = "red";
            campos[campo] = false;
        } else if (input.value == "") {
            document.getElementById(campo).style.borderColor = "red";
            campos[campo] = false;

        } else {
            document.getElementById(campo).style.borderColor = "green";
            campos[campo] = true;
        }
    }

    inputs.forEach((input) => {
        input.addEventListener('keyup', validarFormulario);
        input.addEventListener('blur', validarFormulario);
    });

    formulario.addEventListener('submit', (e) => {
        e.preventDefault();

        let terminos = document.getElementById('terminos');
        if (terminos.checked) {
            if (campos.first_name && campos.last_name && campos.number && campos.email && campos.password) {
                formulario.reset();
            } else {
                Command: toastr["error"]("Falta ingresar datos, porfavor rellenar datos?")
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": true,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
            }
        } else {
            document.getElementById('terminos').style = "border-color:red";
            document.getElementById('lbl_trm').style = "color:red";
            Command: toastr["error"]("Falta ingresar datos, porfavor rellenar datos?")
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

        }

        inputs.forEach((input) => {
            if (input.value == "") {
                document.getElementById(input.id).style = "border-color:red";
            }
        });

    })
    number.addEventListener("input", (e) => {
        number.value = number.value.replace(/[^0-9.-]/g, "");
    });
</script>