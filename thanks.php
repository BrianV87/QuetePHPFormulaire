<?php
echo 'Merci ' . $_POST['user_lastname'] . ' ' . $_POST['user_firstname'] . ' de nous avoir contacté à propos de ' . $_POST['user_sujet'] . '.'; ?> <br /><br>
<?php
echo "Un de nos conseillers vous contactera soit à l'adresse " . $_POST['user_email'] . ' ou par téléphone au ' . $_POST['user_telephone'] . ' dans les plus brefs délais pour traiter votre demande : '; ?> <br><br>
<?php
echo '"' . $_POST['user_message'] . '"'; ?>
