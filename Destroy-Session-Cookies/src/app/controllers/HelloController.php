<?php

use Phalcon\Mvc\Controller;
session_start();

class HelloController extends Controller
{
    public function indexAction()
    {
        $this->view->data = $_SESSION;
    }
    public function logoutAction()
    {
        session_destroy();
        $this->response->redirect("/login");
    }
}