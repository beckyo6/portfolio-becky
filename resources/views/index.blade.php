<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Portfolio Becky Ada</title>
    <!--
Moonlight Template
https://templatemo.com/tm-512-moonlight
-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontAwesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/light-box.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-main.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>

<body>

    <div class="sequence">

        <div class="seq-preloader">
            <svg width="39" height="16" viewBox="0 0 39 16" xmlns="http://www.w3.org/2000/svg"
                class="seq-preload-indicator">
                <g fill="#F96D38">
                    <path class="seq-preload-circle seq-preload-circle-1"
                        d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z" />
                    <path class="seq-preload-circle seq-preload-circle-2"
                        d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z" />
                    <path class="seq-preload-circle seq-preload-circle-3"
                        d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z" />
                </g>
            </svg>
        </div>

    </div>


    <nav>
        <div class="logo">
            <img src="{{ asset('assets/img/logo.png')}}" alt="">
        </div>
        <div class="mini-logo">
            <img src="{{ asset('assets/img/mini_logo.png')}}" alt="">
        </div>
        <div class="title">
            <p> <strong>Portfolio-Becky ada </strong></p>
        </div>
        <ul>
            <li><a href="#1"><i class="fa fa-home"></i> <em>Home</em></a></li>
            <li><a href="#2"><i class="fa fa-user"></i> <em>À propos</em></a></li>
            <li><a href="#3"><i class="fa fa-pencil"></i> <em>Expériences</em></a></li>
            <li><a href="#4"><i class="fa fa-image"></i> <em>Mes réalisations</em></a></li>
            <li><a href="#5"><i class="fa fa-envelope"></i> <em>Contact</em></a></li>

        </ul>
    </nav>

    <div class="slides">

        <div class="slide" id="1">
            <div class="content first-content">
                <div class="container-fluid">
                    <div class="col-md-4">
                        <div class="author-image"><img src="{{ asset('assets/img/author_image.png')}}" alt="Author Image"></div>
                    </div>
                    <div class="col-md-6">
                        @if (session('success'))
                            <div class="alert" id="error">
                                <strong>{{ session('success') }}</strong>
                            </div>
                        @endif
                        <h3>Rebecca Tshikadile</h3>
                        <p>Je suis software developper/web developper.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide" id="2">
            <div class="content second-content">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div class="left-content">
                            <h2>À propos de moi</h2>
                            <p>Je me nomme Rebecca Mbombo Tshikadile, souvent j'utilise mon pseudo Becky Ada. <br>
                                J'ai une license en mathématique-informatique obtenue avec mention distinction à
                                l'université de Lubumbashi (2020-2021).
                            </p>
                            {{-- <p>
                                je m'exprime en 4 langues différentes à savoir le francais et le swahili que je maitrise
                                bien ainsi que l'anglais et le lingala que je maitrise moyenement.
                            </p> --}}
                            <p>Je suis une developpeuse specialisée dans le
                                developpement web avec une éxperience dans le codage, la conception et le test des sites
                                web.
                            </p>
                            <p>
                                je maitrise les technologies du web en front et back-end avec une specialisation en
                                conception des dashboards et la gestion des bases des données.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-image">
                            <img src="{{ asset('assets/img/about_image.jpeg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide" id="3">
            <div class="content second-content">
                <div class="container-fluid">
                    <div class="col-md-7">
                        <div class="left-content">
                            <h2>Experience professionelle</h2>
                            <p>
                                <b> Web App Developer</b> - Code Laboratory (Juillet 2021 - Actuellement)
                                Analyste web et Développeur d'applications webs.
                            </p>

                            <p>
                                <b> Community manager </b>- Code Laboratory (février 2021 - Juillet 2021)
                                community manger de l'entrprise code Loboratory.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="right-content">
                            <h2> <b> Domaine d'expertise</b></h2>
                            <p><b> Analyse des systèmes </b> </p>
                            <p><b>Conception du dashboard web</b></p>
                            <p><b>Conception orienté objet</b></p>
                            <p><b>Modelisation de base des données</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide" id="4">
            <div class="content third-content">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="first-section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="left-content">
                                                <h2><a href="https://nsoko.store.codelabdrc.com/">Nsoko Store</a></h2>
                                                <p>
                                                    c'est une application web permettant aux magasins d'exposer
                                                    leurs articles en vue de faclité les clients dans leurs recherche
                                                    des différents articles via application mobile nsoko.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="right-content">
                                                <h2><a href="https://www.codelabdrc.com/">Nsoko Admin</a></h2>
                                                <p>
                                                    c'est une application qui permet de gérer
                                                    les magasins qui sont sur la plateforme <a
                                                        href="https://nsoko.store.codelabdrc.com/">Nsoko Store</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="first-section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="left-content">
                                                <h2><a href="https://ticketbus-congo.com/">Top Bus Agence</a> </h2>
                                                <p>
                                                    C'est une application qui permet de payer et/ou de reserver un
                                                    ticket de bus dans une agence de voyace.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="right-content">
                                                <h2><a href="https://ticketbus-congo.com/">Top Bus admin</a></h2>
                                                <p>
                                                    c'est une application qui permet de gerer les différents
                                                    agences qui sont sur la plateforme <a
                                                        href="https://ticketbus-congo.com/">Top Bus Agence</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="first-section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="left-content">
                                                <h2> <a href="https://kongochildren.org/"> Kongo children dashboard</a>
                                                </h2>
                                                <p>
                                                    C'est une application qui permet de répertorier
                                                    les enfants et les jeunes qui sont dans les mines de l'espace grand
                                                    katanga,
                                                    en vue de les aider à quitter les mines en leurs offrant une autre
                                                    activité.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="right-content">
                                                <h2> <a href="https://www.codelabdrc.com/"> Mine MVP</a></h2>
                                                <p>
                                                    C'est une application qui permet à enregistrer
                                                    les creuseurs qui sont dans différentes mines du haut-katanga
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="first-section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="left-content">
                                                <h2> <a href="https://prof.godlivemassivi.com/"> SGCL-Système de gestion
                                                        des cours en ligne</a></h2>
                                                <p>
                                                    c'est une application des cours en ligne, qui comporte 3 accès celui
                                                    de
                                                    l'administrateur du système, du professeur et en fin de l'étudiant
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide" id="5">
            <div class="content second-content">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div class="left-content">
                            <h2>Contactez-moi</h2>

                            <span class="list">
                                <p class="list-vertical-item"><i class="fa fa-location-arrow"></i><span>Localisation:
                                        Lubumbashi, DRC</span>
                                </p>
                                <p class="list-vertical-item"><i class="fa fa-envelope"></i><span>Email: <a
                                            href="mailto:rebecca.tshikadile@codelabdrc.com">rebecca.tshikadile@codelabdrc.com</a></span>
                                </p>
                                <p class="list-vertical-item"><i class="fa fa-link"></i><span>Site Web: <a
                                            href="https://www.beckyada.com">https://www.beckyada.com</a></span></li>
                                </p>

                                <p>
                                <ul class="social">
                                    <li class="list-enligne-item"><a href="https://github.com/beckyo6"><i
                                                class="fa fa-github"></i></a></li>
                                    <li class="list-enligne-item"><a href="https://www.facebook.com/becky.ada.3538"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li class="list-enligne-item"><a href=" https://wa.me/243978977879"><i
                                                class="fa fa-whatsapp"></i></a></li>
                                    <li class="list-enligne-item"><a href="https://www.instagram.com/beckyada6/"><i
                                                class="fa fa-instagram"></i></a></li>
                                </ul>
                                </p>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form id="contact" action="{{ route('contact.post') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="inserer votre nom" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <input name="email" type="email" class="form-control" id="email"
                                            placeholder="inserer votre adresse mail" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message"
                                            placeholder="saississez votre message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="btn">envoyer</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="content">
            <p>Copyright &copy; 2021 Becky ada. <a href="https://codelabdrc.com">codelab drc</a></p>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.11.2.min.js')}}"><\/script>')
    </script>

    <script src="{{ asset('assets/js/vendor/bootstrap.min.js')}}"></script>

    <script src="{{ asset('assets/js/datepicker.js')}}"></script>
    <script src="{{ asset('assets/js/plugins.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function() {



            // navigation click actions 
            $('.scroll-link').on('click', function(event) {
                event.preventDefault();
                var sectionID = $(this).attr("data-id");
                scrollToID('#' + sectionID, 750);
            });
            // scroll to top action
            $('.scroll-top').on('click', function(event) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
            });
            // mobile nav toggle
            $('#nav-toggle').on('click', function(event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });
        });
        // scroll function
        function scrollToID(id, speed) {
            var offSet = 0;
            var targetOffset = $(id).offset().top - offSet;
            var mainNav = $('#main-nav');
            $('html,body').animate({
                scrollTop: targetOffset
            }, speed);
            if (mainNav.hasClass("open")) {
                mainNav.css("height", "1px").removeClass("in").addClass("collapse");
                mainNav.removeClass("open");
            }
        }
        if (typeof console === "undefined") {
            console = {
                log: function() {}
            };
        }
    </script>
</body>

</html>
