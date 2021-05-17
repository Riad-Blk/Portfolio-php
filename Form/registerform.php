<?php

$error = null;
if (isset($_POST) && !empty($_POST)) {
    $error = [];
    
    if (empty($_POST['email']) && $_POST['email']) {
        $error['email'] = 'le email est pas bon!';
    }
    if (strlen($_POST['password']) < 3 && strlen($_POST['password']) > 30) {
        $error['password'] = 'Votre password dois comporter 3 caractères minimum et 30 maximum !!';
    }
    if (!preg_match('#^[a-zA-Z0-9_-]{3,30}+$#', $_POST['username'])) {
        //if (!preg_match('#^[a-zA-Z0-9_-'ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]{3,30}$\ ", $_POST['user_name'])) {
        $error['username'] = 'Votre pseudo dois comporter 3 caractères minimum et 30 maximum. des caratères de 0 à 9, des lettre minuscules ou majuscules, des tirets et underscores!!';
    }
    
    if (empty($error)) {
        
        $pseudo = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $email = $_POST['email'];
        $roles = json_encode(['user']);
        $sql = "INSERT INTO users(email,password,pseudo,roles) VALUES ('$email','$password','$pseudo','$roles')";
        if ($mysqli->query($sql) === true) {
            $_SESSION['msg-flash'] = 'Votre compte à été créer avec succès !!';
            redirectToRoute('login.php');
        } else {
            $error = 'Une erreur est survenue, compte non créer !!';
        }
    }
}
?>
