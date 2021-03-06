<?php 
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126572629-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-126572629-1');
        </script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tom Raley</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="resources/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,800" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
            crossorigin="anonymous">
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--Jumbotron Section-->
            <div class="jumbotron jumbotron-fluid" id="home">
                <div class="container">
                    <img class="img-fluid" src="resources/images/profile_pic.jpg" alt="photo of tom">
                    <h1 class="display-4">Hi, I'm Tom.</span></h1>
                    <p class="lead">I'm passionate about solving problems and creating beautiful, functional solutions. </p>
                    <p class="lead">My tools are HTML, CSS and JavaScript.</p>
                </div>
            </div>

        <!--Navigation Bar-->
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" id="nav">
            <a class="navbar-brand" href="#home">tom<span class="name-color">raley</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#about">About
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Portfolio
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#offtherales">Off The Rales Brewing Co.</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#travelist">Travelist</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#colmar">Colmar Academy</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link social-logo fab fa-linkedin fa-2x" id="nav-link-color" href="https://www.linkedin.com/in/tom-raley/" target="_blank"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link social-logo fab fa-twitter-square fa-2x" id="nav-link-color" href="https://twitter.com/tom_raley" target="_blank"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link social-logo fab fa-github-square fa-2x" id="nav-link-color" href="https://github.com/tom-raley" target="_blank"></a>
                    </li>
                </ul>
            </div>
        </nav>

        <!--About Me Section-->
        <div class="container" id="about">
            <div class="row">
                <div class="about">
                    <h1 data-aos="fade-right" data-aos-duration="2000">About</h1>
                    <p class="lead" data-aos="fade-up" data-aos-duration="2000">I'm <span class="name-color">Tom.</span> I'm a Front-End Web Developer, writer of clean, elegant code that functions how it should and looks great.</p>
                    <p data-aos="fade-up" data-aos-duration="2000">My whole life, I've always been interested in computers, software, and how to make them do amazing things. After working with non-profits for several years, I realized early in 2018 that my true passion is working with computers, and having dabbled in code here and there (but
                            never with any formal training), I decided I would finally work to master the concepts of web development. I now work
                            extensively with
                            <span class="name-color">HTML5, CSS3,</span> and
                            <span class="name-color">JavaScript</span>, as well as
                            <span class="name-color">Bootstrap 4</span> and
                            <span class="name-color">jQuery</span> to implement solutions that solve whatever problems I encounter. Thanks for visiting, and please get
                            in touch if you'd like to talk more.</p> 
                </div>
            </div>
        </div>

        <!--Projects Section-->
        <div class="portfolio">
            <h1 class="portfolio-header" data-aos="fade" data-aos-duration="1000" >Portfolio</h1>
            <div class="container">
                <div class="row justify-content-center" id="offtherales">
                        <div class="col-sm-8">
                            <div class="card">
                                <img class="card-img-top" data-aos="fade-right" data-aos-duration="2000" src="resources/images/offtherales.png" alt="Off the Rales screenshot">
                                <div class="card-body" data-aos="fade-left" data-aos-duration="2000">
                                    <h5 class="card-title">Off the Rales Homebrewery</h5>
                                    <p class="card-text">In addition to web development, I am an avid homebrewer.  I built my own website to showcase my homebrewed beers.</p>
                                    <a href="https://tom-raley.github.io/offtherales/" target="_blank" class="btn btn-primary btn-name-color">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center" id="travelist">
                        <div class="col-sm-8">
                            <div class="card" >
                                <img class="card-img-top" data-aos="fade-right" data-aos-duration="2000" src="resources/images/travelist.png" alt="Travelist screenshot">
                                <div class="card-body" data-aos="fade-left" data-aos-duration="2000">
                                    <h5 class="card-title">Travelist</h5>
                                    <p class="card-text">A single page web app that uses JavaScript to take user input and store it in an itinerary list.  Future functionality includes mapping and optimizing routes.</p>
                                    <a href="https://tom-raley.github.io/travelist/" target="_blank" class="btn btn-primary btn-name-color">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center" id="colmar">
                        <div class="col-sm-8">
                            <div class="card">
                                <img class="card-img-top" data-aos="fade-right" data-aos-duration="2000" src="resources/images/colmaracademy.png" alt="Colmar academy screenshot">
                                <div class="card-body" data-aos="fade-left" data-aos-duration="2000">
                                    <h5 class="card-title">Colmar Academy</h5>
                                    <p class="card-text">A capstone project from Codecademy's Build Websites From Scratch.  Created from a barebones wireframe with little direction, it features HTML5 and pure CSS3 in all their glory.</p>
                                    <a href="https://tom-raley.github.io/colmar/" target="_blank" class="btn btn-primary btn-name-color">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container" id="contact">
                <?php 
                        if(isset($_POST['submit'])){
                            $to = "tom.raley@gmail.com"; // this is your Email address
                            $from = $_POST['email']; // this is the sender's Email address
                            $name = $_POST['name'];
                            $subject = "Form submission";
                            //$subject2 = "Copy of your form submission";
                            $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
                            //$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

                            $headers = 'From: ' . $from . "\r\n" .
                            'Reply-To: ' . $from . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();
                           // $headers2 = "From:" . $to;
                            mail($to,$subject,$message,$headers);
                            //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender                        
                            }
                        ?>
                <div class="row justify-content-center">
                    <h1 class="col-sm-8 contact-header">Message Sent!</h1>
                </div>
            </div>

        <footer>
            <div class="footer-social">
                <a class="social-logo fab fa-linkedin fa-2x" id="nav-link-color" href="https://www.linkedin.com/in/tom-raley/" target="_blank"></a>
                <a class="social-logo fab fa-twitter-square fa-2x" id="nav-link-color" href="https://twitter.com/tom_raley" target="_blank"></a>
                <a class="social-logo fab fa-github-square fa-2x" id="nav-link-color" href="https://github.com/tom-raley" target="_blank"></a>
            </div>
                <p>tom raley &copy 2018</p>
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="//cdn.jsdelivr.net/npm/jquery.localscroll@2.0.0/jquery.localScroll.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js"></script>

        <script>
            AOS.init(); 
            $("html, body").animate({ scrollTop: "1024px" }, 5000);
            $('.nav-link').on('click', function () {
                    $('.navbar-collapse').collapse('hide');
                });
        </script>

    </body>
</html>