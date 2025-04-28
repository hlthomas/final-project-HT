<?php

namespace app\core;


use app\controllers\MainController;
use app\controllers\MusicController;

class Router {
    public $uriArray;

    function __construct() {
        $this->uriArray = $this->routeSplit();
        $this->handleMainRoutes();
        $this->handleUserRoutes();
    }

    protected function routeSplit() {
        $removeQueryParams = strtok($_SERVER["REQUEST_URI"], '?');
        return explode("/", $removeQueryParams);
    }

    protected function handleMainRoutes() {
        if ($this->uriArray[1] === '' && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $mainController = new MainController();
            $mainController->homepage();
        }
        if ($this->uriArray[1] === 'about' && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $mainController = new MainController();
            $mainController->homepage();
        }
    }

    protected function handleUserRoutes() {
        if ($this->uriArray[1] === 'music' && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $projectController = new MusicController();
            $projectController->musicView();
        }
        if ($this->uriArray[1] === 'api' && $this->uriArray[2] === 'music' && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $projectController = new MusicController();
            $projectController->getMusic();
            return;
        }
    }}
