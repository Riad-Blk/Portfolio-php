<?php

require_once 'form/loginform.php';

$sql = 'SELECT * FROM users WHERE email="'.$_POST['email'].'" LIMIT 1';
    if ($result = $mysqli->query($sql)) {
        if ($result->num_rows > 0) {
            //_dump($result->fetch_assoc());
            $user = $result->fetch_assoc();
            if (password_verify($_POST['password'], $user['password']) === true) {
                $_SESSION['msg-flash'] = 'Salut '.$user['email
                '];
                $_SESSION['user'] = $user;
                header('Location: index.php');
            }
        }
        $error = 'Pseudo ou mot de passe incorrect !!';
        /* Libération du jeu de résultats */
        $result->close();
    }

        $error = null;

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {
                $sql = 'SELECT * FROM users WHERE email="'.$_POST['email'].'" LIMIT 1';
            
    if ($result = $mysqli->query($sql)) {
            
        if ($result->num_rows > 0) {
            //echo _dump($result->fetch_assoc());
            $user = $result->fetch_assoc();
            
            if (password_verify($_POST['password'], $user['password']) === true) {
                $_SESSION['msg-flash'] = 'Salut '.$user['email'];
                $_SESSION['user'] = $user;

                redirectToRoute('index.php');
            }
        }
        $error = 'Pseudo ou mot de passe incorrect !!';

        /* Libération du jeu de résultats */
        $result->close();
    }
}

?>
