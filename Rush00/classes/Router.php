<?php
class Router
{
    //private $_urls = array('index', 'sign_up', 'login');
        public function getURL(){
            $url = $_SERVER['REQUEST_URI'];
            echo $url;
            $url = strrchr($url, '/');
            $url = preg_replace_callback( '/\/.*?./', function ($matches) {
                return substr($matches[0],1);
            },
                $url);
            $arr = explode('.', $url);
            return $arr[0];
        }

        public function runControllers() {
            $contr_name = $this->getURL();
//            echo "<pre>";
//            print_r($contr_name);
//            echo "</pre>";
            if ($contr_name === 'logout') {
                $contr_file = ROOT . '/controller/logoutController.php';
                $contr_name = "logout";
            } else {
                $contr_name = ($contr_name == '/' ? 'index' : $contr_name);
                $contr_file = ROOT . '/controller/' . $contr_name . 'Controller.php';
            }
            if (file_exists($contr_file)) {
                include_once ($contr_file);
                $contr_class_name = ucfirst($contr_name) . 'Controller';
                $inst = new $contr_class_name();
            }
        }
}