<?php
class BasketController extends Controller {
    public function __construct()
    {
        session_start();
        parent::__construct();
        if ($_POST) {

            if ($_POST['action'] === "dell") {
                $this->delItem();
            }
            else {
                $this->getProduct();
            }
        }
        $this->view->render('basket');
    }

    function getProduct() {
        $id = $_POST['id'];
        foreach ($_SESSION['basket'] as $key2 => $item) {
            foreach ($item as $key1 => $item1) {
                foreach ($item1 as $value=>$key) {
//                    echo "<pre>";
//                    print_r($_SESSION['basket'][$key2][$key1]['count']);
//                    print_r($_SESSION['basket'][$key2][$key1]);
//                    echo "<br>item = ";
//                    print_r($item);
//                    echo "<br>key1 = " . $key1;
//                    echo "</pre>";
                    if ($value === "id" && $key === $id)
                    {
                        $_SESSION['t-count'] +=  $_SESSION['basket'][$key2][$key1]['price'];
                        $_SESSION['basket'][$key2][$key1]['count']++;
                        $reffer = $_SERVER['HTTP_REFERER'];
                        header("Location: $reffer");
                        exit(0);
                    }
                }
            }

        }
            if (isset($_SESSION['basket'])) {
                $arr[$id]['id'] = $_POST['id'];
                $arr[$id]['name'] = $_POST['name'];
                $arr[$id]['price'] = $_POST['price'];
                $arr[$id]['category'] = $_POST['category'];
                $arr[$id]['count'] = 1;
                $_SESSION['t-count'] += $_POST['price'];
                array_push($_SESSION['basket'], $arr);
            }
            else {
                $arr[$id]['id'] = $_POST['id'];
                $arr[$id]['name'] = $_POST['name'];
                $arr[$id]['price'] = $_POST['price'];
                $arr[$id]['category'] = $_POST['category'];
                $arr[$id]['count'] = 1;
                $t[] = $arr;
                $_SESSION['basket'] = $t;
                $_SESSION['t-count'] += $_POST['price'];
            }

            $reffer = $_SERVER['HTTP_REFERER'];
        header("Location: $reffer");
    }

    function delItem() {
        $id = $_POST['id'];

        foreach ($_SESSION['basket'] as $key2 => $item) {
            foreach ($item as $key1 => $item1) {
                foreach ($item1 as $value=>$key) {
                     if ($value === "id" && $key === $id)
                     {
                         if ($_SESSION['basket'][$key2][$key1]['count'] > 1)
                         {
                             $_SESSION['basket'][$key2][$key1]['count']--;
                             $_SESSION['t-count'] -=  $_SESSION['basket'][$key2][$key1]['price'];

                         }
                         else
                         {
                             $_SESSION['t-count'] -=  $_SESSION['basket'][$key2][$key1]['price'];
                             unset($_SESSION['basket'][$key2]);
                         }

                     }
                    }
                }
            }













    }
}
