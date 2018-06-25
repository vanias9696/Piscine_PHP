<?php
class AdminController extends Controller {
    public function __construct()
    {

        parent::__construct();
        $this->view->render('admin');
        if (isset($_POST) && (!empty($_POST['new_login']) || !(empty($_POST['new_passwd'])))) {
            $this->getNewData($_POST['new_login'], $_POST['new_passwd']);
        }
    }

    function getNewData($login, $passwd) {
        if (!empty($passwd)) {
            $passwd = hash('whirlpool', $passwd);
        }
        else {
            $passwd = $_SESSION['passwd'];
        }
        if (empty($login)){
            $login = $_SESSION['email'];
        }

        $sql = "UPDATE users SET email='$login', password='$passwd' WHERE email='$_SESSION[email]'";
        $_SESSION['email'] = $login;
        $db = new DB();
        $db->updateDataUser($sql);
    }

}