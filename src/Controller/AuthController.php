<?php

namespace Controller;

use Entity\Users;

class AuthController
{

    function login()
    {
        global $usersRepo;
        if (isset($_POST["pseudo"])  && isset($_POST["password"])) {
            $criteriaWithloginAndPawword = [
                "nickname" => $_POST['pseudo'],
                "password" => $_POST['password']
            ];
            $usersWithThisNicknameAndPassword = $usersRepo->findBy($criteriaWithloginAndPawword);
            if (count($usersWithThisNicknameAndPassword) == 1) {
                $_SESSION['user'] = $usersWithThisNicknameAndPassword[0];
                header('Location: ?action=display');
            } else {
                $errorMsgLog = "Mauvais mot de passe ou pseudo";
            }
        }
        include('../templates/login.php');
    }

    function logout()
    {
        session_destroy();
        header('Location:?action=display');
    }

    function register()
    {
        global $usersRepo;
        global $manager;
        if (isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['password2'])) {
            $response = $usersRepo->findBy(["nickname" => $_POST["pseudo"]]);
            if (count($response) > 0) {
                $errorMsg = "Pseudo déjà pris bg unlucky";
            }
            if ($_POST['password'] != $_POST['password2']) {
                $errorMsg = "Le second mot de passe doit être le même que le premier";
            }
            if ($errorMsg) {
                include('../templates/register.php');
            } else {
                $newUser = new Users;
                $newUser->created_at = date("Y-m-d H:i:s");
                $newUser->nickname = $_POST['pseudo'];
                $newUser->password = $_POST['password'];
                $manager->persist($newUser);
                $manager->flush();
                $_SESSION["user"] = $newUser;
                header('Location:?action=display');
            }
        }
        include('../templates/register.php');
    }
}
