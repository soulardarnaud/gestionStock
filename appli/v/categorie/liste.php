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
                    <a class="navbar-brand" href="#" onclick="ajax($('#page-content'), {c: 'Utilisateur', a: 'tableaudebord_content'}, true, true)">Gestion des Stocks</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">

                    <ul id="menu" class="nav navbar-nav side-nav">
                        <li id="nav_produit"><a href="#" onclick="ajax($('#page-content'), {c: 'Produit', a: 'liste'}, true, true)"><i class="fa fa-desktop"></i> Produits</a></li>
                        <li id="nav_marque"><a href="#" onclick="ajax($('#page-content'), {c: 'Marque', a: 'liste'}, true, true);"><i class="fa fa-flag-checkered"></i> Marques</a></li>
                        <li id="nav_categorie"><a href="#" onclick="ajax($('#page-content'), {c: 'Categorie', a: 'liste'}, true, true)"><i class="fa fa-book"></i> Catégorie</a></li>
                        <li id="nav_mouvement"><a href="#" onclick="ajax($('#page-content'), {c: 'Mouvement', a: 'liste'}, true, true)"><i class="fa fa-truck Mouvement"></i> Mouvement</a></li>
                        <!-- <li><a href="#" onclick="ajax($('#page-content'),{c:'Produit',a:'statistique'}, true, true)"><i class="fa fa-bar-chart-o"></i> Statistique</a></li> -->
                    </ul>


                </div><!-- /.navbar-collapse -->
            </nav>
            <div id="page-wrapper">
                <div id="page-localstorage"></div>
                <div id="page-content"></div>
                <div class ="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Catégories <small><span class="label label-danger"><?php echo $this->type_count; ?></span></small></h1>
                        <!-- Bandeau -->
                        <ol class="breadcrumb">
                            <li><a href="#" onclick="ajax($('#page-content'), {c: 'Utilisateur', a: 'tableaudebord_content'}, true, true)">Gestion des stocks</a></li>
                            <li class="active">Catégories</li>
                        </ol>
                        <!-- -->
                    </div>
                </div>
            </div>