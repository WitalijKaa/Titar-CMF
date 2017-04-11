<?php

namespace controllers;

use models\Person;
use wii\Controller;

class MainController extends Controller {

    public function actionIndex() {
        $pers = new Person();

        $this->render('index', ['temp' => $pers->tempEcho()]);
    }

    public function actionLogin() {
        $this->render('login');
    }
}