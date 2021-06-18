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
                <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
                    <img src="../img/logo.png" height="35" alt=""
                        loading="VSMPlay" />
                </a>
                <!-- Left links -->
                <div class="color-font-nav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Launch list 2021</a>
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
                        <a class="dropdown-item" href="#">Change language</a>
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
        
        <H1>Releases 2021</H1>
        <h3 class="media__wrapper__title" style="margin-top:30px;">April</h3>
        

        

        
        <div class="media__wrapper__image js-lazy-src-wrapper loaded">
            
            <img class="" src="//cdn.ome.lt/f1IFv9O_BD7epMBI-kPDLF83ur4=/fit-in/837x500/smart/uploads/conteudo/fotos/Kong_y64kOlS.png" alt="">
            <div class="loading">
  <img src="https://cdn.ome.lt/static/omelete/img/loading.svg" alt="">
</div>
        </div>
        
      </div>
      
      

      <div class="media__wrapper__container">
        
        <div class="media__wrapper__bottom">
          <div class="media__wrapper__caption">Divulgation</div>
        </div>
        
      </div>

      <ul>
<li>My dad - April 8th</li>
<li>Weeping: Winged Marginal - April 8th</li>
<li>Minari: In search of happiness - April 22nd</li>
<li>Godzilla vs. Kong - April 29th</li>
<li>Nomadland - April 29th</li>
</ul>

      

      </div>
    </div>


      
        
      

      

      

      

      
    
      



    <div class="media media--full media--list " data-list-index="9" data-width="" data-height="">
      <div class="media__wrapper">

        <div class="media__wrapper__container">
        
        <h3 class="media__wrapper__title">May</h3>
        

        

        
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
<li>Mortal Kombat - May 13th</li>
<li>Spiral - The legacy of Mortal Games - 20 of May</li>
<li>Cruella - may, 27</li>
<li>infiltrator - may, 27</li>
</ul>

      

      </div>
    </div>


      
        
      

      

      

      

      
    
      



    <div class="media media--full media--list " data-list-index="11" data-width="" data-height="">
      <div class="media__wrapper">

        <div class="media__wrapper__container">
        
        <h3 class="media__wrapper__title">June </h3>
        

        

        
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
<li>Invocation of Evil 3 - The Order of the Devil - June 3&nbsp;</li>
<li>In a New York Neighborhood - June 17th</li>
<li>A Quiet Place II - June 17th</li>
<li>Pedro Coelho 2: the Fugitive - June 24th</li>
<li>Blue Building 3 Detectives: An Adventure at the End of the World - June 24</li>
</ul>

      

      </div>
    </div>


      
        
      

      

      

      

      
    
      



    <div class="media media--full media--list " data-list-index="13" data-width="" data-height="">
      <div class="media__wrapper">

        <div class="media__wrapper__container">
        
        <h3 class="media__wrapper__title">July</h3>
        

        

        
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
<li>The Croods 2: A New Era - July 1st</li>
<li>Black Widow - July 8th</li>
<li>A Night of Crime: The Frontier - July 8th</li>
<li>Space Jam: A New Legacy - July 15th</li>
<li>Cinderella - July 15th</li>
<li>Fast and Furious 9th - 22nd of July</li>
<li>GI Joe Origins - Snake Eyes - July 22nd</li>
<li>Jungle Cruise - July 29</li>
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
        
        <h3 class="media__wrapper__title">August</h3>
        

        

        
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
<li>The Suicide Squad - August 5th</li>
<li>Hotel Transylvania August 4th - 5th</li>
<li>Provisional Measure - August 12th</li>
<li>Old - August 12th</li>
<li>The Man in the Dark 2nd - 12th of August</li>
<li>The King's Man: The Origin - August 19th</li>
<li>Free Guy: Assumindo o Controle - 19 de agosto</li>
<li>Free Guy: Taking Control - August 19th</li>
<li>The Beatles - Get Back - August 26th</li>
</ul>

      

      </div>
    </div>


      
        
      

      

      

      

      
    
      



    <div class="media media--full media--list " data-list-index="17" data-width="" data-height="">
      <div class="media__wrapper">

        <div class="media__wrapper__container">
        
        <h3 class="media__wrapper__title">September</h3>
        

        

        
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
<li>Shang-Chi and the Legend of the Ten Rings - September 2nd</li>
<li>Dog Patrol: The Movie - September 2nd</li>
<li>Malignant - September 2nd</li>
<li>Venom - Time of Carnage - September 16th</li>
<li>Dune - September 16th</li>
<li>007: No Time to Die - September 30th</li>
</ul>

      

      </div>
    </div>


      
        
      

      

      

      

      
    
      



    <div class="media media--full media--list " data-list-index="19" data-width="" data-height="">
      <div class="media__wrapper">

        <div class="media__wrapper__container">
        
        <h3 class="media__wrapper__title">October</h3>
        

        

        
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
      <li>The Addams Family 2 - 7 October</li>
<li>Halloween Kills - The Terror Continues - October 14th</li>
<li>Jackass 4 - October 21</li>
<li>The Eternals - October 28th</li>
</ul>

      

      </div>
    </div>


      
        
      

      

      

      

      
    
      



    <div class="media media--full media--list " data-list-index="21" data-width="" data-height="">
      <div class="media__wrapper">

        <div class="media__wrapper__container">
        
        <h3 class="media__wrapper__title">November</h3>
        

        

        
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
      <li>Marighella - November 4th</li>
<li>The Godfather 2: Family Business - November 4th</li>
<li>Ghostbusters - Beyond - November 11</li>
<li>Last Night in Soho - November 11th</li>
<li>Top Gun: Maverick - November 18th</li>
</ul>

      

      </div>
    </div>


      
        
      

      

      

      

      
    
      



    <div class="media media--full media--list " data-list-index="23" data-width="" data-height="">
      <div class="media__wrapper">

        <div class="media__wrapper__container">
        
        <h3 class="media__wrapper__title">December</h3>
        

        

        
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
      <li>Resident Evil: Welcome to Raccoon City - December 2nd</li>
<li>Love, Sublime Love - December 9th</li>
<li>Spider-Man - No Way Home - December 16th</li>
<li>Matrix 4 - December 16th</li>
<li>Sing 2 - December 23</li>
<li>King's Man: The Origin - December 23</li>
<li>Mônica's Gang - Lessons - December 23</li>
<li>Clifford: The Giant Red Dog - December 30th</li>
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