<?php
// Conexão
require_once 'db_connect.php';

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
    <title>Sucesso da Netflix no Brasil, Awake explora cenário apocalíptico no qual ninguém dorme</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
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
                <a class="navbar-brand mt-2 mt-lg-0" href="../index.php">
                    <img src="../img/logo.png" height="35" alt=""
                        loading="VSMPlay" />
                </a>
                <!-- Left links -->
                <div class="color-font-nav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link" href="listalan.php">Lista de lançamento 2021</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="../sobre-nos.php">Sobre-nós</a>
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
                        <a class="dropdown-item" href="../Paginasing/mudarbr.php">Mudar idioma</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="logout.php">Sair</a>
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
        <h1 class="fonteNoticia1" style="margin-top:30px; margin-bottom:30px;">Sucesso da Netflix no Brasil, Awake explora cenário apocalíptico no qual ninguém dorme</h1>
        <img src="https://www.universalmovies.it/wp-content/uploads/2021/05/awake-film-netflix-trailer.jpg" style="height:600px;" alt="" srcset="">
        </p>
        <p style="margin-left:50px; margin-right:50px; margin-bottom:50px;">
        Um dos filmes mais assistidos na Netlflix no Brasil, Awake se passa em um cenário apocalíptico no qual ninguém mais consegue dormir. As consequências são terríveis e os conflitos explodem por toda parte. A única que ainda consegue adormecer é a filha de um ex-militar, interpretada por Gina Rodriguez.

Para aguçar a curiosidade do público, a sinopse não fornece a razão pela qual as pessoas perdem a capacidade de dormir. Outra curiosidade é que o filme não é classificado como ficção científica.

O longa é dirigido e escrito por Mark Raso, que dirigiu Kodachrome ao lado de Joseph Raso, também para a Netflix. Assim como o outro filme do diretor, Awake chama a atenção pelo elenco, que conta com a presença de Shamier Anderson (Raça), Gina Rodriguez (Aniquilação), Jennifer Jason Leigh (Atypical), Ariana Greenblatt (Amor e monstros), Barry Pepper (O Resgate do soldado Ryan), Finn Jones (Punho de ferro) e Frances Fisher (Titanic).

Assista ao trailer:
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