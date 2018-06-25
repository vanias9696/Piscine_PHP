<?php
class UnixController extends Controller {
    public function __construct()
    {

        parent::__construct();
        $data['products'] = $this->getAllProducts();
        $this->view->render('unix', $data);
    }

    public function getAllProducts() {
        $sql = "SELECT * FROM products WHERE category = 'UNIX'"; //WHERE category = 'algorithms'
        $db = new DB();
        return $db->get($sql);

    }
}