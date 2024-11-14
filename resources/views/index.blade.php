@extends('Layout.home')

@section('content')
    <img class="position-absolute w-100 h-50" src="Frontend/Home/assets/imgs/img1.jpg" style="object-fit: cover;">
    <div class="row">
        <div class="col-lg-12">
            <!-- Banniere -->
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class=" position-relative active" style="height: 430px; width:100%">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Bolivie Business Inter
                                </h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn"></p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                    href="#">Shop Now</a>
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
                                    <span class="category">Apparment</span>
                                    <h4>24 New Street Miami, OR 24560</h4>

                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="info-table">
                                    <ul>
                                        <li>
                                            <img src="Frontend/Home/assets/imgs/info-icon-01.png" alt=""
                                                style="max-width: 52px;">
                                            <h4>450 m2<br><span>Total Flat Space</span></h4>
                                        </li>
                                        <li>
                                            <img src="Frontend/Home/assets/imgs/info-icon-02.png" alt=""
                                                style="max-width: 52px;">
                                            <h4>Contract<br><span>Contract Ready</span></h4>
                                        </li>
                                        <li>
                                            <img src="Frontend/Home/assets/imgs/info-icon-03.png" alt=""
                                                style="max-width: 52px;">
                                            <h4>Payment<br><span>Payment Process</span></h4>
                                        </li>
                                        <li>
                                            <img src="Frontend/Home/assets/imgs/info-icon-04.png" alt=""
                                                style="max-width: 52px;">
                                            <h4>Safety<br><span>24/7 Under Control</span></h4>
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
                            <a class="is_active" href="#!" data-filter="*">Show All</a>
                        </li>
                        <li>
                            <a href="#!" data-filter=".adv">Apartment</a>
                        </li>
                        <li>
                            <a href="#!" data-filter=".str">Villa House</a>
                        </li>
                        <li>
                            <a href="#!" data-filter=".rac">Penthouse</a>
                        </li>
                    </ul>
                    <div class="row properties-box">
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/property-01.jpg"
                                        alt=""></a>
                                <span class="category">Luxury Villa</span>
                                <h6>$2.264.000</h6>
                                <h4><a href="property-details.html">18 Old Street Miami, OR 97219</a></h4>
                                <ul>
                                    <li>Bedrooms: <span>8</span></li>
                                    <li>Bathrooms: <span>8</span></li>
                                    <li>Area: <span>545m2</span></li>
                                    <li>Floor: <span>3</span></li>
                                    <li>Parking: <span>6 spots</span></li>
                                </ul>
                                <div class="main-button">
                                    <a href="property-details.html">Schedule a visit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/property-02.jpg"
                                        alt=""></a>
                                <span class="category">Luxury Villa</span>
                                <h6>$1.180.000</h6>
                                <h4><a href="property-details.html">54 New Street Florida, OR 27001</a></h4>
                                <ul>
                                    <li>Bedrooms: <span>6</span></li>
                                    <li>Bathrooms: <span>5</span></li>
                                    <li>Area: <span>450m2</span></li>
                                    <li>Floor: <span>3</span></li>
                                    <li>Parking: <span>8 spots</span></li>
                                </ul>
                                <div class="main-button">
                                    <a href="property-details.html">Schedule a visit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv rac">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/property-03.jpg"
                                        alt=""></a>
                                <span class="category">Luxury Villa</span>
                                <h6>$1.460.000</h6>
                                <h4><a href="property-details.html">26 Mid Street Portland, OR 38540</a></h4>
                                <ul>
                                    <li>Bedrooms: <span>5</span></li>
                                    <li>Bathrooms: <span>4</span></li>
                                    <li>Area: <span>225m2</span></li>
                                    <li>Floor: <span>3</span></li>
                                    <li>Parking: <span>10 spots</span></li>
                                </ul>
                                <div class="main-button">
                                    <a href="property-details.html">Schedule a visit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/property-04.jpg"
                                        alt=""></a>
                                <span class="category">Apartment</span>
                                <h6>$584.500</h6>
                                <h4><a href="property-details.html">12 Hope Street Portland, OR 12650</a></h4>
                                <ul>
                                    <li>Bedrooms: <span>4</span></li>
                                    <li>Bathrooms: <span>3</span></li>
                                    <li>Area: <span>125m2</span></li>
                                    <li>Floor: <span>25th</span></li>
                                    <li>Parking: <span>2 cars</span></li>
                                </ul>
                                <div class="main-button">
                                    <a href="property-details.html">Schedule a visit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac str">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/property-05.jpg"
                                        alt=""></a>
                                <span class="category">Penthouse</span>
                                <h6>$925.600</h6>
                                <h4><a href="property-details.html">34 Hope Street Portland, OR 42680</a></h4>
                                <ul>
                                    <li>Bedrooms: <span>4</span></li>
                                    <li>Bathrooms: <span>4</span></li>
                                    <li>Area: <span>180m2</span></li>
                                    <li>Floor: <span>38th</span></li>
                                    <li>Parking: <span>2 cars</span></li>
                                </ul>
                                <div class="main-button">
                                    <a href="property-details.html">Schedule a visit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac adv">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/property-06.jpg"
                                        alt=""></a>
                                <span class="category">Modern Condo</span>
                                <h6>$450.000</h6>
                                <h4><a href="property-details.html">22 Hope Street Portland, OR 16540</a></h4>
                                <ul>
                                    <li>Bedrooms: <span>3</span></li>
                                    <li>Bathrooms: <span>2</span></li>
                                    <li>Area: <span>165m2</span></li>
                                    <li>Floor: <span>26th</span></li>
                                    <li>Parking: <span>3 cars</span></li>
                                </ul>
                                <div class="main-button">
                                    <a href="property-details.html">Schedule a visit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac str">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/property-03.jpg"
                                        alt=""></a>
                                <span class="category">Luxury Villa</span>
                                <h6>$980.000</h6>
                                <h4><a href="property-details.html">14 Mid Street Miami, OR 36450</a></h4>
                                <ul>
                                    <li>Bedrooms: <span>8</span></li>
                                    <li>Bathrooms: <span>8</span></li>
                                    <li>Area: <span>550m2</span></li>
                                    <li>Floor: <span>3</span></li>
                                    <li>Parking: <span>12 spots</span></li>
                                </ul>
                                <div class="main-button">
                                    <a href="property-details.html">Schedule a visit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac adv">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/property-02.jpg"
                                        alt=""></a>
                                <span class="category">Luxury Villa</span>
                                <h6>$1.520.000</h6>
                                <h4><a href="property-details.html">26 Old Street Miami, OR 12870</a></h4>
                                <ul>
                                    <li>Bedrooms: <span>12</span></li>
                                    <li>Bathrooms: <span>15</span></li>
                                    <li>Area: <span>380m2</span></li>
                                    <li>Floor: <span>3</span></li>
                                    <li>Parking: <span>14 spots</span></li>
                                </ul>
                                <div class="main-button">
                                    <a href="property-details.html">Schedule a visit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac adv">
                            <div class="item">
                                <a href="property-details.html"><img src="Frontend/Home/assets/imgs/property-01.jpg"
                                        alt=""></a>
                                <span class="category">Luxury Villa</span>
                                <h6>$3.145.000</h6>
                                <h4><a href="property-details.html">34 New Street Miami, OR 24650</a></h4>
                                <ul>
                                    <li>Bedrooms: <span>10</span></li>
                                    <li>Bathrooms: <span>12</span></li>
                                    <li>Area: <span>860m2</span></li>
                                    <li>Floor: <span>3</span></li>
                                    <li>Parking: <span>10 spots</span></li>
                                </ul>
                                <div class="main-button">
                                    <a href="property-details.html">Schedule a visit</a>
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

    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Featured
                Products</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="Frontend/Home/assets/imgs/img10.jpg" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i
                                    class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5>
                            <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="Frontend/Home/assets/imgs/img3.jpg" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i
                                    class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5>
                            <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="Frontend/Home/assets/imgs/img4.jpg" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i
                                    class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5>
                            <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="Frontend/Home/assets/imgs/img5.jpg" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i
                                    class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5>
                            <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="Frontend/Home/assets/imgs/img6.jpg" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i
                                    class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5>
                            <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="Frontend/Home/assets/imgs/img7.jpg" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i
                                    class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5>
                            <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="Frontend/Home/assets/imgs/img8.jpg" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i
                                    class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5>
                            <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="Frontend/Home/assets/imgs/img9.jpg" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i
                                    class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5>
                            <h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="Frontend/Home/assets/imgs/offer-1.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="Frontend/Home/assets/imgs/offer-2.jpg" alt="">
                    <div class="offer-text">
                        <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                        <a href="" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->




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
