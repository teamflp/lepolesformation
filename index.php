<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Mon site web</title>
</head>
<body>
    <header>
        <div class="navigation">
            <div class="p-row">
                <div class="bar-menu">
                    <a class="telephone" href="tel:33 (0)6 XX XX XX XX"> <i class="fab fa-whatsapp"></i>&nbsp; +33 6 XX XX XX XX</a> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                    <a class="mail" href="#contact"><i class="fas fa-envelope"></i></a>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                    <a href="javascript:void(0);"><i class="fas fa-bars" aria-hidden="true" id="bars"></i></a>
                </div>
                    
                <ul class="tabs" id="tabs">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="#about">Qui suis-je ?</a></li>
                    <li><a href="#skills">Compétences</a></li>
                    <li><a href="#works">Expériences</a></li>
                    <li><a href="#training">Formation</a></li>
                    <li><a href="#Hobbies">Loisirs</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>  
            </div>
        </div>
    </header>
    
    <!-- SECTION ABOUT -->
    <section class="fluid about" role="role" id="about">
        <div class="container">
            <h1>Qui suis-je ?</h1>
            <p>Je suis un développeur web junior, passionné par le développement web et le design. Je suis actuellement en formation de développeur web et web mobile à l'école O'clock. Je suis à la recherche d'un stage de 6 mois à partir de septembre 2021.</p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
            </p><?php  echo "Bonjour." ?>
        </div>
    </section> <!-- END SECTION ABOUT-->

    <div class="main container">
        <div class="p-row">
            <div class="main-content">
                <div class="main-content-text">
                    <h1>Bienvenue sur mon site web !</h1>
                    <p>
                        Je m'appelle <strong>Mardochee</strong>, je suis étudiant en <strong>Développement Web</strong> à <strong>Pôle Formation</strong>.
                        <br>
                        <br>
                        Je suis passionné par le développement web et je suis à la recherche d'un emploi.
                        <br>
                        <br>
                        Je suis disponible pour un stage de <strong>1 à 2 mois</strong> en <strong>Développement Web</strong>.
                        <br>
                        <br>
                        <strong>Pour plus d'informations, veuillez me contacter.</strong>
                    </p>
                </div>
                <div class="main-content-img">
                    <img src="img/main-content-img.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION PROJETS-->
    <section class="fluid projets" role="section">
        <div class="container">
            <h2>Mon site web</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quidem, dolorem, ipsam, quas, dolores, eos, nam, quis, soluta. Quisquam, quidem, dolorem, ipsam, quas, dolores, eos, nam, quis, soluta.</p>

            <div class="p-row">
                <div class="mycard">
                    <h2 class="mycard-title">Mon premier article</h2>
                    <div class="mycard-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="mycard-footer">
                        <a href="#" class="mycard-footer-link">Lire la suite</a>
                    </div>
                </div>
                <div class="mycard">
                    <h2 class="mycard-title">Mon premier article</h2>
                    <div class="mycard-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="mycard-footer">
                        <a href="#" class="mycard-footer-link">Lire la suite</a>
                    </div>
                </div>
                <div class="mycard">
                    <h2 class="mycard-title">Mon premier article</h2>
                    <div class="mycard-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="mycard-footer">
                        <a href="#" class="mycard-footer-link">Lire la suite</a>
                    </div>
                </div>
            </div>

            <div class="p-row">
                <div class="mycard">
                    <h2 class="mycard-title">Mon premier article</h2>
                    <div class="mycard-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="mycard-footer">
                        <a href="#" class="mycard-footer-link">Lire la suite</a>
                    </div>
                </div>
                <div class="mycard">
                    <h2 class="mycard-title">Mon premier article</h2>
                    <div class="mycard-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="mycard-footer">
                        <a href="#" class="mycard-footer-link">Lire la suite</a>
                    </div>
                </div>
                <div class="mycard">
                    <h2 class="mycard-title">Mon premier article</h2>
                    <div class="mycard-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="mycard-footer">
                        <a href="#" class="mycard-footer-link">Lire la suite</a>
                    </div>
                </div>
            </div>

            <div class="p-row">
                <div>
                    <h2>Mon premier article</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quidem, dolorem, ipsam, quas, dolores, eos, nam, quis, soluta. Quisquam, quidem, dolorem, ipsam, quas, dolores, eos, nam, quis, soluta.</p>
                </div>
                <div>
                    <h2>Mon second article</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quidem, dolorem, ipsam, quas, dolores, eos, nam, quis, soluta. Quisquam, quidem, dolorem, ipsam, quas, dolores, eos, nam, quis, soluta.</p>
                </div>
               
            </div>
        </div>
    </section> <!-- END SECTION PROJETS-->

    <!-- SECTION CONTACT-->
    <section class="fluid contact" id="contact">
        <div class="container">
            <h2 class="contact-title">Confiez-moi votre projet </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Quisquam, quidem, dolorem, ipsam, quas, dolores, eos, nam, quis, soluta. 
                Quisquam, quidem, dolorem, ipsam, quas, dolores, eos, nam, quis, soluta.
            </p>
            
            <!-- FORMULAIRE DE CONTACT-->
            <div class="p-row"> 
                <div style="text-align: center">
                    <h2> Contactez-moi</h2>
                    <p class="adresse">
                        <i class="fas fa-map-marker" aria-hidden="true"></i> 11 allée de Picardie 91800 - Brunoy <br>
                        <i class="fas fa-envelope-open-text" aria-hidden="true"></i>  <a href="mailto:adresse@mail.com">adresse@mail.com</a><br>
                        <i class="fas fa-phone-square" aria-hidden="true"></i>  0600 0600 060<br>
                    </p>
                </div>
                <?php 
                error_reporting(E_ALL);
                ini_set('display_error', 1);

                // On se connect à la a base de données
                $bdd = new PDO('mysql:host=localhost;dbname=pole_formation;charset=utf8', 'paterne', 'Mardochee2008');

                // On récupère les données du formulaire
                if(!empty($_POST)) {
                    
                }
                ?>

                <div class="form">
                    <h2 style="text-align: center; padding-bottom: 20px;">Formulaire de contact Paterne</h2>
                    <div style="margin-bottom: 50px; text-align: center; padding: 15px">
                        <span class="errors" id="errors"></span>
                        <span class="success" id="success"></span>
                    </div>

                    <div style="background-color: #eeeeee; padding:20px 15px 50px 15px; border-radius: 8px;">
                        <form action="" method="post" name="form" class="form-contact" id="form">
                            <div class="p-row">
                                <div class="p-col-6">
                                    <input type="text" name="nom" id="nom" placeholder="Votre nom" required>
                                </div>
                                <div class="p-col-6">
                                    <input type="text" name="prenom" id="prenom" placeholder="Votre prénom" required>
                                </div>
                            </div>

                            <div class="p-row">
                                <div class="p-col-6">
                                    <input type="email" name="email" id="email" placeholder="Votre email" required>
                                </div>
                                <div class="p-col-6">
                                    <input type="text" name="phone" id="phone" placeholder="Votre téléphone" required>
                                </div>
                            </div>

                            <div class="p-row">
                                <div class="p-col-12">
                                    <textarea name="msg" id="msg" rows="8" placeholder="Votre message"></textarea required>
                                </div>
                            </div>

                            <div class="p-row">
                                <div class="p-col-6">
                                    <input type="hidden" name="createdAt">
                                </div>
                            </div>

                            <div class="p-row">
                                <div class="p-col-6">
                                    <input type="submit" name="submit" class="mycard-footer-link" id="submit" value="Envoyer">
                                </div>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </section> <!-- END SECTION CONTACT-->

    <!-- SECTION FOOTER-->
    <footer>
        <div class="container">
            <div class="card-social">
                <h2>Nous suivre</h2>
                <ul class="social-list">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        
            <p>Copyright &copy; 2020 - Tous droits réservés</p>
        </div>
    </footer> <!-- END SECTION FOOTER-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/menumobile.js"></script>
</body>
</html>