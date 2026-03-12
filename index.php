<?php
require_once './Encapsulation/Compte.php';
require_once './Polymorphisme/Polymorphisme.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <h1 class="text-center">Project PHP</h1>

    <!-- Les boutons d'accés de section -->

    <!-- Encpasulation -->
    <div class="container my-5 p-3 border border-2 border-primary rounded">
        <h1 class="text-primary ">Encapsulation</h1>
        <pre><code class="language-php">
        &lt;?php
        $compte1 = new Compte("1000");
        echo "Solde: " . $compte1->getSolde() . "&lt;br&gt;";

        $compte1->deposer(500);
        echo "Nouveau solde après dépôt: " . $compte1->getSolde() . "&lt;br&gt;";

        $compte1->retirer(200);
        echo "Nouveau solde après retrait: " . $compte1->getSolde() . "&lt;br&gt;";
        ?&gt;
        </code></pre>

        <?php
        $compte1 = new Compte("1000");
        echo "Solde: " . $compte1->getSolde() . "<br>";

        $compte1->deposer(500);
        echo "Nouveau solde après dépôt: " . $compte1->getSolde() . "<br>";

        $compte1->retirer(200);
        echo "Nouveau solde après retrait: " . $compte1->getSolde() . "<br>";
        ?>
    </div>

    <!-- Heritage et Polymorphisme -->
    <div class="container my-5 p-3 border border-2 border-danger rounded">
        <h2 class="text-danger ">Héritage et Polymorphisme</h2>
        <pre><code class="language-php">
        &lt;?php
        $compte1 = new Compte("1000");
        echo "Solde: " . $compte1->getSolde() . "&lt;br&gt;";

        $compte1->deposer(500);
        echo "Nouveau solde après dépôt: " . $compte1->getSolde() . "&lt;br&gt;";

        $compte1->retirer(200);
        echo "Nouveau solde après retrait: " . $compte1->getSolde() . "&lt;br&gt;";
        ?&gt;
        </code></pre>

        <?php

        ?>
    </div>

</body>

</html>