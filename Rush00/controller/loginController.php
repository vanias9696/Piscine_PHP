<?php
class LoginController extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->view->render('login');
        if (isset($_POST) && !empty($_POST['login_usr']) && !empty($_POST['login_pswd'])) {
            $this->checkInput();
        }
    }

    public function checkInput() {
        $login = $_POST['login_usr'];
        $pswd = $_POST['login_pswd'];
        $pswd = hash('whirlpool', $pswd);
        $sql =  "SELECT * FROM users WHERE email = '$login'";
        $db = new DB();
        $user = $db->checkLoginPassword($sql);
        if (empty($user)) {
            echo 'no such user exit';
        }
        if ($user[0]['password'] === $pswd) {
            $_SESSION['email'] = $user[0]['email'];
            $_SESSION['passwd'] = $user[0]['password'];
            var_dump($_SESSION);
            header("Location: /");
        } else {
            $_SESSION['email'] = "";
            echo "<div class='error-manager'>Invalid Login or Password.</div>";
        }
    }
}
