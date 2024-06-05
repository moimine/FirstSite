<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="{{asset('famms-1.0.0/images/issat-logo.jpg')}}" type="">
      <title>ISSAT-COLLABORATION</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('famms-1.0.0/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('famms-1.0.0/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('famms-1.0.0/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('famms-1.0.0/css/responsive.css')}}" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="{{route('home')}}"><img width="250" src="{{asset('famms-1.0.0/images/issat-logo.jpg')}}" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                       <li class="nav-item dropdown">
                        <a class="nav-link" href="{{route('collab.formPerso')}}">Formation Personnalisée</a> 
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('collab.promotion')}}">Promotion Entreprises</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('collab.formconjointe')}}">Recherche Conjointe</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{route('home.vendre')}}">Vente</a>
                        </li>
                       
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->
         <!-- slider section -->
         <section class="slider_section ">
            <div class="slider_bg_box">
               <img src="{{asset('famms-1.0.0/images/issat.jpeg')}}" alt="">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    Les offres de collaborations
                                 </h1>
                                 <p>
                                    L'Institut Supérieur des Sciences Appliquées et de Technologies de Mahdia offre diverses offres de collaborations aux entreprises et propose aussi des articles à vendre.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- end slider section -->
      </div>
      
      <!-- jQery -->
      <script src="js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>