<link href="<?php echo base_url('assets/backend/css/vendor/dataTables.bootstrap4.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/backend/css/vendor/responsive.bootstrap4.css'); ?>" rel="stylesheet" type="text/css" />
<div id="cover-spin"></div>
<section>
    <h3 class="course-carousel-title text-center mb-4 mt-5 text-cursos">
        <p class="text-titulo-cat">¡Verifica tu certificado!
        </p>
        <p class="text-sub-cat">Gisero(a) esta opción te permite confirmar los datos y la validez de tu certificado,
            para ello ingresa el número de código, <br>documento de identidad o tus nombres y apellidos completos
            en el recuadro inferior y posteriormente dale clic al botón "buscar certificado".
        </p>
    </h3>
</section>
<section class="home-fact-area">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-12 ">
                <div class="sign-up-form">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="search-local">
                                <select class="form-select" name="s-search" id="select-search" style="background-color:#fff !important;color:#373737!important;" onchange="updatePlaceholder()">
                                    <option value="1"> Código</option>
                                    <option value="2"> Nombres y/o Apellidos</option>
                                    <option value="3"> Email</option>
                                    <option value="4"> Número de Documento</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="input-group">
                                <input type="text" name="t-search" id="t-search" class="form-control" placeholder="Buscar por código" style="background-color:#fff !important" ;>
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button" id="btn-search">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xl-12">
                <div class="sign-up-form">
                    <div class="table-responsive-sm mt-4">
                        <table id="data-certificate" class="table dataTable no-footer  collapsed">
                            <thead>
                                <tr>
                                    <th>Nombre Completo</th>
                                    <th>Formato</th>
                                    <th>Nombre Capacitación</th>
                                    <th>Institución</th>
                                    <th>Fecha</th>
                                    <th>Enlace</th>
                                </tr>
                            </thead>
                            <tbody style="color:#000">
                            </tbody>
                        </table>
                    </div>
                </div><!-- end col-->
            </div>
        </div>
    </div>
</section>
<script>
    function updatePlaceholder() {
        var selectElement = document.getElementById('select-search');
        var inputElement = document.getElementById('t-search');

        // Obtener el valor seleccionado del select
        var selectedOption = selectElement.options[selectElement.selectedIndex].text;

        // Actualizar el placeholder del input con el valor seleccionado del select
        inputElement.placeholder = 'Buscar por ' + selectedOption.toLowerCase();
        inputElement.value = "";
    }
</script>