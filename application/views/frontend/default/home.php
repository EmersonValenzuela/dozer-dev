<section class="bg-general">
    <section class="home-banner-area" id="home-banner-area">
        <div class="container-xl">
            <div class="row">
                <div class=" position-relative">
                    <div class="">
                        <div class="d-flex flex-row ">
                            <div class="d-flex flex-column mb-3 ">
                                <div class="p-2">
                                    <h2 class="text-principal">
                                        BIM un futuro muy <br> presente en el sector <br> de la construcción
                                    </h2>
                                </div>
                                <div class="p-2">
                                    <p class="sub-text-principal">
                                        Dozer es la institución más importante en estudios <br>
                                        e implementación de la metodología BIM en todo el <br>
                                        Perú. Somos centro autorizado de capacitación <br>
                                        y certificación de Autodesk:</p>
                                </div>
                                <div class="p-2"><img class="img-convenios" src="uploads\system\convenios.png" alt="">
                                </div>
                                <div class="p-5px ">
                                    <a class="btn-cm" href="<?php echo site_url('home/search'); ?>">Conoce más de
                                        Instituto Dozer</a>
                                </div>

                            </div>



                            <div class="p-2 d-none d-md-block "><img class="width-35rem img-home-banner "
                                    src="<?=base_url()?>uploads/system/home-banner.png" alt=""></div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container-lg course-carousel-title titulo text-white">
            <p class="fw-light titulo-uno m-0">NUESTRO OBJETIVO</p>
            <p class="fw-bold mb-5">ES HACERLO SIMPLE</p>

        </div>
        <div class="container-lg">
            <div class="row">

                <div class="col-6 col-md-3 d-flex text-center justify-content-sm-center ">
                    <div class="p-lg-2 cont-cuadro mr-md-auto mr-auto">
                        <img class="icon-style-user" src="uploads\system\icon-user.png" alt="">
                        <p class="cont-cuadro-text">Crea tu cuenta de <br> Perfil en Dozer</p>
                        <a href="<?php echo site_url('sign_up'); ?>"
                            class="btnpa btn-sign-up "><?php echo site_phrase('Pulsa aquí'); ?></a>
                    </div>

                </div>

                <div class=" col-6 col-md-3 d-flex text-center justify-content-center ">
                    <div class="p-lg-2 cont-cuadro mr-md-auto mr-auto">
                        <img class="icon-style-click" src="uploads\system\icon-elegir.png" alt="">
                        <p class="cont-cuadro-text">Elige el Curso, <br>
                            Especialización o <br>
                            Diplomado que <br>
                            necesites </p>

                    </div>

                </div>

                <div class=" col-6 col-md-3 d-flex text-center justify-content-center ">
                    <div class="p-lg-2 cont-cuadro mr-md-auto mr-auto">
                        <img class="icon-style-tarjeta" src="uploads\system\icon-pago.png" alt="">
                        <p class="cont-cuadro-text">Realiza el <br>
                            Pago o <br>
                            el depósito </p>

                    </div>

                </div>
                <div class=" col-6 col-md-3 d-flex text-center justify-content-end justify-content-sm-center">
                    <div class=" p-lg-2 cont-cuadro mr-md-auto mr-auto">
                        <img class="icon-style-academy" src="uploads\system\icon-certi.png" alt="">
                        <p class="cont-cuadro-text">Estudia y <br>
                            transforma tu <br>
                            futuro con nosotros
                        </p>

                    </div>

                </div>
            </div>
        </div>

    </section>
</section>

<style>
.wrapper {
    /* max-width: 700px;
                margin: 200px auto;
                padding: 25px 30px 30px 30px;
                border-radius: 5px;
                box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);*/
    width: 100%;
}



.wrapper nav {
    position: relative;
    width: 100%;
    height: 50px;
    display: flex;
    align-items: center;
}

.wrapper nav label {
    display: block;
    height: 70%;
    width: 100%;
    text-align: center;
    line-height: 50px;
    cursor: pointer;
    position: relative;
    z-index: 1;
    color: white;
    font-size: 17px;
    border-radius: 10px;
    margin: 0 5px;
    transition: all 0.3s ease;
    border: solid 1px;
    display: flex;
    align-items: center;
    justify-content: center;

}

#home:checked~nav label.home,
#blog:checked~nav label.blog,
#code:checked~nav label.code,
#help:checked~nav label.help,
#about:checked~nav label.about,
#about-uno:checked~nav label.about-uno,
#about-dos:checked~nav label.about-dos {
    color: #131313;
    font-weight: 700;
}

nav label i {
    padding-right: 7px;
}

nav .slider {
    position: absolute;
    height: 70%;
    width: 183px;
    left: 5px;
    /*bottom: 0;*/
    z-index: 0;
    border-radius: 10px;
    background: white;
    transition: all 0.3s ease;
    color: #131313;
}

input[type="radio"] {
    display: none;
}

#blog:checked~nav .slider {
    left: 200px;
}

#code:checked~nav .slider {
    left: 393px;
}

#help:checked~nav .slider {
    left: 589px;
}

#about:checked~nav .slider {
    left: 783px;
}

#about-uno:checked~nav .slider {
    left: 977px;
}

#about-dos:checked~nav .slider {
    left: 1170px;
}

section .content {
    display: none;

}

#home:checked~section .content-1,
#blog:checked~section .content-2,
#code:checked~section .content-3,
#help:checked~section .content-4,
#about:checked~section .content-5,
#about-uno:checked~section .content-6,
#about-dos:checked~section .content-7 {
    display: block;
}

section .content .title {
    font-size: 21px;
    font-weight: 500;
    margin: 30px 0 10px 0;
}

section .content p {
    text-align: justify;
}
</style>
<section>
    <h3 class="course-carousel-title text-center mb-4 mt-5 text-cursos">
        <p class="text-titulo-cat"><?php echo site_phrase('CURSOS'); ?></p>
        <p class="text-sub-cat ">Accede a los cursos con certificaciones oficiales de Autodesk,
            <br>
            en cualquiera de las 7 categorias
        </p>
    </h3>
</section>
<section class="container-xl">
    <div class="wrapper">
        <input type="radio" name="slider" checked id="home">
        <input type="radio" name="slider" id="blog">
        <input type="radio" name="slider" id="code">
        <input type="radio" name="slider" id="help">
        <input type="radio" name="slider" id="about">
        <input type="radio" name="slider" id="about-uno">
        <input type="radio" name="slider" id="about-dos">
        <nav>
            <label for="home" class="home">Arquitectura</label>
            <label for="blog" class="blog">Estructura</label>
            <label for="code" class="code">Instalaciones</label>
            <label for="help" class="help">Dibujo 2D</label>
            <label for="about" class="about">Infraestructura</label>
            <label for="about-uno" class="about-uno">Automatización</label>
            <label for="about-dos" class="about-dos">Gestión</label>
            <div class="slider"></div>
        </nav>
        <section>
            <div class="content content-1 ">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-arquitectura/17');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_171680650491.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Revit Arquitectura</h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-arquitectura/19');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_191680651299.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Revit Arquitectura </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/3ds-max/64');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_64.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">3Ds Max</h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/3ds-max/66');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_66.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">3Ds Max</h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>


                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="content content-2">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">

                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-estructura/21');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_211680647957.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Revit Estructura </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=revit-estructura&&course-id-1=21');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.295</del></small> <br>
                                                        S/.59
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-estructura/23');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_231680647912.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Revit Estructura </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=revit-estructura&&course-id-1=23');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.295</del></small> <br>
                                                        S/.59
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/robot-structural-analysis/25');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_251680649577.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Robot Structural Analysis </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=robot-structural-analysis&&course-id-1=25');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/robot-structural-analysis/27');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_271680649660.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Robot Structural Analysis </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=robot-structural-analysis&&course-id-1=27');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/advance-steel/28');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_281681412408.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Advance Steel </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=advance-steel&&course-id-1=28');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/advance-steel/30');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_301680649892.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Advance Steel </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=advance-steel&&course-id-1=30');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/inventor-professional/67');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_67.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Inventor Professional </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/0883e3d12536091196fce53336f8102a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="Alessandra Huaynatteeeeeeeeee" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/4');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=inventor-professional&&course-id-1=67');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/inventor-professional/69');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_69.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Inventor Professional </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/0883e3d12536091196fce53336f8102a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="Alessandra Huaynatteeeeeeeeee" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/4');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=inventor-professional&&course-id-1=69');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/autocad-plant-3d/70');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_701680650382.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">AutoCAD Plant 3D</h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/0883e3d12536091196fce53336f8102a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="Alessandra Huaynatteeeeeeeeee" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/4');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=autocad-plant-3d&&course-id-1=70');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/autocad-plant-3d/72');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_72.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">AutoCAD Plant 3D</h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/0883e3d12536091196fce53336f8102a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="Alessandra Huaynatteeeeeeeeee" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/4');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=autocad-plant-3d&&course-id-1=72');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content content-3">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-mep/31');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_311680651411.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Revit MEP </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=revit-mep&&course-id-1=31');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-mep/33');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_331680651684.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Revit MEP </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=revit-mep&&course-id-1=33');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="content content-4">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/autocad/35');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_351680651807.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">AutoCAD </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=autocad&&course-id-1=35');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/autocad/37');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_371680651958.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">AutoCAD</h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=autocad&&course-id-1=37');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content content-5">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/civil-3d/39');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_391680652176.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Civil 3D </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=civil-3d&&course-id-1=39');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/civil-3d/41');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_411680652329.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Civil 3D </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=civil-3d&&course-id-1=41');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/infraworks/43');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_431680653711.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Infraworks</h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=infraworks&&course-id-1=43');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/infraworks/45');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_451681230031.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Infraworks </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=infraworks&&course-id-1=45');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content content-6">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/dynamo-para-revit/46');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_461680646371.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Dynamo para Revit </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=dynamo-para-revit&&course-id-1=46');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/dynamo-para-revit/48');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_481680646450.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Dynamo para Revit </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=dynamo-para-revit&&course-id-1=48');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.295</del></small> <br>
                                                        S/.59
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content content-7">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/navisworks-manage/49');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_491680645983.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Navisworks Manage </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=navisworks-manage&&course-id-1=49');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79</p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/navisworks-manage/51');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_511680646102.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Navisworks Manage </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=navisworks-manage&&course-id-1=51');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79</p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

</section>


<!-- style especializaciones -->
<style>
.wrapperr {
    /* max-width: 700px;
                margin: 200px auto;
                padding: 25px 30px 30px 30px;
                border-radius: 5px;
                box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);*/
    width: 100%;
}



.wrapperr nav {
    position: relative;
    width: 100%;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.wrapperr nav label {
    display: block;
    height: 70%;
    width: 250px;
    text-align: center;
    line-height: 50px;
    cursor: pointer;
    position: relative;
    z-index: 1;
    color: white;
    font-size: 17px;
    border-radius: 10px;
    margin: 0 5px;
    transition: all 0.3s ease;
    border: solid 1px;
    display: flex;
    align-items: center;
    justify-content: center;

}



#homee:checked~nav label.homee,
#blogg:checked~nav label.blogg,
#codee:checked~nav label.codee,
#helpp:checked~nav label.helpp {
    color: #131313;
    font-weight: 700;
}

nav label i {
    padding-right: 7px;
}

nav .sliderr {
    position: absolute;
    height: 70%;
    width: 245px;
    left: 167px;
    z-index: 0;
    border-radius: 10px;
    background: white;
    transition: all 0.3s ease;
    color: #131313;
}


#blogg:checked~nav .sliderr {
    left: 425px;
    width: 250px;

}

#codee:checked~nav .sliderr {
    left: 685px;
    width: 250px;

}

#helpp:checked~nav .sliderr {
    left: 76%;

}


section .contentt {
    display: none;

}

#homee:checked~section .content-uno,
#blogg:checked~section .content-dos,
#codee:checked~section .content-tres,
#helpp:checked~section .content-cuatro {
    display: block;
}

section .contentt .title {
    font-size: 21px;
    font-weight: 500;
    margin: 30px 0 10px 0;
}

section .contentt p {
    text-align: justify;
}
</style>
<!-- Style especializaciones -->


<section>
    <h3 class="course-carousel-title text-center mb-4 mt-5 text-cursos">
        <p class="text-titulo-cat"><?php echo site_phrase('ESPECIALIZACIONES'); ?></p>
        <p class="text-sub-cat">Accede a las especializaciones con certificaciones oficiales por el
            Colegio <br>
            de Ingenieros del Perú y Autodesk, en cualquiera de las 3 categorias
        </p>
    </h3>
</section>
<section class="container-xl">
    <div class="wrapperr">
        <input type="radio" name="sliderr" checked id="homee">
        <input type="radio" name="sliderr" id="blogg">
        <input type="radio" name="sliderr" id="codee">
        <input type="radio" name="sliderr" id="helpp">
    
        <nav>
            <label for="homee" class="homee">Especialista BIM</label>
            <label for="blogg" class="blogg">Gestión BIM</label>
            <label for="codee" class="codee">Expedientes BIM</label>
            <label for="helpp" class="helpp">Ingeniería BIM</label>
            
            <div class="sliderr"></div>
        </nav>
        <section>
            <div class="contentt content-uno ">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-arquitectura/17');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_171680650491.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Revit Arquitectura</h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-arquitectura/19');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_191680651299.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Revit Arquitectura </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/3ds-max/64');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_64.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">3Ds Max</h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/3ds-max/66');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_66.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">3Ds Max</h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>


                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="contentt content-dos">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">

                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-estructura/21');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_211680647957.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Revit Estructura </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=revit-estructura&&course-id-1=21');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.295</del></small> <br>
                                                        S/.59
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-estructura/23');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_231680647912.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Revit Estructura </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=revit-estructura&&course-id-1=23');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.295</del></small> <br>
                                                        S/.59
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/robot-structural-analysis/25');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_251680649577.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Robot Structural Analysis </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=robot-structural-analysis&&course-id-1=25');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/robot-structural-analysis/27');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_271680649660.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Robot Structural Analysis </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=robot-structural-analysis&&course-id-1=27');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/advance-steel/28');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_281681412408.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Advance Steel </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=advance-steel&&course-id-1=28');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/advance-steel/30');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_301680649892.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Advance Steel </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=advance-steel&&course-id-1=30');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/inventor-professional/67');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_67.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Inventor Professional </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/0883e3d12536091196fce53336f8102a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="Alessandra Huaynatteeeeeeeeee" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/4');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=inventor-professional&&course-id-1=67');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/inventor-professional/69');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_69.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Inventor Professional </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/0883e3d12536091196fce53336f8102a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="Alessandra Huaynatteeeeeeeeee" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/4');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=inventor-professional&&course-id-1=69');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/autocad-plant-3d/70');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_701680650382.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">AutoCAD Plant 3D</h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/0883e3d12536091196fce53336f8102a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="Alessandra Huaynatteeeeeeeeee" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/4');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=autocad-plant-3d&&course-id-1=70');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/autocad-plant-3d/72');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_72.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">AutoCAD Plant 3D</h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/0883e3d12536091196fce53336f8102a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="Alessandra Huaynatteeeeeeeeee" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/4');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=autocad-plant-3d&&course-id-1=72');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contentt content-tres">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-mep/31');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_311680651411.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Revit MEP </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=revit-mep&&course-id-1=31');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-mep/33');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_331680651684.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">Revit MEP </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=revit-mep&&course-id-1=33');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="contentt content-cuatro">
                <div class="container ">
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/autocad/35');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_351680651807.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">AutoCAD </h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Basico</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=autocad&&course-id-1=35');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3 col-xl-3 px-0">
                            <div class="course-box-wrap">
                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/autocad/37');"
                                    href="javascript:;" class="has-popover">
                                    <div class="course-box">
                                        <div class="course-image">


                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_371680651958.jpg"
                                                alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <div class="course-curso">
                                                <h5 class="title">AutoCAD</h5>
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <span class="title">Nivel Avanzado</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <span class="fw-200 text-white ">Certifican: Autodesk y
                                                            Dozer</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="row">
                                <div class="col">
                                    <div class="floating-user d-inline-block">
                                                                                                                                <img src="http://localhost/dozer-dev/uploads/user_image/a55c6eab18923e9062564c209a5b603a.jpg" width="30px" data-bs-toggle="tooltip" data-bs-placement="top" title="emerson valenzuela" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/instructor_page/1');">
                                                                            </div>
                                </div>
                                <div class="col">
                                    <button class="btn-compare-sm float-end" onclick="event.stopPropagation(); $(location).attr('href', 'http://localhost/dozer-dev/home/compare?course-1=autocad&&course-id-1=37');"><i class="fas fa-retweet"></i> Compare</button>
                                </div>
                                <div class="">
                                    <i class="text-danger far fa-clock text-14px"></i>
                                    <span class="text-muted text-12px">00:00:00 Hours</span>
                                </div>
                                <div class="ms-auto">
                                    <i class="text-primary far fa-list-alt text-14px"></i>
                                    <span class="text-muted text-12px">0 Lectures</span>
                                </div>
                            </div> -->
                                            <hr class="w-100 ">
                                            <div class="w-100 d-flex text-dark  py-1 course-details">
                                                <div class="">
                                                    <p class="price text-white  text-right d-inline-block float-end">
                                                        <small>
                                                            <del>S/.395</del></small> <br>
                                                        S/.79
                                                    </p> <br>
                                                </div>
                                                <div class="ms-auto">

                                                    <span class="text-white fw-bold text-15px text-center">70%
                                                        Desc</span> <br>
                                                    <span
                                                        class="btnbadge-prox text-11px text-white ">PROXIMAMENTE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
    </div>

</section>

<style>
.wrapperrr {
    /* max-width: 700px;
                margin: 200px auto;
                padding: 25px 30px 30px 30px;
                border-radius: 5px;
                box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);*/
    width: 100%;
}



.wrapperrr nav {
    position: relative;
    width: 100%;
    height: 50px;
    display: flex;
    align-items: center;
}

.wrapperrr nav label {
    display: block;
    height: 100%;
    width: 100%;
    text-align: center;
    line-height: 50px;
    cursor: pointer;
    position: relative;
    z-index: 1;
    color: white;
    font-size: 17px;
    border-radius: 10px;
    margin: 0 5px;
    transition: all 0.3s ease;
    border: solid 1px;
    display: flex;
    align-items: center;
    justify-content: center;

}



#hom:checked~nav label.hom,
#blo:checked~nav label.blo,
#cod:checked~nav label.cod {
    color: #131313;
    font-weight: 700;
}

nav label i {
    padding-right: 7px;
}

nav .slide {
    position: absolute;
    height: 100%;
    width: 31%;
    left: 5px;
    bottom: 0;
    z-index: 0;
    border-radius: 10px;
    background: white;
    transition: all 0.3s ease;
    color: #131313;
}


#blo:checked~nav .slide {
    left: 34%;

}

#cod:checked~nav .slide {
    left: 68%;

}



section .conten {
    display: none;

}

#hom:checked~section .content-uno,
#blo:checked~section .content-dos,
#cod:checked~section .content-tres {
    display: block;
}

section .conten .title {
    font-size: 21px;
    font-weight: 500;
    margin: 30px 0 10px 0;
}

section .conten p {
    text-align: justify;
}
</style>

<section>
    <h3 class="course-carousel-title mt-5 mb-4 text-center text-cursos">
        <p class="text-titulo-cat"><?php echo site_phrase('DIPLOMADOS'); ?></p>
        <p class="text-sub-cat">Accede a las especializaciones con certificaciones oficiales por
            el Colegio <br>
            de Ingenieros del Perú y Autodesk, en cualquiera de las 2 categorias
        </p>
        <span class="header-underline-2"><?php echo site_phrase('') . '  ' . site_phrase(''); ?>
        </span>
    </h3>
</section>



<?php $top_instructor_ids = $this->crud_model->get_top_instructor(10); ?>
<?php if(count($top_instructor_ids) > 0): ?>
<section class="featured-instructor">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h3 class="text-center mb-5">
                    <span class="header-underline-2"><?php echo site_phrase('featured_instructor'); ?></span>
                </h3>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-7 ">
                <div class="animated-loader">
                    <div class="spinner-border text-secondary" role="status"></div>
                </div>
                <div class="top-istructor-slick shown-after-loading" style="display: none;">
                    <?php foreach($top_instructor_ids as $top_instructor_id): ?>
                    <?php $top_instructor = $this->user_model->get_all_user($top_instructor_id['creator'])->row_array(); ?>
                    <div
                        class="d-xl-flex text-center text-md-start radius-10 p-0 bg-sub-primary pt-4 pt-xl-0 position-relative mx-2">
                        <div class="top-instructor-img me-auto ms-auto ms-xl-0">
                            <a href="<?php echo site_url('home/instructor_page/'.$top_instructor['id']); ?>">
                                <img src="<?php echo $this->user_model->get_user_image_url($top_instructor['id']); ?>"
                                    width="100%">
                            </a>
                        </div>
                        <div class="top-instructor-details ps-3 pe-3 pe-xl-5 py-3 py-xl-0 text-center text-xl-start">
                            <a class="text-decoration-none"
                                href="<?php echo site_url('home/instructor_page/'.$top_instructor['id']); ?>">
                                <h4 class="mb-1 fw-700">
                                    <?php echo $top_instructor['first_name'].' '.$top_instructor['last_name']; ?></h4>
                                <span
                                    class="fw-500 text-muted text-14px ellipsis-line-5 mb-3"><?php echo $top_instructor['title']; ?></span>

                                <div class="rating">
                                    <div class="d-inline-block mb-2">
                                        <span
                                            class="text-dark fw-800 text-muted ms-1 text-13px"><?php echo $this->crud_model->get_instructor_wise_course_ratings($top_instructor['id'], 'course')->num_rows() . ' ' . site_phrase('reviews'); ?></span>
                                        |
                                        <span class="text-dark fw-800 text-13px text-muted mx-1">
                                            <?php $course_ids = $this->crud_model->get_instructor_wise_courses($top_instructor['id'], 'simple_array');
                                              $this->db->select('user_id');
                                              $this->db->distinct();
                                              $this->db->where_in('course_id', $course_ids);
                                              echo $this->db->get('enrol')->num_rows() . ' ' . site_phrase('students'); ?>
                                        </span>
                                        |
                                        <span class="text-dark fw-800 text-14px text-muted">
                                            <?php echo $this->crud_model->get_instructor_wise_courses($top_instructor['id'])->num_rows() . ' ' . site_phrase('courses'); ?>
                                        </span>
                                    </div>
                                </div>

                                <?php $skills = explode(',', $top_instructor['skills']); ?>
                                <?php foreach($skills as $skill): ?>
                                <span class="badge bg-primary text-12px my-1 py-2"><?php echo $skill; ?></span>
                                <?php endforeach; ?>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>


<?php $latest_blogs = $this->crud_model->get_latest_blogs(3); ?>
<?php if(get_frontend_settings('blog_visibility_on_the_home_page') && $latest_blogs->num_rows() > 0): ?>
<section class="section-blog pt-5">
    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-12">
                <h4 class="fw-700 w-100 text-center">
                    <span class="header-underline-2"><?php echo site_phrase('latest_blogs'); ?></span>
                </h4>
            </div>
            <?php foreach($latest_blogs->result_array() as $latest_blog): ?>
            <?php $user_details = $this->user_model->get_all_user($latest_blog['user_id'])->row_array(); ?>

            <div class="col-md-6 col-lg-4">
                <a
                    href="<?php echo site_url('blog/details/'.slugify($latest_blog['title']).'/'.$latest_blog['blog_id']); ?>">
                    <div class="card-blog">
                        <?php
                                    $blog_thumbnail = 'uploads/blog/thumbnail/'.$latest_blog['thumbnail'];
                                    if(!file_exists($blog_thumbnail) || !is_file($blog_thumbnail)):
                                        $blog_thumbnail = base_url('uploads/blog/thumbnail/placeholder.png');
                                    endif;
                                ?>
                        <div class="card-blog-body">
                            <div class="blog-thumbnail"
                                style="background-image: url('<?php echo $blog_thumbnail; ?>');"></div>
                            <div class="blog-placeholder">
                                <h5 class="cart-blog-title"><?php echo $latest_blog['title']; ?></h5>

                                <div class="d-flex">
                                    <div class="blog-info border-end">
                                        <?php echo get_past_time($latest_blog['added_date']); ?>
                                    </div>
                                    <div class="blog-info">
                                        <?php echo site_phrase('by'); ?>
                                        <!-- <?php echo site_url('home/instructor_page/'.$latest_blog['user_id']); ?> --><?php echo $user_details['first_name'].' '.$user_details['last_name']; ?>
                                    </div>
                                    <div class="blog-info border-start">
                                        <?php echo $this->crud_model->get_blog_categoria($latest_blog['blog_category_id'])->row('title'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>

            <div class="col-12">
                <a class="float-end btn btn-outline-secondary px-3 fw-600"
                    href="<?php echo site_url('blogs'); ?>"><?php echo site_phrase('view_all'); ?></a>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Programa Dozer -->
<section>
    <div class=" container-xl">
        <h3 class="course-carousel-title text-center mb-4 mt-5 ">
            <p class="text-section">Estamos contigo en todo momento <br>
                con nuestro software gratuito DevBIM v23.1 </p>

        </h3>
    </div>
    <div class=" container-xl ">
        <div class="row justify-content-evenly py-3 mb-4 spacio">
            <div class="col-12 col-sm-6 col-md-6  mt-md-0">
                <div class=" fondopro">
                    <img class="imgpro d-none d-sm-block" src="uploads\system\programa.png" alt="">
                </div>
            </div>
            <div class="col-12  col-sm-6 col-md-6   mt-md-0">
                <div class=" programa h-100">
                    <h3 class=" text-titulo-programa ">DevBIM RT2023.1</h3>
                    <span class="text-white fw-lighter titulo-sub-programa">Caracteristicas claves:
                    </span>
                    <ul class=" text-cont-programa text-white fw-200 vineta  ">
                        <li>Plan BIM Documentado</li>
                        <li>Normativa BIM Perú</li>
                        <li>Reglamento Nacional de Edificaciones (RNE)</li>
                        <li>Normas de Transportes y Saneamiento </li>
                        <li>Familias, Proyectos y Plantillas en Revit </li>
                    </ul>
                    <div class="d-flex justify-content-end">
                        <div class="fw-200 w-80 text-white titulo-sub-programa">Desarrollado por: Ing. CIP Walter Gomez
                        </div>

                    </div>
                </div>

            </div>



        </div>
    </div>
    <!--  <div class="container-xl mt-5">
        <div class="row justify-content-evenly py-3 mb-4">
            <div class="col-md-6 <?php if (get_settings('allow_instructor') != 1) echo 'w-100'; ?> mt-3 mt-md-0">
                <div class="become-user-label bg-sub-primary mt-3"
                    style="background-image: url('<?php echo site_url('uploads/system/programa.png'); ?>')">
                </div>
            </div>
            <?php if (get_settings('allow_instructor') == 1) : ?>
            <div class="col-md-6">
                <div class="become-user-label bg-sub-danger mt-3"
                    style="background-image: url('<?php echo site_url('assets/frontend/default/img/join-as-instructor.png'); ?>')">
                    <h3 class="pb-4 fw-700 w-50">
                        <?php echo site_phrase('become_a_new_instructor'); ?></h3>
                    <?php if($this->session->userdata('user_id')): ?>
                    <a class="btn btn-danger px-4 py-2"
                        href="<?php echo site_url('user/become_an_instructor'); ?>"><?php echo site_phrase('join_now'); ?></a>
                    <?php else: ?>
                    <a class="btn btn-danger px-4 py-2"
                        href="<?php echo site_url('sign_up'); ?>"><?php echo site_phrase('join_now'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div> -->

</section>
<!-- Programa Dozer -->

<!-- Docente Dozer -->

<!-- Docente Dozer -->

<!-- Certificate Dozer -->
<section>
    <div class="container-xl">
        <h3 class="course-carousel-title text-center mb-4 mt-5 ">
            <p class="text-section">¡Certificate y avala internacionalmente <br>
                tus conocimientos!</p>
            <p class="text-sub-cat"> Obten un certificado con respaldo
                internacional que <br>
                resaltará tus nuevas competencias</p>

        </h3>
    </div>
    <div class="container-lg">
        <div class="row gx-2 gx-lg-5">

            <div class=" col-sm-6  col-md-4 d-flex hc-30rem">
                <div class="home-fact-box mr-md-auto mr-auto">
                    <div class="text-center text-white">
                        <h4 class="text-decoration-underline titulo-certificados">INSTITUTO DOZER</h4>
                        <p class="fw-light text-certificados">Instituto Peruano de Estudios <br>
                            e Implementación BIM y <br>
                            Nuevas Tecnologías</p>
                        <img class=" img-intituto" src="uploads\system\certificaciones\instituto-dozer.svg" alt="">
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 d-flex hc-30rem">
                <div class="home-fact-box mr-md-auto mr-auto">

                    <div class="text-center text-white">
                        <h4 class="text-decoration-underline titulo-certificados">AUTODESK </h4>
                        <p class="fw-light text-certificados">Certificación Oficial de Autodesk <br>
                            Certificate of Completion</p> <br>
                        <img class="img-autodesk " src="uploads\system\certificaciones\autodesk.svg" alt="">
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 d-flex hc-30rem m-sm-auto justify-content-sm-center">
                <div class="home-fact-box mr-md-auto mr-auto">
                    <div class="text-center text-white">
                        <h4 class="text-decoration-underline titulo-certificados">CIP</h4>
                        <p class="fw-light text-certificados">Colegio de Ingenieros del Perú <br>
                            Consejo Departamental </p>
                        <img class="img-cip " src="uploads\system\certificaciones\cip.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Certificate Dozer -->

<!-- Verificador de Certificado Dozer -->
<section>
    <div class="container-xl">
        <h3 class="course-carousel-title text-center mb-4 mt-5 ">
            <p class="text-section">Verifica tus Certificados</p>
            <p class="text-sub-cat"> Ingresa a nuestra plataforma de
                verificador de certificados gratuitamente, <br>
                podrás revisar o descargar todos tus certificados</p>
            <a style=" font-weight: 700 !important;" class="btn bg-white devbIM fw-semibold text-center  m-5"
                href="">Deseo verificar mi certificado</a>

        </h3>
    </div>
</section>
<!-- Verificador de Certificado Dozer -->

<!-- Conoce mas de Dozer-->

<!-- Conoce mas de Dozer-->

<!-- Testimonios -->
<section>
    <div class="container-xl">

        <p class="text-section text-center ">Desde nuestros inicios hemos ayudado a más de <br>
            15 mil alumnos a lograr sus metas</p>

        </h3>
    </div>
    <div class="container">
        <input type="radio" name="dot" id="onee">
        <input type="radio" name="dot" id="twoo">
        <div class="main-cardd">
            <div class="cardss">
                <div class="card">
                    <div class="fondo"></div>
                    <img class="img-testimonio" src="uploads\system\testimonios\testimonio-uno.png" alt="">
                    <div class="">
                        <div class="text-white text-testimonio fw-light lh-sm py-2">“Teoría y constante practica, los
                            <br>
                            cursos
                            estan bien organizados y <br> desarrollados”
                        </div>

                        <div class="d-flex justify-content-start">
                            <div class="pe-2 d-flex align-items-center"> <img src="uploads\system\docente\pe.png"
                                    alt=""> </div>

                            <div class="d-flex flex-column nombre-testimonio  align-items-start">
                                <div class="nametest">Miriam Corrales</div>
                                <div class="jobtest">Perú</div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="card ">
                    <div class="fondo"></div>
                    <img class="img-testimonio" src="uploads\system\testimonios\testimonio-dos.png" alt="">
                    <div class="">
                        <div class="text-white text-testimonio fw-light lh-sm py-2">“Las clases son desde cero, <br>
                            hasta el
                            nivel
                            avanzado, aprendi <br> mucho con Dozer”</div>

                        <div class="d-flex justify-content-start">
                            <div class="pe-2 d-flex align-items-center"> <img src="uploads\system\docente\co.png"
                                    alt=""> </div>

                            <div class="d-flex flex-column nombre-testimonio">
                                <div class="nametest">María Angeles</div>
                                <div class="jobtest">Colombia</div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="card ">
                    <img class="img-testimonio" src="uploads\system\testimonios\testimonio-tres.png" alt="">
                    <div class="">
                        <div class="text-white text-testimonio fw-light lh-sm py-2">“Los docentes son muy <br>
                            preparados, las
                            clases
                            fueron <br> muy sencillos de entender”</div>

                        <div class="d-flex justify-content-start">
                            <div class="pe-2 d-flex align-items-center"> <img src="uploads\system\docente\pe.png"
                                    alt=""> </div>

                            <div class="d-flex flex-column nombre-testimonio">
                                <div class="nametest">Carla Díaz</div>
                                <div class="jobtest">Perú</div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="card estilos-md">
                    <img class="img-testimonio" src="uploads\system\testimonios\testimonio-cuatro.png" alt="">
                    <div class="">
                        <div class="text-white  fw-light text-testimonio lh-sm py-2">“La metodología de enseñanza <br>
                            es muy
                            buena,
                            siempre estan <br> asesorandote”</div>

                        <div class="d-flex justify-content-start">
                            <div class="pe-2 d-flex align-items-center" style="width: 4rem;"> <img
                                    style="width: 90%;border-radius: 5px;" src="uploads\system\docente\ec.jpg" alt="">
                            </div>

                            <div class="d-flex flex-column nombre-testimonio">
                                <div class="nametest">Juvitza Salas</div>
                                <div class="jobtest">Ecuador</div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
            <div class="cardss">
                <div class="card">
                    <div class="fondo"></div>
                    <img class="img-testimonio" src="uploads\system\testimonios\testimonio-cinco.png" alt="">
                    <div class="">
                        <div class="text-white text-testimonio fw-light lh-sm py-2">“Las certificaciones me <br>
                            aperturaron
                            muchas
                            puertas en <br> mi entorno laboral”</div>

                        <div class="d-flex justify-content-start">
                            <div class="pe-2 d-flex align-items-center" style="width: 4rem;"> <img
                                    style="width: 90%;border-radius: 5px;" src="uploads\system\docente\ar.jpg" alt="">
                            </div>

                            <div class="d-flex flex-column nombre-testimonio  align-items-start">
                                <div class="nametest">Grecia Pacoti</div>
                                <div class="jobtest">Argentina</div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="card ">
                    <div class="fondo"></div>
                    <img class="img-testimonio" src="uploads\system\testimonios\testimonio-seis.png" alt="">
                    <div class="">
                        <div class="text-white text-testimonio fw-light lh-sm py-2">“Todos los cursos que eh <br>
                            seguido son
                            de calidad y desde <br> cero, gracias por ello”</div>

                        <div class="d-flex justify-content-start">
                            <div class="pe-2 d-flex align-items-center"> <img src="uploads\system\docente\bo.png"
                                    alt=""> </div>

                            <div class="d-flex flex-column nombre-testimonio">
                                <div class="nametest">Johana Flores</div>
                                <div class="jobtest">Bolivia</div>
                            </div>
                        </div>


                    </div>

                </div>

                <div class="card ">
                    <img class="img-testimonio" src="uploads\system\testimonios\testimonio-siete.png" alt="">
                    <div class="">
                        <div class="text-white text-testimonio fw-light lh-sm py-2">“Desde sus docentes hasta sus <br>
                            personales de trabajo todos muy <br> amables”</div>

                        <div class="d-flex justify-content-start">
                            <div class="pe-2 d-flex align-items-center"> <img src="uploads\system\docente\mx.png"
                                    alt=""> </div>

                            <div class="d-flex flex-column nombre-testimonio">
                                <div class="nametest">Marco Bazan</div>
                                <div class="jobtest">Mexico</div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
        <div class="button">
            <label for="onee" class=" active onee"></label>
            <label for="twoo" class="twoo"></label>
        </div>
    </div>

</section>
<!-- Testimonios -->
<!-- Nunca Pares de Aprender-->
<section>
    <div class="container-xl">
        <div class="d-flex flex-column flex-md-row justify-content-between">
            <div class="p-2">
                <p class="tituto-np "> Nunca pares de aprender</p>
                <p class="text-np lh-sm">llevamos a todas partes la pasión por <br>
                    compartir conocimiento, crear comunidad <br>
                    y construir el futuro de latinoamérica en <br>
                    el área de arquitectura, ingeniería y nuevas <br>
                    técnologias</p>
            </div>
            <div class="p-2 ">
                <div class="d-flex flex-column flex-sm-row mb-3">
                    <div class="p-2">
                        <div class="d-flex flex-column mb-3">
                            <div class="border-social m-2">
                                <div class="d-flex flex-row ">
                                    <div class="p-2 bg-white"><img src="uploads\system\social\fb.svg" alt=""></div>
                                    <div class="text-rs p-2">facebook.com/Instituto Dozer</div>
                                </div>
                            </div>
                            <div class="border-social m-2">
                                <div class="d-flex flex-row ">
                                    <div class="p-2 bg-white"><img src="uploads\system\social\ig.svg" alt=""></div>
                                    <div class="text-rs p-2">instagram.com/Instituto_Dozer</div>
                                </div>
                            </div>
                            <div class="border-social m-2">
                                <div class="d-flex flex-row ">
                                    <div class="p-2 bg-white"><img src="uploads\system\social\tk.svg" alt=""></div>
                                    <div class="text-rs p-2">tiktok.com/@instituto.dozer</div>
                                </div>
                            </div>
                            <div class="border-social m-2">
                                <div class="d-flex flex-row ">
                                    <div class="p-2 bg-white"><img src="uploads\system\social\in.svg" alt=""></div>
                                    <div class="text-rs p-2">linkedin.com/Instituto Dozer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="d-flex flex-column mb-3">
                            <div class="border-social m-2">
                                <div class="d-flex flex-row ">
                                    <div class="p-2 bg-white"><img src="uploads\system\social\yt.svg" alt=""></div>
                                    <div class="text-rs p-2">youtube.com/Instituto Dozer</div>
                                </div>
                            </div>

                            <div class="border-social m-2">
                                <div class="d-flex flex-row ">
                                    <div class="p-2 bg-white"><img src="uploads\system\social\wssp.svg" alt=""></div>
                                    <div class="text-rs p-2">whatsapp.com/+51 929 270 912</div>
                                </div>
                            </div>
                            <div class="border-social m-2">
                                <div class="d-flex flex-row ">
                                    <div class="p-2 bg-white"><img src="uploads\system\social\tl.svg" alt=""></div>
                                    <div class="text-rs p-2">telegram.com/Instituto Dozer</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Nunca Pares de Aprender -->



<script type="text/javascript">
function handleWishList(elem) {

    $.ajax({
        url: '<?php echo site_url('home/handleWishList'); ?>',
        type: 'POST',
        data: {
            course_id: elem.id
        },
        success: function(response) {
            if (!response) {
                window.location.replace("<?php echo site_url('login'); ?>");
            } else {
                if ($(elem).hasClass('active')) {
                    $(elem).removeClass('active')
                } else {
                    $(elem).addClass('active')
                }
                $('#wishlist_items').html(response);
            }
        }
    });
}

function handleCartItems(elem) {
    url1 = '<?php echo site_url('home/handleCartItems'); ?>';
    url2 = '<?php echo site_url('home/refreshWishList'); ?>';
    $.ajax({
        url: url1,
        type: 'POST',
        data: {
            course_id: elem.id
        },
        success: function(response) {
            $('#cart_items').html(response);
            if ($(elem).hasClass('addedToCart')) {
                $('.big-cart-button-' + elem.id).removeClass('addedToCart')
                $('.big-cart-button-' + elem.id).text(
                    "<?php echo site_phrase('add_to_cart'); ?>");
            } else {
                $('.big-cart-button-' + elem.id).addClass('addedToCart')
                $('.big-cart-button-' + elem.id).text(
                    "<?php echo site_phrase('added_to_cart'); ?>");
            }
            $.ajax({
                url: url2,
                type: 'POST',
                success: function(response) {
                    $('#wishlist_items').html(response);
                }
            });
        }
    });
}

function handleEnrolledButton() {
    $.ajax({
        url: '<?php echo site_url('home/isLoggedIn'); ?>',
        success: function(response) {
            if (!response) {
                window.location.replace("<?php echo site_url('login'); ?>");
            }
        }
    });
}

$(document).ready(function() {
    if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
            navigator
            .userAgent)) {
        if ($(window).width() >= 840) {
            $('a.has-popover').webuiPopover({
                trigger: 'hover',
                animation: 'pop',
                placement: 'horizontal',
                delay: {
                    show: 500,
                    hide: null
                },
                width: 330
            });
        } else {
            $('a.has-popover').webuiPopover({
                trigger: 'hover',
                animation: 'pop',
                placement: 'vertical',
                delay: {
                    show: 100,
                    hide: null
                },
                width: 335
            });
        }
    }

    if ($(".course-carousel")[0]) {
        $(".course-carousel").slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            swipe: false,
            touchMove: false,
            responsive: [{
                    breakpoint: 840,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    },
                },
                {
                    breakpoint: 620,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    }

    if ($(".top-istructor-slick")[0]) {
        $(".top-istructor-slick").slick({
            dots: false
        });
    }
});
</script>