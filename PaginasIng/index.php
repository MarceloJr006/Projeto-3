<?php
// Conexão
require_once '../Paginas/db_connect.php';

// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: Paginas/login.php');
endif;

// Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VSMPlay</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img src="../img/logo.png" height="35" alt=""
                        loading="VSMPlay" />
                </a>
                <!-- Left links -->
                <div class="color-font-nav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="listalan.php">Launch list 2021</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre-nos.php">About Us</a>
                        </li>
                    </ul>
                </div>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">

                <!-- Avatar -->
                <a class="dropdown-toggle d-flex align-items-center hidden-arrow bg-dark" href="#"
                    id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <img src="../img/elo.png" class="rounded-circle" height="25" alt=""
                        loading="User" />
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="mudar.php">Change language</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="../Paginas/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner" style="height:600px; ">
            <!-- Single item -->
            <div class="carousel-item active">
                <img src="https://disneyplusbrasil.com.br/wp-content/uploads/2021/05/Cruella-2-Disney.jpg" class="d-block w-100" alt="..."  style="height:600px; "/>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Cruella</h5>
                    <p>Cruella 2, based on 101 Dalmatians, is already in development at Disney</p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img src="https://cdn.tlc-massive.com/shain/v1/dataservice/ResizeImage/$value?Format=%27jpg%27&Quality=85&ImageId=%27240065.jpg%27&ImageUrl=%27240065.jpg%27&EntityType=%27Item%27&EntityId=%2724621%27&device=web_browser&subscriptions=Anonymous&Width=960&Height=540" class="d-block w-100" alt="..." style="height:600px;"/>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bank of Spain robbery</h5>
                    <p>Thom Laybrick is a brilliant engineer hungry for challenges. Art dealer Walter is well acquainted with Thom's talent and persuades him to participate in a seemingly impossible robbery from the Bank of Spain.</p>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item">
                <img src="https://www.universalmovies.it/wp-content/uploads/2021/05/awake-film-netflix-trailer.jpg" class="d-block w-100" alt="..."style="height:600px;" />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Awake</h5>
                    <p>Awake is a 2021 American science fiction thriller directed by Mark Raso from a screenplay he wrote with Joseph Raso.</p>
                </div>
            </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample"
            data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample"
            data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel wrapper -->
    <center>
        <h1 class="fonteNoticia">The most anticipated movies of the year</h1>
    </center>

    <div class="card">
        <img src="https://disneyplusbrasil.com.br/wp-content/uploads/2021/05/Cruella-2-Disney.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
            <h5 class="card-title">Cruella 2</h5>
            <p class="card-text">
            Cruella 2, based on 101 Dalmatians, is already in development at Disney
            </p>
            <a href="noticia1.php" class="btn btn-primary">View more</a>
        </div>
    </div>
    <div class="card">
        <img src="https://cdn.tlc-massive.com/shain/v1/dataservice/ResizeImage/$value?Format=%27jpg%27&Quality=85&ImageId=%27240065.jpg%27&ImageUrl=%27240065.jpg%27&EntityType=%27Item%27&EntityId=%2724621%27&device=web_browser&subscriptions=Anonymous&Width=960&Height=540" class="card-img-top" alt="..." />
        <div class="card-body">
            <h5 class="card-title">Bank of Spain robbery</h5>
            <p class="card-text">
            Thom Laybrick is a brilliant engineer hungry for challenges.
            </p>
            <a href="noticia2.php" class="btn btn-primary">View more</a>
        </div>
    </div>
    <div class="card">
        <img src="https://www.universalmovies.it/wp-content/uploads/2021/05/awake-film-netflix-trailer.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
            <h5 class="card-title">Awake</h5>
            <p class="card-text">
            Awake is an American science fiction thriller from 2021.
            </p>
            <a href="noticia3.php" class="btn btn-primary">View more</a>
        </div>
    </div>
    <div class="card">
        <img src="https://i.pinimg.com/originals/6a/2c/37/6a2c37a88336fc1fd522cfe74a384b73.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
            <h5 class="card-title">Hotel Transivânia 4</h5>
            <p class="card-text">
            The fourth film in the Hotel Transylvania 4 franchise.
            </p>
            <a href="noticia4.php" class="btn btn-primary">View more</a>
        </div>
    </div>
    <div class="card">
        <img src="https://steamcdn-a.akamaihd.net/steam/apps/67370/capsule_616x353.jpg?t=1568914450" class="card-img-top" alt="..." />
        <div class="card-body">
            <h5 class="card-title">The Man in Darkness 2</h5>
            <p class="card-text">
            Darkness 2 will get a sequel soon at the cinema
            </p>
            <a href="noticia5.php" class="btn btn-primary">View more</a>
        </div>
    </div>
    <div class="card">
        <img src="https://todosnegrosdomundo.com.br/wp-content/uploads/2020/07/candyman.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
            <h5 class="card-title">The Legend of Candyman has postponed premiere again</h5>
            <p class="card-text">
           Because of the pandemic, the film was postponed again.
            </p>
            <a href="noticia6.php" class="btn btn-primary">View more</a>
    </div>
</div>
<footer class="bg-dark text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright: Marcelo Aparecido Malvezi Junior
   
  </div>
  <!-- Copyright -->
</footer>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js">
    </script>
</body>

</html>