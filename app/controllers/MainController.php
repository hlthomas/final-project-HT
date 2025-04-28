<?php

namespace app\controllers;


class MainController extends Controller {

    public function homepage() {
        $this->returnView('./assets/views/homepage.html');
    }

    public function notFound() {
    }

}