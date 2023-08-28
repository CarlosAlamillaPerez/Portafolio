<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página Web de Carlos Alamilla | Desarrollador WEB">
    <meta name="author" content="Devcrud">
    <title>Carlos Alamilla | Portafolio Digital</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <script src="https://kit.fontawesome.com/93f1b14a54.js" crossorigin="anonymous"></script>
    <!-- Bootstrap + Carlos Alamilla main styles -->
    <link rel="stylesheet" href="assets/css/carl.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <header class="header">
        <div class="container">
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-facebook"
                            aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-twitter"
                            aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-google"
                            aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-instagram"
                            aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-github"
                            aria-hidden="true"></i></a></li>
            </ul>
            <div class="header-content">
                <h4 class="header-subtitle">Hola, soy</h4>
                <h1 class="header-title">Carlos Alamilla</h1>
                <h6 class="header-mono">Front-End | Developer</h6>
                {{-- <button class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"></i>Descargar Resumen</button> --}}
            </div>
        </div>
    </header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">Acerca de mi</a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link">Resumen</a>
                    </li>
                </ul>
                <ul class="navbar-nav brand">
                    <img src="assets/imgs/avatar2.jpg" alt="" class="brand-img">
                    <li class="brand-txt">
                        <h5 class="brand-title">Carlos Alamilla</h5>
                        <div class="brand-subtitle">Web Designer | Developer</div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link">Portafolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog" class="nav-link">Proyectos</a>
                    </li>
                    <li class="nav-item last-item">
                        <a href="#contact" class="nav-link">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div id="about" class="row about-section">
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">¿Quién soy?</h3>
                <span class="line mb-5"></span>
                <h5 class="mb-3">A Web Designer / Developer</h5>
                <p class="mt-20">Recido en Villahermosa Tabasco, tengo 26 años, estudié Ingenieríe en Sistemas
                    Computacionales en el Instituto Tecnológico México Campus Villahermosa, actualmente estudio la
                    Maestría en Tics con especialización en Ingeniería en Software.</p>
                <button id="descargar_cv" class="btn btn-outline-danger">
                    <i class="icon-down-circled2 ">Descargar mi CV</i>
                </button>
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Información Personal</h3>
                <span class="line mb-5"></span>
                <ul class="mt40 info list-unstyled">
                    <li><span>Cumpleaños</span> : 14/04/1997</li>
                    <li><span>Email</span> : carlosalamillap@gmail.com</li>
                    <li><span>Celular</span> : +(52) 9932149314</li>
                    <li><span>Instagram</span> : @carlos_alamilla</li>
                    <li><span>Dirección</span> : Carlos Greene Col. Atasta #229</li>
                </ul>
                <ul class="social-icons pt-3">
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-facebook"
                                aria-hidden="true"></i></a></li>
                    {{-- <li class="social-item"><a class="social-link" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li> --}}
                    {{-- <li class="social-item"><a class="social-link" href="#"><i class="ti-google" aria-hidden="true"></i></a></li> --}}
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-instagram"
                                aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-github"
                                aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Mi experiencia</h3>
                <span class="line mb-5"></span>
                <div class="row">
                    <div class="col-1 text-danger pt-1">
                        <div class="row"><i class="ti-stats-up icon-lg"></div></i>
                    </div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Publicidad Digital</h6>
                        <p class="subtitle">Poseo conocimientos en el campo de la publicidad digital.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1">
                        <div class="row"><i class="fa-solid fa-p icon-lg"></i><i class="fa-solid fa-s"
                                style="margin-top: 0.9rem"></i></div>
                    </div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Adobe Photoshop</h6>
                        <p class="subtitle">Manejo de la herramienta con excelente habilidad.</p>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 text-danger pt-1">
                        <div class="row"><i class="ti-paint-bucket icon-lg"></div></i>
                    </div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Diseñador Web</h6>
                        <p class="subtitle">Tengo experiencia, estoy familiarizado con los conceptos y herramientas
                            para crear sitios web.</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Resume Section-->
    <section class="section" id="resume">
        <div class="container">
            <h2 class="mb-5"><span class="text-danger">Mi</span> Resumen</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="mt-2">
                                <h4>Experiencia</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body">
                            {{-- <h6 class="title text-danger">Ago 2023 - Present</h6>
                            <P>Estudiante de Maestría</P>
                            <P class="subtitle">Actualmente estudio la Maestría en Tecnologías de la Información,
                                enfocada a la Ingeniería en Software, en el Instituto Tecnológico de México Campus
                                Villahermosa, Tabasco.</P>
                            <hr> --}}
                            <h6 class="title text-danger">2022 - 2023</h6>
                            <P>Gerente General | ZyanRooms</P>
                            <P class="subtitle">Durante mi tiempo como Gerente General en el hotel ZyanRooms,
                                desempeñé una serie de responsabilidades cruciales que contribuyeron al éxito operativo
                                y a la satisfacción de nuestros huéspedes. Mi enfoque se centró en garantizar una
                                experiencia excepcional para cada cliente, al tiempo que supervisaba la implementación
                                de políticas y procedimientos de la empresa.
                            </P>
                            <hr>
                            <h6 class="title text-danger">2022- 2023</h6>
                            <P>Full-Stack Developer</P>
                            <P class="subtitle">En mi rol como Ingeniero en Sistemas en la Secretaría de Educación del
                                Estado de Tabasco (SETAB), tuve el privilegio de contribuir al avance de la tecnología
                                educativa a través del desarrollo de soluciones innovadoras que optimizaron
                                significativamente los procesos educativos. Durante mi tiempo en SETAB, logré
                                importantes hitos que redefinieron la eficiencia y calidad en la gestión educativa.
                            </P>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="mt-2">
                                <h4>Educación</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="title text-danger">2023 - Presente</h6>
                            <P>Estudiante de Maestría</P>
                            <P class="subtitle">Actualmente estudio la Maestría en Tecnologías de la Información,
                                enfocada a la Ingeniería en Software, en el Instituto Tecnológico de México Campus
                                Villahermosa, Tabasco.</P>
                            <hr>
                            <h6 class="title text-danger">2018 - 2023</h6>
                            <P>Egresado de la Licenciatura en Ingeniería en Sistemas Computacionales</P>
                            <P class="subtitle">Graduado en Ingeniería en Sistemas Computacionales, con sólida
                                formación en tecnología y resolución de problemas. Comprometido con la innovación y el
                                desarrollo de soluciones eficientes.</P>
                            <hr>
                            {{-- <h6 class="title text-danger">2015 - 2016</h6>
                            <P>High School Degree</P>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum
                                recusandae, cupiditate ullam dolor ratione repellendus.aliquid repudiandae saepe!.</P> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2">Habilidades</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body pb-2">
                            <h6>HTL5 &amp; CSS3</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 85%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>JavaScript</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>PHP</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 65%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>SQL</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 65%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Microsoft Office</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 85%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Adobe Photoshop</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Adobe After Effects</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 65%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Sony Vegas Studio Pro19</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 73%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            {{-- <h6>Tempora</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <h4 class="mt-2">Idiomas</h4>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="card-body pb-2">
                            <h6>Español</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <h6>Ingles</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 50%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            {{-- <h6>French</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="section bg-dark text-center">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-lg-3">
                    <div class="row ">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-alarm-clock icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">500</h1>
                            <p class="text-light mb-1">Hours Worked</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-layers-alt icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">50K</h1>
                            <p class="text-light mb-1">Project Finished</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-face-smile icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">200K</h1>
                            <p class="text-light mb-1">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-heart-broken icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">2k</h1>
                            <p class="text-light mb-1">Coffee Drinked</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="service">
        <div class="container">
            <h2 class="mb-5 pb-4"><span class="text-danger">My</span> Services</h2>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="ti-vector text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Ullam</h5>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="ti-write text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Asperiores</h5>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="ti-package text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Tempora</h5>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="ti-map-alt text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Provident</h5>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="ti-bar-chart text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Consectetur</h5>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-5">
                       <div class="card-header has-icon">
                            <i class="ti-support text-danger" aria-hidden="true"></i>
                        </div>
                        <div class="card-body px-4 py-3">
                            <h5 class="mb-3 card-title text-dark">Veritatis</h5>
                            <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam commodi provident, dolores reiciendis enim pariatur error optio, tempora ex, nihil nesciunt! In praesentium sunt commodi, unde ipsam ex veritatis laboriosam dolor asperiores suscipit blanditiis, dignissimos quos nesciunt nulla aperiam officia.</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="section bg-custom-gray" id="price">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">Packs</span> Pricing</h1>
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-3">
                    <div class="price-card text-center mb-4">
                        <h3 class="price-card-title">Free</h3>
                        <div class="price-card-cost">
                            <sup class="ti-money"></sup>
                            <span class="num">0</span>
                            <span class="date">MO</span>
                        </div>
                        <ul class="list">
                            <li class="list-item">5 <span class="text-muted">Project</span></li>
                            <li class="list-item">1GB <span class="text-muted">Storage</span></li>
                            <li class="list-item"><span class="text-muted">No Domain</span></li>
                            <li class="list-item">1 <span class="text-muted">User</span></li>
                        </ul>
                        <button class="btn btn-primary btn-rounded w-lg">Subscribe</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="price-card text-center mb-4">
                        <h3 class="price-card-title">Basic</h3>
                        <div class="price-card-cost">
                            <sup class="ti-money"></sup>
                            <span class="num">10</span>
                            <span class="date">MO</span>
                        </div>
                        <ul class="list">
                            <li class="list-item">50 <span class="text-muted">Project</span></li>
                            <li class="list-item">10GB <span class="text-muted">Storage</span></li>
                            <li class="list-item">1<span class="text-muted">Domain</span></li>
                            <li class="list-item">5 <span class="text-muted">User</span></li>
                        </ul>
                        <button class="btn btn-primary btn-rounded w-lg">Subscribe</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="price-card text-center price-card-requried mb-4">
                        <h3 class="price-card-title">Exclusive</h3>
                        <div class="price-card-cost">
                            <sup class="ti-money"></sup>
                            <span class="num">25</span>
                            <span class="date">MO</span>
                        </div>
                        <ul class="list">
                            <li class="list-item">150 <span class="text-muted">Project</span></li>
                            <li class="list-item">15GB <span class="text-muted">Storage</span></li>
                            <li class="list-item">5<span class="text-muted"> Domain</span></li>
                            <li class="list-item">15<span class="text-muted">User</span></li>
                        </ul>
                        <button class="btn btn-primary btn-rounded w-lg">Subscribe</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="price-card text-center mb-4">
                        <h3 class="price-card-title">Pro</h3>
                        <div class="price-card-cost">
                            <sup class="ti-money"></sup>
                            <span class="num">99</span>
                            <span class="date">MO</span>
                        </div>
                        <ul class="list">
                            <li class="list-item">500 <span class="text-muted">Project</span></li>
                            <li class="list-item">1000GB <span class="text-muted">Storage</span></li>
                            <li class="list-item">10<span class="text-muted"> Domain</span></li>
                            <li class="list-item">Unlimite<span class="text-muted">User</span></li>
                        </ul>
                        <button class="btn btn-primary btn-rounded w-lg">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-dark py-5">
        <div class="container text-center">
            <h2 class="text-light mb-5 font-weight-normal">I Am Available For FreeLance</h2>
            <button class="btn bg-primary w-lg" >Hire me</button>
        </div>
    </section> --}}

    <!-- Portfolio Section -->
    <section class="section bg-custom-gray" id="portfolio">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">Mi</span> Portafolio de Diseños</h1>
            <div class="portfolio">
                <div class="filters">
                    <a href="#" data-filter=".web" class="active">
                        GENERAL
                    </a>
                    <a href="#" data-filter=".exclusivos">
                        DISEÑOS EXCLUSIVOS
                    </a>
                    <a href="#" data-filter=".privadas">
                        COLABORACIONES PRIVADAS
                    </a>
                </div>
                <div class="portfolio-container">
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="assets/imgs/amigos-1.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/amigos-1.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">EXCLUSIVOS</h6>
                                    <p class="subtitle">¡FLYERS DE ANIMACIONES DE EVENTOS INFANTILES!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="assets/imgs/amigos-2.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/amigos-2.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">EXCLUSIVOS</h6>
                                    <p class="subtitle">¡ISOLOGO PARA TU EMPRESA PRIVADA!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="assets/imgs/amigos-3.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/amigos-3.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">EXCLUSIVOS</h6>
                                    <p class="subtitle">¡INVITACIONES PARA FIESTAS!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="assets/imgs/privado-11.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/privado-11.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">PRIVADOS</h6>
                                    <p class="subtitle">FLYERS PARA EMPRESAS PRIVADAS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="assets/imgs/privado-7.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/privado-7.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">PRIVADOS</h6>
                                    <p class="subtitle">MENUS DE COMIDAS PARA PARA TU RESTAURANTE</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="assets/imgs/amigos-4.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/amigos-4.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">EXCLUSIVOS</h6>
                                    <p class="subtitle">¡ISOLOGO PARA TU EMPRESA PRIVADA!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 exclusivos">
                        <div class="portfolio-item">
                            <img src="assets/imgs/amigos-1.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/amigos-1.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">EXCLUSIVOS</h6>
                                    {{-- <p class="subtitle">Expedita corporis doloremque velit in totam!</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 exclusivos">
                        <div class="portfolio-item">
                            <img src="assets/imgs/amigos-6.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/amigos-6.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">EXCLUSIVOS</h6>
                                    {{-- <p class="subtitle">Expedita corporis doloremque velit in totam!</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 exclusivos">
                        <div class="portfolio-item">
                            <img src="assets/imgs/amigos-3.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/amigos-3.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">EXCLUSIVOS</h6>
                                    {{-- <p class="subtitle">Expedita corporis doloremque velit in totam!</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 exclusivos">
                        <div class="portfolio-item">
                            <img src="assets/imgs/amigos-4.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/amigos-4.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">EXCLUSIVOS</h6>
                                    {{-- <p class="subtitle">Expedita corporis doloremque velit in totam!</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 exclusivos">
                        <div class="portfolio-item">
                            <img src="assets/imgs/amigos-5.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/amigos-5.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">EXCLUSIVOS</h6>
                                    {{-- <p class="subtitle">Expedita corporis doloremque velit in totam!</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 exclusivos">
                        <div class="portfolio-item">
                            <img src="assets/imgs/amigos-2.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/amigos-2.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">EXCLUSIVOS</h6>
                                    {{-- <p class="subtitle">Expedita corporis doloremque velit in totam!</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 exclusivos">
                        <div class="portfolio-item">
                            <img src="assets/imgs/amigos-7.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/amigos-7.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">EXCLUSIVOS</h6>
                                    {{-- <p class="subtitle">Expedita corporis doloremque velit in totam!</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 privadas">
                        <div class="portfolio-item">
                            <img src="assets/imgs/privado-1.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/privado-1.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">PRIVADOS</h6>
                                    {{-- <p class="subtitle">Expedita corporis doloremque velit in totam!</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 privadas">
                        <div class="portfolio-item">
                            <img src="assets/imgs/privado-2.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/privado-2.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">PRIVADOS</h6>
                                    {{-- <p class="subtitle">Expedita corporis doloremque velit in totam!</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 privadas">
                        <div class="portfolio-item">
                            <img src="assets/imgs/privado-3.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/privado-3.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">PRIVADOS</h6>
                                    {{-- <p class="subtitle">Expedita corporis doloremque velit in totam!</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 privadas">
                        <div class="portfolio-item">
                            <img src="assets/imgs/privado-4.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/privado-4.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">PRIVADOS</h6>
                                    {{-- <p class="subtitle">Expedita corporis doloremque velit in totam!</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 privadas">
                        <div class="portfolio-item">
                            <img src="assets/imgs/privado-5.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/privado-5.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">PRIVADOS</h6>
                                    {{-- <p class="subtitle">Expedita corporis doloremque velit in totam!</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 privadas">
                        <div class="portfolio-item">
                            <img src="assets/imgs/privado-6.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/privado-6.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">PRIVADOS</h6>
                                    {{-- <p class="subtitle">Expedita corporis doloremque velit in totam!</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 privadas">
                        <div class="portfolio-item">
                            <img src="assets/imgs/privado-7.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/privado-7.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">PRIVADOS</h6>
                                    {{-- <p class="subtitle">Expedita corporis doloremque velit in totam!</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 privadas">
                        <div class="portfolio-item">
                            <img src="assets/imgs/privado-8.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/privado-8.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">PRIVADOS</h6>
                                    {{-- <p class="subtitle">Expedita corporis doloremque velit in totam!</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 privadas">
                        <div class="portfolio-item">
                            <img src="assets/imgs/privado-9.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/privado-9.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">PRIVADOS</h6>
                                    {{-- <p class="subtitle">Expedita corporis doloremque velit in totam!</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 privadas">
                        <div class="portfolio-item">
                            <img src="assets/imgs/privado-10.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/privado-10.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">PRIVADOS</h6>
                                    {{-- <p class="subtitle">Expedita corporis doloremque velit in totam!</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 privadas">
                        <div class="portfolio-item">
                            <img src="assets/imgs/privado-11.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/privado-11.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">PRIVADOS</h6>
                                    {{-- <p class="subtitle">Expedita corporis doloremque velit in totam!</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 privadas">
                        <div class="portfolio-item">
                            <img src="assets/imgs/privado-12.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/privado-12.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">PRIVADOS.</h6>
                                    {{-- <p class="subtitle">Expedita corporis doloremque velit in totam!</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 privadas">
                        <div class="portfolio-item">
                            <img src="assets/imgs/privado-13.jpg" class="img-fluid"
                                alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="assets/imgs/privado-13.jpg"></a>
                                <div class="text-holder">
                                    <h6 class="title">PRIVADOS</h6>
                                    {{-- <p class="subtitle">Expedita corporis doloremque velit in totam!</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End of portfolio section -->

    <section class="section" id="blog">
        <div class="container">
            <h2 class="mb-5"><span class="text-danger">Mis</span> Proyectos</h2>
            <div class="row">
                <div class="blog-card">
                    <div class="img-holder">
                        <img src="assets/imgs/bolsa-virtual.jpg"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="content-holder">
                        <h6 class="title">Bolsa de Trabajo Virtual</h6>
                        {{-- <p class="post-details">
                            <a href="#">By: Admin</a>
                            <a href="#"><i class="ti-heart text-danger"></i> 234</a>
                            <a href="#"><i class="ti-comment"></i> 123</a>
                        </p> --}}
                        <p>El reporte a continuación presenta un sistema web que fue implementado en uno de los módulos
                            del sistema WebCorex, un sistema creado previamente para la <b>Secretaría de Educación del
                            Estado de Tabasco</b>. El módulo implementado fue denominado “Bolsa de trabajo”. Su función
                            principal fue servir como vínculo entre la secretaría de educación y los maestros docentes
                            que deseaban formar parte de instituciones gubernamentales. En esta página web, los
                            interesados tenían la posibilidad de cargar su información personal y profesional para su
                            evaluación. De esta manera, los docentes se integraron en la bolsa virtual de trabajo, lo
                            que les permitió encontrar oportunidades laborales cerca de sus residencias, si así lo
                            deseaban.

                            Al mismo tiempo, se presentó a la Secretaría de Educación del Estado de Tabasco la extensión
                            de su alcance como institución gubernamental, la visión de la empresa, sus objetivos y se
                            expuso la principal problemática a resolver. De esta forma, se justificó el proyecto como
                            una solución definitiva.</p>

                        <a href="#" id="descargar_bolsa_virtual" class="read-more">Leer más...<i class="ti-angle-double-right"></i></a>
                    </div>
                </div><!-- end of blog wrapper -->

                <!-- blog-card -->
                {{-- <div class="blog-card">
                    <div class="img-holder">
                        <img src="assets/imgs/blog2.jpg"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="content-holder">
                        <h6 class="title">Explicabo illo</h6>

                        <p class="post-details">
                            <a href="#">By: Admin</a>
                            <a href="#"><i class="ti-heart text-danger"></i> 456</a>
                            <a href="#"><i class="ti-comment"></i> 264</a>
                        </p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit excepturi laborum enim,
                            vitae ipsam atque eum, ad iusto consequuntur voluptas, esse doloribus. Perferendis porro
                            quisquam vitae exercitationem aliquid, minus eos laborum repudiandae, cumque debitis iusto
                            omnis praesentium? Laborum placeat sit adipisci illum tempore maxime, esse qui quae?
                            Molestias excepturi corporis similique doloribus. Esse vitae earum architecto nulla non
                            dolores illum at perspiciatis quod, et deleniti cupiditate reiciendis harum facere, delectus
                            eum commodi soluta distinctio sit repudiandae possimus sunt. Ipsum, rem.</p>

                        <a href="#" class="read-more">Leer más...<i class="ti-angle-double-right"></i></a>
                    </div>
                </div><!-- end of blog wrapper --> --}}
                <!-- blog-card -->
                {{-- <div class="blog-card">
                    <div class="img-holder">
                        <img src="assets/imgs/blog3.jpg"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="content-holder">
                        <h4 class="title">Porro Quisqua</h4>

                        <p class="post-details">
                            <a href="#">By: Admin</a>
                            <a href="#"><i class="ti-heart text-danger"></i> 431</a>
                            <a href="#"><i class="ti-comment"></i> 312</a>
                        </p>

                        <p> consectetur adipisicing elit. Impedit excepturi laborum enim, vitae ipsam atque eum, ad
                            iusto consequuntur voluptas, esse doloribus. Perferendis porro quisquam vitae exercitationem
                            aliquid, minus eos laborum repudiandae, cumque debitis iusto omnis praesentium? Laborum
                            placeat sit adipisci illum tempore maxime, esse qui quae? Molestias excepturi corporis
                            similique doloribus. Esse vitae earum architecto nulla non dolores illum at perspiciatis
                            quod, et deleniti cupiditate reiciendis harum facere, delectus eum commodi soluta distinctio
                            sit repudiandae possimus sunt. Ipsum, rem.</p>

                        <a href="#" class="read-more">Read more <i class="ti-angle-double-right"></i></a>
                    </div>
                </div><!-- end of blog wrapper --> --}}

            </div>
        </div>
    </section>

    <div class="section contact" id="contact">
        <div id="map" class="map"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form-card">
                        <h4 class="contact-title">Send a message</h4>
                        <form action="">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Name *" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email *" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id=" placeholder="Message *" rows="7" required></textarea>
                            </div>
                            <div class="form-group ">
                                <button type="submit" class="form-control btn btn-primary">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-card">
                        <h4 class="contact-title">Get in touch</h4>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-mobile icon-md"></i>
                            </div>
                            <div class="col-10 ">
                                <h6 class="d-inline">Phone : <br> <span class="text-muted">+ (123) 456-789</span></h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-map-alt icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Address :<br> <span class="text-muted">12345 Fake ST NoWhere AB
                                        Country.</span></h6>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-envelope icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Email :<br> <span class="text-muted">info@website.com</span></h6>
                            </div>
                        </div>
                        <ul class="social-icons pt-4">
                            <li class="social-item"><a class="social-link text-dark" href="#"><i
                                        class="ti-facebook" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i
                                        class="ti-twitter" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i
                                        class="ti-google" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i
                                        class="ti-instagram" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i
                                        class="ti-github" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 text-light">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script> Created With <i class="ti-heart text-danger"></i> By <a
                    href="http://devcrud.com" target="_blank"><span class="text-danger"
                        title="Bootstrap 4 Themes and Dashboards">DevCRUD</span></a>
            </p>
        </div>
    </footer>

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope  -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- Google mpas -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- CarlosAlamilla js -->
    <script src="assets/js/carlosalamilla.js"></script>

    <script>
        document.getElementById('descargar_cv').addEventListener('click', function() {
            const pdfUrl = 'assets/docs/CarlosCV.pdf'; // Ruta del pdf

            window.open(pdfUrl, '_blank'); // Abre la pdfn en una pestaña nueva
        });
        document.getElementById('descargar_bolsa_virtual').addEventListener('click', function() {
            const pdfUrl = 'assets/docs/BolsaVirtual.pdf'; // Ruta del pdf

            window.open(pdfUrl, '_blank'); // Abre la pdfn en una pestaña nueva
        });
    </script>
</body>

</html>
