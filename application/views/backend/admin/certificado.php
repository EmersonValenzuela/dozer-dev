<div class="row ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body py-2">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i>
                    <?php echo get_phrase('blogs'); ?>
                    <a href="<?php echo site_url('admin/add_certificate'); ?>" class="btn btn-outline-primary btn-rounded alignToTitle"><i class="mdi mdi-plus"></i>Agregar
                        Nuevo Certificado</a>
                </h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title"><?php echo get_phrase('Repositorios'); ?></h4>
                <div class="table-responsive-sm mt-4">
                    <table id="basic-datatable" class="table table-striped dt-responsive nowrap dataTable no-footer dtr-inline collapsed">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Formato</th>
                                <th>Estudiante</th>
                                <th>Institución</th>
                                <th>Curso</th>
                                <th>Link</th>
                                <th>acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($certificates as $key => $certificate) : ?>
                                <tr>
                                    <td><?= $key + 1; ?></td>
                                    <td><?= $certificate->name ?></td>
                                    <td><?= $certificate->last_name . " " . $certificate->first_name ?></td>
                                    <td><?= $certificate->institute ?></td>
                                    <td><?= $certificate->title ?></td>
                                    <td><a href="<?= base_url("uploads/certificates/" . $certificate->link) ?>" target="_blank">Enlace</a></td>
                                    <td>
                                        <div class="dropright dropright">
                                            <button type="button" class="btn btn-sm btn-outline-primary btn-rounded btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="<?php echo site_url('admin/edit_certificate/' . $certificate->id_certificate) ?>"><?php echo get_phrase('edit'); ?></a></li>
                                                <li><a class="dropdown-item" href="#" onclick="confirm_modal('<?php echo site_url('admin/certificado/delete/' . $certificate->id_certificate); ?>');"><?php echo get_phrase('delete'); ?></a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>