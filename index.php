<!doctype html>
<html lang="fr">
<?php require 'user.php';
$BDD = new PDO('mysql:host=mysql-kylian-duval.alwaysdata.net; dbname=kylian-duval_jeu; charset=utf8', '223354', 'admin123456789.');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>acceuil</title>

    <link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/js.js"> </script>
</head>

<body>
    <div class="container-fluid">

        <div class="row min-vh-100">
            <div class="col-12">
                <header class="row">
                    <!-- Top Nav -->
                    <div class="col-12 bg-dark py-2 d-md-block d-none">
                        <div class="row">
                            <div class="col-auto mr-auto">

                            </div>
                            <div class="col-auto">
                                <form action="" method="post">
                                    <ul class="top-nav">
                                        <?php if (!isset($_SESSION['id'])) { ?>
                                            <li>
                                                <a href="register.php"><i class="fas fa-user-edit mr-2"></i>Register</a>
                                            </li>
                                            <li>
                                                <a href="login.php"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
                                            </li>
                                        <?php  } else { ?>
                                            <li class="nav-item dropdown">
                                                <!-- <!-- <a class= deco href="#" id="electronics" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Electronics</a>
                                                <div class="dropdown-menu" aria-labelledby="electronics">
                                                    <a class="dropdown-item" href="category.php">Computers</a>
                                                    <a class="dropdown-item" href="category.php">Mobile Phones</a>
                                                    <a class="dropdown-item" href="category.php">Television Sets</a>
                                                    <a class="dropdown-item" href="category.php">DSLR Cameras</a>
                                                    <a class="dropdown-item" href="category.php">Projectors</a> 
                                                </div> -->
                                            </li>
                                            <li>

                                                <button name=déco class=deco><i class="fas fa-sign-in-alt mr-2"></i>Déconnection</button>

                                            </li>
                                        <?php } ?>
                                    </ul>
                                </form>
                                <?php if (isset($_POST['déco'])) {
                                    session_destroy();
                                    echo  '<meta http-equiv = "refresh" content = "0">';
                                } ?>
                            </div>
                        </div>
                    </div>
                    <!-- Top Nav -->

                    <!-- Header -->
                    <div class="col-12 bg-white pt-4">
                        <div class="row">
                            <div class="col-lg-auto">
                                <div class="site-logo text-center text-lg-left">
                                    <a href="index.php"><span onmouseover="changecouleurrouge()" onmouseout="this.style.color='black'" id="rouge">J</span><span onmouseover="changecouleurbleu()" onmouseout="this.style.color='black'" id="bleu">e</span><span onmouseover="changecouleurjaune()" onmouseout="this.style.color='black'" id="jaune">u</span><span onmouseover="changecouleurrose()" onmouseout="this.style.color='black'" id="rose">x</span></a>
                                </div>
                            </div>
                        </div>

                        <!-- Nav -->
                        <div class="row">
                            <nav class="navbar navbar-expand-lg navbar-light bg-white col-12">
                                <button class="navbar-toggler d-lg-none border-0" type="button" data-toggle="collapse" data-target="#mainNav">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="mainNav">
                                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        <!-- <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="electronics" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Electronics</a>
                                            <div class="dropdown-menu" aria-labelledby="electronics">
                                                <a class="dropdown-item" href="category.php">Computers</a>
                                                <a class="dropdown-item" href="category.php">Mobile Phones</a>
                                                <a class="dropdown-item" href="category.php">Television Sets</a>
                                                <a class="dropdown-item" href="category.php">DSLR Cameras</a>
                                                <a class="dropdown-item" href="category.php">Projectors</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="fashion" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fashion</a>
                                            <div class="dropdown-menu" aria-labelledby="fashion">
                                                <a class="dropdown-item" href="category.php">Men's</a>
                                                <a class="dropdown-item" href="category.php">Women's</a>
                                                <a class="dropdown-item" href="category.php">Children's</a>
                                                <a class="dropdown-item" href="category.php">Accessories</a>
                                                <a class="dropdown-item" href="category.php">Footwear</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="books" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Books</a>
                                            <div class="dropdown-menu" aria-labelledby="books">
                                                <a class="dropdown-item" href="category.php">Adventure</a>
                                                <a class="dropdown-item" href="category.php">Horror</a>
                                                <a class="dropdown-item" href="category.php">Romantic</a>
                                                <a class="dropdown-item" href="category.php">Children's</a>
                                                <a class="dropdown-item" href="category.php">Non-Fiction</a>
                                            </div>
                                        </li> -->
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Nav -->

                    </div>
                    <!-- Header -->

                </header>
            </div>

            <div class="col-12">
                <!-- Main Content -->
                <main class="row">

                    <!-- Category Products -->
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 py-3">
                                <div class="row">


                                    <?php $requet = $BDD->query("SELECT * FROM `jeux` WHERE 1");
                                    while ($donné = $requet->fetch()) { ?>
                                        <!-- Product -->
                                        <div class="col-xl-2 col-lg-3 col-sm-6 my-3">
                                            <div class="col-12 bg-white text-center h-100 product-item">
                                                <div class="row h-100">
                                                    <div class="col-12 p-0 mb-3">
                                                        <a href="product.php?jeux=<?php echo $donné['id_jeux'] ?>">
                                                            <img src="images/<?php echo $donné['Image'] ?>" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <a href="product.php?jeux=<?php echo $donné['id_jeux'] ?>" class="product-name"><?php echo $donné['Nom'] ?></a>
                                                    </div>
                                                    <div class="col-12 mb-3 align-self-end">
                                                        <a href="product.php?jeux=<?php echo $donné['id_jeux'] ?>" class="btn btn-outline-dark">savoir plus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product -->
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Category Products -->

                </main>
                <!-- Main Content -->
            </div>

            <div class="col-12 align-self-end">
                <!-- Footer -->
                <footer class="row">
                    <div class="col-12 bg-dark text-white pb-3 pt-5">
                        <!-- <div class="row">
                            <div class="col-lg-2 col-sm-4 text-center text-sm-left mb-sm-0 mb-3">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="footer-logo">
                                            <a href="index.php"></a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <address>
                                            221B Baker Street<br>
                                            London, England
                                        </address>
                                    </div>
                                    <div class="col-12">
                                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-8 text-center text-sm-left mb-sm-0 mb-3">
                                <div class="row">
                                    <div class="col-12 text-uppercase">
                                        <h4>Who are we?</h4>
                                    </div>
                                    <div class="col-12 text-justify">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-3 col-5 ml-lg-auto ml-sm-0 ml-auto mb-sm-0 mb-3">
                                <div class="row">
                                    <div class="col-12 text-uppercase">
                                        <h4>Quick Links</h4>
                                    </div>
                                    <div class="col-12">
                                        <ul class="footer-nav">
                                            <li>
                                                <a href="#">Home</a>
                                            </li>
                                            <li>
                                                <a href="#">Contact Us</a>
                                            </li>
                                            <li>
                                                <a href="#">About Us</a>
                                            </li>
                                            <li>
                                                <a href="#">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a href="#">Terms & Conditions</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-2 col-4 mr-auto mb-sm-0 mb-3">
                                <div class="row">
                                    <div class="col-12 text-uppercase text-underline">
                                        <h4>Help</h4>
                                    </div>
                                    <div class="col-12">
                                        <ul class="footer-nav">
                                            <li>
                                                <a href="#">FAQs</a>
                                            </li>
                                            <li>
                                                <a href="#">Shipping</a>
                                            </li>
                                            <li>
                                                <a href="#">Returns</a>
                                            </li>
                                            <li>
                                                <a href="#">Track Order</a>
                                            </li>
                                            <li>
                                                <a href="#">Report Fraud</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 text-center text-sm-left">
                                <div class="row">
                                    <div class="col-12 text-uppercase">
                                        <h4>Newsletter</h4>
                                    </div>
                                    <div class="col-12">
                                        <form action="#">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Enter your email..." required>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-outline-light text-uppercase">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </footer>
                <!-- Footer -->
            </div>
        </div>

    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>