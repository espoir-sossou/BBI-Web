<!-- Topbar Start -->
<div class="container-fluid">
    <div class="row bg-secondary py-1 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center h-100">
                <a class="text-body mr-3" href="">Apropos</a>
                <a class="text-body mr-3" href="">Contact</a>
                <a class="text-body mr-3" href="">Services</a>
                <a class="text-body mr-3" href=""><i class="fa fa-question-circle" aria-hidden="true"
                        title="aide"></i></a>
            </div>
        </div>


        <!-- Menu déroulant pour les nouveaux éléments -->
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <!-- Nouveaux boutons -->
                <div class="btn-group mx-2">
                    <button type="button" class="btn btn-sm btn-light d-flex align-items-center">
                        <i class="fa fa-briefcase" aria-hidden="true" style="font-size: 20px; color: #318093"></i>
                        <span class="ml-2" style=" color: #318093">BBI</span>
                    </button>
                </div>

                <div class="btn-group mx-2">
                    <button type="button" class="btn btn-sm btn-light d-flex align-items-center">
                        <i class="fa fa-phone" aria-hidden="true" style="font-size: 20px; color: #318093"></i>
                        <span class="ml-2" style=" color: #318093">Appeler</span>
                    </button>
                </div>

                <div class="btn-group mx-2">
                    <button type="button" class="btn btn-sm btn-light d-flex align-items-center"
                        data-toggle="dropdown">
                        <i class="fa fa-comment" aria-hidden="true" style="font-size: 20px; color: #318093"></i>
                        <span class="ml-2" style=" color: #318093">Messages</span>
                    </button>
                </div>

                <div class="btn-group mx-2">
                    <button type="button" class="btn btn-sm btn-light d-flex align-items-center">
                        <i class="fa fa-exchange-alt" aria-hidden="true" style="font-size: 20px; color: #318093"></i>
                        <span class="ml-2" style=" color: #318093">Comparer</span>
                    </button>
                </div>
                <div class="btn-group mx-2">
                    <button type="button" class="btn btn-sm btn-light d-flex align-items-center">
                        <i class="fa fa-heart" aria-hidden="true" style="font-size: 20px; color: #318093"></i>
                        <span class="ml-2" style=" color: #318093">Favori</span>
                    </button>
                </div>

                <div class="btn-group mx-2">
                    <button type="button" class="btn btn-sm btn-light d-flex align-items-center">
                        <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size: 20px; color: #318093"></i>
                        <span class="ml-2" style=" color: #318093">Panier</span>
                    </button>
                </div>
                <div class="btn-group mx-2">
                    <button type="button" class="btn btn-sm btn-light d-flex align-items-center"
                        data-toggle="dropdown">
                        <i class="fa fa-bell" aria-hidden="true" style="font-size: 20px; color: #318093"></i>
                        <span class="ml-2" style=" color: #318093">Notifications</span>
                    </button>
                </div>
                <div class="btn-group mx-2">
                    <button type="button" class="btn btn-sm btn-light dropdown-toggle d-flex align-items-center"
                        data-toggle="dropdown">
                        <i class="fa fa-user" aria-hidden="true" style="font-size: 20px; color: #318093"></i>
                        <span class="ml-2" style="color: #318093">Profil</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        @if (session()->has('user'))
                            <!-- Afficher les options de profil si l'utilisateur est connecté -->
                            <a href="{{ route('user.profil') }}">
                                <button class="dropdown-item" type="button" style="color: #318093">Voir Profil</button>
                            </a>
                            <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <button class="dropdown-item" type="button" style="color: #318093"
                                onclick="confirmLogout(event)">
                                Se déconnecter
                            </button>
                        @else
                            <!-- Afficher les options de connexion si l'utilisateur n'est pas connecté -->
                            <a href="{{ route('loginPage') }}">
                                <button class="dropdown-item" type="button" style="color: #318093">Se connecter</button>
                            </a>
                            <a href="{{ route('signUpPage') }}">
                                <button class="dropdown-item" type="button" style="color: #318093">S'inscrire</button>
                            </a>
                        @endif
                    </div>

                    <script>
                        function confirmLogout(event) {
                            event.preventDefault();  // Empêche la soumission du formulaire immédiate

                            // Affiche une boîte de dialogue de confirmation
                            if (confirm("Êtes-vous sûr de vouloir vous déconnecter ?")) {
                                // Si l'utilisateur confirme, soumet le formulaire
                                document.getElementById('logout-form').submit();
                            }
                        }
                    </script>


                </div>



            </div>
        </div>

    </div>
</div>

<div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
    <div class="col-lg-4">
        <a href="/" class="text-decoration-none">
            <div class="" style="width: 120px; height: 80px;">
                <img class="img-fluid" src="Frontend/Home/assets/imgs/logo_bbi.png" alt="">
            </div>
        </a>
    </div>
    <div class="col-lg-4 col-6 text-left mb-2">
        <form action="">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for products">
                <div class="input-group-append">
                    <span class="input-group-text bg-transparent" style="color:#318093">
                        <i class="fa fa-search"></i>
                    </span>
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-4 col-6 text-right mb-4">
        <a href="{{ route('loginPage') }}" class="  "
            style="padding: 10px 20px; font-weight: 700; border-radius: 30px; color:#318093;">
            <i class="fas fa-bullhorn mr-2" style="font-size: 18px;"></i> Publier une annonce
        </a>
    </div>

</div>
<!-- Topbar End -->
