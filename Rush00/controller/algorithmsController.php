<?php
class AlgorithmsController extends Controller {
    public function __construct()
    {

        parent::__construct();
        $data['products'] = $this->getAllProducts();
        $this->view->render('algorithms', $data);
    }

    public function getAllProducts() {
        $sql = "SELECT * FROM products WHERE category = 'Algorithms'"; //WHERE category = 'algorithms'
        $db = new DB();
        return $db->get($sql);

    }
}