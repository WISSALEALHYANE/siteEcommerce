<?php

if (isset($_POST['submit_new_user'])) {
    require_once('connect.fun.php');
    require_once('loginFunctions.fun.php');
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $e_mail = $_POST['e_mail'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $userRole = $_POST['role'];

    if (!password_match($password, $cpassword)) {
        header('Location:adminuser.php?error=passwordsNotMatching');
        exit();
    }

    $stmt = connect()->prepare('SELECT email FROM utilisateur WHERE email = ?;');

        if (!$stmt->execute(array($e_mail))) {
            $stmt = null;
            header('Location:adminuser.php?error=stmtfailed');
            exit();
        }

        if ($stmt->rowCount() != 0) {
            $stmt = null;
            header('Location:adminuser.php?error=UserAlreadyExists');
            exit();
        }

        $query = "INSERT INTO utilisateur (nom, prenom, email, mdp, role1) VALUES (?, ?, ?, ?, ?)";
        $stmt = connect()->prepare($query);

        if (!$stmt->execute(array($name, $lastname, $e_mail, $password, $userRole))) {
            $stmt = null;
            header('Location:adminuser.php?error=stmtfailed');
            exit();
        }

        $stmt = null;
        header('Location:adminuser.php?UserAddedToDb');
}