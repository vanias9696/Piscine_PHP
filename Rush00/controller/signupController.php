<?php
class SignupController extends Controller {
    public function __construct()
    {
        parent::__construct();
        $this->view->render('signup');
        if (isset($_POST) && !empty($_POST['signup-mail']) && !empty($_POST['signup-passwd'])) {
            $this->checkInput();
        }
    }
    public function checkInput(){
        $email = $_POST['signup-mail'];
        $password = $_POST['signup-passwd'];
        strlen($password) < 6 ? printf('<div class="error-manager">The password is to short</div>') && exit (1) : 0;
        preg_match_all('/[0-9]/', $password) ? $this->signup($email, $password)
            : printf('<div class="error-manager">The password must contain at least 1 digit</div>') && exit(1);
        header("Location: /login");
    }

    public function signup($email, $password) {
        $password = hash('whirlpool', $password);
        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
        $db = new DB();
        $db->insert($sql);

    }
}