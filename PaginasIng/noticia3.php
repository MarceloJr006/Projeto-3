<?php
// Conexão
require_once '../Paginas/db_connect.php';

// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../Paginas/login.php');
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
    <title>Netflix's success in Brazil, Awake explores apocalyptic scenario in which no one sleeps</title>
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
                <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
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


    <!-- Carousel wrapper -->
    <center>
        <h1 class="fonteNoticia1" style="margin-top:30px; margin-bottom:30px;">Netflix's success in Brazil, Awake explores apocalyptic scenario in which no one sleeps</h1>
        <img src="https://www.universalmovies.it/wp-content/uploads/2021/05/awake-film-netflix-trailer.jpg" style="height:600px;" alt="" srcset="">
        </p>
        <p style="margin-left:50px; margin-right:50px; margin-bottom:50px;">
        One of the most watched movies on Netlflix in Brazil, Awake takes place in an apocalyptic scenario in which no one can sleep anymore. The consequences are dire and conflicts erupt everywhere. The only one who still manages to fall asleep is the daughter of an ex-military man, played by Gina Rodriguez.

To whet the audience's curiosity, the synopsis doesn't provide the reason why people lose the ability to sleep. Another curiosity is that the film is not classified as science fiction.

The feature is directed and written by Mark Raso, who directed Kodachrome alongside Joseph Raso, also for Netflix. Like the director's other film, Awake draws attention to its cast, which features Shamier Anderson (Race), Gina Rodriguez (Annihilation), Jennifer Jason Leigh (Atypical), Ariana Greenblatt (Love and Monsters), Barry Pepper (The Rescue of Private Ryan), Finn Jones (Iron Fist) and Frances Fisher (Titanic).

<br>Watch the trailer:<br>
<iframe width="560" height="315" src="https://www.youtube.com/embed/k42HgNZemCQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


    </p>
    </center>


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