<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="icon" href="view/img/logo_blanco.svg">
  <!--===============================================
  LIB CSS
  =================================================-->
  <link rel="stylesheet" href="view/css/main.css">  
  <link rel="stylesheet" href="view/css/normalize.css">
  <link rel="stylesheet" href="view/css/imagehover.min.css">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
  <link rel="stylesheet" href="view/css/lightbox.min.css">
  <!--===============================================
  LIB JS
  =================================================-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>
  <script src="view/js/lightbox.min.js" ></script> 
  
  <title>Document</title>
</head>
<body>

<div class="wrapper">
  <?php
    /*=================================================
    Menu Movil y PC
    =================================================*/
    include_once 'page/menu.php';
    
    /*=============================================
    PÁGINAS
    =============================================*/

    if(isset($_GET["url"])){

      if($_GET["url"] == "inicio"||
        $_GET["url"] == "empresa" ||
        $_GET["url"] == "proyectos" ||
        $_GET["url"] == "mensaje" ||
        $_GET["url"] == "enviar" ||
        $_GET["url"] == "logitech" ||
        $_GET["url"] == "atos" ||
        $_GET["url"] == "guadalajara" ||
        $_GET["url"] == "global" ||
        $_GET["url"] == "hik" ||
        $_GET["url"] == "stefanini" ||
        $_GET["url"] == "piu" ||
        $_GET["url"] == "bancomer" ||
        $_GET["url"] == "banregio" ||
        $_GET["url"] == "addinteli" ||
        $_GET["url"] == "salmon" ||
        $_GET["url"] == "tijuana" ||
        $_GET["url"] == "tlalpan" ||
        $_GET["url"] == "cotton" ||
        $_GET["url"] == "luna" ||
        $_GET["url"] == "systemi" ||
        $_GET["url"] == "system-logistic" ||
        $_GET["url"] == "politicas" ||
        $_GET["url"] == "contacto"      
      ){

        include "page/".$_GET["url"].".php";

      }else{
          
          include "page/404.php";
      }

          
    }else{
        include "page/inicio.php";    
    }       

    include 'page/footer.php';
    
  ?>   
  </div>

  <script src="view/js/main.js"></script>

</body>
</html>