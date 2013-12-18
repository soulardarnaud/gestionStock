<?php ?>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./index.php">
                        <?php
                        echo \MVC\A::post('a', 'Gestion des Stocks');
                        ?>
                    </a>
                </div>
                <div class="nav navbar-nav side-nav">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="../../appli/v/produit/liste.php">
                                <i class="fa fa-desktop"></i>
                                Produits
                            </a>
                        </li>
                        <li>
                            <a href="../../appli/v/marque/liste.php">
                                <i class="fa fa-bookmark"></i>
                                Marques
                            </a>
                        </li>
                        <li>
                            <a href="../../appli/v/categorie/liste.php">
                                <i class="fa fa-book"></i>
                                Catégorie
                            </a>
                        </li>
                        <li>
                            <a href="../../appli/v/mouvement/liste.php">
                                <i class="fa fa-truck Mouvement"></i>
                                Mouvements
                            </a>
                        </li>
                    </ul>
                </div>
            </nav> 
        </div>
    </body>
</html>
