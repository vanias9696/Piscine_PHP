<?php
class IndexController extends Controller {
    public function __construct()
    {

        parent::__construct();
        $data['products'] = $this->getAllProducts();
        $this->view->render('index', $data);
    }

    public function getAllProducts() {
        $sql = "SELECT * FROM products"; //WHERE category = 'algorithms'
        $db = new DB();
        return $db->get($sql);

    }
}