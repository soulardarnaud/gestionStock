        <!-- Bootstrap core JavaScript -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="<?php echo Install\Chemins::JS; ?>bootstrap.js"></script>
        <!-- Page Specific Plugins -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
        <script src="<?php echo Install\Chemins::JS; ?>tablesorter/jquery.tablesorter.js"></script>
        <script src="<?php echo Install\Chemins::JS; ?>tablesorter/tables.js"></script>
        <script src="<?php echo Install\Chemins::JS; ?>localStorageHelper.js"></script>
        <script src="<?php echo Install\Chemins::JS; ?>list.js"></script>
        <script src="<?php echo Install\Chemins::JS; ?>list.pagination.js"></script>
        <script src="<?php echo Install\Chemins::JS; ?>list.fuzzysearch.js"></script>
        <script src="<?php echo Install\Chemins::JS; ?>perso.js"></script>
        <script>
                            $(document).ready(function() {
                            });
        </script>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Gestion des Stocks</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo Install\Chemins::CSS; ?>bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="<?php echo Install\Chemins::CSS; ?>sb-admin.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo Install\Chemins::FONT; ?>css/font-awesome.min.css">
        <!-- Page Specific CSS -->
        <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
        <!-- editArea editor -->
    </head>
    <body>
        <div id="wrapper">

            <!-- Sidebar -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="?c=produit&a=liste">Gestion des Stocks</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">

                    <ul id="menu" class="nav navbar-nav side-nav">
                        <li id="nav_produit"><a href="?c=produit&a=liste"><i class="fa fa-desktop"></i> Produits</a></li>
                        <li id="nav_marque"><a href="?c=marque&a=liste"><i class="fa fa-bookmark"></i> Marques</a></li>
                        <li id="nav_categorie"><a href="?c=categorie&a=liste""><i class="fa fa-book"></i> Catégories</a></li>
                        <li id="nav_mouvement"><a href="?c=mouvement&a=liste"><i class="fa fa-truck Mouvement"></i> Mouvement</a></li>

                    </ul>


                </div><!-- /.navbar-collapse -->
            </nav>
            <div id="page-wrapper">
                <div id="page-localstorage"></div>
                <div id="page-content"></div>
                <div class ="row">
                    <div class="col-lg-12">
                        <!-- Bandeau -->
                        <ol class="breadcrumb">
                            <li><a href="?c=produit&a=liste">Gestion des Stocks</a></li>
                            <li class="active">Liste des produits</li>
                        </ol>
                        <!-- -->
                        <h1 class="page-header">Liste des produits</h1>
                    </div>
                </div>


 
                <!-- Contenue -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped tablesorter">
                                <thead>
                                    <tr>
                                        <th class="header">Identifiant <i class="fa fa-sort"></i></th>
                                        <th class="header">Description <i class="fa fa-sort"></i></th>
                                        <th class="header">Prix <i class="fa fa-sort"></i></th>
                                        <th class="header">Qte en stock <i class="fa fa-sort"></i></th>
                                        <th class="header">Qte a commander <i class="fa fa-sort"></i></th>
                                    </tr>
                                    </thread>
                                <tbody id="table_rows">
                                    <!-- <tr>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>1</td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!--   <ul class="pagination pagination-sm">
                               <li><a href="#">«</a></li>
                               <li><a href="#">1</a></li>
                               <li><a href="#">2</a></li>
                               <li><a href="#">3</a></li>
                               <li><a href="#">4</a></li>
                               <li><a href="#">5</a></li>
                               <li><a href="#">»</a></li>
                           </ul> -->
                    </div>
                </div>
                
            </div>
        </div>
        <script type="text/javascript">

            var liste = <?php echo json_encode($this->liste) ?>;
            for (var i = 0; i < 500; i++)
            {
                $('#table_rows').append('<tr><td>' + liste[i].id + '</td><td>' + liste[i].description + '</td><td>' + liste[i].prix + '</td><td>' + liste[i].stockalerte + '</td><td>' + liste[i].qtecommande);
            }

        </script>