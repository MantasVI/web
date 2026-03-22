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
        <meta movie="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    </head>

    <body>
        <div class="page-wrapper">
        <!--SIDEBAR STARTS-->
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

               <div class="profile-name" movie="profile-name"><?php echo $_SESSION['username']; ?></div>
            </div>
             
                <hr class="line">
                <div class="log-out"><a class="link" href="logout.php"><i class="fa-solid fa-door-open"></i> Log Out</a></div>
                <hr class="line">
        </nav>
      <!--SIDEBAR ENDS-->

      <!--MAIN PAGE STARTS-->
        <div class="main">

                <!--1-->
            <div class="top">
                <div class="search-bar-container">
                    <i style="color: black;" class="fa-solid fa-magnifying-glass"></i>
                    <input class="search-bar" placeholder="Type in something"> 
                </div>
                

            </div>
                <!--1-->

                 <!--2-->
            <div class="mid">
                <img class="action-picture" src="../images/logo.jpg">
                <p class="action-name" style="-webkit-text-stroke: 4px black;">RECOMMENDED</p>
            </div>
                 <!--2-->

                  <!--3-->
            <div class="title-action">Recommended Movies/Shows</div>
            <div class="action-films">
                <div class="action-film-container" data-type="movie" data-name="The Matrix" data-id="8">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/The_Matrix.jpg">
                        <p class="action-info">The Matrix</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="The Dark Knight" data-id="2">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/The_Dark_Knight.jpg">
                        <p class="action-info">The Dark Knight</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Spiderman 2" data-id="3">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Spiderman_2.jpg">
                        <p class="action-info">Spiderman 2</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="The Wolf of Wall Street" data-id="31">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/The_Wolf_Of_Wall_Steet.jpg">
                        <p class="action-info">The Wolf of Wall Street</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="Game Of Thrones" data-id="9">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Game_Of_Thrones.jpg">
                        <p class="action-info">Game Of Thrones</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="Breaking Bad" data-id="10">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Breaking_Bad.jpg">
                        <p class="action-info">Breaking Bad</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="Better Call Saul" data-id="14">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Better_Call_Saul.jpg">
                        <p class="action-info">Better Call Saul</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="Attack on Titan" data-id="25">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Attack_On_Titan.jpg">
                        <p class="action-info">Attack on Titan</p>
                </div>
            </div>

                 
            <div class="mid">
                <img class="action-picture" src="../images/logo.jpg">
                <p class="action-name" style="-webkit-text-stroke: 4px black;">NEW RELEASES</p>
            </div>
            
            <div class="title-action">Newly Released Movies/Series</div>
            <div class="action-films">
                <div class="action-film-container" data-type="movie" data-name="Harry Potter Deathly Hallows Part 2" data-id="9">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Harry_Potter_And_The_Deathly_Hollows_Part_2.jpg">
                        <p class="action-info">Harry Potter and the Deathly Hollows Part 2</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Doctor Strange Multiverse of Madness" data-id="13">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Doctor_Strange_In_The_Multiverse_Of_Madness.jpg">
                        <p class="action-info">Doctor Strange in the Multiverse of Madness</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Five Nights at Freddy's 2" data-id="21">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Five_Nights_At_Freddys_2.jpg">
                        <p class="action-info">Five Nights at Freddy's 2 </p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Avatar Fire and Ash" data-id="11">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Avatar_Fire_And_Ash.jpg">
                        <p class="action-info">Avatar: Fire and Ash</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="The Mandalorian" data-id="22">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/The_Mandalorian.jpg">
                        <p class="action-info">The Mandalorian</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="A Knight Of The Seven Kingdoms" data-id="13">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/A_Knight_Of_The_Seven_Kingdoms.webp">
                        <p class="action-info">A Knight Of The Seven Kingdoms</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="Chainsaw Man" data-id="31">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Chainsaw_Man.jpg">
                        <p class="action-info">Chainsaw Man</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="Invincible" data-id="4">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Invincable.jpg">
                        <p class="action-info">Invincible</p>
                </div>
            </div>

            <div class="mid">
                <img class="action-picture" src="../images/logo.jpg">
                <p class="action-name" style="-webkit-text-stroke: 4px black;">TOP RATED IMDB</p>
            </div>
            
            <div class="title-action">Top Rated Movies/Series On IMDB</div>
             <div class="action-films">
                <div class="action-film-container" data-type="movie" data-name="The Dark Knight" data-id="2">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/The_Dark_Knight.jpg">
                        <p class="action-info">The Dark Knight</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="The Green Mile" data-id="15">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/The_Green_Mile.jpg">
                        <p class="action-info">The Green Mile</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Spirited Away" data-id="16">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Spirited_Away.jpg">
                        <p class="action-info">Spirited Away</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="The Silence of the Lambs" data-id="23">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/The_Silence_Of_The_Lambs.jpg">
                        <p class="action-info">The Silence of the Lambs</p>
                </div>
                <div class="action-film-container" data-type="series"  data-name="Arcane" data-id="1">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Arcane.jpg">
                        <p class="action-info">Arcane</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="Blue Eye Samurai" data-id="8">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Blue_Eye_Samurai.jpg">
                        <p class="action-info">Blue Eye Samurai</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="The Wire" data-id="16">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/The_Wire.jpg">
                        <p class="action-info">The Wire</p>
                </div>
                <div class="action-film-container" data-type="series" data-name="One Piece" data-id="27">
                    <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/One_Piece.jpg">
                        <p class="action-info">One Piece</p>
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
</div>

   <!--SCRIPTS START-->

   <script>
    const userFavorites = <?php echo json_encode($favs); ?>;
    
    </script>
    <script src="../js/test.js"></script>



    </body>

</html>