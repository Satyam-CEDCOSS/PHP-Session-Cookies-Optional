<?php

use Phalcon\Mvc\Controller;
session_start();

class LoginController extends Controller
{
    public function indexAction()
    {
        // Redirect to View
    }
    
    public function checkAction()
    {
        if ($_POST["email"] == $_SESSION["email"] && $_POST["password"] == $_SESSION["password"]){
            setcookie("login", 1, time()+86400, '/');
        }
        else {
            setcookie("login", 0, time()+86400, '/');
        }
        $this->response->redirect("/hello");
    }
}