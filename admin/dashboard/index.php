<?php
include $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config/config.inc.php';
include (ROOT_DIR.'templates/header.php');
?>
    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 d-flex justify-content-center">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-line fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">NOMBRE DE RECHARGEMENT UBA( <?= '<b style="font-weight: bold !important">'.$admin->_nb_rech().'</b>'; ?>)</p>
                        <?php
                        $gain=0;
                        foreach($admin->_som_rech() as $row){
                            $gain += $row['gain'];
                        }?>
                        <h6 class="mb-0" style="text-align: center !important; font-weight: bold !important;"><?= $gain; ?> FCFA</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-bar fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2" style="font-weight: bold !important">NOMBRE D'ACHAT DE CARTE UBA</p>
                        <h6 class="mb-0" style="text-align: center !important; font-weight: bold !important;"><?= $admin->_nb_ach(); ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->

    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">TABLEAU DES RECHARGEMENTS</h6>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                    <tr class="text-white">
                        <th scope="col"><input class="form-check-input" type="checkbox"></th>
                        <th scope="col">Date de réchargement de la carte</th>
                        <th scope="col">Identifiant de la carte</th>
                        <th scope="col">Nom Prénom sur la carte</th>
                        <th scope="col">Montant à récharger</th>
                        <th scope="col">Quatre chiffres</th>
                        <th scope="col">Réseau du dépot</th>
                        <th scope="col">Préuve du dépot</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php


                    foreach($admin->_rechargement_jour() as $row){

                        ?>
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td><?=$row['date_rech'];?></td>
                            <td><?=$row['num_cart'];?></td>
                            <td><?=$row['prenom_nom'];?></td>
                            <td><?=$row['montant'];?></td>
                            <td><?=$row['quatres_chiffres'];?></td>
                            <td><?=$row['id_depot_type'];?></td>
                            <td style="width:10% "><img src="assets/img_preuve/<?=$row['preuve'];?>" class="img-thumbnail" width="50%" hight="50%"> <i onclick="zoom_i('assets/img_preuve/<?=$row['preuve'];?>','<?=$row['id_depot_type'];?>', '<?=$row['montant'];?>', '<?=$row['date_rech'];?>', '<?=$row['prenom_nom'];?>', '<?=$row['num_cart'];?>')" title="Cliquer pour zoomer" class="fa fa-eye"></i></td>
                        </tr>
                    <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">TABLEAU D'ACHAT DE CARTE UBA</h6>
            </div>
            <div class="table-responsive">
                <table class="table  text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                    <tr class="text-white">
                        <th scope="col"><input class="form-check-input" type="checkbox"></th>
                        <th scope="col">Date d'achat de la carte</th>
                        <th scope="col">Nom Prénom</th>
                        <th scope="col">Pièce d'identité</th>
                        <th scope="col">Numéro de la pièce d'identité</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Adresse Mail</th>
                        <th scope="col">Date de naissance</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php


                    foreach($admin->_achat_jour() as $row){

                        ?>
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td><?=$row['date_achat'];?></td>
                            <td><?=$row['prenom_nom'];?></td>
                            <td><?=$row['piece'];?></td>
                            <td><?=$row['id_piece_no'];?></td>
                            <td><?=$row['tel'];?></td>
                            <td><?=$row['mail'];?></td>
                            <td><?=$row['date_nai'];?></td>
                        </tr>
                    <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->
<?php

include (ROOT_DIR.'templates/footer.php');
?>