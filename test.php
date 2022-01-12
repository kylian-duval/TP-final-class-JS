<?php
    require "session.php";
    require "class/user.php";
    require "class/jeux.php";
    $jeux = new jeux($BDD);

    if(isset($_POST['supp'])){
        $jeux->removejeux(5);
    }
?>

<form action="" method="post"> 
    <input type="submit" value="" name="supp">
</form>