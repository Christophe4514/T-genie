@extends('client_layout.client')

@section('title')
    Home
@endsection

@section('content')
    <!-- start content -->

    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image: url(frontend/images/atg/8.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2">BESOIN D'UN TRAVAIL DE QUALITE &amp; RESPLENDISSANT ?</h1>
                            <h2 class="subheading mb-4">nous sommes là pour vous servir &amp;
                                vous aider.</h2>
                            <p><a href="#" class="btn btn-primary">View Details</a></p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image: url(frontend/images/atg/3.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="col-sm-12 ftco-animate text-center">
                            <h1 class="mb-2">Académie Technique des Génies</h1>
                            <h2 class="subheading mb-4">vous offre un service de qualité basé sur le profesionnalisme &amp;
                                la confiance </h2>
                            <p><a href="#" class="btn btn-primary">Voir Plus</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-5 bg-light ftco-section">
        <div class="text-center container row slider-text justify-content-center align-items-center">
            <h3 class="mb-2 heading my-4">Secteurs d'Activités</h3>
        </div>
        <div class="row mx-auto ftco-animate">
            <div class="col-sm-3">
                <a href="#">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text text-dark">With supporting text below as a natural lead-in to additional
                                content.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#">
                    <div class="card bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text text-dark">With supporting text below as a natural lead-in to additional
                                content.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#">
                    <div class="card bg-info">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text text-dark">With supporting text below as a natural lead-in to additional
                                content.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a href="#">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text text-dark">With supporting text below as a natural lead-in to additional
                                content.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="bg-secondary ftco-section">
        <div class="container ftco-animate">
            <div class="text-center row slider-text justify-content-center align-items-center">
                <h3 class="mb-2 p-3 heading text-success text-center">A Propos de Nous</h3>
                <h4 class="subheading mb-4">Nous sommes <span><strong style="color: orange;">l'ACADEMIE TECHNIQUE DES
                            GENIES.</strong></span> <br>
                    L'ATG est une entreprise d'Etudes, de Conception et de Construction, de nationnalité congolaise
                    immatriculée et composée principalement des jeunes ingénieurs civils spécialisés dans le domaines de
                    batiments et travaux publiques et dans le domaine de l'informatique et électronique.
                </h4>
                <p><a href="#" class="btn btn-primary">Voir Plus</a></p>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-transparent">
        <div class="container">
            <div class="text-center">
                <h3 class="heading text-success" style="font-size: 2rem;">Nous avons des Valeurs </h3>
            </div>
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-between">
                    <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                        <img src="frontend/images/atg/logo1.png" class="img-fluid" alt="" data-aos="zoom-in">
                    </div>
                    <div class="col-lg-6 pt-5 pt-lg-0">
                        <p class="text-dark" style="font-size: 1.2rem;">
                            {{-- <i class="icon-external-link text-danger"></i> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="20" fill="currentColor"
                                class="bi bi-signpost-split-fill text-danger" viewBox="0 0 16 16">
                                <path
                                    d="M7 16h2V6h5a1 1 0 0 0 .8-.4l.975-1.3a.5.5 0 0 0 0-.6L14.8 2.4A1 1 0 0 0 14 2H9v-.586a1 1 0 0 0-2 0V7H2a1 1 0 0 0-.8.4L.225 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4h5v5z" />
                            </svg>
                            4 principes nous permettent d'assurer l'harmonie que ce soit au sein
                            de notre structure ou avec nos clients.
                        </p>
                        <div class="row">
                            <div class="col-md-6 ">
                                <h4 style="font-size: 2rem;">La Créativité</h4>
                                {{-- <i class="icon-edit text-warning"></i> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="25" fill="currentColor"
                                    class="bi bi-boxes text-danger" viewBox="0 0 16 16">
                                    <path
                                        d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z" />
                                </svg>
                                <p style="font-size: 1.2rem;">Originalité dans nos propositions de solutions aux problèmes
                                    posés.</p>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <h4 style="font-size: 2rem;">La passion</h4>
                                {{-- <i class="icon-exchange text-warning"></i> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="25" fill="currentColor"
                                    class="bi bi-house-heart-fill text-danger" viewBox="0 0 16 16">
                                    <path
                                        d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707L7.293 1.5Z" />
                                    <path
                                        d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z" />
                                </svg>
                                <p style="font-size: 1.2rem;">Nous accomplissons notre travail avec amour et énergie</p>
                            </div>

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-people"></i>
                                <h4 style="font-size: 1.8rem;">La Collaboration</h4>
                                {{-- <i class="icon-share text-warning"></i> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="25"
                                    fill="currentColor" class="bi bi-arrows-fullscreen text-danger" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z" />
                                </svg>
                                <p style="font-size: 1.2rem;">Mise en commun de nos idées et connaissances pour atteindre
                                    nos objectifs de la manière
                                    la plus
                                    efficace et efficiente.</p>
                            </div>

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-receipt"></i>
                                <h4 style="font-size: 2rem;">La rigueur</h4>
                                {{-- <i class="icon-cogs text-danger" style="width: 35px; height:25px;"></i> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="25"
                                    fill="currentColor" class="bi bi-hourglass-top text-danger" viewBox="0 0 16 16">
                                    <path
                                        d="M2 14.5a.5.5 0 0 0 .5.5h11a.5.5 0 1 0 0-1h-1v-1a4.5 4.5 0 0 0-2.557-4.06c-.29-.139-.443-.377-.443-.59v-.7c0-.213.154-.451.443-.59A4.5 4.5 0 0 0 12.5 3V2h1a.5.5 0 0 0 0-1h-11a.5.5 0 0 0 0 1h1v1a4.5 4.5 0 0 0 2.557 4.06c.29.139.443.377.443.59v.7c0 .213-.154.451-.443.59A4.5 4.5 0 0 0 3.5 13v1h-1a.5.5 0 0 0-.5.5zm2.5-.5v-1a3.5 3.5 0 0 1 1.989-3.158c.533-.256 1.011-.79 1.011-1.491v-.702s.18.101.5.101.5-.1.5-.1v.7c0 .701.478 1.236 1.011 1.492A3.5 3.5 0 0 1 11.5 13v1h-7z" />
                                </svg>
                                <p style="font-size: 1.2rem;">Travail avec méthode et professionnalisme pour assurer
                                    l'excellence et le respect de nos
                                    engagements
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section id="about" class="about section">

    </section><!-- End About Section -->
    <section class="ftco-section bg-secondary">
        <div class="container">
            <div class="text-center">
                <h3 class="heading">Notre Expertise</h3>
                <p><span class="text-center">Nous sommes expert en : </span></p>
            </div>
            <div class="row mx-auto ftco-animate">
                <div class="col-sm-3">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Réalisation des Etudes avant Projet <br> <br></h5>
                            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">Elaboration des Etudes de projets <br> <br></h5>
                            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-info">
                        <div class="card-body">
                            <h5 class="card-title">Calcul des Matériaux <br><br></h5>
                            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <h5 class="card-title">Direction des Travaux et Organisation ...</h5>
                            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h5 class="card-title">Vérification de la Conformité et des Normes</h5>
                            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-light-primary">
                        <div class="card-body">
                            <h5 class="card-title">Développement des Systèmes Embarqués <br></h5>
                            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <h5 class="card-title">Développement des Applications Web et Mobil <br></h5>
                            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-success">
                        <div class="card-body">
                            <h5 class="card-title">Installation des Kits Solaires <br><br></h5>
                            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light ">
        <div class="row justify-content-between container">
            <div class="col-lg-5 d-flex align-items-center justify-content-center about-img container">
                <h3 class=" text-center"><strong>Nous vous accompagnons dans la réalisation et en réalisants vos
                        projets</strong>
                </h3>
            </div>
            <div class="col-lg-6 pt-5 pt-lg-0 container">
                <div class="p-5">
                    <div class="card text-center ms-15">
                        <div class="card-body">
                            <h5 class="card-title text-center text-danger"> > Béneficiez d'un service qualifié</h5>
                            <p class="card-text">Avec nos experts dans différents dommaines de travail, prenez contact pour
                                votre
                                projet</p>
                            <a href="#" class="btn btn-primary center">Prendre Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-category ftco-no-pt bg-secondary">
        <div class="container ftco-animate">
            <div class="text-center">
                <h3 class="heading ftco-animate">BIENTOT DISPONIBLE</h3>
            </div>
            <div class="row justify-content-between container">
                <div class="col-lg-5 d-flex align-items-center justify-content-center about-img container">
                    <img src="frontend/images/atg/porch.png" class="card-img-bottom" alt="porchérie">
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0 container">
                    <div class="p-5">
                        <div class="card text-center ms-15">

                            <div class="card-body">
                                <h5 class="card-title text-center">L'Agropastorale</h5>
                                <p class="card-text text-center">L'<strong>ATG</strong> ensemble avec l'agrovetérinaire
                                    chercheur
                                    <span><strong class="text-warning">Ir. Chirac WESE</strong></span>
                                    integrons l'agropastorale, pour optimiser la production des bétailles et etre livrable
                                    de façon
                                    régulier ... . <br>
                                    Avec nos 5 porcs, nous traillons pour optimiser et proposer une meilleur production de
                                    bétaille pour
                                    la ville de kinshasa dans un premier temps.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center"><a href="#" class="btn btn-primary" data-toggle="modal"
                    data-target="#ModalPorch">
                    <span></span> {{ __('En Savoir Plus ') }}<i class="fa-sharp fa fa-plus"></i>
                </a></p>
        </div>
    </section>
    <section class="ftco-section ftco-category ftco-no-pt bg-danger">
        <div class="container ftco-animate">
            <div class="text-center">
                <h3 class="heading p-3">Nos Réalisations</h3>
            </div>
            <div class="card-group p-3 ftco-animate">
                <div class="card border-4 border-info">
                    <img src="frontend/images/atg/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                    </div>
                    <p class="text-center"><a href="#" class="btn btn-primary">Plus de Détail</a></p>
                </div>
                <div class="card border-4 border-info">
                    <img src="frontend/images/atg/11.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.</p>
                        {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                    </div>
                    <p class="text-center"><a href="#" class="btn btn-primary">Plus de Détail</a></p>
                </div>
                <div class="card border-4 border-info">
                    <img src="frontend/images/atg/20.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal height
                            action.</p>
                        {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                    </div>
                    <p class="text-center"><a href="#" class="btn btn-primary">Plus de Détail</a></p>
                </div>
            </div>
            <hr>
            <div class="card-group ftco-animate">
                <div class="card border-4 border-info">
                    <img src="frontend/images/atg/3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                    </div>
                    <p class="text-center"><a href="#" class="btn btn-primary">Plus de Détail</a></p>
                </div>
                <div class="card border-4 border-info">
                    <img src="frontend/images/atg/11.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.</p>
                        {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                    </div>
                    <p class="text-center"><a href="#" class="btn btn-primary">Plus de Détail</a></p>
                </div>
                <div class="card border-4 border-info">
                    <img src="frontend/images/atg/20.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal height
                            action.</p>
                        {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                    </div>
                    <p class="text-center"><a href="#" class="btn btn-primary">Plus de Détail</a></p>
                </div>
            </div>
        </div>
        <p class="text-center my-3"><a href="#" class="btn btn-primary">Voir Plus</a></p>
    </section>

    <section class="ftco-section bg-with mb-4">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    {{-- <span class="subheading">Featured Products</span> --}}
                    <h2 class="mb-4">Contact</h2>
                    <!--Section: Contact v.2-->
                    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to
                        contact us directly. Our team will come back to you within
                        a matter of hours to help you.</p>

                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-9 mb-md-0 mb-5">
                            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="name" name="name" class="form-control">
                                            <label for="name" class="">Votre nom</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="email" name="email" class="form-control">
                                            <label for="email" class="">Votre email</label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <input type="text" id="subject" name="subject" class="form-control">
                                            <label for="subject" class="">Objet</label>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form">
                                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                            <label for="message">Votre message</label>
                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->

                            </form>

                            <div class="text-center text-md-left">
                                <p class="text-center">
                                    <a class="btn btn-primary"
                                        onclick="document.getElementById('contact-form').submit();">Envoyer</a>
                                </p>
                            </div>
                            <div class="status"></div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-3 text-center">
                            <ul class="list-unstyled mb-0">
                                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                    <p>Kinshasa, kin 94126, RDC</p>
                                </li>

                                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                    <p>+ 234 521 567 89</p>
                                </li>

                                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                    <p>info@atg.com</p>
                                </li>
                                <li>
                                    <iframe style="width: 100%;"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.425340957216!2d15.30458301412069!3d-4.330949547744107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a310b65998db7%3A0x5ed2db62b0437823!2sOrange%20Digital%20Center!5e0!3m2!1sen!2scd!4v1673292383469!5m2!1sen!2scd"
                                        width="600" height="450" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-secondary">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    {{-- <span class="subheading">Testimony</span> --}}
                    <h2 class="mb-4">Nos Clients(es) Satisfaits(es) Témoignent </h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(frontend/images/atg/tm5.JPG)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(frontend/images/atg/tm1.JPG)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Interface Designer</span>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(frontend/images/atg/tm3.JPG)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">UI Designer</span>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(frontend/images/atg/tm2.JPG)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">Web Developer</span>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url(frontend/images/atg/tm4.JPG)">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Garreth Smith</p>
                                    <span class="position">System Analyst</span>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-partner">
        <div class="text-center ">
            <h3 class="text-success my-3">
                Nos Partenaires
            </h3>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="frontend/images/partner-1.png" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="frontend/images/atg/odc.png" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="frontend/images/atg/inbtp.png" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="frontend/images/partner-4.png" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="frontend/images/atg/unikin.png" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
            </div>
        </div>
    </section>

    <!-- end content -->
@endsection
