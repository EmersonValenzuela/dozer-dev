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

                            <li class=" mb-3"><a href="<?php echo site_url('home/profile/user_credentials'); ?>"> <i
                                        class="fas fa-user-edit"></i> <?php echo site_phrase('editar_perfil'); ?></a>
                            </li>

                            <li class="active mb-3"><a href="<?php echo site_url('home/profile/user_photo'); ?>"> <i
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
                    action="<?php echo site_url('home/update_profile/update_photo'); ?>" enctype="multipart/form-data"
                    method="post">
                    <div class="row">
                        <div class="col-12 border-bottom mb-3 pb-3 text-white">
                            <h4><?php echo site_phrase('cambiar_foto_perfil:'); ?></h4>
                        </div>

                        <div class="col-12 mb-3">

                            <div class="input-group">
                                <input type="file" class="form-control" name="user_image" id="user_image">
                            </div>
                        </div>

                        <div class="col-12 pt-4">
                            <button class="btn red px-5 py-2 radius-8"> <i class="fas fa-upload"></i>
                                <?php echo site_phrase('upload'); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>