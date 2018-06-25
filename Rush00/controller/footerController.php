<?php
class FooterController extends Controller {
    public function __construct()
    {

        parent::__construct();

        $this->view->render('footer');
    }

    }
