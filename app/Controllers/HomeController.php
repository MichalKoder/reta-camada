<?php

namespace Michalkoder\RetaCamada\Controllers;
use Michalkoder\RetaCamada\Classes\Controller;

class HomeController extends Controller {

    // returns page with a list of added candidates
    public function index() {
        return $this->renderView('home/index');
    }

}