<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bake & Go') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-vlOMx0hKjUCl4WzuhIhSNZSm2yQCaf0mOU1hEDK/iztH3gU4v5NMmJln9273A6Jz" crossorigin="anonymous">

    {{-- Preload CSS --}}
    <link rel="preload" href="{{ asset('css/style.css') }}" as="style">
    <link rel="prerender" href="{{ asset('css/style.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Metatags - SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Bake & Go",
        "logo": "./assets/img/bakeandgo_logo_02_black.png",
        "url": "#",
        "description": "Bake & Go, a sua padaria online.",
        "email": "bakeandgo.coffeeshop@gmail.com",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "BR",
            "addressLocality": "São Paulo",
            "addressRegion": "São Paulo",
            "postalCode": "04548-000",
            "streetAddress": "Av. Dr. Cardoso de Melo, 90 - Vila Olímpia"
        },
        "sameAs": ["https://www.instagram.com/bakeandgo.coffeeshop/", "https://www.facebook.com/bakeandgo.coffeeshop/"],
        "brand": [
                { "@type": "brand", "name": "Bake & Go", "url": "#" }
        ]
    }
    </script>

    <meta name="title" content="Bake & Go">
    <meta name="description" content="Bake & Go, a sua padaria online.">
    <meta name="identifier-URL" content="#">
    <meta name="url" content="#">
    <meta name="abstract" content="Bake & Go">
    <meta name="author" content="Bake & Go">
    <meta name="robots" content="index,follow">
    <meta name="contact" content="bakeandgo.coffeeshop@gmail.com">
    <meta name="reply-to" content="bakeandgo.coffeeshop@gmail.com">
    <meta name="copyright" content="Bake & Go">
    <meta name="rating" content="general">
    <meta name="web_author" content="Bake & Go">
    <meta property="og:site_name" content="Bake & Go">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Bake & Go">
    <meta property="og:description" content="Bake & Go, a sua padaria online.">
    <meta property="og:url" content="#">
    <meta property="og:locale" content="pt-BR">
    <meta name="og:locality" content="São Paulo">
    <meta name="og:region" content="SP">
    <meta name="og:country-name" content="BR">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bake & Go">
    <meta name="twitter:description" content="Bake & Go, a sua padaria online.">
    <meta name="twitter:image" content=".assets/img/01_bakeandgo_home.jpg">
    <meta name="keywords" content="Bake & Go, padaria, café, coffee shop, pão artesanal, pão italiano, pão de queijo, cheesecake, donuts">
    <meta property="og:type" content="website">
    <meta name="application-name" content="Bake & Go">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Bake & Go">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-TileColor" content="#faf8f3">
    <meta name="theme-color" content="#ffffff">
    <link rel="mask-icon" href="./assets/favicon/safari-pinned-tab.svg" color="#000000">
    <!--[if IE]><link rel="shortcut icon" href="./assets/favicon/favicon.ico"><![endif]-->
    <meta name="msapplication-TileImage" content="./assets/favicon/bakeandgo-150x150.png">
    <link rel="icon" type="image/png" sizes="512x512" href="./assets/favicon/bakeandgo-512x512.png">
    <link rel="icon" sizes="192x192" href="./assets/favicon/bakeandgo-192x192.png">
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="./assets/favicon/bakeandgo-180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/bakeandgo-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/bakeandgo-16x16.png">
</head>
<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                <a class="navbar-brand" href="index.php"><img class="logo-header" src="{{ asset("img/bakeandgo_logo_02_black.png") }}" alt="Logo Bake & Go"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav text-center ml-md-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="quem-somos.php">Quem somos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
                                <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Pães e Bolos</a>
                                    <a class="dropdown-item" href="#">Frios</a>
                                    <a class="dropdown-item" href="#">Lanches e Salgados</a>
                                    <a class="dropdown-item" href="#">Mercearia</a>
                                </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato.php">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-login btn btn-primary col-12 text mb-3 mb-md-1 ml-md-1 px-md-3" href="#" data-toggle="modal" data-target="#btnLogin">Login</a>
                        </li>
                        <li>
                        <a class="nav-link btn btn-primary mb-3 mb-md-1 ml-md-3 px-md-3" href="cesta-de-compras.php"><i class="ic-basket fa fa-shopping-basket" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- MODAL LOGIN -->
            <div class="modal fade" id="btnLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" id="staticBackdropLabel">Login</h5>
                    </div>
                    <div class="modal-body text-dark">
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="email" class="form-control" placeholder="Email" aria-label="Login" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">*</span>
                        </div>
                        <input type="password" class="form-control" placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <p class="pt-3">Novo por aqui? <a href="cadastro.php" class="d-inline-block">Cadastre-se agora!</a></p>
                        <button type="button" class="btn btn-primary mb-0" data-dismiss="modal" style="width:130px;">Fechar</button>
                        <button type="submit" class="btn btn-primary mb-0" data-dismiss="modal">Login</button>
                    </div>
                </div>
            </div>
        </header>
        <div class="h-adm-space"></div>
        <nav class="navbar navbar-expand-xl navbar-light fixed-top nav-adm m-auto">
        <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#admNav" aria-controls="admNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="admNav">
            <ul class="navbar-nav text-center m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="admUsuario.php">Usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admCategoria.php">Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admProduto.php">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admMensagem.php">Mensagens</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="historicoPedidos.php">Histórico de Pedidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-adm mb-0 ml-1" title="Header Administrativo" data-toggle="modal" data-target="#btnSair">Sair</a>
                </li>
            </ul>
        </div>
        </nav>
        <!-- Modal - Sair -->
        <div class="modal fade" id="btnSair" tabindex="-1" role="dialog" aria-labelledby="btnSair" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sair</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Deseja realmente sair do painel de controle?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary mb-0" data-dismiss="modal">Cancelar</button>
                        <a href="#">
                            <button type="button" class="btn btn-danger mb-0">Sair</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <main class="py-0">
            @yield('content')
        </main>
        
        <!-- JS SCRIPTS -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>AOS.init();</script>

    </div>
</body>
</html>