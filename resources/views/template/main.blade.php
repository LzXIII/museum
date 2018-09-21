<!doctype html>
<html lang="it">
<head>

    <!-- For Google -->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description"
      content="Il sito ufficiale del museo storico dei pompieri e della croce rossa italiana, a Manfredonia "/>
<meta name="keywords"
      content="museo Manfredonia,museo storico pompieri,pompieri Manfredonia,croce rossa italiana,museo puglia,museo vigili del fuoco,Manfredonia"/>
<meta name="author" content="Museo storico pompieri"/>


    <meta property="og:title" content="Museo storico dei pompieri e della croce rossa italiana"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="https://museostoricopompieri.it/image/imagefb.jpg"/>
    <meta property="og:url" content="https://museostoricopompieri.it"/>
    <meta property="og:description"
          content="Il sito ufficiale del museo storico dei pompieri e della croce rossa italiana, a Manfredonia"/>
<!-- For Facebook -->







<link rel="stylesheet" type="text/css" href="/template/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/template/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/template/css/bistro-icons.css">
<link rel="stylesheet" type="text/css" href="/template/css/animate.min.css">
<link rel="stylesheet" type="text/css" href="/template/css/settings.css">
<link rel="stylesheet" type="text/css" href="/template/css/navigation.css">
<link rel="stylesheet" type="text/css" href="/template/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/template/css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="/template/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="/template/css/zerogrid.css">
<link rel="stylesheet" type="text/css" href="/template/css/style.css">
<link rel="stylesheet" type="text/css" href="/template/css/loader.css">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<script src='https://www.google.com/recaptcha/api.js' async defer></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="shortcut icon" href="/image/icona logo positivo.png">
<link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet"><!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->


<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v3.1&appId=1698801180133538&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <title>Museo Storico dei Pompieri</title>


</head>

<!--Loader-->
<div class="loader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>



<body>
  @yield('header')
<header id="main-navigation">
<div id="navigation" data-spy="affix" data-offset-top="20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#fixed-collapse-navbar" aria-expanded="false">
                            <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span
                                class="icon-bar bottom-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/"><img src="/image/logo-white.png" alt="logo"
                                                                       class="img-responsive" style="max-width: 210px;"></a>
                    </div>

                    <div id="fixed-collapse-navbar" class="navbar-collapse collapse navbar-right" style="
padding-left: 0px;">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Scopri il Museo</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/scopri-il-museo/la-storia">La Storia</a></li>
                                    <li><a href="/scopri-il-museo/il-tour">Il Tour</a></li>
                                    <li><a href="/scopri-il-museo/donazioni-acquisizioni">Donazioni &amp; Acquisizioni</a></li>
                                    <li><a href="/scopri-il-museo/organigramma">Organigramma</a></li>
                                </ul>
                            </li>



                            <li><a href="/gallery">Gallery</a></li>
                            <li><a href="/news">News &amp; Eventi</a></li>
                            <li><a href="/contatti">Contatti</a></li>
                            <li><a href="/prenota-il-tour">Prenota il Tour</a></li>


                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
</header>
@yield('body')

@include('partials.footer')
</body>

</html>
