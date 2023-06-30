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
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["password"] = $_POST["password"];
        $this->response->redirect("/hello");
    }
}