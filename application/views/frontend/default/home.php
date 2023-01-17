<section class="home-banner-area" id="home-banner-area">
    <div class="container-xl">
        <div class="row">
            <div class="col position-relative">
                <div class="home-banner-wrap">
                    <h2 class="fw-bold text-white"><?php echo site_phrase(get_frontend_settings('banner_title')); ?>
                    </h2>
                    <p class="text-white"><?php echo site_phrase(get_frontend_settings('banner_sub_title')); ?></p>
                    <img class="img-convenios" src="uploads\system\convenios.png" alt="">
                    <form class="" action="<?php echo site_url('home/search'); ?>" method="get">
                        <div class="input-group search-box">
                            <div class="p-5px ">
                                <button class="btn"
                                    type="submit"><?php echo site_phrase('Conoce más de Instituto Dozer'); ?> </button>
                            </div>
                        </div>
                    </form>
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

            <div class="col-md-3 d-flex text-center ">
                <div class=" cont-cuadro mr-md-auto mr-auto">
                    <img class="icon-style" src="uploads\system\icon-user.png" alt="">
                    <p class="cont-cuadro-text">Crea tu cuenta de Perfil en Dozer</p>
                    <a href="<?php echo site_url('sign_up'); ?>"
                        class="btnpa btn-sign-up "><?php echo site_phrase('Pulsa aquí'); ?></a>
                </div>
                <span class="numberobje ">1</span>
            </div>

            <div class="col-md-3 d-flex text-center justify-content-center ">
                <div class=" cont-cuadro mr-md-auto mr-auto">
                    <img class="icon-style" src="uploads\system\icon-elegir.png" alt="">
                    <p class="cont-cuadro-text">Elige el Curso,
                        Especialización o
                        Diplomado que
                        necesites </p>

                </div>
                <span class="numberobje r-44">2</span>
            </div>

            <div class="col-md-3 d-flex text-center justify-content-center ">
                <div class=" cont-cuadro mr-md-auto mr-auto">
                    <img class="icon-style" src="uploads\system\icon-pago.png" alt="">
                    <p class="cont-cuadro-text">Realiza el <br>
                        Pago o <br>
                        el depósito </p>

                </div>
                <span class="numberobje r-26">3</span>
            </div>
            <div class="col-md-3 d-flex text-center justify-content-end ">
                <div class=" cont-cuadro mr-md-auto mr-auto">
                    <img class="icon-style" src="uploads\system\icon-certi.png" alt="">
                    <p class="cont-cuadro-text">Estudia y
                        transforma tu
                        futuro con nosotros
                    </p>

                </div>
                <span class="numberobje r-7">4</span>
            </div>
        </div>
    </div>

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
    border: solid;

}

#home:checked~nav label.home,
#blog:checked~nav label.blog,
#code:checked~nav label.code,
#help:checked~nav label.help,
#about:checked~nav label.about,
#about-uno:checked~nav label.about-uno,
#about-dos:checked~nav label.about-dos {
    color: #131313;
}

nav label i {
    padding-right: 7px;
}

nav .slider {
    position: absolute;
    height: 100%;
    width: 13%;
    left: 5px;
    bottom: 0;
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
    left: 15%;
}

#code:checked~nav .slider {
    left: 30%;
    width: 12%;
}

#help:checked~nav .slider {
    left: 45%;
    width: 11%;
}

#about:checked~nav .slider {
    left: 58%;
    width: 12%;
}

#about-uno:checked~nav .slider {
    left: 72%;
}

#about-dos:checked~nav .slider {
    left: 87%;
    width: 12%;
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


<section class="course-carousel-area  pb-5">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h3 class="course-carousel-title text-center mb-4 mt-5 text-cursos">
                    <p class="text-white fs-2"><?php echo site_phrase('CURSOS'); ?></p>
                    <p class="text-white fs-6 fw-light">Accede a los cursos con certificaciones oficiales de Autodesk,
                        <br>
                        en cualquiera de las 7 categorias
                    </p>
                </h3>

                <!-- page loader -->
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
                        <label for="about-uno" class="about-uno">Automatizacion</label>
                        <label for="about-dos" class="about-dos">Gestion</label>
                        <div class="slider"></div>
                    </nav>
                    <section>
                        <div class="content content-1">
                            <div class="container text-center">
                                <div class="row align-items-end">
                                    <div class="category-course-list">
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-arquitectura-b%C3%A1sico-primeros-pasos/17');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_171672897228.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Beginner</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Revit Arquitectura Básico, Primeros
                                                                    Pasos</h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-arquitectura-nivel-intermedio/18');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_181672897330.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Intermediate</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Revit Arquitectura Nivel Intermedio
                                                                </h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-arquitectura-nivel-avanzado/19');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_191672897469.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Advanced</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Revit Arquitectura Nivel Avanzado</h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">

                                                                        <br>
                                                                        <p
                                                                            class="price text-white fw-bold text-15px text-right d-inline-block float-end">
                                                                            S/.295</p>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-arquitectura-para-empresas/20');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_201672897669.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Beginner</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Revit Arquitectura para Empresas</h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                            </div>

                        </div>
                        <div class="content content-2">


                            <div class="container text-center">
                                <div class="row">
                                    <div class="category-course-list">
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-estructura-b%C3%A1sico-primeros-pasos/21');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_211672960124.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Beginner</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Revit Estructura Básico, Primeros
                                                                    Pasos</h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-estructura-nivel-intermedio/22');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_221672960143.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Intermediate</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Revit Estructura Nivel Intermedio</h5>



                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-estructura-nivel-avanzado/23');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_231672960162.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Advanced</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Revit Estructura Nivel Avanzado</h5>



                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-estructura-para-empresas/24');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_241672960189.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Beginner</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Revit Estructura para Empresas</h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/robot-structural-analysis-b%C3%A1sico-primeros-pasos/25');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_251672960228.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Beginner</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Robot Structural Analysis Básico,
                                                                    Primeros pasos</h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">

                                                                        <br>
                                                                        <p
                                                                            class="price text-white fw-bold text-15px text-right d-inline-block float-end">
                                                                            S/.295</p>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/robot-structural-analysis-nivel-intermedio/26');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_261672960243.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Intermediate</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Robot Structural Analysis Nivel
                                                                    Intermedio</h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                            </div>
                        </div>

                        <div class="content content-3">

                            <div class="container text-center">
                                <div class="row">
                                    <div class="category-course-list">
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-mep-b%C3%A1sico-primeros-pasos/31');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_311672960722.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Beginner</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Revit MEP Básico, Primeros Pasos</h5>





                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-mep-nivel-intermedio/32');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_321672960740.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Intermediate</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Revit MEP Nivel Intermedio</h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-mep-nivel-avanzado/33');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_331672960763.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Advanced</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Revit MEP Nivel Avanzado</h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/revit-mep-para-empresas/34');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_341672960780.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Beginner</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Revit MEP para Empresas</h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                            </div>

                        </div>
                        <div class="content content-4">
                            <div class="container">
                                <div class="row">
                                    <div class="category-course-list">
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/autocad-b%C3%A1sico-primeros-pasos/35');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_351672960843.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Beginner</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">AutoCAD Básico, Primeros Pasos</h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/autocad-nivel-intermedio/36');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_361672960865.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Intermediate</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">AutoCAD Nivel Intermedio</h5>



                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/autocad-nivel-avanzado/37');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_371672960881.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Advanced</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">AutoCAD Nivel Avanzado</h5>



                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/autocad-para-empresas/38');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_381672960904.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Beginner</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">AutoCAD para Empresas</h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                            </div>
                        </div>
                        <div class="content content-5">
                            <div class="container">
                                <div class="row">
                                    <div class="category-course-list">
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/civil-3d-b%C3%A1sico-primeros-pasos/39');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_391672960954.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Beginner</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Civil 3D Básico, Primeros Pasos</h5>



                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/civil-3d-nivel-intermedio/40');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_401672960970.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Intermediate</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Civil 3D Nivel Intermedio</h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/civil-3d-nivel-avanzado/41');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_411672960988.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Advanced</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Civil 3D Nivel Avanzado</h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/civil-3d-para-empresas/42');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_421672961007.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Beginner</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Civil 3D para Empresas</h5>



                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">

                                                                        <br>
                                                                        <p
                                                                            class="price text-white fw-bold text-15px text-right d-inline-block float-end">
                                                                            S/.295</p>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/infraworks-b%C3%A1sico-primeros-pasos/43');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_431672961025.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Beginner</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Infraworks Básico, Primeros Pasos</h5>


                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/infraworks-nivel-intermedio/44');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_441672961047.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Intermediate</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Infraworks Nivel Intermedio</h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                            </div>
                        </div>
                        <div class="content content-6">
                            <div class="container">
                                <div class="row">
                                    <div class="category-course-list">
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/dynamo-para-revit-b%C3%A1sico-primeros-pasos/46');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_461672961253.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Beginner</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Dynamo para Revit Básico, Primeros
                                                                    Pasos</h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/dynamo-para-revit-nivel-intermedio/47');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_471672961273.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Intermediate</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Dynamo para Revit Nivel Intermedio
                                                                </h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/dynamo-para-revit-nivel-avanzado/48');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_481672961295.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Advanced</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Dynamo para Revit Nivel Avanzado</h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                            </div>
                        </div>
                        <div class="content content-7">
                            <div class="container">
                                <div class="row">
                                    <div class="category-course-list">
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/navisworks-manage-b%C3%A1sico-primeros-pasos/49');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_491672961337.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Beginner</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Navisworks Manage Básico, Primeros
                                                                    Pasos</h5>



                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/navisworks-manage-nivel-intermedio/50');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_501672961364.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Intermediate</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Navisworks Manage Nivel Intermedio
                                                                </h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/navisworks-manage-nivel-avanzado/51');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_511672961428.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Advanced</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">Navisworks Manage Nivel Avanzado</h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/bim-collaborate-primeros-pasos/52');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_521672961441.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Beginner</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">BIM Collaborate Primeros Pasos</h5>



                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/bim-collaborate-nivel-intermedio/53');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_531672961465.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Intermediate</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">BIM Collaborate Nivel Intermedio</h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                                            <div class="col-md-6 col-xl-3 px-0">
                                                <div class="course-box-wrap">
                                                    <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/bim-collaborate-nivel-avanzado/54');"
                                                        href="javascript:;" class="has-popover">
                                                        <div class="course-box">
                                                            <div class="course-image">


                                                                <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_541672961479.jpg"
                                                                    alt="" class="img-fluid">
                                                            </div>
                                                            <div class="course-details">
                                                                <div class="row mb-3">
                                                                    <div class="col-12">
                                                                        <span
                                                                            class="badge badge-primary text-11px">Advanced</span>
                                                                    </div>
                                                                </div>
                                                                <h5 class="title">BIM Collaborate Nivel Avanzado</h5>




                                                                <div class="w-100 d-flex text-dark border-top py-1">
                                                                    <div class="">
                                                                        <p
                                                                            class="price text-white  text-right d-inline-block float-end">
                                                                            <small> <del>S/.295</del></small> <br> S/.59
                                                                        </p> <br>
                                                                    </div>
                                                                    <div class="ms-auto">

                                                                        <span
                                                                            class="text-white fw-bold text-15px text-center">70%
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
                            </div>
                        </div>
                    </section>
                </div>



            </div>

        </div>
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
}

.wrapperr nav label {
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
    border: solid;

}



#homee:checked~nav label.homee,
#blogg:checked~nav label.blogg,
#codee:checked~nav label.codee,
#helpp:checked~nav label.helpp {
    color: #131313;
}

nav label i {
    padding-right: 7px;
}

nav .sliderr {
    position: absolute;
    height: 100%;
    width: 23%;
    left: 5px;
    bottom: 0;
    z-index: 0;
    border-radius: 10px;
    background: white;
    transition: all 0.3s ease;
    color: #131313;
}


#blogg:checked~nav .sliderr {
    left: 26%;

}

#codee:checked~nav .sliderr {
    left: 51%;

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


<section class="mb-5 pb-4">
    <div class="container-lg">
        <h3 class="course-carousel-title text-center mb-4 mt-5 text-cursos">
            <p class="text-white fs-2"><?php echo site_phrase('ESPECIALIZACIONES'); ?></p>
            <p class="text-white fs-6 fw-light">Accede a las especializaciones con certificaciones oficiales por el
                Colegio <br>
                de Ingenieros del Perú y Autodesk, en cualquiera de las 4 categorias
            </p>
        </h3>
        <div class="wrapperr">
            <input type="radio" name="sliderr" checked id="homee">
            <input type="radio" name="sliderr" id="blogg">
            <input type="radio" name="sliderr" id="codee">
            <input type="radio" name="sliderr" id="helpp">

            <nav>
                <label for="homee" class="homee">Modelador BIM</label>
                <label for="blogg" class="blogg">Cálculo y Detallado BIM</label>
                <label for="codee" class="codee">Gestión BIM</label>
                <label for="helpp" class="helpp">Expedientes Tecnicos BIM</label>
                <div class="sliderr"></div>
            </nav>
            <section>
                <div class="contentt content-uno">
                    <div class="container ">
                        <div class="category-course-list">
                            <div class="row">
                                <div class="col-md-6 col-xl-3 px-0">
                                    <div class="course-box-wrap">
                                        <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/modelador-bim-aplicado-a-edificaciones/1');"
                                            href="javascript:;" class="has-popover">
                                            <div class="course-box">
                                                <div class="course-image">


                                                    <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_11672962404.jpg"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="course-details">
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <span class="badge badge-primary text-11px">Beginner</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="title">Modelador BIM aplicado a Edificaciones</h5>




                                                    <div class="w-100 d-flex text-dark border-top py-1">
                                                        <div class="">
                                                            <p
                                                                class="price text-white  text-right d-inline-block float-end">
                                                                <small> <del>S/.500</del></small> <br> S/.150
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
                                <div class="col-md-6 col-xl-3 px-0">
                                    <div class="course-box-wrap">
                                        <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/modelador-bim-aplicado-a-obras-viales/2');"
                                            href="javascript:;" class="has-popover">
                                            <div class="course-box">
                                                <div class="course-image">


                                                    <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_21672962651.jpg"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="course-details">
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <span class="badge badge-primary text-11px">Beginner</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="title">Modelador BIM aplicado a obras viales</h5>




                                                    <div class="w-100 d-flex text-dark border-top py-1">
                                                        <div class="">
                                                            <p
                                                                class="price text-white  text-right d-inline-block float-end">
                                                                <small> <del>S/.500</del></small> <br> S/.150
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
                                <div class="col-md-6 col-xl-3 px-0">
                                    <div class="course-box-wrap">
                                        <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/modelador-bim-aplicado-a-obras-hidr%C3%A1ulicas/3');"
                                            href="javascript:;" class="has-popover">
                                            <div class="course-box">
                                                <div class="course-image">


                                                    <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_31672962664.jpg"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="course-details">
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <span class="badge badge-primary text-11px">Beginner</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="title">Modelador BIM aplicado a Obras Hidráulicas</h5>




                                                    <div class="w-100 d-flex text-dark border-top py-1">
                                                        <div class="">
                                                            <p
                                                                class="price text-white  text-right d-inline-block float-end">
                                                                <small> <del>S/.500</del></small> <br> S/.150
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
                                <div class="col-md-6 col-xl-3 px-0">
                                    <div class="course-box-wrap">
                                        <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/modelador-bim-aplicado-a-estructuras-met%C3%A1licas/4');"
                                            href="javascript:;" class="has-popover">
                                            <div class="course-box">
                                                <div class="course-image">


                                                    <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_41672962677.jpg"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="course-details">
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <span class="badge badge-primary text-11px">Beginner</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="title">Modelador BIM aplicado a Estructuras Metálicas
                                                    </h5>




                                                    <div class="w-100 d-flex text-dark border-top py-1">
                                                        <div class="">
                                                            <p
                                                                class="price text-white  text-right d-inline-block float-end">
                                                                <small> <del>S/.500</del></small> <br> S/.150
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

                </div>
                <div class="contentt content-dos">
                    <div class="container ">
                        <div class="category-course-list">
                            <div class="row">
                                <div class="col-md-6 col-xl-3 px-0">
                                    <div class="course-box-wrap">
                                        <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/an%C3%A1lisis-dise%C3%B1o-y-detallado-de-edificaciones-utilizando-robot-structural-analysis/5');"
                                            href="javascript:;" class="has-popover">
                                            <div class="course-box">
                                                <div class="course-image">


                                                    <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_51672966770.jpg"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="course-details">
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <span class="badge badge-primary text-11px">Beginner</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="title">Análisis, diseño y detallado de Edificaciones
                                                        utilizando Robot Structural Analysis</h5>




                                                    <div class="w-100 d-flex text-dark border-top py-1">
                                                        <div class="">
                                                            <p
                                                                class="price text-white  text-right d-inline-block float-end">
                                                                <small> <del>S/.500</del></small> <br> S/.150
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
                                <div class="col-md-6 col-xl-3 px-0">
                                    <div class="course-box-wrap">
                                        <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/modelado-y-detallado-de-estructuras-de-acero-utilizando-advance-steel/6');"
                                            href="javascript:;" class="has-popover">
                                            <div class="course-box">
                                                <div class="course-image">


                                                    <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_61672966794.jpg"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="course-details">
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <span class="badge badge-primary text-11px">Beginner</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="title">Modelado y detallado de estructuras de acero
                                                        utilizando Advance Steel</h5>




                                                    <div class="w-100 d-flex text-dark border-top py-1">
                                                        <div class="">
                                                            <p
                                                                class="price text-white  text-right d-inline-block float-end">
                                                                <small> <del>S/.500</del></small> <br> S/.150
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

                </div>
                <div class="contentt content-tres">
                    <div class="container ">
                        <div class="category-course-list">
                            <div class="row">
                                <div class="col-md-6 col-xl-3 px-0">
                                    <div class="course-box-wrap">
                                        <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/coordinador-de-proyectos-bim/7');"
                                            href="javascript:;" class="has-popover">
                                            <div class="course-box">
                                                <div class="course-image">


                                                    <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_71672966858.jpg"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="course-details">
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <span class="badge badge-primary text-11px">Beginner</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="title">Coordinador de Proyectos BIM</h5>




                                                    <div class="w-100 d-flex text-dark border-top py-1">
                                                        <div class="">
                                                            <p
                                                                class="price text-white  text-right d-inline-block float-end">
                                                                <small> <del>S/.667</del></small> <br> S/.200
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
                                <div class="col-md-6 col-xl-3 px-0">
                                    <div class="course-box-wrap">
                                        <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/coordinador-de-proyectos-bim/8');"
                                            href="javascript:;" class="has-popover">
                                            <div class="course-box">
                                                <div class="course-image">


                                                    <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_81672966875.jpg"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="course-details">
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <span class="badge badge-primary text-11px">Beginner</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="title">Coordinador de Proyectos BIM</h5>


                                                    <div class="w-100 d-flex text-dark border-top py-1">
                                                        <div class="">
                                                            <p
                                                                class="price text-white  text-right d-inline-block float-end">
                                                                <small> <del>S/.667</del></small> <br> S/.200
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
                                <div class="col-md-6 col-xl-3 px-0">
                                    <div class="course-box-wrap">
                                        <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/gestor-de-proyectos-bim/9');"
                                            href="javascript:;" class="has-popover">
                                            <div class="course-box">
                                                <div class="course-image">


                                                    <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_91672966892.jpg"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="course-details">
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <span class="badge badge-primary text-11px">Beginner</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="title">Gestor de Proyectos BIM</h5>




                                                    <div class="w-100 d-flex text-dark border-top py-1">
                                                        <div class="">
                                                            <p
                                                                class="price text-white  text-right d-inline-block float-end">
                                                                <small> <del>S/.667</del></small> <br> S/.200
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
                                <div class="col-md-6 col-xl-3 px-0">
                                    <div class="course-box-wrap">
                                        <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/lider-de-proyectos-bim/10');"
                                            href="javascript:;" class="has-popover">
                                            <div class="course-box">
                                                <div class="course-image">


                                                    <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_101672966910.jpg"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="course-details">
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <span class="badge badge-primary text-11px">Beginner</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="title">Lider de Proyectos BIM</h5>




                                                    <div class="w-100 d-flex text-dark border-top py-1">
                                                        <div class="">
                                                            <p
                                                                class="price text-white  text-right d-inline-block float-end">
                                                                <small> <del>S/.667</del></small> <br> S/.200
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
                </div>
                <div class="contentt content-cuatro">
                    <div class="container">
                        <div class="category-course-list">
                            <div class="row">
                                <div class="col-md-6 col-xl-3 px-0">
                                    <div class="course-box-wrap">
                                        <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/expedientes-t%C3%A9cnicos-con-bim-aplicado-a-proyectos-de-infraestructrura-educativa/11');"
                                            href="javascript:;" class="has-popover">
                                            <div class="course-box">
                                                <div class="course-image">


                                                    <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_111672966959.jpg"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="course-details">
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <span class="badge badge-primary text-11px">Beginner</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="title">Expedientes técnicos con BIM aplicado a Proyectos
                                                        de Infraestructrura educativa</h5>



                                                    <div class="w-100 d-flex text-dark border-top py-1">
                                                        <div class="">
                                                            <p
                                                                class="price text-white  text-right d-inline-block float-end">
                                                                <small> <del>S/.834</del></small> <br> S/.250
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
                                <div class="col-md-6 col-xl-3 px-0">
                                    <div class="course-box-wrap">
                                        <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/expedientes-t%C3%A9cnicos-con-bim-aplicado-a-proyectos-de-infraestructrura-hospitalaria/12');"
                                            href="javascript:;" class="has-popover">
                                            <div class="course-box">
                                                <div class="course-image">


                                                    <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_121672966972.jpg"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="course-details">
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <span class="badge badge-primary text-11px">Beginner</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="title">Expedientes técnicos con BIM aplicado a Proyectos
                                                        de Infraestructrura Hospitalaria</h5>




                                                    <div class="w-100 d-flex text-dark border-top py-1">
                                                        <div class="">
                                                            <p
                                                                class="price text-white  text-right d-inline-block float-end">
                                                                <small> <del>S/.834</del></small> <br> S/.250
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
                                <div class="col-md-6 col-xl-3 px-0">
                                    <div class="course-box-wrap">
                                        <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/expedientes-t%C3%A9cnicos-con-bim-aplicado-a-proyectos-de-infraestructura-vial/13');"
                                            href="javascript:;" class="has-popover">
                                            <div class="course-box">
                                                <div class="course-image">


                                                    <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_131672966988.jpg"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="course-details">
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <span class="badge badge-primary text-11px">Beginner</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="title">Expedientes técnicos con BIM aplicado a Proyectos
                                                        de infraestructura Vial</h5>




                                                    <div class="w-100 d-flex text-dark border-top py-1">
                                                        <div class="">
                                                            <p
                                                                class="price text-white  text-right d-inline-block float-end">
                                                                <small> <del>S/.834</del></small> <br> S/.250
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
                                <div class="col-md-6 col-xl-3 px-0">
                                    <div class="course-box-wrap">
                                        <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/expedientes-t%C3%A9cnicos-con-bim-aplicado-a-proyectos-de-pavimentaci%C3%B3n-urbano-y-rural/14');"
                                            href="javascript:;" class="has-popover">
                                            <div class="course-box">
                                                <div class="course-image">


                                                    <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_141672967006.jpg"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="course-details">
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <span class="badge badge-primary text-11px">Beginner</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="title">Expedientes Técnicos con BIM aplicado a Proyectos
                                                        de Pavimentación Urbano y Rural</h5>



                                                    <div class="w-100 d-flex text-dark border-top py-1">
                                                        <div class="">
                                                            <p
                                                                class="price text-white  text-right d-inline-block float-end">
                                                                <small> <del>S/.834</del></small> <br> S/.250
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
                                <div class="col-md-6 col-xl-3 px-0">
                                    <div class="course-box-wrap">
                                        <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/expedientes-t%C3%A9cnicos-con-bim-aplicado-a-proyectos-de-agua-y-saneamiento-rural/15');"
                                            href="javascript:;" class="has-popover">
                                            <div class="course-box">
                                                <div class="course-image">


                                                    <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_151672967039.jpg"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="course-details">
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <span class="badge badge-primary text-11px">Beginner</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="title">Expedientes técnicos con BIM aplicado a proyectos
                                                        de Agua y saneamiento Rural</h5>



                                                    <div class="w-100 d-flex text-dark border-top py-1">
                                                        <div class="">

                                                            <br>
                                                            <p
                                                                class="price text-white fw-bold text-15px text-right d-inline-block float-end">
                                                                S/.834</p>
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
                                <div class="col-md-6 col-xl-3 px-0">
                                    <div class="course-box-wrap">
                                        <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/expedientes-t%C3%A9cnicos-con-bim-aplicado-a-proyectos-de-electrificaci%C3%B3n-rural/16');"
                                            href="javascript:;" class="has-popover">
                                            <div class="course-box">
                                                <div class="course-image">


                                                    <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_161672967053.jpg"
                                                        alt="" class="img-fluid">
                                                </div>
                                                <div class="course-details">
                                                    <div class="row mb-3">
                                                        <div class="col-12">
                                                            <span class="badge badge-primary text-11px">Beginner</span>
                                                        </div>
                                                    </div>
                                                    <h5 class="title">Expedientes técnicos con BIM aplicado a proyectos
                                                        de electrificación rural</h5>




                                                    <div class="w-100 d-flex text-dark border-top py-1">
                                                        <div class="">
                                                            <p
                                                                class="price text-white  text-right d-inline-block float-end">
                                                                <small> <del>S/.834</del></small> <br> S/.250
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

                </div>

            </section>
        </div>







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
    border: solid;

}



#hom:checked~nav label.hom,
#blo:checked~nav label.blo,
#cod:checked~nav label.cod {
    color: #131313;
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

<section class="course-carousel-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h3 class="course-carousel-title mt-5 mb-4 text-center text-cursos">
                    <p class="text-white fs-2"><?php echo site_phrase('DIPLOMADOS'); ?></p>
                    <p class="text-white fs-6 fw-light">Accede a las especializaciones con certificaciones oficiales por
                        el Colegio <br>
                        de Ingenieros del Perú y Autodesk, en cualquiera de las 3 categorias
                    </p>
                    <span class="header-underline-2"><?php echo site_phrase('') . '  ' . site_phrase(''); ?>
                    </span>
                </h3>
                <div class="wrapperrr">
                    <input type="radio" name="slide" checked id="hom">
                    <input type="radio" name="slide" id="blo">
                    <input type="radio" name="slide" id="cod">


                    <nav>
                        <label for="hom" class="hom">Gestión de Proyectos BIM</label>
                        <label for="blo" class="blo">Ingeniería Civil</label>
                        <label for="cod" class="cod">Arquitectura y Urbanismo</label>

                        <div class="slide"></div>
                    </nav>
                    <section>
                        <div class="conten content-uno">
                            <div class="container ">
                                <div class="category-course-list">
                                    <div class="row">
                                        <div class="col-md-6 col-xl-3 px-0">
                                            <div class="course-box-wrap">
                                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/gesti%C3%B3n-en-proyectos-de-construcci%C3%B3n-seg%C3%BAn-bim-vdc-lean-y-ipd/59');"
                                                    href="javascript:;" class="has-popover">
                                                    <div class="course-box">
                                                        <div class="course-image">


                                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_59.jpg"
                                                                alt="" class="img-fluid">
                                                        </div>
                                                        <div class="course-details">
                                                            <div class="row mb-3">
                                                                <div class="col-12">
                                                                    <span
                                                                        class="badge badge-primary text-11px">Beginner</span>
                                                                </div>
                                                            </div>
                                                            <h5 class="title">Gestión en Proyectos de Construcción según
                                                                BIM, VDC, LEAN y IPD </h5>



                                                            <div class="w-100 d-flex text-dark border-top py-1">
                                                                <div class="">
                                                                    <p
                                                                        class="price text-white  text-right d-inline-block float-end">
                                                                        <small> <del>S/.1334</del></small> <br> S/.400
                                                                    </p> <br>
                                                                </div>
                                                                <div class="ms-auto">

                                                                    <span
                                                                        class="text-white fw-bold text-15px text-center">70%
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
                                        <div class="col-md-6 col-xl-3 px-0">
                                            <div class="course-box-wrap">
                                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/bim-management-aplicado-a-proyectos-de-inversi%C3%B3n-p%C3%BAblica-y-privadas/60');"
                                                    href="javascript:;" class="has-popover">
                                                    <div class="course-box">
                                                        <div class="course-image">


                                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_60.jpg"
                                                                alt="" class="img-fluid">
                                                        </div>
                                                        <div class="course-details">
                                                            <div class="row mb-3">
                                                                <div class="col-12">
                                                                    <span
                                                                        class="badge badge-primary text-11px">Beginner</span>
                                                                </div>
                                                            </div>
                                                            <h5 class="title">BIM Management aplicado a Proyectos de
                                                                Inversión Pública y Privadas</h5>




                                                            <div class="w-100 d-flex text-dark border-top py-1">
                                                                <div class="">
                                                                    <p
                                                                        class="price text-white  text-right d-inline-block float-end">
                                                                        <small> <del>S/.1334</del></small> <br> S/.400
                                                                    </p> <br>
                                                                </div>
                                                                <div class="ms-auto">

                                                                    <span
                                                                        class="text-white fw-bold text-15px text-center">70%
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
                                        <div class="col-md-6 col-xl-3 px-0">
                                            <div class="course-box-wrap">
                                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/implementaci%C3%B3n-bim-en-proyectos-de-gobiernos-regionales-y-municipales/61');"
                                                    href="javascript:;" class="has-popover">
                                                    <div class="course-box">
                                                        <div class="course-image">


                                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_61.jpg"
                                                                alt="" class="img-fluid">
                                                        </div>
                                                        <div class="course-details">
                                                            <div class="row mb-3">
                                                                <div class="col-12">
                                                                    <span
                                                                        class="badge badge-primary text-11px">Beginner</span>
                                                                </div>
                                                            </div>
                                                            <h5 class="title">Implementación BIM en Proyectos de
                                                                Gobiernos Regionales y Municipales</h5>




                                                            <div class="w-100 d-flex text-dark border-top py-1">
                                                                <div class="">
                                                                    <p
                                                                        class="price text-white  text-right d-inline-block float-end">
                                                                        <small> <del>S/.1334</del></small> <br> S/.400
                                                                    </p> <br>
                                                                </div>
                                                                <div class="ms-auto">

                                                                    <span
                                                                        class="text-white fw-bold text-15px text-center">70%
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

                        </div>
                        <div class="conten content-dos">
                            <div class="container ">
                                <div class="category-course-list">
                                    <div class="row">
                                        <div class="col-md-6 col-xl-3 px-0">
                                            <div class="course-box-wrap">
                                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/bim-management-en-infraestructura-e-ingenier%C3%ADa-civil/55');"
                                                    href="javascript:;" class="has-popover">
                                                    <div class="course-box">
                                                        <div class="course-image">


                                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_551672967631.jpg"
                                                                alt="" class="img-fluid">
                                                        </div>
                                                        <div class="course-details">
                                                            <div class="row mb-3">
                                                                <div class="col-12">
                                                                    <span
                                                                        class="badge badge-primary text-11px">Beginner</span>
                                                                </div>
                                                            </div>
                                                            <h5 class="title">BIM Management en Infraestructura e
                                                                Ingeniería Civil</h5>




                                                            <div class="w-100 d-flex text-dark border-top py-1">
                                                                <div class="">
                                                                    <p
                                                                        class="price text-white  text-right d-inline-block float-end">
                                                                        <small> <del>S/.1334</del></small> <br> S/.400
                                                                    </p> <br>
                                                                </div>
                                                                <div class="ms-auto">

                                                                    <span
                                                                        class="text-white fw-bold text-15px text-center">70%
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
                                        <div class="col-md-6 col-xl-3 px-0">
                                            <div class="course-box-wrap">
                                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/bim-management-especializado-en-proyectos-estructurales/56');"
                                                    href="javascript:;" class="has-popover">
                                                    <div class="course-box">
                                                        <div class="course-image">


                                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_561672967648.jpg"
                                                                alt="" class="img-fluid">
                                                        </div>
                                                        <div class="course-details">
                                                            <div class="row mb-3">
                                                                <div class="col-12">
                                                                    <span
                                                                        class="badge badge-primary text-11px">Beginner</span>
                                                                </div>
                                                            </div>
                                                            <h5 class="title">BIM Management Especializado en Proyectos
                                                                Estructurales </h5>




                                                            <div class="w-100 d-flex text-dark border-top py-1">
                                                                <div class="">
                                                                    <p
                                                                        class="price text-white  text-right d-inline-block float-end">
                                                                        <small> <del>S/.1334</del></small> <br> S/.400
                                                                    </p> <br>
                                                                </div>
                                                                <div class="ms-auto">

                                                                    <span
                                                                        class="text-white fw-bold text-15px text-center">70%
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

                        </div>
                        <div class="conten content-tres">
                            <div class="container ">
                                <div class="category-course-list">
                                    <div class="row">
                                        <div class="col-md-6 col-xl-3 px-0">
                                            <div class="course-box-wrap">
                                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/bim-management-en-arquitectura-de-interiores/57');"
                                                    href="javascript:;" class="has-popover">
                                                    <div class="course-box">
                                                        <div class="course-image">


                                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_571672967738.jpg"
                                                                alt="" class="img-fluid">
                                                        </div>
                                                        <div class="course-details">
                                                            <div class="row mb-3">
                                                                <div class="col-12">
                                                                    <span
                                                                        class="badge badge-primary text-11px">Beginner</span>
                                                                </div>
                                                            </div>
                                                            <h5 class="title">BIM Management en Arquitectura de
                                                                Interiores</h5>




                                                            <div class="w-100 d-flex text-dark border-top py-1">
                                                                <div class="">
                                                                    <p
                                                                        class="price text-white  text-right d-inline-block float-end">
                                                                        <small> <del>S/.1334</del></small> <br> S/.400
                                                                    </p> <br>
                                                                </div>
                                                                <div class="ms-auto">

                                                                    <span
                                                                        class="text-white fw-bold text-15px text-center">70%
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
                                        <div class="col-md-6 col-xl-3 px-0">
                                            <div class="course-box-wrap">
                                                <a onclick="$(location).attr('href', 'http://localhost/dozer-dev/home/course/bim-management-en-proyectos-de-arquitectura-y-urbanismo/58');"
                                                    href="javascript:;" class="has-popover">
                                                    <div class="course-box">
                                                        <div class="course-image">


                                                            <img src="http://localhost/dozer-dev/uploads/thumbnails/course_thumbnails/course_thumbnail_default_581672967772.jpg"
                                                                alt="" class="img-fluid">
                                                        </div>
                                                        <div class="course-details">
                                                            <div class="row mb-3">
                                                                <div class="col-12">
                                                                    <span
                                                                        class="badge badge-primary text-11px">Beginner</span>
                                                                </div>
                                                            </div>
                                                            <h5 class="title">BIM Management en Proyectos de
                                                                Arquitectura y Urbanismo</h5>




                                                            <div class="w-100 d-flex text-dark border-top py-1">
                                                                <div class="">
                                                                    <p
                                                                        class="price text-white  text-right d-inline-block float-end">
                                                                        <small> <del>S/.1334</del></small> <br> S/.400
                                                                    </p> <br>
                                                                </div>
                                                                <div class="ms-auto">

                                                                    <span
                                                                        class="text-white fw-bold text-15px text-center">70%
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
                        </div>


                    </section>
                </div>



            </div>
        </div>
    </div>
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
    <div class="container-xl">
        <h3 class="course-carousel-title text-center mb-4 mt-5 ">
            <p class="text-white fs-2 fw-bolder">Estamos contigo en todo momento <br>
                con nuestro software gratuito DevBIM v23.1 </p>

        </h3>
    </div>
    <div class="container-xl ">
        <div class="row justify-content-evenly py-3 mb-4 spacio">
            <div class="col-6 col-md-6  mt-md-0">
                <div class=" fondopro">
                    <img class="imgpro" src="uploads\system\programa.png" alt="">
                </div>
            </div>
            <div class="col-6 col-md-6   mt-md-0">
                <div class=" programa ">
                    <h3 class="fw-700 w-50 text-white">DevBIM RT2023.1</h3>
                    <span class="text-white fw-lighter fs-6">Caracteristicas claves:
                    </span>
                    <ul class="text-white fw-normal vineta fs-6">
                        <li>Plan BIM Documentado</li>
                        <li>Normativa BIM Perú</li>
                        <li>Reglamento Nacional de Edificaciones (RNE)</li>
                        <li>Normas de Transportes y Saneamiento </li>
                        <li>Familias, Proyectos y Plantillas en Revit </li>
                    </ul>

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
<section>
    <div class="container-xl">
        <h3 class="course-carousel-title text-center mb-4 mt-5 ">
            <p class="text-white fs-2 fw-bolder">Aprende con expertos
                líderes BIM en el sector construcción</p>
            <p class="text-white fw-lighter fs-6 lh-sm"> Conformado por profesionales del <br>
                sector construcción</p>

        </h3>
    </div>
    <div class="container-xl">
        <div class="d-flex flex-row justify-content-between pt-8">
            <div class=" ">
                <div class="d-flex flex-column  ">
                    <div class="  position-relative">
                        <img class="fondoo  " src="uploads\system\fondo-docente.png" alt="">
                        <img class="position-absolute  start-50 translate-middle top-15"
                            src="uploads\system\docente\prof-uno.png" alt="">
                        <div class="d-flex flex-column  ">
                            <div class="py-2 ">
                                <div class="d-flex justify-content-center">
                                    <div class="px-2 d-flex align-items-center">
                                        <img src="uploads\system\docente\pe.png" alt="">
                                    </div>

                                    <div class="d-flex flex-column text-white ">
                                        <div class="fw-bold">Walter Gomez</div>
                                        <div class="fw-normal">Perú</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class=" ">
                <div class="d-flex flex-column  ">
                    <div class="  position-relative">
                        <img class="fondoo  " src="uploads\system\fondo-docente.png" alt="">
                        <img class="position-absolute  start-50 translate-middle top-15"
                            src="uploads\system\docente\prof-dos.png" alt="">
                        <div class="d-flex flex-column  ">
                            <div class="py-2 ">
                                <div class="d-flex justify-content-center">
                                    <div class="px-2 d-flex align-items-center">
                                        <img src="uploads\system\docente\pe.png" alt="">
                                    </div>

                                    <div class="d-flex flex-column text-white ">
                                        <div class="fw-bold">Giuliana Nicho</div>
                                        <div class="fw-normal">Perú</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class=" ">
                <div class="d-flex flex-column  ">
                    <div class="  position-relative">
                        <img class="fondoo  " src="uploads\system\fondo-docente.png" alt="">
                        <img class="position-absolute  start-50 translate-middle top-15"
                            src="uploads\system\docente\prof-tres.png" alt="">
                        <div class="d-flex flex-column  ">
                            <div class="py-2 ">
                                <div class="d-flex justify-content-center">
                                    <div class="px-2 d-flex align-items-center">
                                        <img src="uploads\system\docente\pe.png" alt="">
                                    </div>

                                    <div class="d-flex flex-column text-white ">
                                        <div class="fw-bold">Samuel Ruiz</div>
                                        <div class="fw-normal">Perú</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Docente Dozer -->

<!-- Certificate Dozer -->
<section>
    <div class="container-xl">
        <h3 class="course-carousel-title text-center mb-4 mt-5 ">
            <p class="text-white fs-2 fw-bolder">¡Certificate y avala internacionalmente <br>
                tus conocimientos!</p>
            <p class="text-white fw-lighter fs-6 lh-sm"> Obten un certificado con respaldo
                internacional que <br>
                resaltará tus nuevas competencias</p>

        </h3>
    </div>
    <div class="container-lg">
        <div class="row gx-5">

            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto mr-auto">
                    <div class="text-center text-white">
                        <h4 class="text-decoration-underline">INSTITUTO DOZER</h4>
                        <p class="fw-light">Instituto Peruano de Estudios
                            e Implementación BIM y
                            Nuevas Tecnologías</p>
                        <img src="uploads\system\certificaciones\instituto-dozer.svg" alt="">
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto mr-auto">

                    <div class="text-center text-white">
                        <h4 class="text-decoration-underline">AUTODESK </h4>
                        <p class="fw-light">Certificación Oficial de Autodesk
                            Certificate of Completion</p> <br>
                        <img src="uploads\system\certificaciones\autodesk.svg" alt="">
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto mr-auto">
                    <div class="text-center text-white">
                        <h4 class="text-decoration-underline">CIP</h4>
                        <p class="fw-light">Colegio de Ingenieros del Perú <br>
                            Consejo Departamental </p>
                        <img class="img-cip" src="uploads\system\certificaciones\cip.svg" alt="">
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
            <p class="text-white fs-2 fw-bolder">Verifica tus Certificados</p>
            <p class="text-white fw-lighter fs-6 lh-sm"> Ingresa a nuestra plataforma de
                verificador de certificados gratuitamente, <br>
                podrás revisar o descargar todos tus certificados</p>
            <a style=" font-weight: 700 !important;" class="btn bg-white devbIM fw-semibold text-center m-5"
                href="">Deseo verificar mi certificado</a>

        </h3>
    </div>
</section>
<!-- Verificador de Certificado Dozer -->

<!-- Conoce mas de Dozer-->
<section>
    <div class="container-xl">
        <h3 class="course-carousel-title text-center mb-4 mt-5 text-cursos">
            <p class="text-white fs-4 fw-bolder">¿Por qué elegir a Instituto Dozer? </p>
            <p class="text-white fs-6 fw-light lh-sm">Cada día nos eforzamos en ser tu mejor tu mejor opción para
                formarte <br>
                en el desarrollo y uso de la metodología BIM y en el sector construcción
            </p>
        </h3>


        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="pb-5 align-self-end">
                            <div class=" content  ">
                                <p class="text-white fs-5 fw-bolder">Metodología Virtual, en <br>
                                    directo junto al docente
                                </p>
                                <div class="text-white fs-6 fw-light lh-sm py-2">Resolverás todas tus dudas y preguntas
                                    con
                                    nuestras <br> clases en vivo asi como las clases de reforzamiento, <br>
                                    interactuando
                                    directamente con <br>
                                    nuestros docentes expertos.</div>

                                <div class="d-flex flex-column justify-content-start py-2">
                                    <div class="d-flex flex-row">
                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">Clases en vivo, 100% online</div>
                                    </div>
                                    <div class="d-flex flex-row">

                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">Desde la comodidad de tu hogar</div>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">Acceso en multiples plataformas por Zoom </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <div class="pb-5">
                            <img class="position-absolute mb-5 bottom-0 fondoo" src="uploads\system\fondo.png" alt="">
                            <img src="uploads\system\dozer-uno.png" class="d-block w-100 menu-area " alt="...">
                        </div>

                    </div>

                </div>
                <div class="carousel-item">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="pb-5 align-self-end">
                            <div class=" content  ">
                                <p class="text-white fs-5 fw-bolder">Proyectos reales que te <br>
                                    darán un aprendizaje real
                                </p>
                                <div class="text-white fs-6 fw-light lh-sm py-2">Enseñamos en base a proyectos reales
                                    donde nuestros <br> docentes comparten todas sus <br>
                                    experiencias a nuestros estudiantes.</div>

                                <div class="d-flex flex-column justify-content-start py-2">
                                    <div class="d-flex flex-row">
                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">Casos reales en base a nuestros proyectos
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row">

                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">Clases desde cero hasta sus etapas finales
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">De la orientación a la acción</div>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <div class="pb-5">
                            <img class="position-absolute mb-5 bottom-0 fondoo r-1em" src="uploads\system\fondo.png"
                                alt="">
                            <img src="uploads\system\dozer-dos.png" class="d-block w-100 menu-area r-1em " alt="...">
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="pb-5 align-self-end">
                            <div class=" content  ">
                                <p class="text-white fs-5 fw-bolder">Certifica tus conocimientos con <br>
                                    la garantia de Instituto Dozer
                                </p>
                                <div class="text-white fs-6 fw-light lh-sm py-2">Instituto Dozer reconocida tanto por
                                    las instituciones <br> líderes del sector construcción.
                                </div>

                                <div class="d-flex flex-column justify-content-start py-2">
                                    <div class="d-flex flex-row">
                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">válido para postulaciones en el sector público
                                            y privado</div>
                                    </div>
                                    <div class=" namecont text-white pt-5 pb-2">Tenemos convenios nacionales: </div>
                                    <img src="uploads\system\icon-certi-tres.svg" alt="">

                                </div>


                            </div>
                        </div>
                        <div class="pb-5 d-flex justify-content-end">
                            <img class="position-absolute mb-5 bottom-0 fondoo" src="uploads\system\fondo.png" alt="">
                            <img src="uploads\system\dozer-tres.svg" class="d-block  menu-area "
                                style="width: 70%!important;" alt="...">
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="pb-5 align-self-end">
                            <div class=" content  ">
                                <p class="text-white fs-5 fw-bolder">Obtén el certificado con <br>
                                    respaldo internacional
                                </p>
                                <div class="text-white fs-6 fw-light lh-sm py-2">Accede al certificado y acredita tus
                                    <br>
                                    conocimientos con el certificado <br>
                                    internacional en cualquier momento.
                                </div>

                                <div class="d-flex flex-column justify-content-start py-2">
                                    <div class="d-flex flex-row py-3">
                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">Certificado oficial de Autodesk USA</div>
                                    </div>

                                    <img src="uploads\system\icon-autodesk.svg" alt="">

                                </div>


                            </div>
                        </div>
                        <div class="pb-5 d-flex justify-content-end">
                            <img class="position-absolute mb-5 bottom-0 fondoo" src="uploads\system\fondo.png" alt="">
                            <img src="uploads\system\dozer-cuatro.svg" class="d-block  menu-area "
                                style="width: 70%!important;" alt="...">
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="pb-5 align-self-end">
                            <div class=" content  ">
                                <p class="text-white fs-5 fw-bolder">Docentes expertos en el <br>
                                    rubro de construcción
                                </p>
                                <div class="text-white fs-6 fw-light lh-sm py-2">Contamos con el conocimiento y la
                                    experiencia en el <br> sector construcción, permitiéndonos tener un gran <br> equipo
                                    de
                                    expertos a disposición de nuestros alumnos y <br> empresas clientes.</div>

                                <div class="d-flex flex-column justify-content-start py-2">
                                    <div class="d-flex flex-row">
                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">Docentes certificados por Autodesk - ACP
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row">

                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">Especialistas en el rubro de la Ingeniería y
                                            Arquitectura
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">Con vocación de enseñanza</div>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <div class="pb-5">
                            <img class="position-absolute mb-5 bottom-0 fondoo r-1em" src="uploads\system\fondo.png"
                                alt="">
                            <img src="uploads\system\dozer-cinco.png" class="d-block w-100 menu-area r-1em " alt="...">
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="pb-5 align-self-end">
                            <div class=" content  ">
                                <p class="text-white fs-5 fw-bolder">Somos la Institución de mayor <br>
                                    crecimiento en el Perú
                                </p>
                                <div class="text-white fs-6 fw-light lh-sm py-2">Somos la Institución preferidad por
                                    estudiantes y <br> profesionales del sector construcción por nuestra <br>
                                    metodología de
                                    enseñanza en base a proyectos reales. </div>

                                <div class="d-flex flex-column justify-content-start py-2">
                                    <div class="d-flex flex-row">
                                        <div class="pe-2 d-flex align-items-center"> <img
                                                src="uploads\system\icon-flecha.png" alt=""> </div>
                                        <div class="namecont text-white">Más de 15 mil estudiantes formados en Instituto
                                            Dozer
                                        </div>
                                    </div>


                                </div>


                            </div>
                        </div>
                        <div class="pb-5">
                            <img class="position-absolute mb-5 bottom-0 fondoo r-1em" src="uploads\system\fondo.png"
                                alt="">
                            <img src="uploads\system\dozer-seis.png" class="d-block w-100 menu-area r-1em " alt="...">
                        </div>

                    </div>
                </div>
            </div>
</section>
<!-- Conoce mas de Dozer-->

<!-- Testimonios -->
<section>
    <div class="container-xl">

        <p class="text-white fs-3 fw-bolder text-center">Desde nuestros inicios hemos ayudado a más de <br>
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
                    <img src="uploads\system\testimonios\testimonio-uno.png" alt="">
                    <div class=" content">
                        <div class="text-white fs-6 fw-light lh-sm py-2">“Teoría y constante practica, los <br>
                            cursos
                            estan bien organizados y <br> desarrollados”</div>

                        <div class="d-flex justify-content-start">
                            <div class="pe-2"> <img src="uploads\system\docente\pe.png" alt=""> </div>

                            <div class="d-flex flex-column   align-items-start">
                                <div class="nametest">Miriam Corrales</div>
                                <div class="jobtest">Perú</div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="card ">
                    <div class="fondo"></div>
                    <img src="uploads\system\testimonios\testimonio-dos.png" alt="">
                    <div class=" content">
                        <div class="text-white fs-6 fw-light lh-sm py-2">“Las clases son desde cero, <br> hasta el
                            nivel
                            avanzado, aprendi <br> mucho con Dozer”</div>

                        <div class="d-flex justify-content-start">
                            <div class="pe-2"> <img src="uploads\system\docente\co.png" alt=""> </div>

                            <div class="d-flex flex-column ">
                                <div class="nametest">María Angeles</div>
                                <div class="jobtest">Colombia</div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="card ">
                    <img src="uploads\system\testimonios\testimonio-tres.png" alt="">
                    <div class=" content">
                        <div class="text-white fs-6 fw-light lh-sm py-2">“Los docentes son muy <br> preparados, las
                            clases
                            fueron <br> muy sencillos de entender”</div>

                        <div class="d-flex justify-content-start">
                            <div class="pe-2"> <img src="uploads\system\docente\pe.png" alt=""> </div>

                            <div class="d-flex flex-column ">
                                <div class="nametest">Carla Díaz</div>
                                <div class="jobtest">Perú</div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="card ">
                    <img src="uploads\system\testimonios\testimonio-cuatro.png" alt="">
                    <div class=" content">
                        <div class="text-white fs-6 fw-light lh-sm py-2">“La metodología de enseñanza <br> es muy
                            buena,
                            siempre estan <br> asesorandote”</div>

                        <div class="d-flex justify-content-start">
                            <div class="pe-2" style="width: 4rem;"> <img style="width: 90%;border-radius: 5px;"
                                    src="uploads\system\docente\ec.jpg" alt=""> </div>

                            <div class="d-flex flex-column ">
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
                    <img src="uploads\system\testimonios\testimonio-cinco.png" alt="">
                    <div class=" content">
                        <div class="text-white fs-6 fw-light lh-sm py-2">“Las certificaciones me <br> aperturaron
                            muchas
                            puertas en <br> mi entorno laboral”</div>

                        <div class="d-flex justify-content-start">
                            <div class="pe-2" style="width: 4rem;"> <img style="width: 90%;border-radius: 5px;"
                                    src="uploads\system\docente\ar.jpg" alt=""> </div>

                            <div class="d-flex flex-column   align-items-start">
                                <div class="nametest">Grecia Pacoti</div>
                                <div class="jobtest">Argentina</div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="card ">
                    <div class="fondo"></div>
                    <img src="uploads\system\testimonios\testimonio-seis.png" alt="">
                    <div class=" content">
                        <div class="text-white fs-6 fw-light lh-sm py-2">“Todos los cursos que eh <br> seguido son
                            de calidad y desde <br> cero, gracias por ello”</div>

                        <div class="d-flex justify-content-start">
                            <div class="pe-2"> <img src="uploads\system\docente\bo.png" alt=""> </div>

                            <div class="d-flex flex-column ">
                                <div class="nametest">Johana Flores</div>
                                <div class="jobtest">Bolivia</div>
                            </div>
                        </div>


                    </div>

                </div>

                <div class="card ">
                    <img src="uploads\system\testimonios\testimonio-siete.png" alt="">
                    <div class=" content">
                        <div class="text-white fs-6 fw-light lh-sm py-2">“Desde sus docentes hasta sus <br>
                            personales de trabajo todos muy <br> amables”</div>

                        <div class="d-flex justify-content-start">
                            <div class="pe-2"> <img src="uploads\system\docente\mx.png" alt=""> </div>

                            <div class="d-flex flex-column ">
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
        <div class="d-flex flex-row justify-content-between">
            <div class="p-2">
                <p class="text-white fs-4 fw-bolder "> Nunca pares de aprender</p>
                <p class="text-white fw-lighter fs-6 lh-sm">llevamos a todas partes la pación por <br>
                    compartir conocimiento, crear comunidad <br>
                    y construir el futuro de latinoamérica en <br>
                    el área de arquitectura, ingeniería y nuevas <br>
                    técnologias</p>
            </div>
            <div class="p-2 ">
                <div class="d-flex flex-row mb-3">
                    <div class="p-2">
                        <div class="d-flex flex-column mb-3">
                            <div class="border-social m-2">
                                <div class="d-flex flex-row ">
                                    <div class="p-2 bg-white"><img src="uploads\system\social\fb.svg" alt=""></div>
                                    <div class="text-white fw-lighter fs-6 p-2">facebook.com/Instituto Dozer</div>
                                </div>
                            </div>
                            <div class="border-social m-2">
                                <div class="d-flex flex-row ">
                                    <div class="p-2 bg-white"><img src="uploads\system\social\ig.svg" alt=""></div>
                                    <div class="text-white fw-lighter fs-6 p-2">instagram.com/Instituto_Dozer</div>
                                </div>
                            </div>
                            <div class="border-social m-2">
                                <div class="d-flex flex-row ">
                                    <div class="p-2 bg-white"><img src="uploads\system\social\tk.svg" alt=""></div>
                                    <div class="text-white fw-lighter fs-6 p-2">tiktok.com/@instituto.dozer</div>
                                </div>
                            </div>
                            <div class="border-social m-2">
                                <div class="d-flex flex-row ">
                                    <div class="p-2 bg-white"><img src="uploads\system\social\in.svg" alt=""></div>
                                    <div class="text-white fw-lighter fs-6 p-2">linkedin.com/Instituto Dozer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="d-flex flex-column mb-3">
                            <div class="border-social m-2">
                                <div class="d-flex flex-row ">
                                    <div class="p-2 bg-white"><img src="uploads\system\social\yt.svg" alt=""></div>
                                    <div class="text-white fw-lighter fs-6 p-2">youtube.com/Instituto Dozer</div>
                                </div>
                            </div>

                            <div class="border-social m-2">
                                <div class="d-flex flex-row ">
                                    <div class="p-2 bg-white"><img src="uploads\system\social\wssp.svg" alt=""></div>
                                    <div class="text-white fw-lighter fs-6 p-2">whatsapp.com/+51 929 270 912</div>
                                </div>
                            </div>
                            <div class="border-social m-2">
                                <div class="d-flex flex-row ">
                                    <div class="p-2 bg-white"><img src="uploads\system\social\tl.svg" alt=""></div>
                                    <div class="text-white fw-lighter fs-6 p-2">telegram.com/Instituto Dozer</div>
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