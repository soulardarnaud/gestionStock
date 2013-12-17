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
    
    
    <div class ="row">
    <div class="col-lg-12">
        <h1 class="page-header">Liste des produits</h1>
    </div>
</div>

<!-- Recherche -->
<div class ="row">
    <div class="col-lg-12">
        <label>Filtre de recherche :</label>
    </div>
    <div class="col-lg-12">
        <div class="alert alert-dismissable alert-info">
           <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
           Des commandes sont effectué automatiquement.
        </div>
    </div>

    <div class="form-group input-group col-lg-3">  
        <span class="input-group-addon">Marque :</span>
        <input class="form-control"></input>
    </div>

      <div class="form-group input-group col-lg-3">  
         <span class="input-group-addon">Catégorie :</span>
         <input class="form-control"></input>
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
                        <th class="header">Commander <i class="fa fa-sort"></i></th>
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

<script type="text/javascript">
    var liste =  <?php echo json_encode($this->liste) ?>;
    
    for(var i=0; i < liste.length; i++)
    {
        $('#table_rows').append('<tr><td>'+liste[i].id+'</td><td>'+liste[i].name+'</td><td>'+liste[i].price+'</td><td>'+liste[i].quantity+'</td><td><button class="btn btn-info" type="button">Commander</button></tr>');
    }

</script>