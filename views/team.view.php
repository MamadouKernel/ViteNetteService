<?php include('partiels/_header_clt.php');?>
<?php include('partiels/_navbar_clt.php');?>
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(assets/img/0p.png);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Réchargement de la carte UBA</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">ViteNetteService</a></li>
                    <!--<li class="breadcrumb-item"><a href="#">Pages</a></li>-->
                    <li class="breadcrumb-item text-white active" aria-current="page">RECHARGEMENT DE LA CARTE UBA</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!--FORMULAIRE-->
<div class="container-fluid  fadeInUp my-5 wow" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-md-6" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="assets/img/oub.jpg"
                         style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                    <h3 class="text-white mb-3">Je récharge ma carte UBA.</h3>
                    <hr>
                    <?php if (isset($success)) { ?>
                        <div class="alert alert-primary bg-success" style="color:white !important; font-weight: bold !important; font-size: 28px !important;" role="alert"><?= $success ?></div>
                    <?php } ?>
                    <?php if (isset($echec)) { ?>
                        <div class="alert alert-primary bg-danger" style="color:white !important; font-weight: bold !important; font-size: 28px !important;" role="alert"><?= $echec ?></div>
                    <?php } ?>
                    <form method="post" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <label class="form-label" id="label">Numéro de la carte</label>
                                <input type="tel" required="" maxlength="10" minlength="10" class="form-control border-0" name="numc" placeholder="Numéro de la carte" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label class="form-label" id="label">prénom et le nom </label>
                                <input type="tel" class="form-control border-0" name="pn" placeholder="Prénom et Nom" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label class="form-label" id="label">Les quatres(4)derniers chiffres</label>
                                <input type="tel" class="form-control border-0" required="" maxlength="4" minlength="4" name="ktrech" placeholder="Entrer les quatres(4) derniers chiffres de la carte" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label class="form-label" id="label">Montant à rechargé</label>
                                <input type="tel" class="form-control border-0" minlength="4" maxlength="999999999" required="" name="montant" placeholder="EX: 5000fr" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label class="form-label" id="label">Type du dépôt</label>
                                <select class="form-select border-0" name="ope" required="" style="height: 55px;">
                                    <option selected>Selectionner le type d'operateur</option>
                                    <?php foreach ($kernel->_reseau() as $row) { ?>
                                        <option value="<?= $row['id_depot_type_id']; ?>"><?= $row['id_depot_type']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label class="form-label" id="label">Entrez la capture du paiement</label>
                                <input type="file" name="fichie" required="" class="form-control border-0" placeholder="Entrez la capture du paiement" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3" name="rechager" type="submit">Je fais mon réchargement</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END FORMULAIRE-->

<?php include('partiels/_footer_clt.php');?>   