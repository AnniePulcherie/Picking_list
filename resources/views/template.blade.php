<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Data Table | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
        
    <link rel="stylesheet" href={{asset("test/css/bootstrap.min.css")}}>
    
    <link rel="stylesheet" href={{asset("test/css/notika-custom-icon.css")}}>
   
    <link rel="stylesheet" href={{asset("test/css/jquery.dataTables.min.css")}}>
    
    <link rel="stylesheet" href={{asset("test/style.css")}}>
    
    <link rel="stylesheet" href={{asset("test/css/responsive.css")}}>
    
</head>

<body>
    
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <i class="notika-shopping-cart"></i>
                        <a href="#"><img src={{asset("assets/img/tester.png")}} width="50px" height="50px" alt="" /></a>
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
    
	<!-- Breadcomb area Start-->
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
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Data Table area Start-->
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
                                            <a class="btn btn-success" href="/show/">voir le colis</a>
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
    <!-- Data Table area End-->
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
    <!-- jquery
		============================================ -->
    <script src={{asset("test/js/vendor/jquery-1.12.4.min.js")}}></script>
    <!-- bootstrap JS
		============================================ -->
    <script src={{asset("test/js/bootstrap.min.js")}}></script>
    
    <!-- Data Table JS
		============================================ -->
    <script src={{asset("test/js/data-table/jquery.dataTables.min.js")}}></script>
    <script src={{asset("test/js/data-table/data-table-act.js")}}></script>
   
	
</body>

</html>