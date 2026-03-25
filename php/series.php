<?php
include ('addfavorite.php');

$user_id = $_SESSION['id'];
$query = "SELECT m.name,m.image FROM movies as m join favorites as  f on f.contentid=m.id WHERE f.user_id = '$user_id' and f.type = 'movie'";

$result  = mysqli_query($conn, $query);
$movies = [];


while($row = mysqli_fetch_assoc($result)) {
    $movies[] = ['name' => $row['name'], 'image' => $row['image']];
}
$series = [];
$query = "SELECT s.name,s.image FROM series as s join favorites as  f on f.contentid=s.id WHERE f.user_id = '$user_id' and f.type = 'series'";
$result  = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)) {
    $series[] = ['name' => $row['name'], 'image' => $row['image']];
}

$favs = array_merge(
    array_column($movies, 'name'),
    array_column($series, 'name'));
?>
<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    </head>

    <body>
        
        <nav class="sidebar">
            <hr class="line">
            <div class="title">BBN Filmai</div>
            <hr class="line">
            <div class="sidebar-buttons">
                  <!--------------------->
                    <div class="nav">
                        <a class="link" href="home.php">
                        <i class="fa-solid fa-house-chimney"></i> 
                        Home</a>
                    </div>
                      <!--------------------->
                    <div class="nav">
                        <a class="link" href="movies.php">
                        <i class="fa-solid fa-film"></i>
                         Movies </a>
                    </div>
                    <!--------------------->
                    <div class="nav">
                        <a class="link" href="series.php">
                        <i class="fa-solid fa-clapperboard"></i>
                        Series</a>
                    </div>
                    <!--------------------->
                    <div class="nav">
                         <a class="link" href="favorite.php">
                       <i class="fa-solid fa-face-smile"></i>
                        Favorites</a>
                    </div>
                </div>

                <hr class="line">
            
            <div class="account">
                <img class="profile" src="../images/Icon.png">
               <div class="profile-name" id="profile-name"><?php echo $_SESSION['username']; ?></div>
            </div>
             
                <hr class="line">
                <div class="log-out"><a class="link" href="logout.php"><i class="fa-solid fa-door-open"></i> Log Out</a></div>
                <hr class="line">
        </nav>
      
        <div class="main">
            <div class="top">
                <div class="search-bar-container">
                    <i style="color: black;" class="fa-solid fa-magnifying-glass"></i>
                    <input class="search-bar" placeholder="Type in something"> 
                </div>
            </div>
            
            <div class="mid">
                <img class="action-picture" src="../images/logo.jpg">
                <p class="action-name" style="-webkit-text-stroke: 4px black;">ANIMATION</p>
            </div>

            <div class="title-action">Animated Series</div>
            <div class="action-films">
                <div class="action-film-container" data-type="series"  data-name="Arcane" data-id="1">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=fXmAurh012s&pp=ygUOYXJjYW5lIHRyZWlsZXI%3D">
                        <img class="action-film" src="../images/Arcane.jpg">
                        <p class="action-info">Arcane</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="Gravity Falls" data-id="2">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=yfUDIPUETUg&pp=ygUUZ3Jhdml0eSBmYWxsIHRyZWlsZXI%3D">
                        <img class="action-film" src="../images/Gravity_Falls.jpg">
                        <p class="action-info">Gravity Falls</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="Rick And Morty" data-id="3">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=ySYnTO7leqI&pp=ygUUcmljayBuZCBtb3J0eSB0cmVpbHI%3D">
                        <img class="action-film" src="../images/Rick_And_Morty.jpg">
                        <p class="action-info">Rick And Morty</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="Invincible" data-id="4">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=-bfAVpuko5o&pp=ygURaW52aW5jaWJsZSB0cmVpbHI%3D">
                        <img class="action-film" src="../images/Invincable.jpg">
                        <p class="action-info">Invincible</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="Spongebob Squarepants" data-id="5">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=P3-g4ERT5uk&pp=ygURc3Bvb25nZWJvYiB0cmVpbHI%3D">
                        <img class="action-film" src="../images/Spongebob_Squarepants.jpg">
                        <p class="action-info">Spongebob Squarepants</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="The Simpsons" data-id="6">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=XPG0MqIcby8&pp=ygUQc2ltcHNvbnMgdHJlaWxlcg%3D%3D">
                        <img class="action-film" src="../images/The_Simpsons.jpg">
                        <p class="action-info">The Simpsons </p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="Avatar: The Last Airbender" data-id="7">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=ooVvH2IYz0w&pp=ygUdYXZhdGFyIGxhc3QgYWlyYmVuZGVyIHRyZWlsZXI%3D">
                        <img class="action-film" src="../images/Avatar_The_Last_Airbender.jpg">
                        <p class="action-info">Avatar: The Last Airbender</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="Blue Eye Samurai" data-id="8">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=3gLlS9m4kns&pp=ygUYYmx1ZSBleWUgc2FtdXJhaSB0cmVpbGVy">
                        <img class="action-film" src="../images/Blue_Eye_Samurai.jpg">
                        <p class="action-info">Blue Eye Samurai</p><a>
                </div>
            </div>

            <div class="mid">
                <img class="action-picture" src="../images/logo.jpg">
                <p class="action-name" style="-webkit-text-stroke: 4px black;">DRAMA</p>
            </div>
            
            <div class="title-action">Drama Series</div>
            <div class="action-films">
                <div class="action-film-container" data-type="series" data-name="Game Of Thrones" data-id="9">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=KPLWWIOCOOQ&pp=ygUXZ2FtZSBvZiB0aHJvbmVzIHRyZWlsZXI%3D">
                        <img class="action-film" src="../images/Game_Of_Thrones.jpg">
                        <p class="action-info">Game Of Thrones</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="Breaking Bad" data-id="10">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=HhesaQXLuRY&pp=ygUUYnJlYWtpbmcgYmFkIHRyZWlsZXLSBwkJxQoBhyohjO8%3D">
                        <img class="action-film" src="../images/Breaking_Bad.jpg">
                        <p class="action-info">Breaking Bad</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="Peaky Blinders" data-id="11">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=oVzVdvGIC7U&pp=ygUWcGVha3kgYmxpbmRlcnMgdHJlaWVscg%3D%3D">
                        <img class="action-film" src="../images/Peaky_Blinders.jpg">
                        <p class="action-info">Peaky Blinders</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="House of the Dragon" data-id="12">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=DotnJ7tTA34&pp=ygUTaG91c2Ugb2YgdGhlIGRyYWdvbg%3D%3D">
                        <img class="action-film" src="../images/House_Of_The_Dragon.jpg">
                        <p class="action-info">House of the Dragon</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="A Knight Of The Seven Kingdoms" data-id="13">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=UPFRItMOgPo&pp=ygUka25pZ2h0IG9mIHRoZSBzZXZlbiBraW5nZG9tcyB0cmFpbGVy">
                        <img class="action-film" src="../images/A_Knight_Of_The_Seven_Kingdoms.webp">
                        <p class="action-info">A Knight Of The Seven Kingdoms</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="Better Call Saul" data-id="14">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=HN4oydykJFc&pp=ygUYYmV0dGVyIGNhbGwgc2F1bCB0cmVpbGVy0gcJCcUKAYcqIYzv">
                        <img class="action-film" src="../images/Better_Call_Saul.jpg">
                        <p class="action-info">Better Call Saul</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="Band of Brothers" data-id="15">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=KKRBAFlN5ww&pp=ygUYYmFuZCBvZiBicm90aGVycyB0cmVpbGVy">
                        <img class="action-film" src="../images/Band_Of_Brothers.jpg">
                        <p class="action-info">Band of Brothers</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="The Wire" data-id="16">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=1S5khOZ1wBs&pp=ygUQdGhlIHdpcmUgdHJlaWxlcg%3D%3D">
                        <img class="action-film" src="../images/The_Wire.jpg">
                        <p class="action-info">The Wire</p><a>
                </div>
            </div>

            <div class="mid">
                <img class="action-picture" src="../images/logo.jpg">
                <p class="action-name" style="-webkit-text-stroke: 4px black;">FANTASY</p>
            </div>
            
            <div class="title-action">Fantasy Series</div>
            <div class="action-films">
                <div class="action-film-container" data-type="series" data-name="Stranger Things" data-id="17">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=mnd7sFt5c3A&pp=ygUYc3RyYW5nZXIgdGhpbmdzIHRlcmlsZXJc0gcJCcUKAYcqIYzv">
                        <img class="action-film" src="../images/Stranger_Things.jpg">
                        <p class="action-info">Stranger Things</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="Andor" data-id="18">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=cKOegEuCcfw&pp=ygUOYW5kb3IgdGVyaWxlclw%3D">
                        <img class="action-film" src="../images/Andor.jpg">
                        <p class="action-info">Andor</p><a>
                </div> 
                <div class="action-film-container" data-type="series" data-name="The Witcher" data-id="19">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=ndl1W4ltcmg&pp=ygUQd2l0Y2hlciB0ZXJpbGVyXA%3D%3D">
                        <img class="action-film" src="../images/The_Witcher.jpg">
                        <p class="action-info">The Witcher</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="Lord of the Rings: The Rings of Power" data-id="20">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=x8UAUAuKNcU&pp=ygUtTG9yZCBvZiB0aGUgUmluZ3M6IFRoZSBSaW5ncyBvZiBQb3dlciB0cmVpbGVy">
                        <img class="action-film" src="../images/Lord_Of_The_Rings_The_Rings_Of_Power.jpg">
                        <p class="action-info">Lord of the Rings: The Rings of Power</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="Wednesday" data-id="21">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=Di310WS8zLk&pp=ygURd2VkbmVzZGF5IHRyZWllbHI%3D">
                        <img class="action-film" src="../images/Wednesday.jpg">
                        <p class="action-info">Wednesday</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="The Mandalorian" data-id="22">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=_pa1KLXuW0Y&pp=ygUTbWFuZGFsb3JpYW4gdHJlaWVsctIHCQnFCgGHKiGM7w%3D%3D">
                        <img class="action-film" src="../images/The_Mandalorian.jpg">
                        <p class="action-info">The Mandalorian</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="Lost" data-id="23">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=KTu8iDynwNc&pp=ygUMbG9zdCB0cmVpZWxy">
                        <img class="action-film" src="../images/Lost.jpg">
                        <p class="action-info">Lost</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="Loki" data-id="24">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=nW948Va-l10&pp=ygUMbG9raSB0cmVpZWxy">
                        <img class="action-film" src="../images/Loki.jpg">
                        <p class="action-info">Loki</p><a>
                </div>
            </div>

            <div class="mid">
                <img class="action-picture" src="../images/logo.jpg">
                <p class="action-name" style="-webkit-text-stroke: 4px black;">ANIME</p>
            </div>
            
            <div class="title-action">Anime Series</div>
            <div class="action-films">
                <div class="action-film-container" data-type="series" data-name="Attack on Titan" data-id="25">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=LV-nazLVmgo&pp=ygUXYXR0YWNrIG9uIHRpdGFuIHRyZWllbHI%3D">
                        <img class="action-film" src="../images/Attack_On_Titan.jpg">
                        <p class="action-info">Attack on Titan</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="Naruto: Shippuden" data-id="26">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=22R0j8UKRzY&pp=ygUYbmFydXRvIHNoaXBwdWRlbiB0cmVpbGVy">
                        <img class="action-film" src="../images/Naruto_Shippuden.jpg">
                        <p class="action-info">Naruto: Shippuden</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="One Piece" data-id="27">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=MCb13lbVGE0&pp=ygUXb25lIHBpZWNlIGFuaW1lIHRyZWlsZXI%3D">
                        <img class="action-film" src="../images/One_Piece.jpg">
                        <p class="action-info">One Piece</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="Demon Slayer" data-id="28">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=x7uLutVRBfI&pp=ygUaZGVtb24gc2xheWVyIGFuaW1lIHRyZWlsZXI%3D">
                        <img class="action-film" src="../images/Demon_Slayer.jpg">
                        <p class="action-info">Demon Slayer</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="Dragonball Z" data-id="29">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=tloraopWVuk">
                        <img class="action-film" src="../images/Dragonball_Z.jpg">
                        <p class="action-info">Dragonball Z</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="Death Note" data-id="30">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=NlJZ-YgAt-c&pp=ygUSZGVhdGggbm90ZSB0cmVpbGVy">
                        <img class="action-film" src="../images/Death_Note.png">
                        <p class="action-info">Death Note</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="Chainsaw Man" data-id="31">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=l96zmDlWCBk&pp=ygUUY2hhaW5zYXcgbWFuIHRyZWlsZXI%3D">
                        <img class="action-film" src="../images/Chainsaw_Man.jpg">
                        <p class="action-info">Chainsaw Man</p><a>
                </div>
                <div class="action-film-container" data-type="series" data-name="Vinland Saga" data-id="32">
                    <i class="fa-regular fa-heart"></i>
                    <a href="https://www.youtube.com/watch?v=f8JrZ7Q_p-8&pp=ygUUdmlubGFuZCBzYWdhIHRyZWlsZXI%3D">
                        <img class="action-film" src="../images/Vinland_Saga.jpg">
                        <p class="action-info">Vinland Saga</p><a>
                </div>
            </div>

        </div>

        <div class="footer">
            <div class="block1">BBN Filmai - 2026</div>

            <div class="block2"><i class="fa-solid fa-handshake"></i> Socials:
                
                <a class="linkfoot" href="https://github.com/MantasVI">
                    <i class="fa-brands fa-github"> Mantas </i>
                </a>
                <a class="linkfoot" href="https://github.com/nataskasparaitis">
                     <i class="fa-brands fa-github"> Natas </i>
                </a>
                <a class="linkfoot" href="https://github.com/Kepsnys7">
                    <i class="fa-brands fa-github"> Arnas </i>
                </a>
            </div>


        </div>


        
   <!--SCRIPTS START-->
    <script>
    const userFavorites = <?php echo json_encode($favs); ?>;
    </script>
    <script src="../js/test.js"></script>






    </body>

</html>