<?php
    $applications = $this->user_model->get_applications($this->session->userdata('user_id'), 'user');
 ?>
<div class="container-xl">
    <div class="row ">
        <div class="col-xl-12">
            <div class=" fondo-tn">
                <div class="card-body">
                    <h4 class="page-title text-tn"> Trabaja con Nosotros</h4>
                    <p class="subtitle-tn">En Instituto Dozer, buscamos a los mejores profesionales competentes del
                        sector construcción <br> para
                        formar de la mejor forma a nuestros alumnos </p>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>


    <div class="d-flex px-2">
        <div class="flex-grow-1 p-2 descrip-tn">La propuesta para docencia es únicamente para el <br>
            desarrollo de cursos, especializaciones o diplomados <br>
            virtuales en modalidad sincrónicas y asincrónicas.</div>

        <div class=" p-2 datos-tn">Intituto Dozer S.A.C. <br>
            R.U.C. 20606389184 <br>
            comunidad@dozer.edu.pe</div>
    </div>
    <div class=" px-3">
        <hr>
        <div class="d-flex flex-row   justify-content-between">
            <div class="fecha-tn">Miércoles, 14 de septiembre de 2022</div>
            <div class="pd-tn">Propuesta de Docencia: N° 000000100-2022-CUP
            </div>
        </div>
        <hr>
    </div>


    <?php if ($this->session->userdata('is_instructor') != 1): ?>
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="fondo-tn">
                <div class="card-body">
                    <?php if ($applications->num_rows() == 0): ?>
                    <?php include 'application_form.php'; ?>
                    <?php else: ?>
                    <?php include 'application_list.php'; ?>
                    <?php endif; ?>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
    </div>
    <?php else: ?>
    <div class="alert alert-info" role="alert">
        <h4 class="alert-heading"><?php echo get_phrase('congratulations'); ?>!</h4>
        <p><?php echo get_phrase('you_are_already_an_instructor'); ?></p>
    </div>
</div>
<?php endif; ?>


<style media="screen">
body {
    overflow-x: hidden;
    background: #222222;
}
</style>