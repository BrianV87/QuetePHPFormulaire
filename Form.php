<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="thanks.php" method="post">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="user_lastname">
        </div>
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="user_firstname">
        </div>
        <div>
            <label for="courriel">Courriel :</label>
            <input type="email" id="courriel" name="user_email">
        </div>
        <div>
            <label for="phonenumber">Numéro de téléphone :</label>
            <input type="tel" id="phonenumber" name="user_telephone" maxlength="10">
        </div>
        <div>
            <label for="sujet">Sujet :</label>
            <select id="sujet" name="user_sujet" required>
                <option value="demande">Demande d'information</option>
                <option value="reclamation">Réclamation</option>
                <option value="autre">Autre</option>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>
    <?php
    var_dump($_POST);
    ?>
</body>

</html>
