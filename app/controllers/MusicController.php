<?php

namespace app\controllers;

use app\models\Music;

class MusicController extends Controller {

    public function getMusic() {
        $musicModel = new Music();
        $music = $musicModel->getAllMusic();

        $musicData = $music->fetchAll(\PDO::FETCH_ASSOC);

        $this->returnJSON($musicData);
        exit();
    }

    public function musicView() {
        $this->returnView('./assets/views/music.html');
    }
}
