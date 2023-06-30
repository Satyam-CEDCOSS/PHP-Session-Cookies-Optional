<?php

use Phalcon\Mvc\Controller;
session_start();

class IndexController extends Controller
{
    public function indexAction()
    {
        // Redirect to View
    }
    public function saveAction()
    {
        if ($_POST["email"] && $_POST["password"]){
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["password"] = $_POST["password"];
            $this->response->redirect("/login");
        }
        else {
            $this->response->redirect("/");
        }
    }
}