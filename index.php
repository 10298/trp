<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="shortcut icon" href="logo.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tropiques</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fa/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="fa/css/brands.css">
	<link rel="stylesheet" type="text/css" href="fa/css/solid.css">
    <link href="aos.css" rel="stylesheet">

</head>
<body>

    <div class="loader">
        <div class="div1"></div>
        <div class="div2">
            <img src="images/logo.png" alt="" class="img-fluid my-4">
            <div class="loading"></div>
        </div>
        <div class="div3"></div>
    </div>

    <div class="content">
            <?php include_once 'header-footer/header.php'; ?>


            <section id="section1" style="position: relative;">
                <div class="circle-design"></div>
                <div class="circle-design2"></div>
                <div class="carousel slide carousel-fade image text-light" id="carousel1" data-bs-ride=carousel>
                    <div class="carousel-inner">
                        <div class="carousel-item active bg-dark" style="background-image: url(images/image-44-slider.png);">
                            <div class="container">
                                <div class="goal text-center d-flex align-items-center mb-3">
                                    <img src="images/logo.png" alt="logo tropiques initiatives" class="mx-1 logo-section1 img-fluid">
                                    <p class="lead">Association humanitaire à but non lucratif</p>
                                </div>
                                <h1>Chacun peut faire la différence.</h1>
                                <a href="pages/nous-soutenir" class="lead py-3 px-4"><i class="fa fa-heart mx-2"></i>Nous soutenir</a>
                            </div>
                        </div>
                        <div class="carousel-item bg-dark" style="background-image: url(images/girl.jpg);">
                            <div class="container">
                                <div class="goal text-center d-flex align-items-center mb-3">
                                    <img src="images/logo.png" alt="logo tropiques initiatives" class="mx-1 logo-section1 img-fluid">
                                    <p class="lead">Association humanitaire à but non lucratif</p>
                                </div>
                                <h1>Générosité : c'est l'acte le plus noble.</h1>
                                <a href="pages/nous-soutenir" class="lead py-3 px-4"><i class="fa fa-heart mx-2"></i>Nous soutenir</a>
                            </div>
                        </div>
                        <div class="carousel-item bg-dark" style="background-image: url(images/image-22-slider.png);">
                            <div class="container">
                                <div class="goal text-center d-flex align-items-center mb-3">
                                    <img src="images/logo.png" alt="logo tropiques initiatives" class="mx-1 logo-section1 img-fluid">
                                    <p class="lead">Association humanitaire à but non lucratif</p>
                                </div>
                                <h1>Vos dons changent des vies.</h1>
                                <a href="pages/nous-soutenir" class="lead py-3 px-4"><i class="fa fa-heart mx-2"></i>Nous soutenir</a>
                            </div>
                        </div>
                    </div>    

                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                        <div class="btn rounded-circle">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </div>

                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                        <div class="btn rounded-circle">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </div>

                        <span class="visually-hidden">Next</span>
                    </button>			
                </div>
            </section>


            <section id="section2" class="pb-5 pt-4">
                <div class="px-4 objectif pb-4">
                    <h1 class="text-center">Nos objectifs</h1>
                    <div class="after d-flex py-4 justify-content-center">
                        <div class="after-1"></div>
                        <div class="after-2"></div>
                    </div>
                    <div class="objectives"><i class="fa fa-check"></i> Soutenir des projets éducatifs en Afrique subsaharienne ;</div>
                    <div class="objectives"><i class="fa fa-check"></i> Apporter une aide en tout genre aux personnes défavorisées d’Afrique sub-saharienne. (Orphelins, personnes handicapées, enfants abandonnés…)</div>
                    <div class="objectives"><i class="fa fa-check"></i> Ses adhérents envisagent un soutien de trois types :</div>
                </div>
                <div class="row m-auto">
                    <div class="col-md-4 home-services-anim home-services-anim1">
                        <div class="img">
                            <div class="light-through"></div>
                            <p>Human</p>
                            <img class="img-fluid" src="images/support-human.jpg" alt="">
                        </div>
                        <div class="text py-4">
                            <p><i class="fa fa-user-circle mx-2"></i>Support Humain</p>
                            <h5>Par l’envoi de bénévoles volontaires, visiteurs, experts…</h5>
                        </div>
                    </div>

                    <div class="col-md-4 home-services-anim home-services-anim2">
                        <div class="img">
                            <div class="light-through"></div>
                            <p>Material</p>
                            <img class="img-fluid" src="images/material.jpg" alt="">
                        </div>
                        <div class="text py-4">
                            <p><i class="fa fa-cubes mx-2"></i>Support Matériel</p>
                            <h5>Par l’envoi de matériel didactique, appareils, livres, vêtements, denrées alimentaires, médicaments…</h5>
                        </div>
                    </div>

                    <div class="col-md-4 home-services-anim home-services-anim3">
                        <div class="img">
                            <div class="light-through"></div>
                            <p>Financial</p>
                            <img class="img-fluid" src="images/support-financial.jpg" alt="">
                        </div>
                        <div class="text py-4">
                            <p><i class="fa fa-credit-card mx-2"></i>Support Financier</p>
                            <h5>Par le soutien de projets, des aides directes, des parrainages d’enfants…</h5>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section3" class="py-5">
                <h1 class="display-4 text-light text-center py-3">Nos projets</h1>
                <div class="row m-auto">
                    <div class="col-md-6" data-aos="zoom-in" data-aos-duration="500">
                        <div class="img">
                            <img src="images/s3-design2.png" alt="" class="img-fluid img1">
                            <img src="images/braille.jpg" alt="" class="img-fluid img2">
                        </div>
                        <div class="bg-light text p-3">
                            <a href="pages/nos-projets">Lire plus <i class="fa fa-angle-double-right mx-2"></i></a>
                            <h4 class="px-3 text-center pb-3 pt-5">Unité de transcription et d'impréssion de braille</h4>
                            <p>Ce projet consiste en l’installation d’un ensemble d’équipement constitué d’un ou plusieurs ordinateurs équipés de logiciels spécialisés</p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="zoom-in" data-aos-duration="500">
                        <div class="img">
                            <img src="images/s3-design1.png" alt="" class="img-fluid img1">
                            <img src="images/travel.jpg" alt="" class="img-fluid img2">
                        </div>
                        <div class="bg-light text p-3">
                            <a href="pages/nos-projets">Lire plus <i class="fa fa-angle-double-right mx-2"></i></a>
                            <h4 class="px-3 text-center pb-3 pt-5">Voyage et tourisme solidaire</h4>
                            <p>l'association organise des voyages solidaires, au cours des quels des français vont vers les peuples africains pour des formations.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section4">
                <div class="row m-auto">
                    <div class="col-md-6 py-4 col1 px-3">
                        <p class="about-logo px-5">About us</p>
                        <h1 class="py-3 px-5">A propos de nous</h1>
                        <p class="px-3">L’association humanitaire, à but non lucratif Tropiques Initiatives a été créée le 20 septembre 2013 et déclarée à la Préfecture de Paris le 24 octobre 2013. Elle est régie par la loi du 1er juillet 1901 et le décret du 16 août 1901. Le décret est paru au journal officiel des associations N°47, 145e année, du 23 novembre 2013, sous le numéro W751221918.</p>
                        <p class="px-3">
                        Depuis sa création, l’association a aidé à collecter du matériel didactique spécialisé pour les non-voyants (ordinateurs équipés de logiciels spécialisé, machines brailles, cannes blanches, tablettes, poinçons...), plusieurs centaines de kilogrammes de vêtements pour les personnes nécessiteuses. Elle envisage dans les prochains mois de participer :</p>
                        <h6 class="px-3"><i class="fa fa-check-circle text-primary"></i>  A la formation en informatique d’enfants handicapés,</h6>
                        <h6 class="px-3"><i class="fa fa-check-circle text-primary"></i> Au parrainage pour le soutien scolaire d’enfants orphelins ou handicapés.</h6>
                    </div>
                    <div class="col-md-4 text-center col2 d-none d-md-block">
                        <img src="images/about-us.jpg" alt="" class=" m-auto img-fluid">    
                    </div>
                    <div class="col-md-2 col3 d-none d-md-block">
                        <img src="images/dons.jpg" alt="" class="m-auto img-fluid">    
                    </div>
                </div>
            <div id="contact-adhesion"></div>

            </section>

            <section id="sectionx" class="py-4 d-none d-lg-block">
                <div class="div1">
                        <ul class="d-flex">
                            <li class="h5"><i class="mx-2 fas fa-map-marker-alt"></i><span>Chez M. WANDJE,</span> 8 Rue de Belzunce 75010 Paris</li>
                            <li class="h5"><i class="mx-2 fa fa-phone"></i>06 10 59 29 18/06 87 15 66 30</li>
                            <li class="h5"><i class="mx-2 fa fa-envelope"></i>contact@tropiques-initiatives.org</li>
                        </ul>
                </div>
            </section>
            
            <section id="section5" class="py-5 px-3">
                <img src="images/earth-bg-o.png" alt="" class="bg-image-earth">
                <div class="div1">
                    <p class="lead mx-5 pt-3">Contact</p>
                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

                    <form id="form" style="z-index:1000;">
                        <input type="text" name="nom" id="nom" placeholder="Votre nom">

                        <input type="text" name="email" id="email" placeholder="Votre email">
                        <input type="phone" name="phone" id="phone" placeholder="Numéro de téléphone">
                        <textarea name="message" id="message" placeholder="Méssage"></textarea>
                        <div class="g-recaptcha" data-sitekey="6LdKW4spAAAAAN9n6vgPWcMqIWa3SBghfd50exIY" style="z-index:100;cursor: pointer; padding-inline: 15px;"></div>
                        <input type="submit" id="button" value="Envoyer" style="margin-block: 20px;  margin-inline: 15px;">
                    </form>
                </div>

                <div class="div2 mt-5 mx-2 p-3">
                    <p class="lead mx-5 py-3 p1">Adhésions</p>
                    <a href="pdf/bulletin_adhesion.pdf">Tropiques Initiatives - Bulletin d'adhésion</a>
                    <p class="my-3 p2">Pour adhérer, téléchargez et imprimez le bulletin ci-joint et adressez le au siège de l’association avec votre règlement, un reçu fiscal vous sera adressé.</p>
                    <p class="p3">Pour ouvrir et imprimer le formulaire d’adhésion, vous devez disposer du logiciel gratuit Acrobat Reader.</p>
                </div>
            </section>

            <?php include_once 'header-footer/footer.php'; ?>
		<div><?php echo(4+6); ?></div>
    </div>

    <script>
        let pathName = window.location.pathname;
        let pageName = pathName.split('/').pop();
        // alert(pageName);

        if(pageName === "index"){
            document.querySelector(".accueil").classList.add('open');
        }
    </script>

    <script src="scroll-out.js"></script>
	<script src="aos.js"></script>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="script/jquery.js"></script>
    <script src="script/script.js"></script>
    <script>
        AOS.init();
    </script>

<script type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

<script type="text/javascript">
  emailjs.init('P68Sbnx4Uww94z5Nx')
</script>







<script type="text/javascript">
   

const btn = document.getElementById('button');

document.getElementById('form')
 .addEventListener('submit', function(event) {
   event.preventDefault();

   btn.value = 'Envoie...';

   const serviceID = 'default_service';
   const templateID = 'template_1nak4ah';

   emailjs.sendForm(serviceID, templateID, this)
    .then(() => {
      btn.value = 'Envoyer';
      alert('Méssage envoyé!');
    }, (err) => {
      btn.value = 'Envoyer';
      alert(JSON.stringify(err));
    });
});

</script>





</body>
</html>
