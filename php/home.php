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
                <p class="action-name">RECOMMENDED</p>
            </div>
                 <!--2-->

                  <!--3-->
            <div class="title-action">Movies</div>

            <div class="action-films">
                <div class="action-film-container" data-type="movie" data-name="Avengers Endgame" data-id="1">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Avengers_Endgame.jpg">
                        <p class="action-info">Avengers Endgame</p>
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
                <div class="action-film-container" data-type="movie" data-name="Lord of the Rings" data-id="4">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Lord_Of_The_Rings_The_Return_Of_The_King.jpg">
                        <p class="action-info">Lord of the Rings: The Return of the King</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Mad Max Fury Road" data-id="5">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Mad_Max_Fury_Road.jpg">
                        <p class="action-info">Mad Max Furry road</p>
                </div>
                 <div class="action-film-container" data-type="movie" data-name="John Wick Chapter 2" data-id="6">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/John_Wick_Chapter_2.jpg">
                        <p class="action-info">John Wick Chapter 2</p>
                </div>
                 <div class="action-film-container" data-type="movie" data-name="John Wick Chapter 4" data-id="7">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/John_Wick_Chapter_4.jpg">
                        <p class="action-info">John Wick Chapter 4</p>
                </div>
                   <div class="action-film-container" data-type="movie" data-name="The Matrix" data-id="8">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/The_Matrix.jpg">
                        <p class="action-info">The Matrix</p>
                </div>
                
            </div>
                 <!--3-->

                 
            <div class="mid">
                <img class="action-picture" src="../images/logo.jpg">
                <p class="action-name">NEW RELEASES</p>
            </div>
            
            <div class="title-action">Movies</div>
            <div class="action-films">
                <div class="action-film-container" data-type="movie" data-name="Harry Potter Deathly Hallows Part 2" data-id="9">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Harry_Potter_And_The_Deathly_Hollows_Part_2.jpg">
                        <p class="action-info">Harry Potter and the Deathly Hollows Part 2</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Doctor Strange" data-id="10">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Doctor_Strange.jpg">
                        <p class="action-info">Doctor Strange</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Avatar Fire and Ash" data-id="11">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Avatar_Fire_And_Ash.jpg">
                        <p class="action-info">Avatar: Fire and Ash</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Avatar The Way of Water" data-id="12">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Avatar_The_Way_Of_Water.jpg">
                        <p class="action-info">Avatar: The Way of Water</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Doctor Strange Multiverse of Madness" data-id="13">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Doctor_Strange_In_The_Multiverse_Of_Madness.jpg">
                        <p class="action-info">Doctor Strange in the Multiverse of Madness</p>
                </div>
                 <div class="action-film-container" data-type="movie" data-name="Black Panther" data-id="14">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Black_Panther.jpg">
                        <p class="action-info">Black Patnher</p>
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
            </div>

            <div class="mid">
                <img class="action-picture" src="../images/logo.jpg">
                <p class="action-name">TOP RATED IMDB</p>
            </div>
            
            <div class="title-action">Movies</div>
             <div class="action-films">
                <div class="action-film-container" data-type="movie" data-name="Scream" data-id="17">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Scream.jpg">
                        <p class="action-info">Scream</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="The Shinning" data-id="18">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/The_Shining.jpg">
                        <p class="action-info">The Shinning</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="HALLOWEEN 2" data-id="19">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Halloween_2.jpg">
                        <p class="action-info">HALLOWEEN 2</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Five Nights At Freddy's" data-id="20">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Five_Nights_At_Freddys.jpg">
                        <p class="action-info">Five Nights At Freddy's</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Five Nights at Freddy's 2" data-id="21">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Five_Nights_At_Freddys_2.jpg">
                        <p class="action-info">Five Nights at Freddy's 2 </p>
                </div>
                 <div class="action-film-container" data-type="movie" data-name="Alien: Covenant" data-id="22">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Alien_Covenant.jpg">
                        <p class="action-info">Alien: Covenant</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="The Silence of the Lambs" data-id="23">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/The_Silence_Of_The_Lambs.jpg">
                        <p class="action-info">The Silence of the Lambs</p>
                </div>
                <div class="action-film-container" data-type="movie" data-name="Jaws" data-id="24">
                        <i class="fa-regular fa-heart"></i>
                        <img class="action-film" src="../images/Jaws.jpg">
                        <p class="action-info">Jaws</p>
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