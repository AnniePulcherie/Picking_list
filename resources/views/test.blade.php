<!DOCTYPE html>
<html>
    <head>
        
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
        {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" /> --}}
      
        {{-- <link href={{asset("css/test.css")}} rel="stylesheet"> --}}
             
    <link rel="stylesheet" href={{asset("test/css/bootstrap.min.css")}}>
    
    <link rel="stylesheet" href={{asset("test/css/notika-custom-icon.css")}}>
   
    <link rel="stylesheet" href={{asset("test/css/jquery.dataTables.min.css")}}>
    
    <link rel="stylesheet" href={{asset("test/style.css")}}>
    
    <link rel="stylesheet" href={{asset("test/css/responsive.css")}}>
   
    </head>
    <body>
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
            <div class="breadcomb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcomb-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcomb-wp">
                                            <div class="breadcomb-icon">
                                                <i class="notika-icon notika-windows"></i>
                                            </div>
                                            <div class="breadcomb-ctn">
                                                
                                                <h2>Tracking de colis</h2>
                                                <p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                        <div class="breadcomb-report">
                                            <button  class="btn"><i class="notika-icon notika-sent"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="data-table-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="data-table-list">
                                <div class="basic-tb-hd">
                                    <h2>Basic Example</h2>
                                    <p>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</p>
                                </div>
                                <div class="table-responsive">
                                    <table id="data-table-basic" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Horodateur</th>
                                                <th scope="col">Magasin</th>
                                                <th scope="col">Client</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>card.colis.id </td>
                                                <td>card.colis.store </td>
                                                <td>card.colis.customer </td>
                                                <td>
                                                    <a class="btn btn-sm btn-success" href="/show/">voir le colis</a>
                                                </td>
                                            </tr>
                                            
                                            
                                            <tr>
                                                <td>card.colis.id </td>
                                                <td>card.colis.store </td>
                                                <td>card.colis.customer </td>
                                                <td>
                                                    <a class="btn btn-sm btn-success" href="/show/">voir le colis</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>card.colis.id </td>
                                                <td>card.colis.store </td>
                                                <td>card.colis.customer </td>
                                                <td>
                                                    <a class="btn btn-sm btn-success" href="/show/">voir le colis</a>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th scope="col">Horodateur</th>
                                                <th scope="col">Magasin</th>
                                                <th scope="col">Client</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </main>
        <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 
. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
        {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
        {{-- <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script> --}}

        <script src={{asset("test/js/vendor/jquery-1.12.4.min.js")}}></script>
    <!-- bootstrap JS
		============================================ -->
    <script src={{asset("test/js/bootstrap.min.js")}}></script>
    
    <!-- Data Table JS
		============================================ -->
    <script src={{asset("test/js/data-table/jquery.dataTables.min.js")}}></script>
    <script src={{asset("test/js/data-table/data-table-act.js")}}></script>

        {{-- <script>
        $(document).ready( function () {
            $('#colis-table').DataTable({
                language: {
                    processing:     "Traitement en cours...",
                    search:         "Rechercher&nbsp;:",
                    lengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
                    info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                    infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                    infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                    infoPostFix:    "",
                    loadingRecords: "Chargement en cours...",
                    zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                    emptyTable:     "Aucune donnée disponible dans le tableau",
                    paginate: {
                        first:      "Premier",
                        previous:   "Pr&eacute;c&eacute;dent",
                        next:       "Suivant",
                        last:       "Dernier"
                    },
                    aria: {
                        sortAscending:  ": activer pour trier la colonne par ordre croissant",
                        sortDescending: ": activer pour trier la colonne par ordre décroissant"
                    }
                }
            });
        });
    </script> --}}
        
      
    </body>
</html>