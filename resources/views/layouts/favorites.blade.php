<!DOCTYPE html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    </head>

    <body>
        <!--SIDEBAR STARTS-->
        <nav class="sidebar">
            <hr class="line">
            <div class="title">BBN Filmai</div>
            <hr class="line">
            <div class="sidebar-buttons">
                <div class="nav">
                    <a class="link" href="/home">
                    <i class="fa-solid fa-house-chimney"></i> Home</a>
                </div>
                <div class="nav">
                    <a class="link" href="/movies">
                    <i class="fa-solid fa-film"></i> Movies</a>
                </div>
                <div class="nav">
                    <a class="link" href="/series">
                    <i class="fa-solid fa-clapperboard"></i> Series</a>
                </div>
                <div class="nav">
                    <a class="link" href="/favorites">
                    <i class="fa-solid fa-face-smile"></i> Favorites</a>
                </div>
            </div>
            <hr class="line">
            <div class="account">
                <img class="profile" src="/images/Icon.png">
                <div class="profile-name" id="profile-name">{{ Auth::user()->username}}</div>
            </div>
            <hr class="line">
            <div class="log-out">
                <a class="link" href="/logout">
                <i class="fa-solid fa-door-open"></i> Log Out</a>
            </div>
            <hr class="line">
        </nav>
        <!--SIDEBAR ENDS-->

        <!--MAIN PAGE STARTS-->
        <div class="main">
            @yield('favorites')

        </div>
        <!--MAIN PAGE ENDS-->

        <!--FOOTER STARTS-->
        <div class="footer">
            <div class="block1">BBN Filmai - 2026</div>
            <div class="block2"><i class="fa-solid fa-handshake"></i> Socials:
                <a class="linkfoot" href="https://github.com/MantasVI">
                    <i class="fa-brands fa-github"> Mantas</i>
                </a>
                <a class="linkfoot" href="https://github.com/nataskasparaitis">
                    <i class="fa-brands fa-github"> Natas</i>
                </a>
                <a class="linkfoot" href="https://github.com/Kepsnys7">
                    <i class="fa-brands fa-github"> Arnas</i>
                </a>
            </div>
        </div>
<script>
    const userFavorites = {!! json_encode($userFavorites ?? []) !!};
</script>
<script src="/js/main.js"></script>
    </body>
</html>
