<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <link rel="stylesheet" href={{asset("test/css/bootstrap.min.css")}}>
    
    <link rel="stylesheet" href={{asset("test/css/notika-custom-icon.css")}}>
   
    <link rel="stylesheet" href={{asset("test/css/jquery.dataTables.min.css")}}>
    
    <link rel="stylesheet" href={{asset("test/style.css")}}>
    
    <link rel="stylesheet" href={{asset("test/css/responsive.css")}}>
        
        
   
    </head>
    <body>
        <style>
            .h6 {
                font-size: 1.05rem;
            }
        </style>
        <div  id="header" class="fixed-top d-flex align-items-center header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="logo-area">
                            <i class="notika-shopping-cart"></i>
                            <a href="#"><img src={{asset("test/img/logo/tracking.jpg")}} width="100px" height="50px" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="header-top-menu">
                            <ul class="nav navbar-nav notika-top-nav">
                                <li class="nav-item dropdown">
                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                                    <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                        <div class="search-input">
                                            <i class="notika-icon notika-left-arrow"></i>
                                            <input type="text" />
                                        </div>
                                    </div>
                                </li>
                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main id="main" class="main">

                <div class="container">
                    <div class="card m-2 p-2 text-center">
                        <h1 class="card-title">Tracking de colis</h1>
                    </div>
                    <div class=" card pb-0 m-2 p-2">
                    
                        <div class="card-body">
                            
                            
                            <div>
                                <span class=" card-title h2">
                                    Les mouvements du colis " card.name "
                                </span>
                                <a class="ml-3" href=" /test ">Retourner à la liste</a>
                            </div>
                            <div class="card m-2 p-2">
                                <div class="row">
                                    <div class="col-6 mt-2">
                                        <span class="d-block mb-0 text-muted h6"><small>Expédition</small></span>
                                        <span class="d-block mt-0">colis.expedition </span>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <span class="d-block mb-0 text-muted h6"><small>Nom & Prénom du Client</small></span>
                                        <span class="d-block"> colis.customer </span>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <span class="d-block mb-0 text-muted h6"><small>Adresse de livraison</small></span>
                                        <span class="d-block">colis.shippingAddress </span>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <span class="d-block mb-0 text-muted h6"><small>Numéro de Vini</small></span>
                                        <span class="d-block"> colis.vini </span>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <span class="d-block mb-0 text-muted h6"><small>Mode de paiement</small></span>
                                        <span class="d-block"> colis.paymentMode </span>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <span class="d-block mb-0 text-muted h6"><small>Montant</small></span>
                                        <span class="d-block"> colis.amount </span>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <span class="d-block mb-0 text-muted h6"><small>Articles</small></span>
                                        <span class="d-block">colis.articles</span>
                                    </div>
                                    <div class="col-6 mt-2">
                                        <span class="d-block mb-0 text-muted h6"><small>Commentaire</small></span>
                                        <span class="d-block"> colis.comment </span>
                                    </div>
                                </div>
                            </div>
                           
                                <div class="card m-2 p-2">
                                    <div class="row">
                                        <div class="col-md-4">
                                             move.date 
                                        </div>
                                        <div class="col-md-8">
                                           move.status
                                        </div>
                                    </div>
                                </div>
                        
                        </div>
                    </div>
                </div>
            
        </main>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
 
      
    </body>
</html>