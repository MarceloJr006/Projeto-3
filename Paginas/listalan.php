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
    <title>Lista de filmes que irão lançar em 2021</title>
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
                            <a class="nav-link" href="#">Lista de lançamento 2021</a>
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
                        <a class="dropdown-item" href="#">Mudar idioma</a>
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
    <article class="article">
          
          
          <div class="row article__cover">
            <div class="offset-0 offset-sm-2 col-24 col-sm-20">
          

            </div>
          </div>
          

          
          <div class="row ">
            <div class="offset-0 col-24 offset-sm-2 col-sm-20 col-lg-12 col-xl-13">
              












<div class="article__body article--content">
      
        
      

      
        
        
          


  
    
      <div class="banner banner--small   d-lg-none">
        <div class="banner__wrapper">
          <div id="div-gpt-ad-arroba-m1" style="width: 300px; height: 250px;"></div>
          
        </div>
      </div>
    
  
 
        
        
      

      
        
          <div id="teads-wrapper" class="teads-wrapper"><script src="//a.teads.tv/page/125/tag" async="" class="teads" type="text/javascript"></script></div>
      

      

      
    
      



    <div class="media media--full media--list " data-list-index="7" data-width="" data-height="">
      <div class="media__wrapper">

        <div class="media__wrapper__container">
        
        <H1>Lançamentos 2021</H1>
        <h3 class="media__wrapper__title" style="margin-top:30px;">Abril</h3>
        

        

        
        <div class="media__wrapper__image js-lazy-src-wrapper loaded">
            
            <img class="" src="//cdn.ome.lt/f1IFv9O_BD7epMBI-kPDLF83ur4=/fit-in/837x500/smart/uploads/conteudo/fotos/Kong_y64kOlS.png" alt="">
            <div class="loading">
  <img src="https://cdn.ome.lt/static/omelete/img/loading.svg" alt="">
</div>
        </div>
        
      </div>
      
      

      <div class="media__wrapper__container">
        
        <div class="media__wrapper__bottom">
          <div class="media__wrapper__caption">Divulgação</div>
        </div>
        
      </div>

      <ul>
<li>Meu Pai - 8 de abril</li>
<li>Chorão: Marginal Alado - 8 de abril</li>
<li>Minari: Em Busca de Felicidade - 22 de abril</li>
<li>Godzilla vs. Kong - 29 de abril</li>
<li>Nomadland - 29 de abril</li>
</ul>

      

      </div>
    </div>


      
        
      

      

      

      

      
    
      



    <div class="media media--full media--list " data-list-index="9" data-width="" data-height="">
      <div class="media__wrapper">

        <div class="media__wrapper__container">
        
        <h3 class="media__wrapper__title">Maio</h3>
        

        

        
        <div class="media__wrapper__image js-lazy-src-wrapper loaded">
            
            <img class="" src="//cdn.ome.lt/RAl3AC_z5hxY-BHfJSfuz9yPdjc=/fit-in/837x500/smart/uploads/conteudo/fotos/kombat.jpeg" alt="">
            <div class="loading">
  <img src="https://cdn.ome.lt/static/omelete/img/loading.svg" alt="">
</div>
        </div>
        
      </div>
      
      

      <div class="media__wrapper__container">
        
      </div>

      <ul>
<li>Mortal Kombat - 13 de maio</li>
<li>Espiral - O legado de Jogos Mortais - 20 de maio</li>
<li>Cruella - 27 de maio</li>
<li>Infiltrado - 27 de maio</li>
</ul>

      

      </div>
    </div>


      
        
      

      

      

      

      
    
      



    <div class="media media--full media--list " data-list-index="11" data-width="" data-height="">
      <div class="media__wrapper">

        <div class="media__wrapper__container">
        
        <h3 class="media__wrapper__title">Junho </h3>
        

        

        
        <div class="media__wrapper__image js-lazy-src-wrapper loaded">
            
            <img class="" src="//cdn.ome.lt/mEbCPXZZU_Ml41MJVaXKpaQBKbk=/fit-in/837x500/smart/uploads/conteudo/fotos/inthe.jpg" alt="">
            <div class="loading">
  <img src="https://cdn.ome.lt/static/omelete/img/loading.svg" alt="">
</div>
        </div>
        
      </div>
      
      

      <div class="media__wrapper__container">
        
      </div>

      <ul>
<li>Invocação do mal 3 - A Ordem do Demônio - 3 de junho&nbsp;</li>
<li>Em um Bairro de Nova York - 17 de junho</li>
<li>Um Lugar Silencioso II - 17 de junho</li>
<li>Pedro Coelho 2: o Fugitivo - 24 de junho</li>
<li>Detetives do Prédio Azul 3: Uma Aventura no Fim do Mundo - 24 de junho</li>
</ul>

      

      </div>
    </div>


      
        
      

      

      

      

      
    
      



    <div class="media media--full media--list " data-list-index="13" data-width="" data-height="">
      <div class="media__wrapper">

        <div class="media__wrapper__container">
        
        <h3 class="media__wrapper__title">Julho</h3>
        

        

        
        <div class="media__wrapper__image js-lazy-src-wrapper loaded">
            
            <img class="" src="//cdn.ome.lt/JoV_sSixj-_WZtsiOhTziVIR4sU=/fit-in/837x500/smart/uploads/conteudo/fotos/viuva_pHmbUxa.jpeg" alt="">
            <div class="loading">
  <img src="https://cdn.ome.lt/static/omelete/img/loading.svg" alt="">
</div>
        </div>
        
      </div>
      
      

      <div class="media__wrapper__container">
        
      </div>

      <ul>
<li>Os Croods 2: Uma Nova Era - 1º de julho</li>
<li>Viúva Negra - 8 de julho</li>
<li>Uma Noite de Crime: A Fronteira - 8 de julho</li>
<li>Space Jam: Um Novo Legado - 15 de julho</li>
<li>Cinderella - 15 de julho</li>
<li>Velozes e Furiosos 9 - 22 de julho</li>
<li>G.I. Joe Origens - Snake Eyes - 22 de julho</li>
<li>Jungle Cruise - 29 de julho</li>
</ul>

      

      </div>
    </div>


      
        
      

      
        
        
          
  

  
    
      <div class="banner banner--small   d-lg-none">
        <div class="banner__wrapper">
          <div id="div-gpt-ad-arroba-m2" style="width: 300px; height: 250px;"></div>
          
        </div>
      </div>
    
  
 
        
        
      

      

      

      
    
      



    <div class="media media--full media--list " data-list-index="15" data-width="" data-height="">
      <div class="media__wrapper">

        <div class="media__wrapper__container">
        
        <h3 class="media__wrapper__title">Agosto</h3>
        

        

        
        <div class="media__wrapper__image js-lazy-src-wrapper loaded">
            
            <img class="" src="//cdn.ome.lt/MBdXtC1D00Cgz1IZhq95V0nsiIY=/fit-in/837x500/smart/uploads/conteudo/fotos/o_esquadrao_suicida_james_gunn.jpg" alt="">
            <div class="loading">
  <img src="https://cdn.ome.lt/static/omelete/img/loading.svg" alt="">
</div>
        </div>
        
      </div>
      
      

      <div class="media__wrapper__container">
        
      </div>

      <ul>
<li>O Esquadrão Suicida - 5 de agosto</li>
<li>Hotel Transylvania 4 - 5 de agosto</li>
<li>Medida Provisória - 12 de agosto</li>
<li>Old - 12 de agosto</li>
<li>O Homem nas Trevas 2 - 12 de agosto</li>
<li>The King's Man: A Origem - 19 de agosto</li>
<li>Free Guy: Assumindo o Controle - 19 de agosto</li>
<li>A&nbsp;Lenda de Candyman - 26 de agosto</li>
<li>The Beatles - Get Back - 26 de agosto</li>
</ul>

      

      </div>
    </div>


      
        
      

      

      

      

      
    
      



    <div class="media media--full media--list " data-list-index="17" data-width="" data-height="">
      <div class="media__wrapper">

        <div class="media__wrapper__container">
        
        <h3 class="media__wrapper__title">Setembro</h3>
        

        

        
        <div class="media__wrapper__image js-lazy-src-wrapper loaded">
            
            <img class="" src="//cdn.ome.lt/lBEv6bRcNel2yZhbKYJvIV--z7U=/fit-in/837x500/smart/uploads/conteudo/fotos/duna_D1834AF.jpg" alt="">
            <div class="loading">
  <img src="https://cdn.ome.lt/static/omelete/img/loading.svg" alt="">
</div>
        </div>
        
      </div>
      
      

      <div class="media__wrapper__container">
        
      </div>

      <ul>
<li>Shang-Chi e a Lenda dos Dez Anéis - 2 de setembro</li>
<li>Patrulha Canina: o Filme - 2 de setembro</li>
<li>Malignant - 2 de setembro</li>
<li>Venom - Tempo de Carnificina - 16 de setembro</li>
<li>Duna - 16 de setembro</li>
<li>007: Sem Tempo para Morrer - 30 de setembro</li>
</ul>

      

      </div>
    </div>


      
        
      

      

      

      

      
    
      



    <div class="media media--full media--list " data-list-index="19" data-width="" data-height="">
      <div class="media__wrapper">

        <div class="media__wrapper__container">
        
        <h3 class="media__wrapper__title">Outubro</h3>
        

        

        
        <div class="media__wrapper__image js-lazy-src-wrapper">
            
            <img data-lazy-src="//cdn.ome.lt/j7-SyR5stpPipHImec1giVWu30c=/fit-in/837x500/smart/uploads/conteudo/fotos/eternos_VqAKWLO.jpg" class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
            <div class="loading">
  <img src="https://cdn.ome.lt/static/omelete/img/loading.svg" alt="">
</div>
        </div>
        
      </div>
      
      

      <div class="media__wrapper__container">
        
      </div>

      <ul>
<li>A Família Addams 2 - 7 de outubro</li>
<li>Halloween Kills - O Terror Continua - 14 de outubro</li>
<li>Jackass 4 - 21 de outubro</li>
<li>Os Eternos - 28 de outubro</li>
</ul>

      

      </div>
    </div>


      
        
      

      

      

      

      
    
      



    <div class="media media--full media--list " data-list-index="21" data-width="" data-height="">
      <div class="media__wrapper">

        <div class="media__wrapper__container">
        
        <h3 class="media__wrapper__title">Novembro</h3>
        

        

        
        <div class="media__wrapper__image js-lazy-src-wrapper">
            
            <img data-lazy-src="//cdn.ome.lt/gkyXDSwfPoZDdzuXyJCZQjg6pwI=/fit-in/837x500/smart/uploads/conteudo/fotos/ghost_yUeklYW.jpg" class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
            <div class="loading">
  <img src="https://cdn.ome.lt/static/omelete/img/loading.svg" alt="">
</div>
        </div>
        
      </div>
      
      

      <div class="media__wrapper__container">
        
      </div>

      <ul>
<li>Marighella - 4 de novembro</li>
<li>O Poderoso Chefinho 2: Negócios de Família - 4 de novembro</li>
<li>Ghostbusters - Mais além - 11 de novembro</li>
<li>Noite Passada em Soho - 11 de novembro</li>
<li>Top Gun: Maverick - 18 de novembro</li>
</ul>

      

      </div>
    </div>


      
        
      

      

      

      

      
    
      



    <div class="media media--full media--list " data-list-index="23" data-width="" data-height="">
      <div class="media__wrapper">

        <div class="media__wrapper__container">
        
        <h3 class="media__wrapper__title">Dezembro</h3>
        

        

        
        <div class="media__wrapper__image js-lazy-src-wrapper">
            
            <img data-lazy-src="//cdn.ome.lt/yoqqAmoiiNDJ4r_14n1cdDw3Pu0=/fit-in/837x500/smart/uploads/conteudo/fotos/matrix_4_logo_dq.PNG" class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
            <div class="loading">
  <img src="https://cdn.ome.lt/static/omelete/img/loading.svg" alt="">
</div>
        </div>
        
      </div>
      
      

      <div class="media__wrapper__container">
        
      </div>

      <ul>
<li>Resident Evil: Welcome to Raccoon City - 2 de dezembro</li>
<li>Amor, Sublime Amor - 9 de dezembro</li>
<li>Spider-Man - No Way Home - 16 de dezembro</li>
<li>Matrix 4 - 16 de dezembro</li>
<li>Sing 2 - 23 de dezembro</li>
<li>King's Man: a Origem - 23 de dezembro</li>
<li>Turma da Mônica - Lições - 23 de dezembro</li>
<li>Clifford: O Gigante Cão Vermelho - 30 de dezembro</li>
</ul>

      

      </div>
    </div>


      
        
      

      

      

      
        
      

      
    
  

  
</div>


          
        </article>


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