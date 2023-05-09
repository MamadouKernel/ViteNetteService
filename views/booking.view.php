<?php include('partiels/_header_clt.php');?>
<?php include('partiels/_navbar_clt.php');?>
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(assets/img/0p.png);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">JE COMMANDE MA CARTE UBA</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">ViteNetteService</a></li>
                    <!--<li class="breadcrumb-item"><a href="#">Pages</a></li>-->
                    <li class="breadcrumb-item text-white active" aria-current="page">Je passe la commande de ma carte UBA</li>
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
                    <h3 class="text-white mb-3">Je passe une commande de carte UBA.</h3>
                    <hr>
                    <?php if (isset($success)) { ?>
                        <div class="alert alert-primary bg-success" style="color:white !important; font-weight: bold !important; font-size: 28px !important;" role="alert"><?= $success ?></div>
                    <?php } ?>
                    <?php if (isset($echec)) { ?>
                        <div class="alert alert-primary bg-danger" style="color:white !important; font-weight: bold !important; font-size: 28px !important;" role="alert"><?= $echec ?></div>
                    <?php } ?>
                    <form method="post">
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <label class="form-label" id="label">Nom et Prénom</label>
                                <input type="text" name="np" required="" class="form-control border-0" placeholder="Nom et Prénom" style="height: 55px;">
                            </div>

                            <div class="col-12 col-sm-6">

                                <label class="form-label" id="label">Type de la pièce d'identité</label>
                                <select class="form-select border-0" required="" name="tpi" style="height: 55px;">
                                    <option selected>Selectionner le type de piece d'identité</option>
                                    <?php foreach ($kernel->_tpi() as $row) { ?>
                                        <option value="<?= $row['idpiece']; ?>"><?= $row['piece']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <label class="form-label" id="label">Numéro de la pièce d'identité</label>
                                <input type="text" name="nump" required="" class="form-control border-0" placeholder="Veuillez entrer le numéro de la pièce d'identité que vous avez choisie" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label class="form-label" id="label">Votre numero de téléphone</label>
                                <input type="tel" name="tele" required="" class="form-control border-0" minlength="10" maxlength="10"  placeholder="Votre numero de téléphone" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label class="form-label" id="label">Votre Addresse Mail</label>
                                <input type="email" name="mail" required="" class="form-control border-0" placeholder="Votre Addresse Mail" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label class="form-label" id="label">Date de naissance</label>
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="date" name="dnai" required=""
                                           class="form-control border-0 datetimepicker-input"
                                           placeholder="Date de naissance"  required=""  style="height: 55px;">
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-secondary w-100 py-3" name="achat" type="submit">Je passe ma commande</button>
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