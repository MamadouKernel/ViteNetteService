<?php include('partiels/_header_clt.php');?>
<?php include('partiels/_navbar_clt.php');?>
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(/assets/img/01.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contacts</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">ViteNetteService</a></li>
                    <!--<li class="breadcrumb-item"><a href="#">Pages</a></li>-->
                    <li class="breadcrumb-item text-white active" aria-current="page">Contacts</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">// Nos Contacts //</h6>
            <h1 class="mb-5">Pour plus d'informations vous pouvez nous contacter</h1>
        </div>
        <div class="row g-4">
            <div class="col-12">
                <div class="row gy-4">
                    <div class="col-md-4">
                        <div class="bg-light d-flex flex-column justify-content-center p-4">
                            <h5 class="text-uppercase">// Téléphone //</h5>
                            <p class="m-0"><i class="fa-solid fa-phone text-primary me-2 fa-2x"></i>+225 27 3595 3202/ 0779799979</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light d-flex flex-column justify-content-center p-4">
                            <h5 class="text-uppercase">// Email //</h5>
                            <p class="m-0"><i class="fa fa-envelope-open text-primary me-2 fa-2x" ></i>vitenetteservice01@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-light d-flex flex-column justify-content-center p-4">
                            <h5 class="text-uppercase">// Réseau sociaux(Whatsapp) //</h5>
                            <p class="m-0"><i class="fab fa-whatsapp-square text-primary me-2 fa-2x" onclick="window.open('https://api.whatsapp.com/send/?phone=002250779799979&text=Bonjour à toute l\'équipe de ViteNetteService', 'ONG-UIFS-DON', 'width=626,height=436');return false;"></i>N'hésitez pas à communiquer avec nous par WhatsApp.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
            </div>
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <hr>
                    <?php if(isset($success)){?>
                        <div class="alert alert-success" role="alert"><?= $success?></div>
                    <?php 	}?>
                    <?php if(isset($echec)){?>
                        <div class="alert alert-danger" role="alert"><?= $echec?></div>
                    <?php 	}?>
                    <form method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Nom & Prénom">
                                    <label for="name">Nom & Prénom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="E-mail">
                                    <label for="email">Votre Adresse E-mail</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="sujet" class="form-control" id="subject" placeholder="Objet">
                                    <label for="subject">Objet</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Saisissez vos méssages ici" id="message" style="height: 100px"></textarea>
                                    <label for="message">Messages</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" name="envoyer" type="submit">Envoyez Votre Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
<?php include('partiels/_footer_clt.php');?>  