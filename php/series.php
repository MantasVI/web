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
                <img class="profile" src="../images/[CITYPNG.COM]White User Member Guest Icon PNG Image - 4000x4000.png">
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
                <img class="action-picture" src="../images/AAAAQRC29H19twWKcTZ9Zpg4biJbGNaHF2GGIYNcLt4eZ6fvwugUJbuKxTjjMFPCS-y5P3ZePL57rupDtSkyUIJhv3P8leMJGMzszuG2CHNd65NwWPu5LeKxQkRNfNMHmxAwt7tmQZFk1VIrBd1aXr2AR5DM.jpg">
                <p class="action-name">ANIMATION</p>
            </div>

            <div class="title-action">Series</div>
            <div class="action-films">
                <div class="action-film-container" data-type="series" data-name="Arcane" data-id="1">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/no-spoilers-new-season-2-image-without-text-fan-edit-v0-t0u718ort64d1.webp">
                        <p class="action-info">Arcane</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="Gravity Falls" data-id="2">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/71i0Hf8F0RL._AC_UF894,1000_QL80_.jpg">
                        <p class="action-info">Gravity falls</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="Rick And Morty" data-id="3">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/official-poster-for-rick-and-morty-season-8-v0-aacokoimbzxe1.webp">
                        <p class="action-info">Rick And Morty</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="Invincible" data-id="4">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/2a6b1ef2-2080-49fe-90eb-8795020520b5.avif">
                        <p class="action-info">Invincible</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="Spongebob Squarepants" data-id="5">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/81F7O+WC6+L.jpg">
                        <p class="action-info">Spongebob Squarepants</p>
                </div>
                 <div class="action-film-container" data-type="series" data-name="The Simpsons" data-id="6">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/s-l1200.jpg">
                        <p class="action-info">The Simpsons </p>
                </div>
                 <div class="action-film-container" data-type="series" data-name="The Simpsons" data-id="7">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/s-l1200.jpg">
                        <p class="action-info">The Simpsons </p>
                </div>
                <div class="action-film-container" data-type="series" data-name="The Simpsons" data-id="8">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/s-l1200.jpg">
                        <p class="action-info">The Simpsons </p>
                </div>
               
            </div>

            <div class="mid">
                <img class="action-picture" src="../images/AAAAQRC29H19twWKcTZ9Zpg4biJbGNaHF2GGIYNcLt4eZ6fvwugUJbuKxTjjMFPCS-y5P3ZePL57rupDtSkyUIJhv3P8leMJGMzszuG2CHNd65NwWPu5LeKxQkRNfNMHmxAwt7tmQZFk1VIrBd1aXr2AR5DM.jpg">
                <p class="action-name">DRAMA</p>
            </div>
            
            <div class="title-action">Series</div>
            <div class="action-films">
                <div class="action-film-container" data-type="series" data-name="Game Of Thrones" data-id="9">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/134181.jpg">
                        <p class="action-info">Game Of Thrones</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="Breaking Bad" data-id="10">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/0005b42db36c874e6817abc329549e98.jpg">
                        <p class="action-info">Breaking Bad</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="Peaky Blinders" data-id="11">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/e7cc6633-aeef-4de5-bc02-fedd435be653.sized-1000x1000.jpg">
                        <p class="action-info">Peaky Blinders</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="House of the Dragon" data-id="12">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/textless-rhaenyra-alicent-house-of-the-dragon-s2-2024-v0-77tpzxpnb32d1.webp">
                        <p class="action-info">House of the Dragon</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="A Knight Of The Seven Kingdoms" data-id="13">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/a-knight-of-the-seven-kingdoms-2026-textless-v0-tn7cimnorntf1.webp">
                        <p class="action-info">A Knight Of The Seven Kingdoms</p>
                </div>
                 <div class="action-film-container" data-type="series" data-name="Better Call Saul" data-id="14">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/30269.jpg">
                        <p class="action-info">Better Call Saul</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="Better Call Saul" data-id="15">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/30269.jpg">
                        <p class="action-info">Better Call Saul</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="Better Call Saul" data-id="16">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/30269.jpg">
                        <p class="action-info">Better Call Saul</p>
                </div>
            </div>

            <div class="mid">
                <img class="action-picture" src="../images/AAAAQRC29H19twWKcTZ9Zpg4biJbGNaHF2GGIYNcLt4eZ6fvwugUJbuKxTjjMFPCS-y5P3ZePL57rupDtSkyUIJhv3P8leMJGMzszuG2CHNd65NwWPu5LeKxQkRNfNMHmxAwt7tmQZFk1VIrBd1aXr2AR5DM.jpg">
                <p class="action-name">Fantasy</p>
            </div>
            
            <div class="title-action">Series</div>
            <div class="action-films">
                <div class="action-film-container" data-type="series" data-name="Stranger Things" data-id="17">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/ct29rgvkyy8z.webp">
                        <p class="action-info">Stranger Things</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="Andor" data-id="18">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/MV5BNGI2MTJjMjUtMTJhOC00YTY2LTg1NjUtMTdmMjg4YTk2YjM5XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg">
                        <p class="action-info">Andor</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="The Witcher" data-id="19">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/G0zW589WMAAk6S8.jpg">
                        <p class="action-info">The Witcher</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="Lord of the Rings Rings of Power" data-id="20">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/ficige9qzhr91.jpg">
                        <p class="action-info">Lord of the Rings: The Rings of Power</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="Wednesday" data-id="21">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/712iUgQM16L._AC_UF894,1000_QL80_.jpg">
                        <p class="action-info">Wednesday</p>
                </div>
                 <div class="action-film-container" data-type="series" data-name="The Mandalorian" data-id="22">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/n3iunkhinbn51.jpg">
                        <p class="action-info">The Mandalorian</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="The Mandalorian" data-id="23">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/n3iunkhinbn51.jpg">
                        <p class="action-info">The Mandalorian</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="The Mandalorian" data-id="24">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/n3iunkhinbn51.jpg">
                        <p class="action-info">The Mandalorian</p>
                </div>
            </div>

            <div class="mid">
                <img class="action-picture" src="../images/AAAAQRC29H19twWKcTZ9Zpg4biJbGNaHF2GGIYNcLt4eZ6fvwugUJbuKxTjjMFPCS-y5P3ZePL57rupDtSkyUIJhv3P8leMJGMzszuG2CHNd65NwWPu5LeKxQkRNfNMHmxAwt7tmQZFk1VIrBd1aXr2AR5DM.jpg">
                <p class="action-name">ANIME</p>
            </div>
            
            <div class="title-action">Series</div>
            <div class="action-films">
                <div class="action-film-container" data-type="series" data-name="Attack on Titan" data-id="25">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/d87abay-0e924e13-f7bd-4a9f-9334-3a228fdc6895.jpg">
                        <p class="action-info">Attack on Titan</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="Naruto" data-id="26">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/naruto-shippuden-face-off_u-l-q1tjkib0.jpg" >
                        <p class="action-info">Naruto</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="One Piece" data-id="27">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/removed-the-text-from-the-new-netflix-one-piece-poster-to-v0-nscmmvm29cfa1.webp">
                        <p class="action-info">One Piece</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="Demon Slayer" data-id="28">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/17h1fbep66f71.webp">
                        <p class="action-info">Demon Slayer</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="Dragonball Z" data-id="29">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/cxJJtt4.jpeg">
                        <p class="action-info">Dragonball Z</p>
                </div>
                 <div class="action-film-container" data-type="series" data-name="Death Note" data-id="30">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/b9g0clbu44lz.png">
                        <p class="action-info">Death Note</p>
                </div>
                 <div class="action-film-container" data-type="series" data-name="Death Note" data-id="31">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/b9g0clbu44lz.png">
                        <p class="action-info">Death Note</p>
                </div>
                 <div class="action-film-container" data-type="series" data-name="Death Note" data-id="32">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/b9g0clbu44lz.png">
                        <p class="action-info">Death Note</p>
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