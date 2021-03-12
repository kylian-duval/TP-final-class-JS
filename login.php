<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/js.js"> </script>
    <?php
    $BDD = new PDO('mysql:host=mysql-kylian-duval.alwaysdata.net; dbname=kylian-duval_jeu; charset=utf8', '223354', 'admin123456789.');
    require 'user.php';
    $user = new user($BDD);
    ?>
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
                <div class="row">
                    <div class="col-12 mt-3 text-center text-uppercase">
                        <h2>Login</h2>
                    </div>
                </div>

                <main class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8 mx-auto bg-white py-3 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <form method="post">
                                    <div class="form-group">
                                        <label for="email">Nom d'utilisateur</label>
                                        <input type="text" id="email" class="form-control" name="nom" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" class="form-control" name="mdp" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-dark" name="login">Login</button>
                                    </div>
                                </form>
                                <?php
                                if (isset($_POST['login'])) {
                                    $error = $user->verifUserConnect($_POST['nom'], $_POST['mdp']); ?>
                                    <div><span><?php $user->errorGestion($error); ?></span></div>

                                <?php }   ?>

                            </div>
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

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
</body>

</html>