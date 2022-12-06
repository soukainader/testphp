<?php 
if(isset($_POST['submit'])){
    $to = "soukainader99@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . " wrote the following:" . "\n\n" . $_POST['cmt'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['cmt'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Adhaki - Nous contacter</title>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/loogo.png" >
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.html"><img src="images/logo1.png" alt="alternative"></a> 
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html">Accueil</a>
                    </li>
                    <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle page-scroll" href="index.html#video" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Produits</a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">Serrure intelligente</span></a>
                          <div class="dropdown-items-divide-hr"></div>
                          <a class="dropdown-item" href="produit-interupteur.html"><span class="item-text">interrupteur</span></a>
                      </div>
                  </li>
                  <!-- end of dropdown menu -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Nos solutions</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="log-in.html"><span class="item-text">Hôtel</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="sign-up.html"><span class="item-text">Maison et bureau</span></a>
                    </div>
                </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="article-details.html">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll active" href="privacy-policy.html">Nous contacter</a>
                    </li>
                </ul>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Nous contacter</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Privacy Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-container last">
                                <h3>Vous avez des questions, des commentaires? N'hésitez pas à nous contacter.</h3>
                                <p>Heure de fonctionnement :<ul><li>Lundi vers Vendredi de 8:00 à 18:00</li> <li>Samedi de 8:00 à 14:00</li> <li>Dimanche fermé</li></ul><br>
                                <p>Nos agents du service client vous répondront dans les plus brefs délais.</p>
                            </div> <!-- end of text container -->
                        </div> <!-- end of col-->
                        <div class="col-md-6">

                            <!-- Privacy Form -->
                            <div class="form-container">
                                <form action="http://localhost/testphp/email.php" method=”POST” class="gform">
                                    <div class="form-group">
                                        <input type="text" class="form-control-input" id="name" name="name" required>
                                        <label class="label-control" for="name">Name</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control-input" id="email" name="email" required>
                                        <label class="label-control" for="email">Email</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control-input" id="sujet" name="sujet" required>
                                        <label class="label-control" for="sujet">Sujet</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control-input" id="cmt" name="cmt" required>
                                        <label class="label-control" for="cmt">Commentaire</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="form-control-submit-button" name="submit" id="submit">Envoyer</button>
                                    </div>
                                    <div class="form-message">
                                        <div id="pmsgSubmit" class="h3 text-center hidden"></div>
                                    </div>
                                </form>
                            </div> <!-- end of form container -->
                            <!-- end of privacy form -->

                        </div> <!-- end of col--> 
                    </div> <!-- end of row -->
                </div> <!-- end of col-->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-2 -->
   <!-- Footer -->
   <svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79"><defs><style>.cls-2{fill:#5f4def;}</style></defs><title>footer-frame</title><path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)"/></svg>
   <div class="footer">
       <div class="container">
           <div class="row">
               <div class="col-md-4">
                   <div class="footer-col first">
                       <h4>Rester en contact</h4>
                       <p class="p-small">Suivez-nous sur nos sociaux médias et soyez le premier informé des coupons et des promotions spéciales.</p>
                   </div>
               </div> <!-- end of col -->
               <div class="col-md-4">
                   <div class="footer-col middle">
                       <h4>Liens importants</h4>
                       <ul class="list-unstyled li-space-lg p-small">
                           <li class="media">
                               <i class="fas fa-square"></i>
                               <div class="media-body">Notre site commercial <a class="white" href="#your-link">wikoget.com</a></div>
                           </li>
                       </ul>
                   </div>
               </div> <!-- end of col -->
               <div class="col-md-4">
                   <div class="footer-col last">
                       <h4>Contact</h4>
                       <ul class="list-unstyled li-space-lg p-small">
                           <li class="media">
                               <i class="fas fa-map-marker-alt"></i>
                               <div class="media-body">Avenue Arrahma quartier Badr 1, Rabat</div>
                           </li>
                           <li class="media">
                               <i class="fas fa-envelope"></i>
                               <div class="media-body"><a class="white">acta@taleiserve.ma</a> <i class="fas fa-globe"></i><a class="white">www.wikoget.com</a></div>
                           </li>
                       </ul>
                   </div> 
               </div> <!-- end of col -->
           </div> <!-- end of row -->
       </div> <!-- end of container -->
   </div> <!-- end of footer -->  
   <!-- end of footer -->
    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>