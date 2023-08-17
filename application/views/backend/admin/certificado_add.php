<?php
?>
<div class="row ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body py-2">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> Agregar Nuevo
                    Certificado
                </h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>


<div class="row ">
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
                <h4 class='mb-3'>Agregar Certificado</h4>
                <form action="<?php echo site_url('admin/certificado/add'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="document_type">Seleccione Estudiante</label>
                        <select class="form-control select2" data-toggle="select2" name="student" id="student" required>
                            <option value="" disabled>Seleccione un estudiante</option>
                            <?php
                            foreach ($students as $key => $student) : ?>
                                <option value="<?php echo $student->id ?>"><?= $student->last_name . ' ' . $student->first_name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="investigation">Seleccione Curso</label>
                        <select class="form-control select2" data-toggle="select2" name="course" id="course" required>
                            <option value="" disabled>Seleccione un curso</option>
                            <?php
                            foreach ($courses as $key => $course) : ?>
                                <option value="<?php echo $course->id ?>"><?= $course->title ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="investigation">Seleccione Institución</label>
                        <select class="form-control select2" data-toggle="select2" name="institute" id="institute" required>
                            <option value="" selected disabled>Seleccione una institución</option>
                            <option value="Instituto Dozer">Instituto Dozer</option>
                            <option value="Colegio de Ingenieros del Perú (CIP)">Colegio de Ingenieros del Perú (CIP)</option>
                        </select>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-md-2 col-form-label" for="user_image">Certificado PDF</label>
                        <div class="col-md-10">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="c_image" name="c_image" accept="doc,.docx,.pdf">
                                    <label class="custom-file-label" for="c_image">Elegir archivo certificado</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <button class="btn btn-success">Agregar Certificado</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>