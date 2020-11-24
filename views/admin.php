<?php ob_start(); ?>

<section style="position:relative; left:150px; padding-top:-200px opacity:0px; cursor:default;">

    <div class="container">

        <div class="row">

            <div class="col-xs-4 col-4">

                <!-- Button to Open the Modal -->
                <button id="Supprimer" type="button" class="btn btn-danger" data-toggle="modal"
                    data-target="#myyyyModal">
                    Supprimer
                </button>

                <!-- The Modal -->
                <div class="modal" id="myyyyModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">SUPPRIMER</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body" id="sup">
                                <div class="container-fluid">


                                    <div class="d-flex form-group">
                                        <form method='GET'>

                                            <input type="text" placeholder="Name recette" name="Namerecette"
                                                width="25%">
                                            <input type="text" placeholder="time recette" name="timerecette"
                                                width="25%">
                                            <input type="text" placeholder="Number recette" name="numberrecette"
                                                width="25%">
                                            <input type="text" placeholder="level recette" name="levelrecette"
                                                width="25%">
                                            <input type="text" placeholder="cost recette" name="costrecette"
                                                width="25%">
                                            <input type="text" placeholder="descriptionrecette"
                                                name="description recette" width="25%">
                                            <input type="text" placeholder="Service" name="Service" width="25%">
                                            <input type="text" placeholder="Quantity" name="Quantity" width="25%">
                                            <input type="file" placeholder="image recette" name="imgrecette"
                                                width="25%">
                                            <input type="file" placeholder="image ingredient" name="imgingredient"
                                                width="25%">
                                            <input type="file" placeholder="image ingredient2" name="imgingredient2"
                                                width="25%">
                                            <input type="file" placeholder="image ingredient3" name="imgingredient3"
                                                width="25%">
                                            <input type="file" placeholder="image ingredient4" name="imgingredient4"
                                                width="25%">
                                            <input type="file" placeholder="image ingredient5" name="imgingredient5"
                                                width="25%">
                                            <button type="submit" value="supprimer" name="supprimer"
                                                class="btn btn-primary">Supprimer</button>
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Close</button>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-4 col-4">


                <!-- Button to Open the Modal -->
                <button id="Modifier" type="button" class="btn btn-success" data-toggle="modal" data-target="#myyModal">
                    Modifier
                </button>

                <!-- The Modal -->
                <div class="modal" id="myyModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Modifier</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body" id="sup">
                                <div class="container-fluid">
                                    <div class="row">

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <div class="d-flex form-group">
                                                <form method='GET'>

                                                    <input type="text" placeholder="Name recette" name="Namerecette"
                                                        width="25%">
                                                    <input type="text" placeholder="time recette" name="timerecette"
                                                        width="25%">
                                                    <input type="text" placeholder="Number recette" name="numberrecette"
                                                        width="25%">
                                                    <input type="text" placeholder="level recette" name="levelrecette"
                                                        width="25%">
                                                    <input type="text" placeholder="cost recette" name="costrecette"
                                                        width="25%">
                                                    <input type="text" placeholder="descriptionrecette"
                                                        name="description recette" width="25%">
                                                    <input type="text" placeholder="Service" name="Service" width="25%">
                                                    <input type="text" placeholder="Quantity" name="Quantity"
                                                        width="25%">
                                                    <input type="file" placeholder="image recette" name="imgrecette"
                                                        width="25%">
                                                    <input type="file" placeholder="image ingredient"
                                                        name="imgingredient" width="25%">
                                                    <input type="file" placeholder="image ingredient2"
                                                        name="imgingredient2" width="25%">
                                                    <input type="file" placeholder="image ingredient3"
                                                        name="imgingredient3" width="25%">
                                                    <input type="file" placeholder="image ingredient4"
                                                        name="imgingredient4" width="25%">
                                                    <input type="file" placeholder="image ingredient5"
                                                        name="imgingredient5" width="25%">
                                                    <button type="submit" value="supprimer" name="supprimer"
                                                        class="btn btn-primary">Supprimer</button>
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Close</button>
                                                </form>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-4 col-4">
                <!-- Button to Open the Modal -->
                <button id="Modifier" type="button" class="btn btn-primary" data-toggle="modal" data-target="#mModal">
                    Ajouter
                </button>
                <!-- The Modal -->
                <div class="modal" id="mModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Ajouter</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body" id="sup">
                                <div class="container-fluid">
                                    <div class="row">
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <div class="d-flex form-group flex-column">
                                            <div class="col-12">
                                            <h4 style="color:#ba3753;" class="modal-title">Ingrédients</h4>
                                                <form action="" method='POST' style="display:flex; flex-wrap:wrap;">

                                                    <input type="text" placeholder="Id Recette" name="idIngredient" style="width:50% !important;">
                                                    <input type="text" placeholder="Service" name="Service" style="width:50% !important;">
                                                    <input type="text" placeholder="Quantity" name="Quantity" style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient" name="ingredient" style="width:50% !important;">
                                                    <input type="text" placeholder="Quantity2" name="Quantity2" style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient2" name="ingredient2" style="width:50% !important;">
                                                    <input type="text" placeholder="Quantity3" name="Quantity3" style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient3" name="ingredient3" style="width:50% !important;">
                                                    <input type="text" placeholder="Quantity4" name="Quantity4" style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient4" name="ingredient4" style="width:50% !important;">
                                                    <input type="text" placeholder="Quantity5" name="Quantity5" style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient5" name="ingredient5" style="width:50% !important;">
                                                    <input type="text" placeholder="Quantity6" name="Quantity6" style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient6" name="ingredient6" style="width:50% !important;">

                                                    <button style="background:#ba3753!important;" type="submit" value="ajouter" name="action" class="btn btn-primary">Enregistrer</button>
                                                </form>
                                                </div>

                                                    <div class="col-12">
                                                <h4  style="color:#ba3753;" class="modal-title">Recette</h4>
                                                <form action="" method='POST' style="display:flex; flex-wrap:wrap;">

                                                    <input type="text" placeholder="Id Recette" name="idIngredient" style="width:50% !important;">
                                                    <input type="text" placeholder="Service" name="Service" style="width:50% !important;">
                                                    <input type="text" placeholder="Quantity" name="Quantity" style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient" name="ingredient" style="width:50% !important;">
                                                    <input type="text" placeholder="Quantity2" name="Quantity2" style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient2" name="ingredient2" style="width:50% !important;">
                                                    <input type="text" placeholder="Quantity3" name="Quantity3" style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient3" name="ingredient3" style="width:50% !important;">
                                                    <input type="text" placeholder="Quantity4" name="Quantity4" style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient4" name="ingredient4" style="width:50% !important;">
                                                    <input type="text" placeholder="Quantity5" name="Quantity5" style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient5" name="ingredient5" style="width:50% !important;">
                                                    <input type="text" placeholder="Quantity6" name="Quantity6" style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient6" name="ingredient6" style="width:50% !important;">

                                                    <button style="background:#ba3753!important;" type="submit" value="ajouter" name="action" class="btn btn-primary">Enregistrer</button>
                                                </form>
                                                </div>

                                                <div class="col-12">
                                                <h4 style="color:#ba3753;" class="modal-title">Directive</h4>
                                                <form action="" method='POST' style="display:flex; flex-wrap:wrap;">

                                                    <input type="text" placeholder="Id Recette" name="idIngredient" style="width:50% !important;">
                                                    <input type="text" placeholder="Service" name="Service" style="width:50% !important;">
                                                    <input type="text" placeholder="Quantity" name="Quantity" style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient" name="ingredient" style="width:50% !important;">
                                                    <input type="text" placeholder="Quantity2" name="Quantity2" style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient2" name="ingredient2" style="width:50% !important;">
                                                    <input type="text" placeholder="Quantity3" name="Quantity3" style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient3" name="ingredient3" style="width:50% !important;">
                                                    <input type="text" placeholder="Quantity4" name="Quantity4" style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient4" name="ingredient4" style="width:50% !important;">
                                                    <input type="text" placeholder="Quantity5" name="Quantity5" style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient5" name="ingredient5" style="width:50% !important;">
                                                    <input type="text" placeholder="Quantity6" name="Quantity6" style="width:50% !important;">
                                                        <input type="text" placeholder="ingredient6" name="ingredient6" style="width:50% !important;">

                                                    <button style="background:#ba3753!important;" type="submit" value="ajouter" name="action" class="btn btn-primary">Enregistrer</button>
                                                </form>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>


<?php $title = "Admin"; ?>
<?php $content = ob_get_clean(); ?>

<?php require('templates/template.php'); ?>