<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exemple PHP</title>
</head>
<body>
    <h1>Bonjour le monde !</h1>
    <?php
        // Définir une variable
        $message = "Ceci est un exemple de page PHP.";
        
        // Afficher la variable
        echo "<p>$message</p>";

        // Afficher la date et l'heure actuelles
        echo "<p>Date et heure actuelles : " . date("Y-m-d H:i:s") . "</p>";
    ?>

    <h2>Formulaire de contact</h2>
    <form method="post" action="index.php">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea>
        <br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
        // Traitement du formulaire
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nom = htmlspecialchars($_POST['nom']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);

            echo "<h3>Informations envoyées :</h3>";
            echo "<p>Nom : $nom</p>";
            echo "<p>Email : $email</p>";
            echo "<p>Message : $message</p>";
        }
    ?>
</body>
</html>
