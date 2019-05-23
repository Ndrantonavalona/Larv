<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
<!-- <script src="{{ asset('js/app.js') }}" defer></script>
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> -->
    <!-- Styles -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Apple devices fullscreen -->
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/template/css/bootstrap.min.css">
    <!-- icheck -->
    <link rel="stylesheet" href="/template/css/plugins/icheck/all.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="/template/css/style.css">
    <!-- Color CSS -->
    <link rel="stylesheet" href="/template/css/themes.css">
    <!-- select2 -->
    <link rel="stylesheet" href="/template/css/plugins/select2/select2.css">
    <link rel="stylesheet" href="/template/css/cssGlobal.css">
    <!-- colorbox -->
    <link rel="stylesheet" href="/template/css/plugins/colorbox/colorbox.css">
    <!-- Notify -->
    <link rel="stylesheet" href="/template/css/plugins/gritter/jquery.gritter.css">


    <!-- jQuery -->
    <script src="/template/js/jquery.min.js"></script>
    <!-- Nice Scroll -->
    <script src="/template/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- Validation -->
    <script src="/template/js/plugins/validation/jquery.validate.min.js"></script>
    <script src="/template/js/plugins/validation/additional-methods.min.js"></script>

    <!-- icheck -->
    <script src="/template/js/plugins/icheck/jquery.icheck.min.js"></script>
    <!-- Bootstrap -->
    <script src="/template/js/bootstrap.min.js"></script>
    <script src="/template/js/eakroko.js"></script>

    <!-- select2 -->
    <!-- JS page login -->
    <!-- <script src="http://mictusvoyages.testadvences.com/template/js/eakroko.js"></script>-->

    <script src="/template/js/plugins/placeholder/jquery.placeholder.min.js"></script>
    <script src="/template/js/plugins/select2/select2.min.js"></script>

    <!-- colorBox -->
    <script src="/template/js/plugins/colorbox/jquery.colorbox.js"></script>

    <!-- Notify -->
    <script src="/template/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/template/img/favicon.ico" />
    <!-- Apple devices Homescreen icon -->
    <link rel="apple-touch-icon-precomposed" href="/template/img/apple-touch-icon-precomposed.png" />
    <style>
        .select2-chosen>img{ margin-top:-4px;}
        .btn.btn-primary { background: #368ee0 !important; }
        .btn.btn-primary:hover { background: #1b67af !important; }
    </style>
    <link rel="stylesheet" href="/template/css/themes.css">
    <script type="text/javascript">
        $(document).ready(function() {
            $("head").append(
                $(document.createElement("link")).attr({rel:"stylesheet", type:"text/css", href:"/template/css/themes.css"})
            );
            var currentTheme ='darkblue';
            //var currentTheme =$("##currentTheme").val();
            //alert($("##currentTheme").val());
            $("body").addClass("theme-" + currentTheme).attr("data-theme", "theme-" + currentTheme);
        });
    </script>

</head>
<body style="height:auto !important;">
<style>
    a { color: #000000; }
    a:hover,
    a:focus { color: #000000; }
    .input-group-addon { color: #FFF !important; }
</style>

<div id="navigation" style="display:block !important!;">
    <div class="container-fluid" id="blocMenu">

        <a href="{{ url('/') }}" id="brand" style="width:100px !important;">
            <img src="/template/img/logo_homepage.jpg" alt="" style="width:auto;height:27px">
        </a>
        <a href="#" class="toggle-nav" id="toggleNavigation" style="display:none;">
        </a>

        <ul class='main-nav'>
            <li >
                <a href="{{ url('/pageencours') }}">
                    <span>R&eacute;servation</span>
                </a>
            </li>
            <li >
                <a href="{{ url('/pageencours') }}">
                    <span>Voyage</span>
                </a>
            </li>
            <li >
                <a href="{{ url('/pageencours') }}">
                    <span>Vol</span>
                </a>
            </li>
            <li >
                <a href="{{ url('/clientSearch') }}">
                    <span>Client</span>
                </a>
            </li>
            <li >
                <a href="{{ url('/pageencours') }}">
                    <span>Fournisseur</span>
                </a>
            </li>
            <li >
                <a href="{{ url('/pageencours') }}">
                    <span>Facturation</span>
                </a>
            </li>
            <li >
                <a href="{{ url('/pageencours') }}">
                    <span>Edition</span>
                </a>
            </li>
            <li >
                <a href="{{ url('/pageencours') }}">
                    <span>Pays</span>
                </a>
            </li>
            <li >
                <a href="{{ url('/pageencours') }}">
                    <span>Fil D'appel</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/listProduits') }}">
                    <span>Produits</span>
                    <!--<span class="caret"></span>-->
                </a>
            </li>

            <li>
                <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                    <span>Param&eacute;trage</span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('/parametres') }}">Param&egrave;tres simples</a>
                    </li>
                    <li>
                        <a href="{{ url('/gestionBanquePhotos') }}">Banque de photos</a>
                    </li>
                    <li>
                        <a href="{{ url('/listUtilisateur') }}">Utilisateur</a>
                    </li>
                    <li>
                        <a href="{{ url('/pageencours') }}">Gestion des devises</a>
                    </li>
                    <li >
                        <a href="{{ url('/pageencours') }}">
                            G&eacute;ographie
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/pageencours') }}">Article CMS</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="user" >
            <ul class="icon-nav">
                <li class="dropdown sett" style="display:none">
                    <a href="#" class='dropdown-toggle' data-toggle="dropdown">
                        <i class="fa fa-cog"></i>
                    </a>
                    <ul class="dropdown-menu pull-right theme-settings">
                        <li>
                            <span>Layout-width</span>
                            <div class="version-toggle">
                                <a href="#" class='set-fixed'>Fixe</a>
                                <a href="#" class="active set-fluid">Fluide</a>
                            </div>
                        </li>
                        <li>
                            <span>Topbar</span>
                            <div class="topbar-toggle">
                                <a href="#"  class='set-topbar-fixed'>Fixe</a>
                                <a href="#" id="setTopBarFixed"  class="active set-topbar-default">D&eacute;fault</a>
                            </div>
                        </li>
                        <li>
                            <span>Sidebar</span>
                            <div class="sidebar-toggle">
                                <a href="#" class='set-sidebar-fixed'>Fixe</a>
                                <a href="#" class="active set-sidebar-default">D&eacute;fault</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class='dropdown colo'>
                    <a href="#" class='dropdown-toggle' data-toggle="dropdown">
                        <i class="fa fa-tint"></i>
                    </a>
                    <ul class="dropdown-menu pull-right theme-colors">
                        <li class="subtitle">
                            Couleurs pr&eacute;d&eacute;finies
                        </li>
                        <li>
                            <span class='red'></span>
                            <span class='orange'></span>
                            <span class='green'></span>
                            <span class="brown"></span>
                            <span class="blue"></span>
                            <span class='lime'></span>
                            <span class="teal"></span>
                            <span class="purple"></span>
                            <span class="pink"></span>
                            <span class="magenta"></span>
                            <span class="grey"></span>
                            <span class="darkblue"></span>
                            <span class="lightred"></span>
                            <span class="lightgrey"></span>
                            <span class="satblue"></span>
                            <span class="satgreen"></span>
                            <input type="hidden" id="currentTheme" value="darkblue">
                        </li>
                    </ul>
                </li>

                <li class='dropdown language-select'>
                    <a href="#" class='dropdown-toggle' data-toggle="dropdown">
                        <img src="https://mictusvoyages.advences.com/template/img/demo/flags/fr.gif" alt="">
                        <span>FR</span>
                    </a>
                </li>

            </ul>
            <ul class='main-nav'>
                <li>
                    <a href="#">
                        {{ Auth::user()->name }}
                    </a>
                </li>
                <li>
                    <a style="cursor: pointer" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Déconnexion') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="" id="" >
    <div id="main" style="padding-bottom:0px;">
        <div class="container-fluid" >

            <div class="row">
                <div class="col-sm-12">
                    @yield('content')
                </div>
            </div>

            <style>
                #modalBloc { width:300px; position:absolute; left:50%; top:50%; margin:-70px 0 0 -150px; }
            </style>
        </div>
    </div>
</div>
</body>
</html>
