<?php
// Conexão
require_once 'Paginas/db_connect.php';

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
    <title>Sobre-nos</title>
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
                <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
                <img src="img/logo.png" height="35" alt=""
                        loading="VSMPlay" />
                </a>
                <!-- Left links -->
                <div class="color-font-nav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="paginas/listalan.php">Lista de lançamento 2021</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre-nós</a>
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
                    <img src="img/elo.png" class="rounded-circle" height="25" alt=""
                        loading="User" />
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="Paginasing/mudarbr.php">Mudar idioma</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="Paginas/logout.php">Sair</a>
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
        <h1 class="fonteNoticia">Sobre o site</h1>
        
        <p>
        O PlayMovie é um site feito para você ler sobre as noticias dos seus filmes preferido e lançamentos futuros,
        esse site foi criado como um projeto.
        </p>
        <img src="img/gosto-filmes-profissao-1.png" alt="">
        <h1>Criador</h1>
        <p>
            O criado desse site se chama Marcelo Ap. Malvezi Junior e reside na cidade de Taquaritinga,
            ele faz o curso Sistema para internet.
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