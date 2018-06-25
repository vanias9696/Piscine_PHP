<?php
class LogoutController extends Controller {
    public function __construct()
    {
        session_start();
        $_SESSION['email'] = "";
        header("Location: /");
    }
}