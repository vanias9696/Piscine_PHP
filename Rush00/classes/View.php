<?php
class View {
    public function render($name, $data=null) {
        if ($data)
            extract($data);
        require ('view/header.php');
        require ('view/'. $name . '.php');
        require ('view/footer.php');
    }
}