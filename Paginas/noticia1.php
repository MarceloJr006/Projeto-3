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
    <title>Disney oficializa sequência de Cruella e confirma retorno de Emma Stone</title>
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
        <h1 class="fonteNoticia1" style="margin-top:30px; margin-bottom:30px;">Disney oficializa sequência de Cruella e confirma retorno de Emma Stone</h1>
        <img src="https://disneyplusbrasil.com.br/wp-content/uploads/2021/05/Cruella-2-Disney.jpg " style="height:600px;" alt="" srcset="">
        </p>
        <p style="margin-left:50px; margin-right:50px;">
        Após Craig Gillespie comentar a possibilidade de continuar a história da vilã, a Disney confirmou uma sequência de Cruella. Em um comunicado divulgado pelo THR nesta sexta-feira (4), o estúdio se disse satisfeito pelo resultado do longa nas bilheterias mundiais (US$ 48,5 milhões) e com os elogios recebidos pelo público e pela crítica.

Segundo a publicação, a Disney oficializou o retorno de Emma Stone como a maléfica vilã. Embora ainda não estejam confirmados, Gillespie deve voltar para a direção e Tony McNamara para o roteiro.

Novo teaser de Cruella revela faixa de Florence + the Machine, "Call me Cruella"
Emma Stone fala de sua transformação na vilã Cruella em vídeo; veja
Craig Gillespie, diretor de Eu, Tonya, comanda Cruella, com roteiro de Tony McNamara. Stone é a protagonista do filme, que é focado nas origens da personagem durante a década de 1980 e traz Emma hompson como a antagonista. Glenn Close, que foi a Cruella nos filmes anteriores, é produtora-executiva dessa nova versão. O filme pode ser assistido no Disney+ pelo Premier Access, em que o usuário paga um valor além da assinatura para acessar o conteúdo.
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