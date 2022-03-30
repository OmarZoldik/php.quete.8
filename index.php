<?php
session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<?php
include 'include/head.php';
include 'include/header.php';
include 'include/footer.php';
?>


<body>



    <section>
        <a href="index.php?addhome"><button type="button" class="btn btn-primary btn-lg">Home</button></a>
        <a href="index.php?addform"><button type="button" class="btn btn-secondary btn-lg">Ajouter des doneés</button></a>
    </section>



    <?php
    if (isset($_GET['addform'])) {
        include 'include/form.php';
    }

    ?>


    <?php
    if (isset($_GET['addhome'])) {
        include 'include/ul.php';
    }

    ?>




    <?php

    if (isset($_POST["submit"])) {

        if (empty($_POST["firstname"])) {
            echo '<div class="alert alert-secondary " role="alert">Insére ton nom!</div>';
        }

        if (empty($_POST["lastname"])) {
            echo '<div class="alert alert-secondary " role="alert">Insére ton prenom!</div>';
        }

        if (empty($_POST["agee"])) {
            echo '<div class="alert alert-secondary " role="alert">Insére ton age!</div>';
        }

        if (empty($_POST["sex"])) {
            echo '<div class="alert alert-secondary " role="alert">Insére ton sexe!</div>';
        }

        if (empty($_POST["size"])) {
            echo '<div class="alert alert-secondary " role="alert">Insére ta taille!</div>';
        } else {
            $_SESSION["table"] = [
                "prenom" => $_POST['firstname'],
                "nom" => $_POST['lastname'],
                "age" => $_POST['agee'],
                "sexe" => $_POST['sex'],
                "taille" => $_POST['size']

            ];

            echo '<div class="alert alert-success text-center" role="alert">Les données ont bien été sauvegardées</div>';
        }
    }





    ?>













    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>