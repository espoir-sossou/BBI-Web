@extends('Layout.home')

@section('content')
    <style>

    </style>
    <img class="responsive-image position-absolute w-100 h-50" src="Frontend/Home/assets/imgs/img1.jpg">

    <div class="row">
        <div class="col-lg-12">
            <!-- Banniere -->
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class=" position-relative active" style="height: 430px; width:100%">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Bolivie Business
                                    Inter
                                </h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn"></p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Banniere -->

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
                                            <img src="Frontend/Home/assets/imgs/info-icon-01.png" alt="" style="max-width: 52px;">
                                            <h4>450 m2<br><span>Surface Totale</span></h4>
                                        </li>
                                        <li>
                                            <img src="Frontend/Home/assets/imgs/info-icon-02.png" alt="" style="max-width: 52px;">
                                            <h4>Contrat<br><span>Contrat Prêt</span></h4>
                                        </li>
                                        <li>
                                            <img src="Frontend/Home/assets/imgs/info-icon-03.png" alt="" style="max-width: 52px;">
                                            <h4>Paiement<br><span>Processus de Paiement</span></h4>
                                        </li>
                                        <li>
                                            <img src="Frontend/Home/assets/imgs/info-icon-04.png" alt="" style="max-width: 52px;">
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
            <!-- separator End -->



            <!-- start villa -->

            <div class="section properties">
                <div class="container">
                    <ul class="properties-filter">
                        <li>
                            <a class="is_active" href="#!" data-filter="*">Voir Tout </a>
                        </li>
                        <li>
                            <a href="#!" data-filter=".adv">Appartement</a>
                        </li>
                        <li>
                            <a href="#!" data-filter=".str">Maison Villa</a>
                        </li>
                    </ul>
                    <div class="row properties-box">
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/property-01.jpg" alt=""></a>
                                <span class="category">Villa de Luxe</span>
                                <h6>$2.264.000</h6>
                                <h4><a href="property-details.html">18 Vieille Rue Miami, OR 97219</a></h4>
                                <ul>
                                    <li>Chambres : <span>8</span></li>
                                    <li>Salles de bain : <span>8</span></li>
                                    <li>Surface : <span>545m2</span></li>
                                    <li>Étages : <span>3</span></li>
                                    <li>Parking : <span>6 places</span></li>
                                </ul>
                                <div class="main-button">
                                    <a href="property-details.html">Planifier une visite</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/property-02.jpg" alt=""></a>
                                <span class="category">Villa de Luxe</span>
                                <h6>$1.180.000</h6>
                                <h4><a href="property-details.html">54 Nouvelle Rue Floride, OR 27001</a></h4>
                                <ul>
                                    <li>Chambres : <span>6</span></li>
                                    <li>Salles de bain : <span>5</span></li>
                                    <li>Surface : <span>450m2</span></li>
                                    <li>Étages : <span>3</span></li>
                                    <li>Parking : <span>8 places</span></li>
                                </ul>
                                <div class="main-button">
                                    <a href="property-details.html">Planifier une visite</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv rac">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/property-03.jpg" alt=""></a>
                                <span class="category">Villa de Luxe</span>
                                <h6>$1.460.000</h6>
                                <h4><a href="property-details.html">26 Rue Centrale Portland, OR 38540</a></h4>
                                <ul>
                                    <li>Chambres : <span>5</span></li>
                                    <li>Salles de bain : <span>4</span></li>
                                    <li>Surface : <span>225m2</span></li>
                                    <li>Étages : <span>3</span></li>
                                    <li>Parking : <span>10 places</span></li>
                                </ul>
                                <div class="main-button">
                                    <a href="property-details.html">Planifier une visite</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/property-04.jpg" alt=""></a>
                                <span class="category">Appartement</span>
                                <h6>$584.500</h6>
                                <h4><a href="property-details.html">12 Rue de l'Espoir Portland, OR 12650</a></h4>
                                <ul>
                                    <li>Chambres : <span>4</span></li>
                                    <li>Salles de bain : <span>3</span></li>
                                    <li>Surface : <span>125m2</span></li>
                                    <li>Étages : <span>25e</span></li>
                                    <li>Parking : <span>2 voitures</span></li>
                                </ul>
                                <div class="main-button">
                                    <a href="property-details.html">Planifier une visite</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac str">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/property-05.jpg" alt=""></a>
                                <span class="category">Penthouse</span>
                                <h6>$925.600</h6>
                                <h4><a href="property-details.html">34 Rue de l'Espoir Portland, OR 42680</a></h4>
                                <ul>
                                    <li>Chambres : <span>4</span></li>
                                    <li>Salles de bain : <span>4</span></li>
                                    <li>Surface : <span>180m2</span></li>
                                    <li>Étages : <span>38e</span></li>
                                    <li>Parking : <span>2 voitures</span></li>
                                </ul>
                                <div class="main-button">
                                    <a href="property-details.html">Planifier une visite</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac adv">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/property-06.jpg" alt=""></a>
                                <span class="category">Condo Moderne</span>
                                <h6>$450.000</h6>
                                <h4><a href="property-details.html">22 Rue de l'Espoir Portland, OR 16540</a></h4>
                                <ul>
                                    <li>Chambres : <span>3</span></li>
                                    <li>Salles de bain : <span>2</span></li>
                                    <li>Surface : <span>165m2</span></li>
                                    <li>Étages : <span>26e</span></li>
                                    <li>Parking : <span>3 voitures</span></li>
                                </ul>
                                <div class="main-button">
                                    <a href="property-details.html">Planifier une visite</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac str">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/property-03.jpg" alt=""></a>
                                <span class="category">Villa de Luxe</span>
                                <h6>$980.000</h6>
                                <h4><a href="property-details.html">14 Rue Centrale Miami, OR 36450</a></h4>
                                <ul>
                                    <li>Chambres : <span>8</span></li>
                                    <li>Salles de bain : <span>8</span></li>
                                    <li>Surface : <span>550m2</span></li>
                                    <li>Étages : <span>3</span></li>
                                    <li>Parking : <span>12 places</span></li>
                                </ul>
                                <div class="main-button">
                                    <a href="property-details.html">Planifier une visite</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac adv">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/property-02.jpg" alt=""></a>
                                <span class="category">Villa de Luxe</span>
                                <h6>$1.520.000</h6>
                                <h4><a href="property-details.html">26 Vieille Rue Miami, OR 12870</a></h4>
                                <ul>
                                    <li>Chambres : <span>12</span></li>
                                    <li>Salles de bain : <span>15</span></li>
                                    <li>Surface : <span>380m2</span></li>
                                    <li>Étages : <span>3</span></li>
                                    <li>Parking : <span>14 places</span></li>
                                </ul>
                                <div class="main-button">
                                    <a href="property-details.html">Planifier une visite</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac adv">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/property-01.jpg" alt=""></a>
                                <span class="category">Villa de Luxe</span>
                                <h6>$3.145.000</h6>
                                <h4><a href="property-details.html">26 Vieille Rue Miami, OR 12870</a></h4>
                                <ul>
                                    <li>Chambres : <span>6</span></li>
                                    <li>Salles de bain : <span>4</span></li>
                                    <li>Surface : <span>400m2</span></li>
                                    <li>Étages : <span>2</span></li>
                                    <li>Parking : <span>10 places</span></li>
                                </ul>
                                <div class="main-button">
                                    <a href="property-details.html">Planifier une visite</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="pagination">
                                <li><a href="#">1</a></li>
                                <li><a class="is_active" href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">>></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- villa End -->
    </div>

    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <a href="">
                        <div class="bg-light p-4">
                            <img src="Frontend/Home/assets/imgs/dsg1.jpeg" height="200px" alt="">
                        </div>
                    </a>
                    <a href="">
                        <div class="bg-light p-4">
                            <img src="Frontend/Home/assets/imgs/dsg2.jpeg" height="200px" alt="">
                        </div>
                    </a>
                    <a href="">
                        <div class="bg-light p-4">
                            <img src="Frontend/Home/assets/imgs/dsg3.jpg" height="200px" alt="">
                        </div>
                    </a>
                    <a href="">
                        <div class="bg-light p-4">
                            <img src="Frontend/Home/assets/imgs/dsg4.jpeg" height="200px" alt="">
                        </div>
                    </a>
                    <a href="">
                        <div class="bg-light p-4">
                            <img src="Frontend/Home/assets/imgs/dsg5.jpg" height="200px" alt="">
                        </div>
                    </a>
                    <a href="">
                        <div class="bg-light p-4">
                            <img src="Frontend/Home/assets/imgs/dsg6.jpg" height="200px" alt="">
                        </div>
                    </a>
                    <a href="">
                        <div class="bg-light p-4">
                            <img src="Frontend/Home/assets/imgs/dsg7.png" height="200px" alt="">
                        </div>
                    </a>
                    <a href="">
                        <div class="bg-light p-4">
                            <img src="Frontend/Home/assets/imgs/dsg2.jpeg" height="200px" alt="">
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->



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
