<?php

require "view.php";
require "model.php";

class controller
{

    public function index()
    {

        $model = new Model();
        $view = new view();
        $string = $model->get_string();
        $view->render($string);
    }
}
