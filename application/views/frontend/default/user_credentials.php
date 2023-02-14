<?php include "profile_menus.php"; ?>

<section class="user-dashboard-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <div class="user-dashboard-sidebar box-shadow-5">

                    <div class="user-dashboard-menu">
                    <ul>
                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_profile'); ?>"> <i
                                        class="fas fa-user-alt"></i> <?php echo site_phrase('profile'); ?></a></li>

                            <li class="active mb-3"><a href="<?php echo site_url('home/profile/user_credentials'); ?>"> <i
                                        class="fas fa-user-edit"></i> <?php echo site_phrase('editar_perfil'); ?></a>
                            </li>

                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_photo'); ?>"> <i
                                        class="fas fa-camera-retro"></i> <?php echo site_phrase('photo'); ?></a></li>

                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_mis_cursos'); ?>"> <i
                                        class="	fas fa-graduation-cap"></i> <?php echo site_phrase('cursoos'); ?></a>
                            </li>

                            <li class=" mb-3"><a
                                    href="<?php echo site_url('home/profile/user_mis_especializaciones'); ?>"> <i
                                        class="	fas fa-graduation-cap"></i>
                                    <?php echo site_phrase('especializacioones'); ?></a></li>

                            <li class="  mb-3"><a href="<?php echo site_url('home/profile/user_mis_diplomados'); ?>"> <i
                                        class="	fas fa-graduation-cap"></i>
                                    <?php echo site_phrase('diploomados'); ?></a>
                            </li>

                            <li class="  mb-3"><a href="<?php echo site_url('home/profile/user_mis_certificados'); ?>">
                                    <i class="fas fa-award"></i> <?php echo site_phrase('certificado'); ?></a>
                            </li>

                            <li class="  mb-3"><a href="<?php echo site_url('home/profile/user_membresia'); ?>">
                                    <i class="fas fa-chess-queen"></i> <?php echo site_phrase('membresia'); ?></a></li>

                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_sotfware'); ?>"> <i
                                        class="fas fa-laptop-code"></i> <?php echo site_phrase('software'); ?></a></li>

                            <li class="  mb-3"><a href="<?php echo site_url('home/profile/user_soporte'); ?>"><i
                                        class="fas fa-cogs"></i> <?php echo site_phrase('soporte'); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9 mt-4 mt-md-0">
                <form class="w-100  radius-10 p-4 box-shadow-5"
                    action="<?php echo site_url('home/update_profile/update_basics'); ?>" method="post">
                    <div class="row">
                        <div class="col-md-6 text-white p-2">
                            <label class="text-white fw-600" for="FristName"><?php echo site_phrase('user'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="user" id="FristName"
                                    placeholder="<?php echo site_phrase('user'); ?>"
                                    value="<?php echo $user_details['user']; ?>" readonly>
                            </div>
                        </div>

                        <div class="col-md-6 text-white p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('password'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="password" id="FristName"
                                    placeholder="<?php echo site_phrase('password'); ?>"
                                    value="<?php echo $user_details['password']; ?>" readonly>
                            </div>
                        </div>
                        <div class="col-12 border-bottom mb-3 pb-3 text-white">
                            <h4><?php echo site_phrase('mis_datos_personales'); ?></h4>

                        </div>

                        <div class="col-md-6 text-white p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('first_name'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="first_name" id="FristName"
                                    placeholder="<?php echo site_phrase('first_name'); ?>"
                                    value="<?php echo $user_details['first_name']; ?>" >
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('last_name'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="last_name"
                                    placeholder="<?php echo site_phrase('last_name'); ?>"
                                    value="<?php echo $user_details['last_name']; ?>" >
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <label class="text-white fw-600" for="FristName"><?php echo site_phrase('dni'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="dni" id="FristName"
                                    placeholder="<?php echo site_phrase('dni'); ?>"
                                    value="<?php echo $user_details['dni']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('fecha_de_nacimiento'); ?></label>
                            <div class="input-group">

                                <input type="datetime-local" class="form-control" name="fecha_de_nacimiento"
                                    id="FristName" placeholder="<?php echo site_phrase('fecha_de_nacimiento'); ?>"
                                    value="<?php echo $user_details['fecha_de_nacimiento']; ?>">
                            </div>
                        </div>

                        <div class="col-md-6 p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('pais_procedencia'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="pais_procedencia" id="FristName"
                                    placeholder="<?php echo site_phrase('pais_procedencia'); ?>"
                                    value="<?php echo $user_details['pais_procedencia']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6  p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('departamento'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="departamento" id="FristName"
                                    placeholder="<?php echo site_phrase('departamento'); ?>"
                                    value="<?php echo $user_details['departamento']; ?>">
                            </div>
                        </div>


                        <div class="col-md-6 p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('provincia'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="provincia" id="FristName"
                                    placeholder="<?php echo site_phrase('provincia'); ?>"
                                    value="<?php echo $user_details['provincia']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6  p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('distrito'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="distrito" id="FristName"
                                    placeholder="<?php echo site_phrase('distrito'); ?>"
                                    value="<?php echo $user_details['distrito']; ?>">
                            </div>
                        </div>


                        <div class="col-md-6 p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('celular'); ?></label>
                            <div class="input-group">

                                <input type="number" class="form-control" name="celular" id="FristName"
                                    placeholder="<?php echo site_phrase('celular'); ?>"
                                    value="<?php echo $user_details['celular']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6 p-2">
                            <label class="text-white fw-600" for="email"><?php echo site_phrase('correo'); ?></label>
                            <div class="input-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="<?php echo site_phrase('email'); ?>"
                                    value="<?php echo $user_details['email']; ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-6  p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('genero'); ?></label>

                            <div class="input-group">
                                <select class="selec-gene" id="FristName" name="genero">
                                    <option value="1">Seleccion</option>
                                    <option value="2">Femenino</option>
                                    <option value="3">Masculino</option>
                                </select>

                            </div>
                        </div>


                        

                        <div class="col-12 border-bottom mb-3 pb-3 text-white">
                            <h4><?php echo site_phrase('mis_datos_academicos'); ?></h4>

                        </div>

                        <div class="col-md-6 p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('campo_de_estudio'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="campo_de_estudio" id="FristName"
                                    placeholder="<?php echo site_phrase('campo_de_estudio'); ?>"
                                    value="<?php echo $user_details['campo_de_estudio']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6  p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('nivel_de_formacion'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="nivel_de_formacion" id="FristName"
                                    placeholder="<?php echo site_phrase('nivel_de_formacion'); ?>"
                                    value="<?php echo $user_details['nivel_de_formacion']; ?>">
                            </div>
                        </div>
                        <div class="col-12  p-2">
                            <label class="text-white fw-600"
                                for="FristName"><?php echo site_phrase('universidad_o_Centro_de_estudios'); ?></label>
                            <div class="input-group">

                                <input type="text" class="form-control" name="universidad_o_Centro_de_estudios"
                                    id="FristName"
                                    placeholder="<?php echo site_phrase('universidad_o_Centro_de_estudios'); ?>"
                                    value="<?php echo $user_details['universidad_o_Centro_de_estudios']; ?>">
                            </div>
                        </div>

                        <div class="col-12 pt-4">
                            <button class="btn red px-5 py-2 radius-8"><?php echo site_phrase('save'); ?></button>
                        </div>

                    </div>
                </form>
                <form class="w-100  radius-10 p-4 box-shadow-5"
                    action="<?php echo site_url('home/update_profile/update_credentials'); ?>" method="post">
                    <div class="row">
                        




                        <div class="col-12 mb-3">
                            <label class="text-dark fw-600" for="email"><?php echo site_phrase('email'); ?></label>
                            <div class="input-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="<?php echo site_phrase('email'); ?>"
                                    value="<?php echo $user_details['email']; ?>" disabled>
                            </div>
                        </div>

                        <hr class="my-4 bg-secondary">

                        <div class="col-12 mb-3">
                            <label class="text-dark fw-600"
                                for="current_password"><?php echo site_phrase('current_password'); ?></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                <input type="password" class="form-control" id="current_password"
                                    name="current_password"
                                    placeholder="<?php echo site_phrase('enter_current_password'); ?>">
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="text-dark fw-600"
                                for="new_password"><?php echo site_phrase('new_password'); ?></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" id="new_password" name="new_password"
                                    placeholder="<?php echo site_phrase('enter_new_password'); ?>">
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="text-dark fw-600"
                                for="confirm_password"><?php echo site_phrase('confirm_password'); ?></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input type="password" class="form-control" id="confirm_password"
                                    name="confirm_password"
                                    placeholder="<?php echo site_phrase('re-type_your_password'); ?>">
                            </div>
                        </div>

                        <div class="col-12 pt-4">
                            <button
                                class="btn red px-5 py-2 radius-8"><?php echo site_phrase('cambiar_contraseña'); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>