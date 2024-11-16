@extends('Layout.home')

@section('content')

    <div id="carouselExample" class="carousel slide " data-bs-ride="carousel" style="height: 50vh;">
        <div class="carousel-inner h-100">
            <!-- Première image -->
            <div class="carousel-item active h-100">
                <img src="Frontend/Home/assets/imgs/img1.jpg" class="d-block w-100 h-100"
                    style="object-fit: cover; transition: opacity 1s ease-in-out;" alt="Image 1">
            </div>
            <!-- Deuxième image -->
            <div class="carousel-item h-100">
                <img src="Frontend/Home/assets/imgs/img1.jpg" class="d-block w-100 h-100"
                    style="object-fit: cover; transition: opacity 1s ease-in-out;" alt="Image 2">
            </div>
            <!-- Troisième image -->
            <div class="carousel-item h-100">
                <img src="Frontend/Home/assets/imgs/img1.jpg" class="d-block w-100 h-100"
                    style="object-fit: cover; transition: opacity 1s ease-in-out;" alt="Image 3">
            </div>
        </div>
        <!-- Contrôles précédent et suivant -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>

    <div class="row" style="position: relative; top:-60px">
        <div class="col-lg-12">
            <!-- Banniere -->
            <div class="container-fluid">

                <!-- Featured Start -->
                <div class="container-fluid pt-4">
                    <div class="row px-xl-5 ">

                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                                <h1 class="fas fa-list m-0 mr-2" style="color: #318093"></h1>
                                <h5 class="font-weight-semi-bold m-0">Listing d'Annonces</h5>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                                <h1 class="fas fa-map m-0 mr-3" style="color: #318093"></h1>
                                <h5 class="font-weight-semi-bold m-0">Cartes Interactives</h5>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                                <h1 class="fas fa-camera m-0 mr-3" style="color: #318093"></h1>
                                <h5 class="font-weight-semi-bold m-0">Visite Virtuelle</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                                <h1 class="fas fa-comments m-0 mr-3" style="color: #318093"></h1>
                                <h5 class="font-weight-semi-bold m-0">Messagerie Intégrée</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Featured End -->

                <!-- start maison -->
                <div class="single-property section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="main-image">
                                    <img src="Frontend/Home/assets/imgs/single-property.jpg" alt="">
                                </div>
                                <div class="main-content">
                                    <span class="category">Appartement</span>
                                    <h4>24 New Street Miami, OR 24560</h4>

                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="info-table">
                                    <ul>
                                        <li>
                                            <img src="Frontend/Home/assets/imgs/info-icon-01.png" alt=""
                                                style="max-width: 52px;">
                                            <h4>450 m2<br><span>Surface Totale</span></h4>
                                        </li>
                                        <li>
                                            <img src="Frontend/Home/assets/imgs/info-icon-02.png" alt=""
                                                style="max-width: 52px;">
                                            <h4>Contrat<br><span>Contrat Prêt</span></h4>
                                        </li>
                                        <li>
                                            <img src="Frontend/Home/assets/imgs/info-icon-03.png" alt=""
                                                style="max-width: 52px;">
                                            <h4>Paiement<br><span>Processus de Paiement</span></h4>
                                        </li>
                                        <li>
                                            <img src="Frontend/Home/assets/imgs/info-icon-04.png" alt=""
                                                style="max-width: 52px;">
                                            <h4>Sécurité<br><span>Sous Contrôle 24h/24</span></h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- maison end -->
            </div>

            <div class="section properties">
                <div class="container">

                    <div class="row properties-box">
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/img1.png"
                                        alt=""  style="max-width: 400px;"></a>
                                <span class="category">A louer</span>
                                <h6>500 Millions XOF</h6>
                                <h4><a href="property-details.html">PARCELLES ENSEMBLES
                                </a></h4>
                                <ul>
                                    <li>Chambres : <span>8</span></li>
                                    <li>Salles de bain : <span>8</span></li>
                                    <li>Surface : <span>545m2</span></li>
                                    <li>Étages : <span>3</span></li>
                                    <li>Parking : <span>6 places</span></li>
                                    <li>Douches : <span>8</span></li>
                                    <li>Salle de Douches : <span>2</span></li>
                                    <li>Toilette : <span>3</span></li>
                                    <li>Garage : <span>1</span></li>
                                    <li>Picine : <span>8</span></li>
                                    <li>Superficie : <span>317 m²</span></li>
                                    <li>Titre foncier en cours : <span></span></li>


                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/img2.png"
                                        alt="" style="max-width: 400px;"></a>
                                <span class="category">A vendre</span>
                                <h6>30 millions négociable</h6>
                                <h4><a href="property-details.html">VENTE D'UNE GRANDE PARCELLE CLÔTURÉE
                                </a></h4>
                                <ul>
                                    <li>Chambres : <span>6</span></li>
                                    <li>Salles de bain : <span>5</span></li>
                                    <li>Surface : <span>450m2</span></li>
                                    <li>Propriétaire : <span>Vivant </span></li>
                                    <li>Étages : <span>3</span></li>
                                    <li>Parking : <span>8 places</span></li>
                                    <li>Douches : <span>8</span></li>
                                    <li>Salle de Douches : <span>2</span></li>
                                    <li>Toilette : <span>3</span></li>
                                    <li>Garage : <span>1</span></li>
                                    <li>Picine : <span>8</span></li>
                                    <li>Superficie : <span>317 m²</span></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv rac">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/img3.png"
                                        alt="" style="max-width: 400px;"></a>
                                <span class="category">A vendre</span>
                                <h6> 18 millions / parcelle </h6>
                                <h4><a href="property-details.html">Une parcelle clôturé à agla en deuxième position des pavés  </a></h4>
                                <ul>
                                    <li>Chambres : <span>5</span></li>
                                    <li>Salles de bain : <span>4</span></li>
                                    <li>Surface : <span>225m2</span></li>
                                    <li>Étages : <span>3</span></li>
                                    <li>Parking : <span>10 places</span></li>
                                    <li>Douches : <span>8</span></li>
                                    <li>Salle de Douches : <span>2</span></li>
                                    <li>Toilette : <span>3</span></li>
                                    <li>Garage : <span>1</span></li>
                                    <li>Picine : <span>8</span></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/img4.png"
                                        alt="" style="max-width: 400px;"></a>
                                <span class="category">A louer</span>
                                <h6>584.500 XOF</h6>
                                <h4><a href="property-details.html">CADJEHOUN EN 5 EME POSITION DES PAVÉS</a></h4>
                                <ul>
                                    <li>Chambres : <span>4</span></li>
                                    <li>Salles de bain : <span>3</span></li>
                                    <li>Surface : <span>125m2</span></li>
                                    <li>Étages : <span>25e</span></li>
                                    <li>Parking : <span>2 voitures</span></li>
                                    <li>Douches : <span>8</span></li>
                                    <li>Salle de Douches : <span>2</span></li>
                                    <li>Toilette : <span>3</span></li>
                                    <li>Garage : <span>1</span></li>
                                    <li>Picine : <span>8</span></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac str">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/img5.png"
                                        alt="" style="max-width: 400px;"></a>
                                <span class="category">A vendre</span>
                                <h6>925.600 XOF</h6>
                                <h4><a href="property-details.html">Deux Parcelles ensembles
                                </a></h4>
                                <ul>
                                    <li>Chambres : <span>4</span></li>
                                    <li>Salles de bain : <span>4</span></li>
                                    <li>Surface : <span>180m2</span></li>
                                    <li>Étages : <span>38e</span></li>
                                    <li>Parking : <span>2 voitures</span></li>
                                    <li>Douches : <span>8</span></li>
                                    <li>Salle de Douches : <span>2</span></li>
                                    <li>Toilette : <span>3</span></li>
                                    <li>Garage : <span>1</span></li>
                                    <li>Picine : <span>8</span></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac adv">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/img6.png"
                                        alt="" style="max-width: 400px;"></a>
                                <span class="category">A louer</span>
                                <h6>30 MILLIONS
                                    XOF</h6>
                                <h4><a href="property-details.html">2 PARCELLES ENSEMBLES</a></h4>
                                <ul>
                                    <li>Chambres : <span>3</span></li>
                                    <li>Salles de bain : <span>2</span></li>
                                    <li>Surface : <span>906M² </span></li>
                                    <li>Étages : <span>26e</span></li>
                                    <li>Parking : <span>3 voitures</span></li>
                                    <li>TITRE FONCIER : <span>GLOBAL</span></li>
                                    <li>Douches : <span>8</span></li>
                                    <li>Salle de Douches : <span>2</span></li>
                                    <li>Toilette : <span>3</span></li>
                                    <li>Garage : <span>1</span></li>
                                    <li>Picine : <span>8</span></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac str">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/img7.png"
                                        alt="" style="max-width: 400px;"></a>
                                <span class="category">A louer</span>
                                <h6>45 millions XOF</h6>
                                <h4><a href="property-details.html">TITRE FONCIER GLOBAL
                                </a></h4>
                                <ul>
                                    <li>Chambres : <span>8</span></li>
                                    <li>Salles de bain : <span>8</span></li>
                                    <li>Surface : <span>906m²</span></li>
                                    <li>Étages : <span>3</span></li>
                                    <li>Parking : <span>12 places</span></li>
                                    <li>Douches : <span>8</span></li>
                                    <li>Salle de Douches : <span>2</span></li>
                                    <li>Toilette : <span>3</span></li>
                                    <li>Garage : <span>1</span></li>
                                    <li>Picine : <span>8</span></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac adv">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/img8.png"
                                        alt="" style="max-width: 400px;"></a>
                                <span class="category">A vendre</span>
                                <h6>15 millions négociables</h6>
                                <h4><a href="property-details.html">02 parcelles ensemble en angle de rues dans la zopah très proche du marché de gros Bon pour tout projet de magasin</a></h4>
                                <ul>
                                    <li>Chambres : <span>12</span></li>
                                    <li>Salles de bain : <span>15</span></li>
                                    <li>Surface : <span>544m² / parcelle</span></li>
                                    <li>Étages : <span>3</span></li>
                                    <li>Parking : <span>14 places</span></li>
                                    <li>Document : <span> fiche bleu</span></li>
                                    <li>Douches : <span>8</span></li>
                                    <li>Salle de Douches : <span>2</span></li>
                                    <li>Toilette : <span>3</span></li>
                                    <li>Garage : <span>1</span></li>
                                    <li>Picine : <span>8</span></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac adv">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/img9.png"
                                        alt="" style="max-width: 400px;"></a>
                                <span class="category">A louer</span>
                                <h6>80 MILLIONS  XOF</h6>
                                <h4><a href="property-details.html">PARCELLE A VENDRE A CADJEHOUN EN 5 EME POSITION DES PAVÉS.</a></h4>
                                <ul>
                                    <li>Chambres : <span>6</span></li>
                                    <li>Salles de bain : <span>4</span></li>
                                    <li>Surface : <span>400m2</span></li>
                                    <li>Étages : <span>2</span></li>
                                    <li>Parking : <span>10 places</span></li>
                                    <li>Douches : <span>8</span></li>
                                    <li>Salle de Douches : <span>2</span></li>
                                    <li>PRIX DE VISITE : <span>80 MILLIONS</span></li>
                                    <li>Toilette : <span>3</span></li>
                                    <li>Garage : <span>1</span></li>
                                    <li>Picine : <span>8</span></li>
                                    <li>VISITE A TOUT MOMENT ET PAYANTE: <span></span></li>

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- villa End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="Generales/lib/easing/easing.min.js"></script>
    <script src="Generales/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="Generales/mail/jqBootstrapValidation.min.js"></script>
    <script src="Generales/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="Generales/js/main.js"></script>

    <!-- Scripts Villa-->
    <!-- Bootstrap core JavaScript -->
    <script src="Generales/Villa/vendor/jquery/jquery.min.js"></script>
    <script src="Generales/Villa/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="Generales/Villa/assets/js/isotope.min.js"></script>
    <script src="Generales/Villa/assets/js/owl-carousel.js"></script>
    <script src="Generales/Villa/assets/js/counter.js"></script>
    <script src="Generales/Villa/assets/js/custom.js"></script>
@endsection
