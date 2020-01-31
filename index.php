<?php

require_once 'class/form.php';
//spl_autoload_register(function ($className) {
//    $file = str_replace('\\', DIRECTORY_SEPARATOR, $className);
//
//    require_once 'class' . DIRECTORY_SEPARATOR . $file . '.php';
//});
//use form;
$elements = ['france', 'belgique', 'espagne', 'allemagne']
?>
<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<?php
$startForm = new FormBuilder();
echo $startForm->starForm('post', 'index.php', 'formulaire');
echo $startForm->makeSelect($elements);

echo $startForm->makeInput('text', 'firstName',  'Entrez votre nom');
echo $startForm->makeInput('text', 'lastName', 'Entrez votre prénom');
echo $startForm->makeInput('text', 'adress', 'Entrez votre adresse');
echo $startForm->makeInput('date', 'date', 'Entrez votre date de naissance');
echo $startForm->makeInput('mail', 'email', 'Entrez votre email');
echo $startForm->makeInput('password', 'pwd', 'Entrez votre mot de passe');
echo $startForm->makeTextarea('Ecrivez ici votre message !');
echo $startForm->makeButton('submit', 'submit');
echo $startForm->endForm();
?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>