<?php

use Phalcon\Mvc\Controller;
session_start();

class HelloController extends Controller
{
    public function indexAction()
    {
        if ($_COOKIE["login"] == 1){
            $this->view->data = $_SESSION;
        }
        else {
            print_r("Access Denied");die;
        }
    }
    public function logoutAction()
    {
        session_destroy();
        $this->response->redirect("/login");
    }
}