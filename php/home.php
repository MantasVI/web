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
                <img class="profile" src="../images/[CITYPNG.COM]White User Member Guest Icon PNG Image - 4000x4000.png">

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
                <img class="action-picture" src="../images/AAAAQRC29H19twWKcTZ9Zpg4biJbGNaHF2GGIYNcLt4eZ6fvwugUJbuKxTjjMFPCS-y5P3ZePL57rupDtSkyUIJhv3P8leMJGMzszuG2CHNd65NwWPu5LeKxQkRNfNMHmxAwt7tmQZFk1VIrBd1aXr2AR5DM.jpg">
                <p class="action-name">RECOMMENDED</p>
            </div>
                 <!--2-->

                  <!--3-->
            <div class="title-action">Movies</div>

            <div class="action-films">
                <div class="action-film-container" data-type="movie" data-name="Avengers Endgame" data-id="1">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/WN8uOOK.jpg">
                        <p class="action-info">Avengers Endgame</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="The Dark Knight" data-id="2">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/97c2f020ccf48e87fa53f2c21e529d05_b36c.jpg">
                        <p class="action-info">The Dark Knight</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Spiderman 2" data-id="3">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/b274dc791c2c737f4fede7d42bd2de66.jpg">
                        <p class="action-info">Spiderman 2</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Lord of the Rings" data-id="4">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/1636047577_146794.jpeg">
                        <p class="action-info">Lord of the Rings: The Return of the King</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Mad Max Fury Road" data-id="5">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Mad Max Poster.jpg">
                        <p class="action-info">Mad Max Furry road</p>
                </div>
                 <div class="action-film-container" data-type="movie" data-name="John Wick Chapter 2" data-id="6">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/bb87d4e204e0795f0d5056f72c272bf2.jpg">
                        <p class="action-info">John Wick Chapter 2</p>
                </div>
                 <div class="action-film-container" data-type="movie" data-name="John Wick Chapter 4" data-id="7">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/johnwickch4.jpg">
                        <p class="action-info">John Wick Chapter 4</p>
                </div>
                <div class="action-film-container" data-type="movie" data-id="8">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/johnwickch4.jpg">
                        <p class="action-info">John Wick Chapter 4</p>
                </div>
                
            </div>
                 <!--3-->

                 
            <div class="mid">
                <img class="action-picture" src="../images/AAAAQRC29H19twWKcTZ9Zpg4biJbGNaHF2GGIYNcLt4eZ6fvwugUJbuKxTjjMFPCS-y5P3ZePL57rupDtSkyUIJhv3P8leMJGMzszuG2CHNd65NwWPu5LeKxQkRNfNMHmxAwt7tmQZFk1VIrBd1aXr2AR5DM.jpg">
                <p class="action-name">NEW RELEASES</p>
            </div>
            
            <div class="title-action">Movies</div>
            <div class="action-films">
                <div class="action-film-container" data-type="movie" data-name="Harry Potter Deathly Hallows Part 2" data-id="9">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/76d1794906f060b0fb59430c38640c1f.jpg">
                        <p class="action-info">Harry Potter and the Deathly Hollows Part 2</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Doctor Strange" data-id="10">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/tyfxbxsp7es81.png">
                        <p class="action-info">Doctor Strange</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Avatar Fire and Ash" data-id="11">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/avatar__fire_and_ash___textless__01__by_chamikanlakshan_dk78y8k-fullview.jpg">
                        <p class="action-info">Avatar: Fire and Ash</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Avatar The Way of Water" data-id="12">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Avatar_TWoW_Textless_Poster.webp">
                        <p class="action-info">Avatar: The Way of Water</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Doctor Strange Multiverse of Madness" data-id="13">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/0pkotzt10ph81.png">
                        <p class="action-info">Doctor Strange in the Multiverse of Madness</p>
                </div>
                 <div class="action-film-container" data-type="movie" data-name="Black Panther" data-id="14">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/465056684_8662927067135458_4465191912075161902_n.jpg">
                        <p class="action-info">Black Patnher</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Black Panther" data-id="15">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/465056684_8662927067135458_4465191912075161902_n.jpg">
                        <p class="action-info">Black Patnher</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Black Panther" data-id="16">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/465056684_8662927067135458_4465191912075161902_n.jpg">
                        <p class="action-info">Black Patnher</p>
                </div>
            </div>

            <div class="mid">
                <img class="action-picture" src="../images/AAAAQRC29H19twWKcTZ9Zpg4biJbGNaHF2GGIYNcLt4eZ6fvwugUJbuKxTjjMFPCS-y5P3ZePL57rupDtSkyUIJhv3P8leMJGMzszuG2CHNd65NwWPu5LeKxQkRNfNMHmxAwt7tmQZFk1VIrBd1aXr2AR5DM.jpg">
                <p class="action-name">TOP RATED IMDB</p>
            </div>
            
            <div class="title-action">Movies</div>
            <div class="action-films">
                <div class="action-film-container" data-type="movie" data-name="Scream" data-id="17">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/scream.png">
                        <p class="action-info">Scream</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="The Shining" data-id="18">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/shining.jpg">
                        <p class="action-info">The Shinning</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Halloween 2" data-id="19">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/myers.jpg">
                        <p class="action-info">HALLOWEEN 2</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Five Nights at Freddys" data-id="20">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/fnaf.jpg">
                        <p class="action-info">Five Nights At Freddy's</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Five Nights at Freddys 2" data-id="21">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/fnaf2.jpg">
                        <p class="action-info">Five Nights at Freddy's 2 </p>
                </div>
                 <div class="action-film-container" data-type="movie" data-name="Alien Covenant" data-id="22">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/alien.jpg">
                        <p class="action-info">Alien: Covenant</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Alien Covenant" data-id="23">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/alien.jpg">
                        <p class="action-info">Alien: Covenant</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Alien Covenant" data-id="24">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/alien.jpg">
                        <p class="action-info">Alien: Covenant</p>
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