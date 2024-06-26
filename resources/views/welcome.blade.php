<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Funerals</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Iconos -->
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Letras -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Archivos CSS del proveedor -->
    <link href="{{asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Archivos CSS de la plantilla -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
</head>

<body>

    <!-- ======= Encabezamiento ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container-fluid">

            <div class="row justify-content-center align-items-center">
                <div class="col-xl-11 d-flex align-items-center justify-content-between">

                    <a href="#" class="logo"><img src="{{asset('img/FUNERALS7.png')}}" alt="" class="img-fluid" style="height: 300px; width: auto;"></a>

                    <nav id="navbar" class="navbar">
                        <ul>
                            <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
                            <li><a class="nav-link scrollto" href="#about">Sobre Nosotros</a></li>
                            <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
                            <li><a class="nav-link scrollto " href="#portfolio">Galeria</a></li>
                            <li><a class="nav-link scrollto " href="#team">Equipo</a></li>
                            <li><a class="nav-link scrollto" href="#contact">Contactanos</a></li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->
                </div>
            </div>

        </div>
    </header><!-- End Header -->

    <!-- ======= hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="12000">

                <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style="background-image: url(img/hero-carousel/imagen_1.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Nuestro apoyo en los momentos difíciles.</h2>
                                <p class="animate__animated animate__fadeInUp">Le brindamos todo nuestro apoyo en estos momentos tan dificiles. <br> Con una llamada le atenderemos, las 24 horas, los 365 días.</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(img/hero-carousel/imagen_2.jpeg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Nuestra cercanía tu tranquilidad.</h2>
                                <p class="animate__animated animate__fadeInUp">Entendemos que cada funeral es diferente porque cada persona <br> es única y cada situación familiar es diferente.</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(img/hero-carousel/imagen_3.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Confíe en nostros y no se preocupe por nada.</h2>
                                <p class="animate__animated animate__fadeInUp">Realizamos todas las gestiones funerarias. A su disposición para asesorarle y ayudarle a resolver cualquier tipo de duda o propblema que le puedan surgir.</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(img/hero-carousel/imagen_4.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Una despedida digna y memorable.</h2>
                                <p class="animate__animated animate__fadeInUp">Con más de 30 años de experiencia, nos aseguramos de que su ser querido reciba una despedida digna y memorable, honrando su recuerdo de manera especial.</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(img/hero-carousel/imagen_5.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Contigo en cada paso honrando a tus seres queridos</h2>
                                <p class="animate__animated animate__fadeInUp">Nuestro compromiso con la atención y la excelencia se refleja a través de nuestros servicios funerarios personalizados, diseñados para celebrar la vida y atesorar los recuerdos de sus seres queridos.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Featured Services Section Section ======= -->
        <section id="featured-services">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 box">
                        <i class="bi bi-file-medical"></i>
                        <h4 class="title"><a href="">Certificación médica</a></h4>
                        <p class="description">Un profesional de la salud visitará la dirección que nos indique con el objetivo de realizar la
                            certificación médica del fallecido e iniciar los trámites funerarios.
                        </p>
                    </div>

                    <div class="col-lg-4 box box-bg">
                        <i class="bi bi-people"></i>
                        <h4 class="title"><a href="">Contrato a domicilio</a></h4>
                        <p class="description">Acercaremos el contrato hasta tu ubicación al momento de hacer el retiro en la carroza fúnebre.</p>
                    </div>

                    <div class="col-lg-4 box">
                        <i class="bi bi-telephone"></i>
                        <h4 class="title"><a href="">Asesoría Legal</a></h4>
                        <p class="description">Puede que tenga muchas inquietudes o no conozca por donde empezar. Llámenos, estamos disponibles
                            telefónicamente las 24 horas, los 7 días de la semana.
                        </p>
                    </div>

                </div>
            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>SOMOS FUNERALS</h3>
                    <p>En el adiós a un ser querido necesitas más que una palabra cálida. Necesitas que la experiencia te acompañe en cada decisión
                        y en cada fase del proceso. Necesitas que te escuchen y te hablen con transparencia desde una mentalidad abierta. En algunos
                        momentos buscas algo más que una mano tendida. Buscas que entiendan lo que necesitas y que se anticipen con la mejor de las soluciones.
                        Buscas sentirte comprendido. Buscas que te cuiden, te apoyen y te sostengan. Quieres poder confiar y no preocuparte de nada. Adelante.
                        Somos Mémora y estamos contigo.</p>
                </header>

                <div class="row about-cols">

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{asset('img/about-mission.jpg')}}" alt="" class="img-fluid">
                                <div class="icon"><i class="bi bi-bar-chart"></i></div>
                            </div>
                            <h2 class="title"><a href="">Nuestra misión</a></h2>
                            <p>
                                Nos dedicamos a proporcionar servicios funerarios personalizados y dignos que honren la vida y el legado de los seres queridos.
                                Nos esforzamos por ser una fuente de consuelo y apoyo para las familias durante su duelo, ofreciendo atención profesional y compasiva en cada paso del camino.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{asset('img/about-plan.jpg')}}" alt="" class="img-fluid">
                                <div class="icon"><i class="bi bi-brightness-high"></i></div>
                            </div>
                            <h2 class="title"><a href="">Nuestro plan</a></h2>
                            <p>
                                Encontrarás una amplia gama de planes y servicios diseñados para brindar apoyo y comodidad en momentos difíciles. Desde la pre-planificación de arreglos funerarios hasta servicios conmemorativos personalizados, estamos aquí para acompañarte en cada paso del camino.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{asset('img/about-vision.jpg')}}" alt="" class="img-fluid">
                                <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                            </div>
                            <h2 class="title"><a href="">Nuestra visión</a></h2>
                            <p>
                                Nos esforzamos por ser reconocidos como líderes en la industria funeraria, yendo más allá de las expectativas convencionales al ofrecer servicios de alta calidad y apoyo compasivo a las familias en sus momentos de pérdida.
                            </p>
                            <br>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services">
            <div class="container" data-aos="fade-up">

                <header class="section-header wow fadeInUp">
                    <h3>Explore Nuestros Servicios Funerarios</h3>
                    <p class="central">Ofrecemos una gama respetuosa e integral de servicios para honrar a sus seres queridos y apoyarlo durante este momento difícil.</p>
                </header>

                <div class="row">

                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bi bi-fire"></i></div>
                        <h4 class="title"><a href="">Servicios de Cremación</a></h4>
                        <p class="description">Ofrecemos servicios completos de cremación, brindando a las familias una alternativa respetuosa y personalizada al entierro tradicional.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-patch-check"></i></div>
                        <h4 class="title"><a href="">Sepelios Tradicionales</a></h4>
                        <p class="description">Nos especializamos en la planificación y coordinación de sepelios tradicionales, proporcionando a las familias un servicio completo y respetuoso que refleje los valores y creencias del difunto.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bi bi-people"></i></div>
                        <h4 class="title"><a href="">Ceremonias Personalizadas</a></h4>
                        <p class="description">Creamos ceremonias conmemorativas únicas y significativas que celebran la vida y el legado del ser querido fallecido.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-card-checklist"></i></div>
                        <h4 class="title"><a href="">Asistencia en la Pre-planificación</a></h4>
                        <p class="description">Ofrecemos asesoramiento experto y asistencia en la pre-planificación de arreglos funerarios, permitiendo a los individuos expresar sus deseos finales y aliviar la carga emocional para sus seres queridos en el futuro.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bi bi-heart"></i></div>
                        <h4 class="title"><a href="">Apoyo en el Duelo</a></h4>
                        <p class="description">Nuestro equipo proporciona recursos y apoyo en el duelo para ayudar a las familias a sobrellevar su pérdida. Desde grupos de apoyo hasta asesoramiento individual, estamos aquí para ofrecer consuelo y orientación durante el proceso de duelo.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bi bi-bezier2"></i></div>
                        <h4 class="title"><a href="">Servicios de Embalsamamiento y Preparación</a></h4>
                        <p class="description">Nos encargamos de la preparación del difunto con profesionalismo y cuidado, ofreciendo servicios de embalsamamiento y preparación estética para garantizar una presentación respetuosa y digna en el servicio funerario.</p>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action">
            <div class="container text-center" data-aos="zoom-in">
                <p>
                    "Trato de aceptar que te fuiste a un lugar mejor, tú sabrás que nunca dejaré de extrañarte y no se cuando me dejará de doler tu partida pero viviré recordándote en todo lo que me enseñaste, Te amaremos por siempre"
                </p>
            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="section-bg">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3 class="section-title">NUESTRA GALERIA</h3>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class=" col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Todo</li>
                        <li data-filter=".filter-movil">Moviles</li>
                        <li data-filter=".filter-urna">Urnas</li>
                        <li data-filter=".filter-ataud">Ataúdes</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-movil">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('img/portafolio/movil1.jpg')}}" class="img-fluid" alt="">
                            <a href="{{asset('img/portafolio/movil1.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Carrozal" ><i class="bi bi-plus"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Carrozal</a></h4>
                            <p>MOVIL</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-ataud">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('img/portafolio/ataud1.jpg')}}" class="img-fluid" alt="">
                            <a href="{{asset('img/portafolio/ataud1.jpg')}}"  class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Lincoln copa tres de cedros"><i class="bi bi-plus"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Lincoln copa tres de cedros</a></h4>
                            <p>Ataud</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-movil">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('img/portafolio/movil2.png')}}" class="img-fluid" alt="">
                            <a href="{{asset('img/portafolio/movil2.png')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Carro porta flores"><i class="bi bi-plus"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Carro porta flores</a></h4>
                            <p>MOVIL</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-urna">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('img/portafolio/urna2.jpg')}}" class="img-fluid" alt="">
                            <a href="{{asset('img/portafolio/urna2.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Caliz mediano"><i class="bi bi-plus"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Caliz mediano</a></h4>
                            <p>Urna</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-ataud">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('img/portafolio/ataud2.jpg')}}" class="img-fluid" alt="">
                            <a href="{{asset('img/portafolio/ataud2.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Imperial stándar básico"><i class="bi bi-plus"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Imperial stándar básico</a></h4>
                            <p>Ataud</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-movil">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('img/portafolio/movil3.png')}}" class="img-fluid" alt="">
                            <a href="{{asset('img/portafolio/movil3.png')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Vehículo de acompañamiento"><i class="bi bi-plus"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Vehículo de acompañamiento</a></h4>
                            <p>Movil</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-urna">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('img/portafolio/urna3.jpg')}}" class="img-fluid" alt="">
                            <a href="{{asset('img/portafolio/urna3.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Caliz tallado ovalado"><i class="bi bi-plus"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Caliz tallado ovalado</a></h4>
                            <p>Urna</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-urna">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('img/portafolio/urna4.jpg')}}" class="img-fluid" alt="">
                            <a href="{{asset('img/portafolio/urna4.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Cofre con cruz dorada"><i class="bi bi-plus"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Cofre con cruz dorada</a></h4>
                            <p>Urna</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-ataud">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('img/portafolio/ataud3.jpg')}}" class="img-fluid" alt="">
                            <a href="{{asset('img/portafolio/ataud3.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Fígaro redondes francés"><i class="bi bi-plus"></i></a>
                            <a href="#" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="#">Fígaro redondes francés</a></h4>
                            <p>Ataud</p>
                        </div>
                    </div>
                </div>

            </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Our Clients Section ======= -->
        <section id="clients">
            <div class="container" data-aos="zoom-in">

                <header class="section-header">
                    <h3>Nuestros aliados</h3>
                </header>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{asset('img/clients/client-1.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('img/clients/client-2.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('img/clients/client-3.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('img/clients/client-4.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('img/clients/client-5.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('img/clients/client-6.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('img/clients/client-7.png')}}" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('img/clients/client-8.png')}}" class="img-fluid" alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Our Clients Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="section-bg">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>Testimonios</h3>
                </header>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{asset('img/testimonial-1.jpg')}}" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <p>
                                    <img src="{{asset('img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                    <img src="{{asset('img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{asset('img/testimonial-2.jpg')}}" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <p>
                                    <img src="{{asset('img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                    <img src="{{asset('img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{asset('img/testimonial-3.jpg')}}" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <img src="{{asset('img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <img src="{{asset('img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{asset('img/testimonial-4.jpg')}}" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <p>
                                    <img src="{{asset('img/quote-sign-left')}}.png" class="quote-sign-left" alt="">
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                    <img src="{{asset('img/quote-sign-right')}}.png" class="quote-sign-right" alt="">
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{asset('img/testimonial-5.jpg')}}" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <p>
                                    <img src="{{asset('img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                    <img src="{{asset('img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        <section id="team">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3>NUESTRO EQUIPO</h3>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{asset('img/team-1.jpg')}}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Walter White</h4>
                                    <span>Chief Executive Officer</span>
                                    <div class="social">
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{asset('img/team-2.jpg')}}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Product Manager</span>
                                    <div class="social">
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <img src="{{asset('img/team-3.jpg')}}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>William Anderson</h4>
                                    <span>CTO</span>
                                    <div class="social">
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                            <img src="{{asset('img/team-4.jpg')}}" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Amanda Jepson</h4>
                                    <span>Accountant</span>
                                    <div class="social">
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h3>Contáctenos</h3>
                    <p>¿Tienes alguna duda? Escríbenos y déjanos tu mensaje. Nos pondremos en contacto.</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="bi bi-calendar-week"></i>
                            <h3>Horario</h3>
                            <address>
                                Horario de atención <br>
                                Lunes a Viernes: 9:00 a.m. a 5:00 p.m. <br>
                                Sábado, Domingo y Feriado: 8:00 a.m. a 5:00 p.m.
                            </address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="bi bi-phone"></i>
                            <h3>Número de teléfono</h3>
                            <p><a href="tel:+51999999999">+51 999 999 999</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="bi bi-envelope"></i>
                            <h3>Correo electrónico</h3>
                            <p><a href="mailto:info@example.com">funerals@gmail.com</a></p>
                        </div>
                    </div>

                </div>

                <div class="form">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Tu correo electrónico" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="text" id="text" placeholder="Tu número de identidad" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="text" id="text" placeholder="Tu numero telefonico" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Descripción" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Cargando</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Tu mensaje ha sido enviado.¡Gracias!</div>
                        </div>
                        <div class="text-center"><button type="submit">Enviar mensaje</button></div>
                    </form>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">

                        <img src="{{asset('img/FUNERALS8.png')}}" alt="" class="img-fluid" style="height: auto; width: auto;">
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Enlaces útiles</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Inicio</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Sobre nosotros</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Servicios</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Términos de servicio</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Política de privacidad</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contáctenos</h4>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br>
                            <strong>Teléfono:</strong> +51 999 999 999<br>
                            <strong>Correo electrónico:</strong> funerals@gmail.com<br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                    <!-- <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Nuestro boletín</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Suscribir">
                        </form>
                    </div> -->

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Derechos de autor <strong>Funerals</strong>. Reservados todos los derechos
            </div>
            <div class="credits">
                <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
                Diseñada con <a href="#">Bootstrap</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('vendor/aos/aos.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
