
<?php
$errors = [];

if (!empty($errors)) {
    require 'secure.php';
    die();
}
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>


    <form action="secure.php" method="POST">

        <div>

            <label for="prenom">PRENOM:</label>

            <input type="text" id="prenom" name="user_firstname" required>

        </div>

        <div>

            <label for="nom">Nom :</label>

            <input type="text" id="nom" name="user_lastname" required>

        </div>

        <div>

            <label for="courriel">Courriel :</label>

            <input type="email" id="courriel" name="user_email" required>

        </div>

        <div>

            <label for="telephone">TEL :</label>

            <input type="tel" id="telephone" name="user_phone" required>

        </div>

        <div>

            <label for="sujet">CHOISIR UN SUJET :</label>

            <select name="sujet" id="sujet" required>
                <option value="">--MERCI DE CHOISIR--</option>
                <option value="conseil">Conseil</option>
                <option value="info">Information</option>
                <option value="reclamation">Reclamation</option>
            </select>

        </div>

        <div>

            <label for="message">Message :</label>

            <textarea id="message" name="user_message" required></textarea>

        </div>

        <div class="button">

            <button type="submit">Envoyer votre message</button>

        </div>

    </form>

</body>

</html>