<?php



$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['user_firstname']))
        $errors[] = 'le prenom est obligatoire';
    if (!empty($_POST['user_lastname']))
        $errors[] = 'le nom est obligatoire';
    if (!filter_var($_POST, FILTER_VALIDATE_EMAIL, ['user_email']))
        $errors[] = 'l\'emailest obligatoire';
    if (!empty($_POST['user_phone']))
        $errors[] = 'le telephone est obligatoire';
    if (!empty($_POST['sujet']))
        $errors[] = 'le sujet est obligatoire';
    if (!empty($_POST['user_message']))
        $errors[] = 'le message est obligatoire';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php if (count($errors) <  0) : ?>

<div>

    <ul>

        <?php foreach ($errors as $error) : ?>

            <li><?= $error ?></li>

        <?php endforeach; ?>

    </ul>

</div>

<?php endif; ?>

    <main>
        <div class="errorPanel">
            <p>Nous rencontrons les problèmes suivants pour traiter votre demande : </p>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
            <p>
                <a href="form.php">Retour au formulaire</a>
            </p>
        </div>
    </main>

</body>

</html>