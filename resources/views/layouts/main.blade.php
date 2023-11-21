<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/rounded_logo.png') }}" type="image/x-icon">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Confirmação do domínio -->
    <meta name="facebook-domain-verification" content="03z0ik2dsvx36grayeocafn7n7gcdk" />

    <!-- Pixel Meta -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '362748409532554');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=362748409532554&ev=PageView&noscript=1"
        /></noscript>

</head>

<body class="antialiased">
    <header>
        <div class="row align-items-center">
            <a href="/" class="col-3 logo mt-3 ms-3">
                <img src="{{ asset('img/logo_agropet.png') }}" alt="">
            </a>
            <div class="col-6 d-flex justify-content-center" id="searchbar">
                <div class="input-group d-flex justify-content-center">
                    <span class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>
                    <form action="" method="GET" class="form-search">
                        <input type="text" name="search" id="search" class="form-control"
                            placeholder="Buscar...">
                    </form>
                </div>
            </div>
        </div>
       
    </header>
    <main>
    
        <div class="row">
            @yield('content')
        </div>
    </main>

   
    <footer>
        <p>Agropet Facilita &copy; 2023</p>
        <p><a href="https://www.tiktok.com/@agropetfacilita?_t=8gSQITvy7cb&_r=1"><i class="bi bi-tiktok"></i></a></p>
    </footer>
    
</body>

</html>
