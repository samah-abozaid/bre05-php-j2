<?php

echo 'Email : ' . $_POST['email'] . '<br>';
echo 'Mot de passe : ' . $_POST['password'] . '<br>';

// Vérification des mots de passe

if (
   
    $_POST['password'] === $_POST['passwordconfirm'])
 {
    echo 'Vérification des mots de passe : OK<br>';
} else {
    echo 'Vérification des mots de passe : NOK<br>';
}

// Vérification newsletter
if (isset($_POST['newsletter'])) {
    echo 'Inscription à la newsletter : OUI';
} else {
    echo 'Inscription à la newsletter : NON';
}
