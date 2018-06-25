<?php
class GraphicsController extends Controller {
    public function __construct()
    {

        parent::__construct();
        $data['products'] = $this->getAllProducts();
        $this->view->render('graphics', $data);
    }

    public function getAllProducts() {
        $sql = "SELECT * FROM products WHERE category = 'Graphics'"; //WHERE category = 'algorithms'
        $db = new DB();
        return $db->get($sql);

    }
}