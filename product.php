<!doctype html>
<html lang="fr">
<?php
require "session.php";
require "class/user.php";
$user = new user($BDD);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jeux</title>

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
                                            <li>
                                                <a href=""><i class="fas fa-user-edit mr-2"></i><?php echo $_SESSION['nom']; ?></a>
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
                <?php $idjeu = $_GET['jeux'];
                $requetjeu = $BDD->query("SELECT * FROM `jeux` WHERE `id_jeux`= $idjeu");
                $donnéjeux = $requetjeu->fetch();


                ?>
                <!-- Main Content -->
                <main class="row">
                    <div class="col-12 bg-white py-3 my-3">
                        <div class="row">

                            <!-- Product Images -->
                            <div class="col-lg-5 col-md-12 mb-3">
                                <div class="col-12 mb-3">
                                    <div class="img-large border" style="background-image: url('images/<?php echo $donnéjeux['Image'] ?>')"></div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-2 col-3">
                                            <div class="img-small border" style="background-image: url('images/<?php echo $donnéjeux['Image'] ?>')" data-src="images/<?php echo $donnéjeux['Image'] ?>"></div>
                                        </div>
                                        <div class="col-sm-2 col-3">
                                            <div class="img-small border" style="background-image: url('images/<?php echo $donnéjeux['Image2'] ?>')" data-src="images/<?php echo $donnéjeux['Image2'] ?>"></div>
                                        </div>
                                        <div class="col-sm-2 col-3">
                                            <div class="img-small border" style="background-image: url('images/<?php echo $donnéjeux['Image3'] ?>')" data-src="images/<?php echo $donnéjeux['Image3'] ?>"></div>
                                        </div>
                                        <div class="col-sm-2 col-3">
                                            <div class="img-small border" style="background-image: url('images/<?php echo $donnéjeux['Image4'] ?>')" data-src="images/<?php echo $donnéjeux['Image4'] ?>"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Images -->

                            <!-- Product Info -->
                            <div class="col-lg-5 col-md-9">
                                <div class="col-12 product-name large">
                                    <?php echo $donnéjeux['Nom'] ?>
                                </div>
                                <div class="col-12 px-0">
                                    <hr>
                                </div>
                                <div class="col-12">
                                    <?php echo $donnéjeux['Description'] ?>
                                </div>
                            </div>
                            <!-- Product Info -->

                            <!-- Sidebar -->
                            <div class="col-lg-2 col-md-3 text-center">
                                <div class="col-12 border-left border-top sidebar h-100">
                                    <div class="row">
                                        <div class="col-12">
                                            <span class="detail-price">
                                            </span>
                                            <span class="detail-price-old">
                                            </span>
                                        </div>
                                        <div class="col-xl-5 col-md-9 col-sm-3 col-5 mx-auto mt-3">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sidebar -->

                            </div>
                        </div>

                        <div class="col-12 mb-3 py-3 bg-white text-justify">
                            <div class="row">

                                <!-- Details -->
                                <div class="col-md-7">
                                    <div class="row">
                                        <h4>commantaire :</h4>
                                        <div class="col-12">
                                            <?php

                                            $requet = $BDD->query("SELECT user.Nom_user, jeux.id_jeux ,commentaire.Message, note.note FROM user, commentaire, jeux, note WHERE note.id_user= user.id_user AND note.id_jeu = jeux.id_jeux AND  commentaire.id_user = user.id_user AND commentaire.id_jeu = jeux.id_jeux AND jeux.id_jeux = $idjeu");
                                            while ($donné = $requet->fetch()) { ?>
                                                <!--SELECT user.Nom_user, jeux.id_jeux ,commentaire.Message, commentaire.note FROM user, commentaire, jeux WHERE commentaire.id_user = user.id_user AND commentaire.id_jeu = jeux.id_jeux AND jeux.id_jeux = $idjeu-->
                                                <!-- Comments -->
                                                <div class="col-12 text-justify py-2 mb-3 bg-gray">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <strong class="mr-2"><?php echo $donné['Nom_user'] ?></strong>
                                                            <small>
                                                                <?php if ($donné['note'] == '1') { ?>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="far fa-star"></i>
                                                                    <i class="far fa-star"></i>
                                                                    <i class="far fa-star"></i>
                                                                    <i class="far fa-star"></i>
                                                                <?php } else if ($donné['note'] == '2') { ?>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="far fa-star"></i>
                                                                    <i class="far fa-star"></i>
                                                                    <i class="far fa-star"></i>
                                                                <?php } else if ($donné['note'] == '3') { ?>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="far fa-star"></i>
                                                                    <i class="far fa-star"></i>
                                                                <?php } else if ($donné['note'] == '4') { ?>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="far fa-star"></i>
                                                                <?php } else if ($donné['note'] == '5') { ?>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                <?php } ?>


                                                            </small>
                                                        </div>
                                                        <div class="col-12">
                                                            <?php echo $donné['Message'] ?>
                                                        </div>
                                                        <div class="col-12">
                                                            <small>
                                                                <i class="fas fa-clock mr-2"></i>5 hours ago
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Comments -->
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- Details -->

                                <!-- Ratings & Reviews -->
                                <div class="col-md-5">
                                    <div class="col-12 px-md-4 border-top border-left sidebar h-100">

                                        <!-- Rating -->
                                        <div class="row">
                                            <div class="col-12 mt-md-0 mt-3 text-uppercase">
                                                <h2><u>NOTATIONS ET AVIS </u></h2>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-sm-4 text-center">
                                                        <div class="row">
                                                            <?php $moyenne = 0;
                                                            $totalNote = 0;
                                                            $un = 0;
                                                            $deux = 0;
                                                            $troi = 0;
                                                            $quatre = 0;
                                                            $cinqe = 0;

                                                            $donnerCal = $BDD->query("SELECT `note` FROM `note` WHERE `id_jeu` = $idjeu");
                                                            while ($donnéMoy = $donnerCal->fetch()) {
                                                                $moyenne = $moyenne + $donnéMoy['note'];
                                                                $totalNote++;
                                                                if ($donnéMoy['note'] == '1') {
                                                                    $un++;
                                                                } else if ($donnéMoy['note'] == '2') {
                                                                    $deux++;
                                                                } else if ($donnéMoy['note'] == '3') {
                                                                    $troi++;
                                                                } else if ($donnéMoy['note'] == '4') {
                                                                    $quatre++;
                                                                } else if ($donnéMoy['note'] == '5') {
                                                                    $cinqe++;
                                                                }
                                                            }
                                                            if ($totalNote == '0') {
                                                                $moyenne = $totalNote;
                                                            } else if ($totalNote > '0') {
                                                                $moyenne = $moyenne / $totalNote;
                                                            }

                                                            ?>
                                                            <div class="col-12 average-rating">
                                                                <?php echo number_format($moyenne, 1); ?>
                                                            </div>
                                                            <div class="col-12">
                                                                sur <?php echo $totalNote; ?> avis
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <ul class="rating-list mt-3">
                                                            <?php if ($totalNote == '0') { ?>
                                                                <li>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-dark" role="progressbar" style="width: 0%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">0%</div>
                                                                    </div>
                                                                    <div class="rating-progress-label">
                                                                        5<i class="fas fa-star ml-1"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-dark" role="progressbar" style="width: 0%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">0%</div>
                                                                    </div>
                                                                    <div class="rating-progress-label">
                                                                        4<i class="fas fa-star ml-1"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-dark" role="progressbar" style="width: 0%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">0%</div>
                                                                    </div>
                                                                    <div class="rating-progress-label">
                                                                        3<i class="fas fa-star ml-1"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-dark" role="progressbar" style="width: 0%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100">0%</div>
                                                                    </div>
                                                                    <div class="rating-progress-label">
                                                                        2<i class="fas fa-star ml-1"></i>
                                                                    </div>
                                                                </li>
                                                                <li>

                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-dark" role="progressbar" style="width: 0%;" aria-valuenow="3" aria-valuemin="3" aria-valuemax="100">0%</div>
                                                                    </div>
                                                                    <div class="rating-progress-label">
                                                                        1<i class="fas fa-star ml-1"></i>
                                                                    </div>
                                                                </li>
                                                            <?php } else { ?>
                                                                <li>
                                                                    <?php $cinqe = ($cinqe * 100) / $totalNote ?>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-dark" role="progressbar" style="width: <?php echo $cinqe ?>%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"><?php echo number_format($cinqe, 2) ?>%</div>
                                                                    </div>
                                                                    <div class="rating-progress-label">
                                                                        5<i class="fas fa-star ml-1"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <?php $quatre = ($quatre * 100) / $totalNote ?>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-dark" role="progressbar" style="width: <?php echo $quatre ?>%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"><?php echo number_format($quatre, 2) ?>%</div>
                                                                    </div>
                                                                    <div class="rating-progress-label">
                                                                        4<i class="fas fa-star ml-1"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <?php $troi = ($troi * 100) / $totalNote ?>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-dark" role="progressbar" style="width: <?php echo $troi ?>%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"><?php echo number_format($troi, 2) ?>%</div>
                                                                    </div>
                                                                    <div class="rating-progress-label">
                                                                        3<i class="fas fa-star ml-1"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <?php $deux = ($deux * 100) / $totalNote ?>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-dark" role="progressbar" style="width: <?php echo $deux ?>%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"><?php echo number_format($deux, 2) ?>%</div>
                                                                    </div>
                                                                    <div class="rating-progress-label">
                                                                        2<i class="fas fa-star ml-1"></i>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <?php $un = ($un * 100) / $totalNote ?>
                                                                    <div class="progress">
                                                                        <div class="progress-bar bg-dark" role="progressbar" style="width: <?php echo $un ?>%;" aria-valuenow="3" aria-valuemin="3" aria-valuemax="100"><?php echo number_format($un, 2) ?>%</div>
                                                                    </div>
                                                                    <div class="rating-progress-label">
                                                                        1<i class="fas fa-star ml-1"></i>
                                                                    </div>
                                                                </li>
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Rating -->

                                        <div class="row">
                                            <div class="col-12 px-md-3 px-0">
                                                <hr>
                                            </div>
                                        </div>

                                        <!-- Add Review -->
                                        <div class="row">
                                            <div class="col-12">
                                                <h4>Add Review</h4>
                                            </div>
                                            <div class="col-12">
                                                <form method="post">
                                                    <div class="form-group">
                                                        <textarea class="form-control" placeholder="Give your review" name="message"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="d-flex ratings justify-content-end flex-row-reverse">
                                                            <input type="radio" value="5" name="note" id="rating-5"><label for="rating-5"></label>
                                                            <input type="radio" value="4" name="note" id="rating-4"><label for="rating-4"></label>
                                                            <input type="radio" value="3" name="note" id="rating-3"><label for="rating-3"></label>
                                                            <input type="radio" value="2" name="note" id="rating-2"><label for="rating-2"></label>
                                                            <input type="radio" value="1" name="note" id="rating-1" checked><label for="rating-1"></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-outline-dark" name="avi">commenter</button>
                                                    </div>
                                                </form>
                                                <?php
                                                if (!isset($_SESSION['id'])) {
                                                    echo '<span style="color:red"> il faut etre connecter pour pouvoir commentait ou évaluer se jeu </span>';
                                                } else {
                                                    $verifNote = $BDD->prepare("SELECT * FROM `note` WHERE `id_user`= ? AND `id_jeu`= ?");
                                                    $verifNote->execute(array($_SESSION['id'], $idjeu));
                                                    $donnerverifNote = $verifNote->rowCount();
                                                    if (isset($_POST['avi'])) {
                                                        $user->commetaire($_SESSION['id'], $_GET['jeux'], $_POST['message']);

                                                        if ($donnerverifNote == 0) {
                                                            $user->note($_SESSION['id'], $_GET['jeux'], $_POST['note']);
                                                        } else {
                                                            echo '<span style="color:red"> vous avez déja évaluer ce jeu </span>';
                                                        }
                                                        echo  '<meta http-equiv = "refresh" content = "0">';
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>

                                        <!-- Add Review -->

                                        <div class="row">
                                            <div class="col-12 px-md-3 px-0">
                                                <hr>
                                            </div>
                                        </div>

                                        <!-- Ratings & Reviews -->

                                    </div>
                                </div>

                </main>
                <!-- Main Content -->
            </div>

            <div class="col-12 align-self-end">
                <!-- Footer -->
                <footer class="row">
                    <div class="col-12 bg-dark text-white pb-3 pt-5">

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