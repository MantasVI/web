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
        <!--SIDEBAR STARTS-->
        <nav class="sidebar">
            <hr class="line">
            <div class="title">BBN Filmai</div>
            <hr class="line">
            <div class="sidebar-buttons">
                <div class="nav">
                    <a class="link" href="home.php">
                    <i class="fa-solid fa-house-chimney"></i> Home</a>
                </div>
                <div class="nav">
                    <a class="link" href="movies.php">
                    <i class="fa-solid fa-film"></i> Movies</a>
                </div>
                <div class="nav">
                    <a class="link" href="series.php">
                    <i class="fa-solid fa-clapperboard"></i> Series</a>
                </div>
                <div class="nav">
                    <a class="link" href="favorite.php">
                    <i class="fa-solid fa-face-smile"></i> Favorites</a>
                </div>
            </div>
            <hr class="line">
            <div class="account">
                <img class="profile" src="../images/[CITYPNG.COM]White User Member Guest Icon PNG Image - 4000x4000.png">
                <div class="profile-name" id="profile-name"><?php echo $_SESSION['username']; ?></div>
            </div>
            <hr class="line">
            <div class="log-out">
                <a class="link" href="logout.php">
                <i class="fa-solid fa-door-open"></i> Log Out</a>
            </div>
            <hr class="line">
        </nav>
        <!--SIDEBAR ENDS-->

        <!--MAIN PAGE STARTS-->
        <div class="main">

            <div class="top">
                <div class="search-bar-container">
                    <i style="color: black;" class="fa-solid fa-magnifying-glass"></i>
                    <input class="search-bar" placeholder="Type in something">
                </div>
                
            </div>

            <!-- FAVORITE MOVIES -->
            <div class="mid">
                <img class="action-picture" src="../images/AAAAQRC29H19twWKcTZ9Zpg4biJbGNaHF2GGIYNcLt4eZ6fvwugUJbuKxTjjMFPCS-y5P3ZePL57rupDtSkyUIJhv3P8leMJGMzszuG2CHNd65NwWPu5LeKxQkRNfNMHmxAwt7tmQZFk1VIrBd1aXr2AR5DM.jpg">
                <p class="action-name">Favorite Movies</p>
            </div>
            <div class="title-action">Movies</div>
            <div class="action-films" id="movies-container">
                <!-- JS fills this -->
            </div>

            <!-- FAVORITE SERIES -->
            <div class="mid">
                <img class="action-picture" src="../images/AAAAQRC29H19twWKcTZ9Zpg4biJbGNaHF2GGIYNcLt4eZ6fvwugUJbuKxTjjMFPCS-y5P3ZePL57rupDtSkyUIJhv3P8leMJGMzszuG2CHNd65NwWPu5LeKxQkRNfNMHmxAwt7tmQZFk1VIrBd1aXr2AR5DM.jpg">
                <p class="action-name">Favorite Series</p>
            </div>
            <div class="title-action">Series</div>
            <div class="action-films" id="series-container">
                <!-- JS fills this -->
            </div>

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
        <!--FOOTER ENDS-->
<script>
    const movies  = <?php echo json_encode($movies); ?>;
    const series  = <?php echo json_encode($series); ?>;
    const userFavorites = <?php echo json_encode($favs); ?>;
</script>
        <script src="../js/test.js"></script>
    </body>
</html>