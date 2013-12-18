<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo Install\App::NAME; ?></title>

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
                    <!-- Bandeau -->
                    <ol class="breadcrumb">
                        <li><a href="?c=produit&a=liste">Gestion des Stocks</a></li>
                        <li class="active">Mouvements</li>
                    </ol>
                    <!-- -->
                    <div class="col-lg-12">
                        <h1 class="page-header">Mouvements </h1>
                    </div>

                </div>

                <!-- Recherche -->
                <div class ="row">
                    <div class="form-group input-group col-lg-3">  
                        <label>Type: </label>
                        <label class="radio-inline"><input id="optionsRadiosInline1" type="radio" checked="" value="option1" name="optionsRadiosInline"></input>Sortie</label>
                        <label class="radio-inline"><input id="optionsRadiosInline1" type="radio" checked="" value="option1" name="optionsRadiosInline"></input>Entrée</label>
                        <label class="radio-inline"><input id="optionsRadiosInline1" type="radio" checked="" value="option1" name="optionsRadiosInline"></input>Tout</label>
                    </div>


                    <div class="form-group input-group col-lg-3"></div>

                    <div class="form-group input-group col-lg-3">  
                        <span class="input-group-addon">Identifiant produit :</span>
                        <input class="form-control"></input>
                    </div>

                    <div class="form-group input-group col-lg-3">
                        <span class="input-group-addon">Date :</span>
                        <input class="form-control"></input>
                    </div>


                </div>

                <!-- Contenue -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="table table-responsive" id="data" hidden>
                            <table class="table table-bordered table-hover table-striped tablesorter">
                                <thead>
                                    <tr>
                                        <th class="header">Date <i class="fa fa-sort"></i></th>
                                        <th class="header">Type <i class="fa fa-sort"></i></th>
                                        <th class="header">Produit <i class="fa fa-sort"></i></th>
                                        <th class="header">Quantité <i class="fa fa-sort"></i></th>
                                        <th class="header">Commentaire <i class="fa fa-sort"></i></th>
                                    </tr>
                                    </thread>
                                <tbody id="table_rows">
                                   <!-- <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                        <!--LOADER INFINITE scroll -->
                        <div id="loader-scroll" hidden>
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" style="width: 100%"></div>
                                </div>
                            </div>
                            <div class="col-lg-4"></div>
                        </div>
                        <!-- FIN INFINTE SCROLL -->
                    </div>
                </div>


                <script type="text/javascript">
                    var page = 1;
                    ajax($('#table_rows'), {c: 'Mouvement', a: 'data_liste', p: page}, false, true);

                    //infinite scroll
                    $(window).scroll(function()
                    {
                        if ($(window).scrollTop() === $(document).height() - $(window).height())
                        {
                            page++;
                            $('#loader-scroll').show();
                            ajax($('#table_rows'), {c: 'Mouvement', a: 'data_liste', p: page}, false, true);
                        }
                    });
                </script>

            </div>