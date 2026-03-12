<?php
require_once './Encapsulation/Compte.php';
require_once './Polymorphisme/Polymorphisme.php';
require_once './Abtract/Abstract.php';
?>


<!DOCTYPE html>
<html lang="fr">

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
            $etudiant = new Etudiant("Alice", 15);
            echo $etudiant->afficher();
        ?&gt;
        </code></pre>

        <?php
        $etudiant = new Etudiant("Alice", 15);
        echo $etudiant->afficher();
        ?>
    </div>

    <!-- Abstract -->
    <div class="container my-5 p-3 border border-2 border-success rounded">
        <h2 class="text-success ">Abstract</h2>
        <pre><code class="language-php">
        &lt;?php
            $chien = new Chien("Rex");
            echo $chien->parler() . "&lt;br&gt;";

            $chat = new Chat("Miaou");
            echo $chat->parler() . "&lt;br&gt;";
        ?&gt;
        </code></pre>

        <?php
        $chien = new Chien("Rex");
        echo $chien->Crier() . "<br>";

        $chat = new Chat("Miaou");
        echo $chat->Crier() . "<br>";
        ?>
    </div>

    <!-- BDD -->
    <div class="container my-5 p-3 border border-2 border-warning rounded">
        <h2 class="text-warning ">Base de données avec PDO</h2>
        <pre><code class="language-php">
        &lt;?php
        // Connexion à une base de données MySQL avec PDO
        require_once './connect-PDO/BDD.php';
        ?&gt;
        </code></pre>

        <?php
        require_once './connect-PDO/BDD.php';
        ?>
    </div>

    <!-- Badges des sections -->
    <div class="d-flex w-50 ">
        <span class="badge bg-primary">Primary</span>
        <span class="badge bg-secondary">Secondary</span>
        <span class="badge bg-success">Success</span>
        <span class="badge bg-danger">Danger</span>
        <span class="badge bg-warning">Warning</span>
        <span class="badge bg-info">Info</span>
        <span class="badge bg-light">Light</span>
        <span class="badge bg-dark">Dark</span>
    </div>

</body>

</html>