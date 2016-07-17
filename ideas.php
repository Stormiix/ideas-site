<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <meta name="description" content="">
        <meta name="keywords" content="" />
        <meta name="copyright" content="" />
        <meta name="author" content="Anas Mazouni - https://stormix.co/">
        <meta name="robots" content="all" />
        <link rel="author" href="https://plus.google.com/+Anasmazouni_Stormix" />
        <title>Ideas - Inspireme</title>
        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <link href="css/custom.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <!-- Custom -->
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="img/favicon.png" />
        <!-- Font Awesome for footer-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <ul class="topnav">
            <li><a><i class="material-icons tiny">email</i> contact@stormix.co</a></li>               <li><a><i class="material-icons tiny"> phone</i> +212 123 456 789</a></li>
        </ul>
        <nav class="custom-color" role="navigation">
            <div class="nav-wrapper">
                <a href="index" class="brand-logo center">Inspireme</a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="index">Home</a></li>
                    <li class="active"><a href="ideas">Ideas</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="faq">FAQ</a></li>
                </ul>
                <ul class="right hide-on-med-and-down">
                    <li><a class="modal-trigger" href="register">Register</a></li>
                    <li><a class="modal-trigger" href="login">Login</a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li class="active"><a href="index">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="faq">FAQ</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
        <div class="page-header">
            <div  class="header overlay">
                <h2>Ideas</h2>
            </div>
        </div>
        
        
        <div class="section">
            <div class="row">
                <div class=" col s8">
                    <div class="col s8">
                        <ul class="categ filter left-align">
                            Category :
                            <li><a href="#" role="button" data-filter="all" class="all selected ">All</a></li>
                            <li><a href="#" role="button" data-filter="categ1">Categ 1</a></li>
                            <li><a href="#" role="button" data-filter="categ2">Categ 2</a></li>
                            <li><a href="#" role="button" data-filter="categ3">Categ 3</a></li>
                        </ul></div>
                        <div class="col s4"> 


                        </div>
                    </div></div>
                    <div class="row">
                        <div class="col s12 m8 l8">
                            
                            <div class="boxes center-align">
                                <?php
                                for($x = 1; $x <= 12; $x++){
                                ?>
                                
                                <!--   Item   -->
                                <div class="col s12 m4" data-category="categ<?= rand(1,3); ?>">
                                    <div class="card">
                                        <div class="card-image">
                                            <img src="img/image0<?= rand(1,3); ?>.jpg">
                                            <span class="card-title">Card Title #<?= rand(1,3); ?></span>
                                            <span class="card-date">Thu, June <?= rand(1,30); ?></span>
                                        </div>
                                        
                                        <div class="card-content">
                                            <p><?php echo substr("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat.", 0, 110); ?></p>
                                        </div>
                                        <div class="card-action center-align">
                                            <a class="waves-effect waves-light btn custom-color"><i class="material-icons left">visibility</i>button</a>
                                        </div>
                                    </div>
                                </div>
                                <!--   Item   -->
                                <?php } ?>
                                
                            </div>
                            <div class="col s12 center-align">
                                <a class="waves-effect waves-light btn custom-color-sec btn-large" href="ideas">Load More</a>
                            </div>
                            
                        </div>
                        <div class="col s12 m4 l4"> 
                            <div class="container">
                                <h5>Search ideas : </h5>
                                  <form class="searchform">
                                     
                                      <input id="search" type="text" placeholder='Type to search...' required>
 
                                  </form>

                            </div>

                        </div></div>
                    </div>
                    
                    
                    
                    
                    <footer class="page-footer dark-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col l6 s12">
                                    <h5 class="white-text">Why <span class="highlight">inspireme.</span> ?</h5>
                                    <p class="grey-text text-lighten-4">We know there is plenty of people with entrepreneurial <i>*this word actually exists*</i> passion waiting for the idea to finally start something meaningful. We also know there is a lot of people not satisfied with product options they have at the moment. So why not to try bring these two together?</p>
                                </div>
                                <div class="col l3 s12">
                                    <h5 class="white-text">Helpful Links:</h5>
                                    <ul>
                                        <li><a class="white-text" href="#">About</a></li>
                                        <li><a class="white-text" href="#">Privacy</a></li>
                                        <li><a class="white-text" href="#">Terms</a></li>
                                        <li><a class="white-text" href="#">FAQs</a></li>
                                    </ul>
                                </div>
                                <div class="col l3 s12">
                                    <h5 class="white-text">Follow:</h5>
                                    <ul>
                                        <li> <a class="white-text tooltipped" data-position="right" data-delay="50" data-tooltip="Facebook Page" href="" target="_blank" title="Facebook"><span class="fa-stack fa-lg">
                                            <i class="fa fa-square-o fa-stack-2x"></i>
                                            <i class="fa fa-facebook fa-stack-1x"></i>
                                        </span>
                                    Facebook</a></li>
                                    <li>
                                        <a class="white-text tooltipped" data-position="right" data-delay="50" data-tooltip="Twitter Account" href="" id="gh" target="_blank" title="Twitter"><span class="fa-stack fa-lg">
                                            <i class="fa fa-square-o fa-stack-2x"></i>
                                            <i class="fa fa-twitter fa-stack-1x"></i>
                                        </span>
                                    Twitter</a></li>
                                    <li>
                                        <a class="white-text tooltipped" data-position="right" data-delay="50" data-tooltip="GitHub Repo" href="" target="_blank" title="GitHub"><span class="fa-stack fa-lg">
                                            <i class="fa fa-square-o fa-stack-2x"></i>
                                            <i class="fa fa-github fa-stack-1x"></i>
                                        </span>
                                    GitHub</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-copyright">
                        <div class="container">
                            © 2016 All rights reserved. Created by <a href="https://stormix.co/">Anas Mazouni</a> .
                        </div>
                    </div>
                </footer>
                <!--  Scripts-->
                <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                <script src="js/TweenMax.min.js"></script>
                <script src="js/ScrollToPlugin.min.js"></script>
                <script src="js/materialize.js"></script>
                <script src="js/init.js"></script>
                <script src="js/common.js"></script>
            </body>
        </html>