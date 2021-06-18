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
    <title>O Homem nas Trevas 2’: Sequência do TERROR estreia em 2021; Confira a data e sinopse!</title>
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
        <h1 class="fonteNoticia1" style="margin-top:30px; margin-bottom:30px;">‘O Homem nas Trevas 2’: Sequência do TERROR estreia em 2021; Confira a data e sinopse!</h1>
        <img src="https://i.ytimg.com/vi/3DIFnZeJiO8/maxresdefault.jpg" style="height:600px;" alt="" srcset="">
        </p>
        <p style="margin-left:50px; margin-right:50px; margin-bottom:50px;">
        Após cinco anos de seu lançamento, o thriller O Homem nas Trevas (Don't Breathe) vai ganhar uma continuação. Segundo o site USA Today, a estreia oficial será no dia 23 de agosto nos Estados Unidos. Além da data, foi divulgada a primeira imagem do filme, com o próprio "Homem Cego".

A notícia de uma sequência vem sendo discutida desde outubro do ano passado, mas só agora foi confirmada. Ainda não se sabe se a estreia em agosto será apenas nos EUA ou também no resto do mundo.
A sinopse oficial também foi revelada: anos após os eventos do primeiro filme, o Homem Cego (Stephen Lang) vive escondido em uma isolada cabana, com uma garota órfã que ele começou a cuidar após um incêndio. Mas sua existência pacífica é dilacerada quando um grupo de sequestradores levam a garota, forçando-o a sair do seu lugar seguro para salvá-la.

O ator Stephen Lang deve voltar para o papel principal. Além dele, Rocci Williams, Stephanie Arcila, Bobby Schofield, Diaana Babnicova e Adam Young foram confirmados no elenco do filme. A direção e o roteiro continuarão nas mãos de Rodo Sayagues, responsável pelo primeiro filme.
<br>Veja o trailer:<br>
<iframe width="560" height="315" src="https://www.youtube.com/embed/3DIFnZeJiO8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


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