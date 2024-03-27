<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!--
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>donor page</title>

   
   <link rel="stylesheet" href="cssl/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Hi, <span>donor</span></h3>
      <h1>welcome <span><php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is a donor page</p>
      <a href="login_form.php" class="btn">login</a>  
      <a href="register_form.php" class="btn">register</a> 
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Front page</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
</head>

<body>

        <section class="events_section_area">
        <header class="header">
            <section class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="logout">
                            <a href="logout.php">Logout</a>
                        </div>
                           
                        </div>
                    </div>
                </div>
            </section>
            <section class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <a href="#">
                                <div class="main-logo">
                                    <img src="img/tufikiane-logo.png" alt="">
                                    <h2>TUFIKIANE <br>Bridging Hope</h2>
                        
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="menu">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#"></a></li>
                                    <li><a href="#aboutus"></a></li>
                                    <li><a href="#ourwork"></a></li>
                                    <li><a href="#ourstory"></a></li>
                                    <li><a href="#team"> </a></li>
                                
                                    <li><a href="#getinvolved"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
         
            <h2>"Welcome to the donation platform. Feel free to check out the need you'd like to donate towards."</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="events_single">
                            <h3>UFANISI CHILDREN'S HOME</h3>
                            <img src="img/CHA1.jpeg" alt="">
                    
                            <div class="clear"></div>
                           
                            <h6>Location : KIBERA <br>Need: FOOD <br> <a href="donor_connect.html"><button>DONATE</button></a></h6>
                        </div>
                       
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="events_single">
                            <h3>RAFIKI CHILDREN'S HOME </h3>
                            <img src="img/CHB1.jpeg" alt="">
                           
                            <h6>Location : JUJA <br> Need : CLOTHES <br><a href="donor_connect.html"><button>DONATE</button></a></h6>
                        </div>
                       
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="events_single">
                            <h3>JASIRI CHILDREN'S HOME </h3>
                            <img src="img/CHC1.jpeg" alt="">
                            
                            <h6>Location : WESTLANDS <br>Need : BOOKS <br><a href="donor_connect.html"><button>DONATE</button></a></h6>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!-- Footer -->

         <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-charity-text">
                            <h2>TUFIKIANE</h2>
                            <p>Tufikiane collaborates with trusted children's homes and organizations to identify and address the most pressing needs of the children they serve. Through our platform, donors can contribute to a variety of programs and initiatives, including providing shelter, nutritious meals, education, healthcare, and psychosocial support. </p>
                            <hr>
                            <p><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            
                            </div>
                            <div class="col-md-4 col-sm-3">
                                <div class="footer-text two">
                                    <h3>USEFUL LINKS</h3>
                                    <ul>
                                        <li><a href="#">HOME</a></li>
                                        <li><a href="#">ABOUT US</a></li>
                                        <li><a href="#">OUR WORK</a></li>
                                        <li><a href="#">IMPACT</a></li>
                                        <li><a href="#getinvolved">GET INVOLVED</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="footer-text one">
                                    <h3>CONTACT US</h3>
                                    <ul>
                                        <li><a href="#"><i class="material-icons">location_on</i>Kenya</a></li>
                                        <li><a href="#"><i class="material-icons">email</i>contact@tufikiane.org</a></li>
                                        <li><a href="#"><i class="material-icons">call</i>+254712345678</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <p>Copyright @ 2024 <a href="www.stairwaytech.org">Designed by TECH-nically Insane</a> | All Rights Reserved </p>
            </div>
        </footer>


    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/animationCounter.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/active.js"></script>

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
   
</body>

</html>