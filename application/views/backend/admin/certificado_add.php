<div class="row ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body py-2">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Agregar Nuevo Repositorio
                </h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>


<div class="row ">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <h4 class='mb-3'>Agregar un nuevo repositorio</h4>
                <form action="<?php echo site_url('admin/repository/add'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title"><?php echo get_phrase('title'); ?></label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="<?php echo get_phrase('enter_blog_title'); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="author"><?php echo get_phrase('autor'); ?></label>
                        <input type="text" class="form-control" name="author" id="author" placeholder="<?php echo get_phrase('enter_blog_title'); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="document_type">Tipo de Documento</label>
                        <select class="form-control select2" data-toggle="select2" name="document_type" id="document_type" required>
                            <option value="">Seleccione un Tipo de Documento</option>
                            <option value="academic">Trabajo académico</option>
                            <option value="investigation">Trabajo de investigación</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="investigation">Área de investigación</label>
                        <select class="form-control select2" data-toggle="select2" name="investigation" id="investigation" required>
                            <option value="">Seleccione un Area de Investigación</option>
                            <option value="bim">BIM</option>
                            <option value="architecture">Arquitectura</option>
                            <option value="civil_engineering">Ingeniería Civi</option>
                        </select>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-3 col-form-label" for="user_image">Archivo de Repositorio</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="user_image" name="user_image" accept="doc,.docx,.pdf">
                                    <label class="custom-file-label" for="user_image">Elegir archivo para el repositorio</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="banner">Imagen Portada</label>
                        <div class="wrapper-image-preview" style="margin-left: -6px;">
                            <div class="box" style="width: 300px;">
                                <div class="js--image-preview" style="background-image: url('<?php echo base_url('uploads/blog/banner/placeholder.png') ?>'); background-color: #F5F5F5; background-size: cover; background-position: center;"></div>
                                <div class="upload-options">
                                    <label for="banner" class="btn"> <i class="mdi mdi-camera"></i> <?php echo get_phrase('choose_a_banner'); ?> <br> <small>(2000 x 500)</small> </label>
                                    <input id="banner" style="visibility:hidden;" type="file" class="image-upload" name="banner" accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <button class="btn btn-success">Agregar Repositorio</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>