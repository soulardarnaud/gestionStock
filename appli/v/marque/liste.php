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
                        <li id="nav_categorie"><a href="#" onclick="ajax($('#page-content'), {c: 'Type', a: 'liste'}, true, true)"><i class="fa fa-book"></i> Catégorie</a></li>
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
                        <h1 class="page-header">Marques <small><span class="label label-danger"><?php echo $this->marque_count; ?></span></small></h1>
                        <ul class="breadcrumb">
                            <li><a href="#" onclik="ajax($('#page-content'),{c:'Utilisateur',a:'tableaudebord_content'}, true, true)">Tableau de bord</a></li>
                            <li class="active">Marques</li>
                        </ul>
                    </div>
                </div>

                <!-- Contenue -->
                <div id="marque">
                    <!-- Pagination -->
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <ul class="pagination paginationTop"></ul>
                        </div>
                    </div>
                    <!-- Search -->
                    <div class="row text-center">
                        <div class="col-lg-5"></div>
                        <div class="col-lg-2">
                            <div class="form-group input-group">
                                <span class="input-group-addon">Nom : </i></span>
                                <input type="text" class="fuzzy-search form-control"/>
                            </div>
                        </div>
                        <div class="col-lg-5"></div>
                    </div>
                    <!-- Content -->
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <div class="list">
                            </div>
                        </div>
                    </div>
                    <!-- Search -->
                    <div class="row text-center">
                        <div class="col-lg-5"></div>
                        <div class="col-lg-2">
                            <div class="form-group input-group">
                                <span class="input-group-addon">Nom : </i></span>
                                <input type="text" class="fuzzy-search form-control"/>
                            </div>
                        </div>
                        <div class="col-lg-5"></div>
                    </div>
                    <!-- Pagination -->
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <ul class="pagination paginationBottom"></ul>
                        </div>
                    </div>
                </div>

                <script>
                    var marques = <?php echo json_encode($this->marques); ?>;

                    var paginationTopOptions = {
                        name: "paginationTop",
                        paginationClass: "paginationTop",
                        outerWindow: 2
                    };

                    var paginationBottomOptions = {
                        name: "paginationBottom",
                        paginationClass: "paginationBottom",
                        innerWindow: 3,
                        left: 2,
                        right: 4
                    };

                    var onclick = "ajax($(\'#page-content\'),{c:\'Marque\',a:\'item\', id:$(this).children(\'span\').filter(\'.id\').text()}, true, true)";

                    var options = {
                        valueNames: ['id', 'libelle'],
                        item: '<div class="col-lg-3">\n\
                            <div class="list-group">\n\
                                <a class="list-group-item" href="#" onclick="' + onclick + '"><span class="id badge"></span> <span class="libelle"></span></a>\n\
                            </div>\n\
                        </div>',
                        plugins: [
                            ListPagination({paginationClass: "paginationTop", outerWindow: 2}),
                            ListPagination({paginationClass: "paginationBottom", outerWindow: 2}),
                            ListFuzzySearch()
                        ]
                    };


                    var marqueList = new List('marque', options, marques);
                </script>

            </div>