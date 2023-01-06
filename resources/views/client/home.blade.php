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
                <div class="card bg-primary">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-danger">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-info">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-warning">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light ftco-section">
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
    <section class="ftco-section bg-danger">
        <div class="container">
            <div class="text-center">
                <h3 class="heading">Nous avons des Valeurs </h3>
            </div>
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-between">
                  <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                    <img src="frontend/images/atg/Logo.png" class="img-fluid" alt="" data-aos="zoom-in">
                  </div>
                  <div class="col-lg-6 pt-5 pt-lg-0">
                    <p data-aos="fade-up" data-aos-delay="100">
                      4 principes nous permettent d'assurer l'harmonie que ce soit au sein
                      de notre structure ou avec nos clients.
                    </p>
                    <div class="row">
                      <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-check2-circle"></i>
                        <h4>La Créativité</h4>
                        <p>Originalité dans nos propositions de solutions aux problèmes posés.</p>
                      </div>
                      <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-calendar2-heart"></i>
                        <h4>La passion</h4>
                        <p>Nous accomplissons notre travail avec amour et énergie</p>
                      </div>
        
                      <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-people"></i>
                        <h4>La Collaboration</h4>
                        <p>Mise en commun de nos idées et connaissances pour atteindre nos objectifs de la manière la plus
                          efficace et efficiente.</p>
                      </div>
        
                      <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-receipt"></i>
                        <h4>La rigueur</h4>
                        <p>Travail avec méthode et professionnalisme pour assurer l'excellence et le respect de nos engagements
                        </p>
                      </div>
        
                    </div>
                    <!-- <div class="mt-4 text-left">
                      <button type="button" class="btn btn-outline-danger " data-aos="fade-up"><a class="" href="apropos.html">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                              d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z" />
                            <path fill-rule="evenodd"
                              d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z" />
                          </svg> A propos</a></button>
        
                    </div> -->
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
                            <h5 class="card-title">Réalisation des Etudes avant Projet <br> <br> <br></h5>
                            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-danger">
                        <div class="card-body">
                            <h5 class="card-title">Elaboration des Etudes de projets <br><br> <br></h5>
                            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-info">
                        <div class="card-body">
                            <h5 class="card-title">Calcul des Matériaux <br> <br><br></h5>
                            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <h5 class="card-title">Direction des Travaux et Organisation de chantier</h5>
                            {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card bg-info">
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
                    <div class="card bg-primary">
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
    <section class="ftco-section bg-light">
        <h3 class=" text-center"><strong>Nous vous accompagnons dans la réalisation et en réalisants vos projets</strong>
        </h3>
        <div class="container p-5">
            <div class="card text-center ms-15" style="width: 22rem; margin-left:18%">
                <div class="card-body">
                    <h5 class="card-title text-center text-danger"> > Béneficiez d'un service qualifié</h5>
                    <p class="card-text">Avec nos experts dans différents dommaines de travail, prenez contact pour votre
                        projet</p>
                    <a href="#" class="btn btn-primary center">Prendre Contact</a>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-category ftco-no-pt bg-secondary">
        <div class="container ftco-animate">
            <div class="text-center">
                <h3 class="heading ftco-animate">BIENTOT DISPONIBLE</h3>
            </div>
            <div class="card  bg-secondary ftco-animate">
                <div class="card-body">
                    <h5 class="card-title text-center">L'Agropastorale</h5>
                    <p class="card-text">L'<strong>ATG</strong> ensemble avec l'agrovetérinaire chercheur <span><strong
                                class="text-warning">Ir. Chirac WESE</strong></span>
                        integrons l'agropastorale, pour optimiser la production des bétailles et etre livrable de façon
                        régulier ... .</p>
                    {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                </div>
                <img src="frontend/images/atg/porc2.JPG" class="card-img-bottom" alt="porchérie">
                <!-- Button trigger modal -->
                <div>
                    <p class="text-center"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            En Savoir Plus
                        </button></p>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <p class="text-center"><a href="#" class="btn btn-primary ">En Savoir Plus</a></p> --}}
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-category ftco-no-pt bg-danger">
        <div class="container ftco-animate">
            <div class="text-center">
                <h3 class="heading p-3">Nous avons déjà construit et développer </h3>
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

    <hr>

    <section class="ftco-section ftco-partner">
        <div class="container">
            <div class="row">
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="frontend/images/partner-1.png" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="frontend/images/partner-2.png" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="frontend/images/partner-3.png" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="frontend/images/partner-4.png" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="#" class="partner"><img src="frontend/images/partner-5.png" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
            </div>
        </div>
    </section>

    <!-- end content -->
@endsection
